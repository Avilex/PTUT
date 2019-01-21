<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 03/01/2019
 * Time: 17:36
 */

namespace App\Controller;


class AdherentsController extends AppController
{
    public function add($id = null){
        $adherent = $this->Adherents->find();
        if (!empty($this->getRequest()->getData())) {
            $adherent = $this->Adherents->newEntity($this->getRequest()->getData());
            $adherent->user_id = $id;
            if ($this->Adherents->save($adherent)) {
                $this->Flash->success('L\'utilisateur a été crée');
                $this->redirect((['action' => 'affiche']));
            }
            else {
                $this->Flash->error("Impossible d'ajouter l'utilisateur");
            }
        }
        $this->set(compact('adherent', 'id'));
    }

    public function affiche(){
        $conditions = [];
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
        $adherent = $this->Adherents->find()->toArray();
        $this->set(compact('adherent'));
    }
}