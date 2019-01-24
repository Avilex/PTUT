<?php

namespace App\Controller;


class AdherentsController extends AppController
{
    public function add(){
        $adherent = $this->Adherents->find();
        if (!empty($this->getRequest()->getData())) {
            $adherent = $this->Adherents->newEntity($this->getRequest()->getData());
            if ($this->Adherents->save($adherent)) {
                $this->Flash->success('L\'adhérent a été crée');
                $this->redirect((['action' => 'affiche']));

            } else {
                $this->Flash->error("Impossible d'ajouter l'adhérent");
            }
        }
        $this->set(compact('adherent'));
    }

    public function affiche(){
        $conditions = [];
        if ($this->getRequest()->getQuery('nom') != NULL) {
            $conditions['nom'] = $this->getRequest()->getQuery('nom');
        }
        if ($this->getRequest()->getQuery('prenom') != NULL) {
            $conditions['prenom'] = $this->getRequest()->getQuery('prenom');
        }
        if ($this->getRequest()->getQuery('tel') != NULL) {
            $conditions['tel'] = $this->getRequest()->getQuery('tel');
        }
        if ($this->getRequest()->getQuery('mail') != NULL) {
            $conditions['mail'] = $this->getRequest()->getQuery('mail');
        }
        if ($this->getRequest()->getQuery('dateNaissance') != NULL) {
            $conditions['dateNaissance'] = $this->getRequest()->getQuery('dateNaissance');
        }
        if ($this->getRequest()->getQuery('handicap') != NULL) {
            $conditions['handicap'] = $this->getRequest()->getQuery('handicap');
        }
        if ($this->getRequest()->getQuery('nomTuteur') != NULL) {
            $conditions['nomTuteur'] = $this->getRequest()->getQuery('nomTuteur');
        }
        if ($this->getRequest()->getQuery('adresseTuteur') != NULL) {
            $conditions['adresseTuteur'] = $this->getRequest()->getQuery('adresseTuteur');
        }
        if ($this->getRequest()->getQuery('telTuteur') != NULL) {
            $conditions['telTuteur'] = $this->getRequest()->getQuery('telTuteur');
        }
        if ($this->getRequest()->getQuery('mailTuteur') != NULL) {
            $conditions['mailTuteur'] = $this->getRequest()->getQuery('mailTuteur');
        }
        $adherent = $this->Adherents->find()
            ->where($conditions)
            ->toArray();
        $this->set(compact('adherent'));
    }

    public function delete($id = null)
    {
        $adherents = $this->Adherents->get($id);
        if ($this->Adherents->delete($adherents)) {
            $this->Flash->success("L'adhérent a été supprimé avec succès !");
            return $this->redirect(['action' => 'affiche']);
        } else {
            $this->Flash->error("Une erreur est survenue lors de la suppression !");
        }
    }

    public function modif($id = null){
        $adherents = $this->Adherents->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Adherents->patchEntity($adherents, $this->request->getData());
            if ($this->Adherents->save($adherents)) {
                $this->Flash->success('Adhérent modifié avec succès !');
                return $this->redirect(['action' => 'affiche']);
            }
            $this->Flash->error('Erreur lors de la mise à jour !');
        }
        $this->set('adherentModif', $adherents);
    }

    public function facture($id = null){
        $adherents = $this->Adherents->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Adherents->patchEntity($adherents, $this->request->getData());
        }
        $this->set('adherentFact', $adherents);
    }

    public function modifFacture($id = null){
        $adherents = $this->Adherents->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Adherents->patchEntity($adherents, $this->request->getData());
            if ($this->Adherents->save($adherents)) {
                $this->Flash->success('Adhérent modifié avec succès !');
                return $this->redirect(['action' => 'facture']);
            }
            $this->Flash->error('Erreur lors de la mise à jour !');
        }
        $this->set('ModifFacture', $adherents);
    }
}