<?php
/**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 23/01/2019
 * Time: 10:02
 */
?>

<p style="text-align: center;">
    <?php
    echo '<br>' . "HOME PAGE";
    ?>
</p>
<p style="text-align: center;">
    <?php //Lien pour Moniteurs
    echo '<br>' . $this->Html->link(
            'Moniteurs',
            ['controller' => 'Activites', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Vue moniteurs']
        );

    //Lien pour Gérants
    echo ' ' . $this->Html->link(
            'Gérants',
            ['controller' => 'Users', 'action' => 'home'],
            ['class' => 'button', 'title' => 'Vue gérants']
        ); ?>
</p>

<p style="text-align: center;">
    <?php
    //Lien pour déconnexion
    echo '<br>' . $this->Html->link(
            'Déconnexion',
            ['controller' => 'Users', 'action' => 'logout'],
            ['class' => 'button', 'title' => 'Déconnexion']
        ); ?>

</p>