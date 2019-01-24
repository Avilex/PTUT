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
use Cake\Localized\Validation\FrValidation;
use function Sodium\add;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence(['nom','prenom','password','tel','mail'], 'create')
            ->setProvider('fr', FrValidation::class)
            ->add('tel', 'myCustomRuleNameForPhone', [
                'rule' => 'phone',
                'provider' => 'fr',
                'message' => 'Numéro invalide',
            ]);
        return $validator;
    }


}