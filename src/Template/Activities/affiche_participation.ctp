<p style="text-align: center;">
    <?php
    echo '<br>' . "Liste des participants";
    ?>
</p>
<?php
//affichage des activités
echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Handicap</th>
  </tr>';

foreach ($link as $id) {
    foreach ($adherents as $adherent) {
        if ($adherent->id == $id->adherent_id) {
            echo ' <tr>
                <td>' . $adherent->nom . '</td>
                <td>' . $adherent->prenom . '</td>
                <td>' . $adherent->handicap . '</td>';

            //bouton supprimer un adhérent de l'activité
            echo '<td>' . $this->Html->link(
                    'Supprimer de la liste',
                    ['controller' => 'ActivitiesAdherents',
                        'action' => 'delete', $id->id, $id->activity_id],
                    ['class' => 'button',
                        'title' => 'suppression activité']) .
                 '</td>
</tr>';
        }
    }

}
echo '</table>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Activities', 'action' => 'affiche'],
        ['class' => 'button', 'title' => 'Retour']
    );
