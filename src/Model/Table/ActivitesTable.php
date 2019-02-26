<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 16:29
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ActivitesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsToMany('Adherents',['foreignKey'=>'adherent_id','targetForeignKey'=>'activite_id']);

    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nom', 'create')->notEmpty('nom', "Un nom d'\activité est nécessaire");
            //->requirePresence('duree', 'create')->notEmpty('duree', 'Une durée est nécessaire')
            //->requirePresence('date', 'create')->notEmpty('date', 'La date est nécessaire')
            //->requirePresence('jour', 'create')->notEmpty('jour', 'Un jour est nécessaire');
            //->requirePresence('prix', 'create')->notEmpty('prix', 'Le prix est nécessaire')
            //->requirePresence('typeSeance', 'create')->notEmpty('typeSeance', 'Le type de séance est nécessaire');
        return $validator;
    }
}