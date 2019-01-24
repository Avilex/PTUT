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
use Cake\Localized\Validation\FrValidation;
class AdherentsTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
        $this->hasOne('Factures');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence(['nom','prenom','tel','mail','dateNaissance','handicap','licence'], 'create')
            ->setProvider('fr', FrValidation::class)
            ->add('tel', 'myCustomRuleNameForPhone', [
                'rule' => 'phone',
                'provider' => 'fr',
            ]);
        return $validator;
    }

}