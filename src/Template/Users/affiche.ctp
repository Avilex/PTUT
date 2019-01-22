<?php

foreach ($user as $users) {
<<<<<<< HEAD
    echo '<br>' . '<br>';
    echo "Nom : $users->nom" . '<br>';
    echo "Prenom : $users->prenom" . '<br>';
    echo "Telephone : $users->tel" . '<br>';
    echo "Mail : $users->mail" . '<br>';
    echo "Statut : $users->statut" . '<br>';
    echo "Password : $users->password" . '<br>';
=======
        echo '<br>' . '<br>';
        echo "Nom : $users->nom" . '<br>';
        echo "Prenom : $users->prenom" . '<br>';
        echo "Telephone : $users->tel" . '<br>';
        echo "Mail : $users->mail" . '<br>';
        echo "Date de naissance : $users->dateNaissance" . '<br>';
        echo "Statut : $users->statut" . '<br>';

>>>>>>> 970d14cb2c7d6509a93679a92c54183d02f09043
}