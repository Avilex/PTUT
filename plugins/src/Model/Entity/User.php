<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 21/01/2019
 * Time: 11:21
 */
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    // Tout le code de bake sera ici.

    // Méthode pour hash un password
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
    }
}