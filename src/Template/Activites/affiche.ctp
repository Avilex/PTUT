<?php
//affichage des activités
echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Duree</th>
    <th>Nombre Participant activitée</th> 
    <th>Jour</th>
    <th>Option</th>
  </tr>';
foreach ($activites as $activite) {
    echo '
  <tr>
    <td>' . $activite->nom . '</td>
    <td>' . $activite->duree . '</td>
    <td>A faire</td>';
    if ($activite->jour == null)
        echo '<td>' . $activite->date . '</td>';
    if ($activite->date == null)
        echo '<td>' . $activite->jour . '</td>';
    //bouton supprimer une activité
    echo '<td>' . $this->Html->link(
        'Supprimer',
            ['controller' => 'Activites',
                'action' => 'delete', $activite->id],
            ['class' => 'button',
                'title' => 'suppression activite']) .
        //bouton modifier une activité
        ' ' . $this->Html->link(
            'Modifier',
            ['controller' => 'Activites',
                'action' => 'edit', $activite->id],
            ['class' => 'button',
                'title' => 'modifier l\'activite'])
            . $this->Html->link(
                'Inscrire Adherents',
            ['action'=>'inscrireAdherents',$activite->id,$activite->id],
            ['class' => 'button',
                'title' => 'modifier l\'activite']).'</td>
  </tr>';
}
echo '</table>';

//bouton ajouter une activité
echo $this->Html->link(
    'Ajouter une activité',
    ['controller' => 'Activites',
        'action' => 'add'],
    ['class' => 'button',
        'title' => 'Ajouter une activité']
);

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );
