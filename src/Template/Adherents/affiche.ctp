<?php

foreach ($adherent as $adherents) {
    echo '<br>' . '<br>';
    echo "Nom de l'adhérent : $adherents->nom" . '<br>';
    echo "Prenom de l'adhérent : $adherents->prenom" . '<br>';
    echo "Telephone de l'adhérent : $adherents->tel" . '<br>';
    echo "Mail de l'adhérent : $adherents->mail" . '<br>';
    echo "Date de naissance : $adherents->dateNaissance" . '<br>';
    echo "Nom de son tuteur: $adherents->nomTuteur" . '<br>';
    echo "Adresse de son tuteur : $adherents->adresseTuteur" . '<br>';
    echo "Telephone de son tuteur : $adherents->telTuteur" . '<br>';
    echo "Mail de son tuteur : $adherents->mailTuteur" . '<br>';

}