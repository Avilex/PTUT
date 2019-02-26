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
        $this->hasOne('Factures');
        $this->belongsToMany('Activites',['foreignKey'=>'activite_id','targetForeignKey'=>'adherent_id']);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('nom', 'create')->notEmpty('nom', "Un nom de personne est nécessaire")
            ->requirePresence('prenom', 'create')->notEmpty('prenom', 'Un prenom est nécessaire')
            ->requirePresence('tel', 'create')->notEmpty('tel', 'Un numéro de téléphone est nécessaire')
            ->requirePresence('mail', 'create')->notEmpty('mail', 'Un mail est nécessaire')
            ->requirePresence('dateNaissance', 'create')->notEmpty('dateNaissance', 'Une date de naissance est nécessaire')
            ->requirePresence('handicap', 'create')->notEmpty('handicap', 'Le type d\'handicap est nécessaire')
            ->requirePresence('licence', 'create')->notEmpty('licence', 'Une licence est nécessaire');
        return $validator;
    }

}