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
        $user = $this ->Users->find();
        //on crée une entité User
        $user = $this->Users->newEntity($this->getRequest()->getData());
        if ($this->Users->save($user)){
            $this->Flash->success('Votre User a été créé !');
        } else {
            $this->Flash->error('Une erreur est survenue lors de l\'enregistrement !');
        }
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