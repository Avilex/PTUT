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
    public function add()
    {
        $user = $this->Users->find();
        if (!empty($this->getRequest()->getData())) {
            $user = $this->Users->newEntity($this->getRequest()->getData());
            $user->statut = $this->convertListe($user->statut);
            if ($this->Users->save($user)) {
                $this->Flash->success('L\'utilisateur a été crée');
                $this->redirect((['action' => 'affiche']));
            } else {
                $this->Flash->error("Impossible d'ajouter l'utilisateur");
            }
        }
        $this->set(compact('user'));
    }

    private function convertListe($statut)
    {
        switch ($statut) {
            case 0:
                return 'Gérant';
            case 1:
                return 'Moniteur';
        }
    }

    public function affiche()
    {
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
        $user = $this->Users->find()
            ->where($conditions)
            ->toArray();
        $this->set(compact('user'));
    }


    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect((['action' => 'homepage']));
            }
            $this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
        }
    }

    public function logout()
    {
        $this->Flash->success('Vous avez été déconnecté.');
        return $this->redirect($this->Auth->logout());
    }

    public function homepage()
    {
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
        $user = $this->Users->find()
            ->where($conditions)
            ->toArray();
        $this->set(compact('user'));
    }

    public function home()
    {
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
        $user = $this->Users->find()
            ->where($conditions)
            ->toArray();
        $this->set(compact('user'));
    }
}

//$this->getRequest()->getSession()->read("Auth.User.statut");
