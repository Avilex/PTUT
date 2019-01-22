<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 15:08
 */

namespace App\Controller;


class ActivitesController extends AppController
{

    public function add()
    {
        $activite = $this->Activites->newEntity();
        if (!empty($this->getRequest()->getData())) {
            $activite = $this->Activites->newEntity($this->getRequest()->getData());
            if($activite->jour != null)
                $activite->jour = $this->convertListeString($activite->jour);
            if($activite->typeSeance != null)
                $activite->typeSeance = $this->convertListeTypeSeance($activite->typeSeance);
            if ($this->Activites->save($activite)) {
                $this->Flash->success(__('Votre activité a été sauvegardé.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('Impossible d\'ajouter votre activité.'));
            }
        }
        $this->set(compact('activite'));
    }

    public function addExceptionnel()
    {
        $activite = $this->Activites->newEntity();
        if (!empty($this->getRequest()->getData())) {
            $activite = $this->Activites->newEntity($this->getRequest()->getData());
            if($activite->typeSeance != null)
                $activite->typeSeance = $this->convertListeTypeSeance($activite->typeSeance);
            if ($this->Activites->save($activite)) {
                $this->Flash->success(__('Votre activité a été sauvegardé.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('Impossible d\'ajouter votre activité.'));
            }
        }
        $this->set(compact('activite'));
    }

    public function convertListeString($var){
        switch ($var){
            case 0:
                return 'lundi';
            case 1:
                return 'mardi';
            case 2:
                return 'mercredi';
            case 3:
                return 'jeudi';
            case 4:
                return 'vendredi';
            case 5:
                return 'samedi';
            case 6:
                return 'dimanche';
        }
    }
    public function convertListeTypeSeance($var){
        switch ($var){
            case 0:
                return 'Forfait';
            case 1:
                return 'Séance';
        }
    }
}