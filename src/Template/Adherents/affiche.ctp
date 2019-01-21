<?php

foreach ($adherent as $adherents) {
    echo '<br>' . '<br>';
    echo "Nom : $adherents->nomTuteur" . '<br>';
    echo "Adresse : $adherents->adresseTuteur" . '<br>';
    echo "Telephone : $adherents->telTuteur" . '<br>';
    echo "Mail : $adherents->mailTuteur" . '<br>';

}