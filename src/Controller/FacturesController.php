<?php

namespace App\Controller;


class FacturesController  extends AppController
{
    public function add($id = null){
        $facture = $this->Factures->find();
        if (!empty($this->getRequest()->getData())) {
            $facture = $this->Factures->newEntity($this->getRequest()->getData());
            $facture->adherent_id = $id;
            if ($this->Factures->save($facture)) {
                $this->Flash->success('Votre facture a été créé !');
                $this->redirect(['controller'=>'Adherents','action' => 'affiche']);
            } else {
                $this->Flash->error('Une erreur est survenue lors de l\'enregistrement !');
            }
        }
        $this->set(compact('facture', 'id'));
    }

    public function test(){
            $html2pdf = new Html2Pdf();
            $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
            $html2pdf->output();
    }

    public function affiche($id = null){
        $conditions = [];
        if ($this->getRequest()->getQuery('nom') != NULL) {
            $conditions['nom'] = $this->getRequest()->getQuery('nom');
        }
        if ($this->getRequest()->getQuery('etat') != NULL) {
            $conditions['etat'] = $this->getRequest()->getQuery('etat');
        }
        $facture = $this->Factures->find()
            ->where(['adherent_id' => $id])
            ->toArray();
        $this->set(compact('facture'));
    }

    public function delete($id = null)
    {
        $facture = $this->Factures->get($id);
        if ($this->Factures->delete($facture)) {
            $this->Flash->success("La facture a été supprimé avec succès !");
            return $this->redirect(['action' => 'affiche', $facture->adherent_id]);
        } else {
            $this->Flash->error("Une erreur est survenue lors de la suppression !");
        }
    }

    public function modif($id = null){
        $facture = $this->Factures->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Factures->patchEntity($facture, $this->request->getData());
            if ($this->Factures->save($facture)) {
                $this->Flash->success('Facture modifié avec succès !');
                return $this->redirect(['action' => 'affiche', $facture->adherent_id]);
            }
            $this->Flash->error('Erreur lors de la mise à jour !');
        }
        $this->set('factureModif', $facture);
    }
}