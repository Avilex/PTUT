<?php

foreach ($user as $users) {
    echo '<br>' . '<br>';
    echo "Nom : $users->nom" . '<br>';
    echo "Prenom : $users->prenom" . '<br>';
    echo "Password : $users->password" . '<br>';
    echo "Telephone : $users->tel" . '<br>';
    echo "Mail : $users->mail" . '<br>';
    echo "Date de naissance : $users->dateNaissance" . '<br>';
    echo "Statut : $users->statut" . '<br>';
}