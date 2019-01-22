<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 03/01/2019
 * Time: 13:29
 */

namespace App\Controller;


class UsersController extends AppController
{
    public function add(){
        $user = $this->Users->find();
        $adherent = $this->Users->Adherents->find();
        if (!empty($this->getRequest()->getData())) {
            $user = $this->Users->newEntity($this->getRequest()->getData());
            $adherent = $this->Users->Adherents->newEntity($this->getRequest()->getData());
            $user->statut = $this->convertListe($user->statut);
            if(isset($_POST['tuteur']) == true) {
                if(empty($_POST['nomTuteur']) || empty($_POST['adresseTuteur']) || empty($_POST['telTuteur']) || empty($_POST['mailTuteur'])){
                    $this->Flash->error("Vous avez oubliez de remplir les champs pour le tuteur");
                    $this->redirect((['action' => 'add']));
                }

            }
            if ($this->Users->save($user) && ($this->Users->Adherents->save($adherent))) {
                $this->Flash->success('L\'utilisateur a été crée');
                $this->redirect((['action' => 'add']));
            }
            else {
                $this->Flash->error("Impossible d'ajouter l'utilisateur");
            }
        }
        $this->set(compact('user'));
    }

    private function convertListe($statut){
        switch($statut) {
            case 0:
                return 'Adhérent';
            case 1:
                return 'Gérant';
            case 2:
                return 'Moniteur';
        }
    }

    public function affiche(){
        $conditions = [];
        if ($this->getRequest()->getQuery('nom_user') != NULL) {
            $conditions['nom_user'] = $this->getRequest()->getQuery('nom_user');
        }
        if ($this->getRequest()->getQuery('prenom_user') != NULL) {
            $conditions['prenom_user'] = $this->getRequest()->getQuery('prenom_user');
        }
        if ($this->getRequest()->getQuery('tel_user') != NULL) {
            $conditions['tel_user'] = $this->getRequest()->getQuery('tel_user');
        }
        if ($this->getRequest()->getQuery('mail_user') != NULL) {
            $conditions['mail_user'] = $this->getRequest()->getQuery('mail_user');
        }
        if ($this->getRequest()->getQuery('date_naissance') != NULL) {
            $conditions['date_naissance'] = $this->getRequest()->getQuery('date_naissance');
        }
        $user = $this->Users->find()->toArray();
        $this->set(compact('user'));
    }
}