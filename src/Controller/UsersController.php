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
    public function add($id = null){
        $user = $this->Users->find();
        if (!empty($this->getRequest()->getData())) {
            $user = $this->Users->newEntity($this->getRequest()->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('L\'utilisateur a été crée');
                $this->redirect((['controller'=>'Adherents', 'action' => 'add',$user->id]));
            }
            else {
                $this->Flash->error("Impossible d'ajouter l'utilisateur");
            }
        }
        $this->set(compact('user'));
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