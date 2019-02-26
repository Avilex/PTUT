<?php

//bouton ajouter une activité
echo '<br>' . $this->Html->link(
        'Ajouter une activité',
        ['controller' => 'Activites',
            'action' => 'add'],
        ['class' => 'button',
            'title' => 'Ajouter une activité']
    );
?>
    <p style="text-align: center;">
        <?php
        echo '<br>' . "Liste des activités";
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
    echo '<td>A faire</td>';
    //bouton supprimer une activité
    echo '<td>' . $this->Html->link(
            'Supprimer',
            ['controller' => 'Activites',
                'action' => 'delete', $activite->id],
            ['class' => 'button',
                'title' => 'suppression activité']) .
        //bouton modifier une activité
        ' ' . $this->Html->link(
            'Modifier',
            ['controller' => 'Activites',
                'action' => 'edit', $activite->id],
            ['class' => 'button',
                'title' => 'modifier l\'activite'])
        . ' ' . $this->Html->link(
            'Inscrire Adherents',
            ['action' => 'inscrireAdherents', $activite->id, $activite->id],
            ['class' => 'button',
                'title' => 'modifier l\'activite']) . '</td>
  </tr>';
}
echo '</table>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );
