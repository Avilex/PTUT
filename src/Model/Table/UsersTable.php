<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 16:30
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
        $this->hasOne('Adherent');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nom', 'create')-> notEmpty('nom', "Un nom de personne est nécessaire")
            ->requirePresence('prenom', 'create') ->notEmpty('prenom', 'Un prenom est nécessaire')
            ->requirePresence('tel', 'create')->notEmpty('tel', 'Un numéro de téléphone est nécessaire')
            ->requirePresence('mail', 'create')->notEmpty('mail', 'Un mail est nécessaire')
            ->requirePresence('dateNaissance', 'create')->notEmpty('dateNaissance', 'Une date de naissance est nécessaire')
            ->requirePresence('statut', 'create')->notEmpty('statut', 'Un statut est nécessaire');
        return $validator;
    }

}