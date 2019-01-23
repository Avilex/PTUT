<?php /**
 * Created by PhpStorm.
 * User: p1701300
 * Date: 22/01/2019
 * Time: 14:16
 */
?>

<p style="text-align: center;">
    <?php //Lien pour gérer les activités
    echo '<br>' . $this->Html->link(
            'Activités',
            ['controller' => 'Activites', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les activités']
        );

    //Lien pour gérer les établissements
    echo ' ' . $this->Html->link(
            'Etablissements',
            ['controller' => 'Etablissements', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les établissements']
        ); ?>
</p>

<p style="text-align: center;">
    <?php
    //Lien pour gérer les Adhérents
    echo '<br>' . $this->Html->link(
            'Adhérents',
            ['controller' => 'Adherents', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les adhérents']
        );

    //Lien pour gérer les Factures
    echo ' ' . $this->Html->link(
            'Factures',
            ['controller' => 'Factures', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les factures']
        ); ?>
</p>

<p style="text-align: center;">
    <?php
    //Lien pour gérer les bilans d'activités
    echo '<br>' . $this->Html->link(
            'Bilan d\'activités',
            ['controller' => 'Bilan', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les bilans d\'activités']
        );

    //Lien pour gérer le chiffre d'affaires
    echo ' ' . $this->Html->link(
            'Chiffre d\'affaires',
            ['controller' => 'CA', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter le chiffre d\'affaires']
        ); ?>

</p>

<p style="text-align: center;">
    <?php
    //Lien pour gérer les paramètres
    echo '<br>' . $this->Html->link(
            'Paramètres du compte',
            ['controller' => 'Users', 'action' => 'affiche'],
            ['class' => 'button', 'title' => 'Consulter les paramètres']
        );
    //Lien créer Users
    echo ' ' . $this->Html->link(
            'Créer un utilisateur',
            ['controller' => 'Users', 'action' => 'add'],
            ['class' => 'button', 'title' => 'Créer un nouvel utilisateur']
        ); ?>
</p>

<p style="text-align: center;">
    <?php
    //Lien pour retour
    echo '<br>' . $this->Html->link(
            'Retour',
            ['controller' => 'Users', 'action' => 'homepage'],
            ['class' => 'button', 'title' => 'retour page d\'accueil']
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