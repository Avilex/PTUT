<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 23/01/2019
 * Time: 12:03
 */

namespace App\Model\Table;


use Cake\ORM\Table;

class FacturesTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
        $this->belongsTo('Adherents');
    }

}