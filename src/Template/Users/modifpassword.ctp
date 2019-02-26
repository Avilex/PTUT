<p style="text-align: center;">
    <?php
    echo '<br>' . "Modification du mot de passe";
    ?>
</p>

<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 25/01/2019
 * Time: 14:27
 */
echo $this->Form->create($mdpModif);
echo $this->Form->control('password', ['label' => 'Mot de passe de l\'utilisateur', 'type' => 'password']);
echo $this->Form->control('confirm_password', ['label' => 'Entrez le mot de passe à nouveau ', 'type' => 'password']);

echo $this->Form->button('Mettre à jour');
echo $this->Form->end();

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'modif',$this->getRequest()->getSession()->read("Auth.User.id")],
        ['class' => 'button', 'title' => 'Retour']
    );