<?php

//bouton ajouter une activité
echo '<br>' . $this->Html->link(
        'Ajouter une activité',
        ['controller' => 'Activities',
            'action' => 'add'],
        ['class' => 'button',
            'title' => 'Ajouter une activité']
    );
?>
    <p style="text-align: center;">
        <?php
        echo '<h4 align="center">'."Liste des activités".'</h4>';
        ?>
    </p>
<?php
//affichage des activités
echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Durée</th>
    <th>Jours</th>
    <th>Prix</th>
    <th>Divers</th>
    <th>Nombre participants activité</th>
    <th>Options</th>
  </tr>';

foreach ($activites as $activite) {
    echo '
  <tr>
    <td>' . $activite->nom . '</td>';
    if ($activite->heures != null) {
        echo '<td>' . $activite->heures . 'h' . $activite->minutes . 'mn' . '</td>';
    } else {
        echo '<td>' . date_diff($activite->dateFin, $activite->dateDebut)->format("%a") . ' jours' . '</td>';
    }
    if ($activite->jour == null) {
        echo '<td>' . $activite->dateDebut . ' au ' . $activite->dateFin . '</td>';
    } else if ($activite->date == null) {
        echo '<td>' . $activite->jour . '</td>';
    }
    echo '<td>' . $activite->prix . '€' . '</td>';
    echo '<td>' . $activite->divers . '</td>';
    echo '<td>' . $link->countAdherent($activite->id) . '</td>';

    //bouton supprimer une activité
    echo '<td>' . $this->Html->link(
            'Supprimer',
            ['controller' => 'Activities',
                'action' => 'delete', $activite->id],
            ['class' => 'button',
                'title' => 'suppression activité']) .
        //bouton modifier une activité
        ' ' . $this->Html->link(
            'Modifier',
            ['controller' => 'Activities',
                'action' => 'edit', $activite->id],
            ['class' => 'button',
                'title' => 'modifier l\'activité'])
        . ' ' . $this->Html->link(
            'Inscrire Adherents',
            ['action' => 'viewAdherents', $activite->id],
            ['class' => 'button',
                'title' => 'inscrire des adhérents à l\'activité'])
        . ' ' . $this->Html->link(
            'Participants activité',
            ['controller' => 'Activities',
                'action' => 'afficheParticipation', $activite->id],
            ['class' => 'button',
                'title' => 'afficher les participants à l\'activité']) . '</td>
  </tr>';
}
echo '</table>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );
