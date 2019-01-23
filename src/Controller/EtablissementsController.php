<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 15:08
 */

namespace App\Controller;


class EtablissementsController extends AppController
{
    public function add()
    {
        $etablissement = $this->Etablissements->newEntity();
        if (!empty($this->getRequest()->getData())) {
            $etablissement = $this->Etablissements->newEntity($this->getRequest()->getData());
            if ($this->Etablissements->save($etablissement)) {
                $this->Flash->success(__('l\'etablissemet a bien été sauvegardé.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('Impossible de sauvegarder l\'établissements.'));
            }
        }
        $this->set(compact('etablissement'));
    }


    public function affiche()
    {
        $etablissements = $this->Etablissements->find('all');
        $this->set(compact('etablissements'));
    }

    public function edit($id = null)
    {
        $etablissement = $this->Etablissements->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Etablissements->patchEntity($etablissement, $this->request->getData());
            if ($this->Etablissements->save($etablissement)) {
                $this->Flash->success('Etablissement modifié avec succès !');
                return $this->redirect(['action'=>'affiche']);
            }
            $this->Flash->error('Erreur lors de la modification!');
        }
        $this->set('etablissementEdit', $etablissement);
    }
}