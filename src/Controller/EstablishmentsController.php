<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 15:08
 */

namespace App\Controller;


class EstablishmentsController extends AppController
{
    public function add()
    {
        $etablissement = $this->Establishments->newEntity();
        if (!empty($this->getRequest()->getData())) {
            $etablissement = $this->Establishments->newEntity($this->getRequest()->getData());
            if ($this->Establishments->save($etablissement)) {
                $this->Flash->success(__('l\'etablissement a bien été sauvegardé.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('Impossible de sauvegarder l\'établissements.'));
            }
        }
        $this->set(compact('etablissement'));
    }

    public function affiche()
    {
        $etablissements = $this->Establishments->find('all');
        $this->set(compact('etablissements'));
    }

    public function edit($id = null)
    {
        $etablissement = $this->Establishments->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Establishments->patchEntity($etablissement, $this->request->getData());
            if ($this->Establishments->save($etablissement)) {
                $this->Flash->success('Etablissement modifié avec succès !');
                return $this->redirect(['action'=>'affiche']);
            }
            $this->Flash->error('Erreur lors de la modification!');
        }
        $this->set('etablissementEdit', $etablissement);
    }

}