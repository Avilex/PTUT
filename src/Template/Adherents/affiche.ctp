<?php

//Lien pour créer un adhérent
echo '<br>' . $this->Html->link(
        'Créer un adhérent',
        ['controller' => 'Adherents', 'action' => 'add'],
        ['class' => 'button', 'title' => 'Créer un adhérent']
    );

foreach ($adherent as $adherents) {
    echo '<br>' . '<br>';
    echo "Nom de l'adhérent : $adherents->nom" . '<br>';
    echo "Prenom de l'adhérent : $adherents->prenom" . '<br>';
    echo "Telephone de l'adhérent : $adherents->tel" . '<br>';
    echo "Mail de l'adhérent : $adherents->mail" . '<br>';
    echo "Date de naissance : $adherents->dateNaissance" . '<br>';
    if($adherents->nomTuteur == null || $adherents->adresseTuteur == null || $adherents->telTuteur == null || $adherents->mailTuteur == null){
        echo "Nom de son tuteur: Pas de tuteur renseigné" . '<br>';
        echo "Adresse de son tuteur : Pas de tuteur renseigné" . '<br>';
        echo "Telephone de son tuteur : Pas de tuteur renseigné" . '<br>';
        echo "Mail de son tuteur : Pas de tuteur renseigné" . '<br>';
    }
    else {
        echo "Nom de son tuteur: $adherents->nomTuteur" . '<br>';
        echo "Adresse de son tuteur : $adherents->adresseTuteur" . '<br>';
        echo "Telephone de son tuteur : $adherents->telTuteur" . '<br>';
        echo "Mail de son tuteur : $adherents->mailTuteur" . '<br>';
    }
    echo " " . $this->Html->link(
            'Suppression d\'un adhérent',
            ['controller' => 'Adherents', 'action' => 'delete', $adherents->id],
            ['class' => 'button', 'title' => 'Suppression adhérent']
        );

    echo " " . $this->Html->link(
            'Modification d\'un user',
            ['controller' => 'Adherents', 'action' => 'modif', $adherents->id],
            ['class' => 'button', 'title' => 'Modification user']
        );
}


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );

