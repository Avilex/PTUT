<?php

foreach ($user as $users) {
    echo '<br>' . '<br>';
    echo "Nom : $users->nom" . '<br>';
    echo "Prenom : $users->prenom" . '<br>';
    echo "Telephone : $users->tel" . '<br>';
    echo "Mail : $users->mail" . '<br>';
    echo "Statut : $users->statut" . '<br>';
    echo "Password : $users->password" . '<br>';
}