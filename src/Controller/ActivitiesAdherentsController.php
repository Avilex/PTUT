<?php
/**
 * Created by PhpStorm.
 * User: arthur LAMURE
 * Date: 06/03/2019
 * Time: 18:46
 */

namespace App\Controller;

class ActivitiesAdherentsController extends AppController
{
    public function countAdherent($idAct = null)
    {
        $cpt = $this->ActivitiesAdherents->find()
            ->where(['activity_id' => $idAct])
            ->count();
        return $cpt;
    }

    public function affiche($idAct = null)
    {
        $id = $this->ActivitiesAdherents->find()
            ->where(['activity_id' => $idAct])
            ->toArray();
        return $id;
    }

    //suppression d'une activité
    public function delete($id = null, $link = null)
    {
        $getId = $this->ActivitiesAdherents->get($id);
        if ($this->ActivitiesAdherents->delete($getId)) {
            $this->Flash->success("L'adhérent a été retiré de la liste avec sucès !");
            return $this->redirect(['controller' => 'Activities',
                'action' => 'afficheParticipation', $link]);
        } else {
            $this->Flash->error("Une erreur est survenue lors de la suppression !");
        }
    }


}