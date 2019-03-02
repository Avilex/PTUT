<?php

namespace App\Controller;


class InvoicesController extends AppController
{
    public function add($id = null)
    {
        $facture = $this->Invoices->find();
        if (!empty($this->getRequest()->getData())) {
            $facture = $this->Invoices->newEntity($this->getRequest()->getData());
            $facture->adherent_id = $id;
            if ($this->Invoices->save($facture)) {
                $this->Flash->success('Votre facture a été créé !');
                $this->redirect(['controller' => 'Invoices', 'action' => 'affiche',$id]);
            } else {
                $this->Flash->error('Une erreur est survenue lors de l\'enregistrement !');
            }
        }
        $this->set(compact('facture', 'id'));
    }

    public function affiche($id = null)
    {
        $conditions = [];
        if ($this->getRequest()->getQuery('nom') != NULL) {
            $conditions['nom'] = $this->getRequest()->getQuery('nom');
        }
        if ($this->getRequest()->getQuery('etat') != NULL) {
            $conditions['etat'] = $this->getRequest()->getQuery('etat');
        }
        $facture = $this->Invoices->find()
            ->where(['adherent_id' => $id])
            ->toArray();
        $this->set(compact('facture','id'));
    }

    public function delete($id = null)
    {
        $facture = $this->Invoices->get($id);
        if ($this->Invoices->delete($facture)) {
            $this->Flash->success("La facture a été supprimé avec succès !");
            return $this->redirect(['action' => 'affiche', $facture->adherent_id]);
        } else {
            $this->Flash->error("Une erreur est survenue lors de la suppression !");
        }
    }

    public function modif($id = null)
    {
        $facture = $this->Invoices->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Invoices->patchEntity($facture, $this->request->getData());
            if ($this->Invoices->save($facture)) {
                $this->Flash->success('Facture modifié avec succès !');
                return $this->redirect(['action' => 'affiche', $facture->adherent_id]);
            }
            $this->Flash->error('Erreur lors de la mise à jour !');
        }
        $this->set('factureModif', $facture);
    }


}