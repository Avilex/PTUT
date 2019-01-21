<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 15:09
 */

namespace App\Controller;


class UsersController extends AppController
{
    public function add(){
        $user = $this->Users->find();
        if (!empty($this->getRequest()->getData())) {
            $user = $this->Users->newEntity($this->getRequest()->getData());
            //dd($user);
            //dd($this->Users->save($user));
            if ($this->Users->save($user)) {
                $this->Flash->success('L\'utilisateur a été crée');
                $this->redirect((['action' => 'affiche']));
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

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
        }
    }

    public function logout()
    {
        $this->Flash->success('Vous avez été déconnecté.');
        return $this->redirect($this->Auth->logout());
    }
}