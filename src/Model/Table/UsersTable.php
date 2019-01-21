<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 03/01/2019
 * Time: 13:30
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
        $this->hasOne('Adherent')
            ->setName('Adherents')
            ->setConditions(['Adherents.id' => '1'])
            ->setDependent(true);
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