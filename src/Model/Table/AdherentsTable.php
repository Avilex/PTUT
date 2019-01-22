<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 03/01/2019
 * Time: 17:37
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class AdherentsTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nom', 'create')->notEmpty('nom', "Un nom de personne est nécessaire")
            ->requirePresence('prenom', 'create')->notEmpty('prenom', 'Un prenom est nécessaire')
            ->requirePresence('tel', 'create')->notEmpty('tel', 'Un numéro de téléphone est nécessaire')
            ->requirePresence('mail', 'create')->notEmpty('mail', 'Un mail est nécessaire')
            ->requirePresence('dateNaissance', 'create')->notEmpty('dateNaissance', 'Une date de naissance est nécessaire');
        return $validator;
    }

}