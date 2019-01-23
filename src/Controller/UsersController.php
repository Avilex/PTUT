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
        if ($this->getRequest()->getQuery('dateNaissance') != NULL) {
            $conditions['dateNaissance'] = $this->getRequest()->getQuery('dateNaissance');
        }
        $user = $this->Users->find()
            ->where($conditions)
            ->toArray();toArray();
        $this->set(compact('user'));
    }

    //supprimer un user
    public function delete($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success("L'user a été supprimé avec succès !");
            return $this->redirect(['action' => 'affiche']);
        } else {
            $this->Flash->error("Une erreur est survenue lors de la suppression !");
        }
    }

    public function modif($id = null){
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
             $this->Users->patchEntity($user, $this->request->getData());
             $user->statut = $this->convertListe($user->statut);
                  if ($this->Users->save($user)) {
                      $this->Flash->success('User modifié avec succès !');
                      return $this->redirect(['action' => 'affiche']);
                  }
                  $this->Flash->error('Erreur lors de la mise à jour !');
        }
        $this->set('userModif', $user);
    }
}