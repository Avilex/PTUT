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
        public function countAdherent($idAct = null){
            $cpt =  $this->ActivitiesAdherents->find('count',array('conditions' => array('activity_id =' => $idAct )));
            return $cpt;
        }
}