<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 21/01/2019
 * Time: 11:47
 */
//formulaire pour créer un article
echo $this->Form->create($user, ['type' => 'file']);
//Va générer un champ auteur
echo $this->Form->control('mail');
//Va générer un champ auteur
echo $this->Form->control('password');
//Va générer un bouton pour save dans la BD
echo $this->Form->button('Ajouter');

echo $this->Form->end();
echo '<br>';