<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 19/12/2018
 * Time: 16:29
 */

namespace App\Model\Table;


use Cake\ORM\Table;

class ActivitesTable extends Table
{
    public function initialize(array  $config){
        parent::initialize($config);
        $this->belongsToMany('Adherents');

    }
}