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
        $this->belongsTo('Users');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nomTuteur', 'create')-> notEmpty('nomTuteur', "Un nom de tuteur est nécessaire")
            ->requirePresence('adresseTuteur', 'create') ->notEmpty('adresseTuteur', 'Un prenom de tuteur est nécessaire')
            ->requirePresence('telTuteur', 'create')->notEmpty('telTuteur', 'Un mot de passe de tuteur est nécessaire')
            ->requirePresence('mailTuteur', 'create')->notEmpty('mailTuteur', 'Un numéro de téléphone est nécessaire');
        return $validator;
    }
}