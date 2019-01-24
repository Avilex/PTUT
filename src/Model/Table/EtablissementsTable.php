<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 16:32
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Localized\Validation\FrValidation;


class EtablissementsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence(['nom','adresse','codePostal','ville','nomDirecteur','tel'], 'create')
            ->setProvider('fr', FrValidation::class)
            ->add('codePostal', 'myCustomRuleNameForPostal', [
                'rule' => 'postal',
                'provider' => 'fr',
            ])
            ->add('tel', 'myCustomRuleNameForPhone', [
                'rule' => 'phone',
                'provider' => 'fr',
            ]);

        return $validator;
    }


}