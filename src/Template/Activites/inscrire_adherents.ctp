<?php
//affichage des adhérents
 // echo $this->Form->control('adherents._ids',['option' => $adherents]); ça marche
echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Handicap</th>
    <th>Option</th>
  </tr>';
foreach ($adherents as $adherent) {
    echo '
  <tr>
    <td>' . $adherent->nom . '</td>
    <td>' . $adherent->handicap . '</td>';

    echo '<td>' . $this->Html->link(
            'Inscrire',
            ['controller' => 'Activites',
                'action' => 'inscrire_adherents', $activite->id, $adherent->id],
            ['class' => 'button',
                'title' => 'suppression activite']) . '</td>
                
  </tr>';
}
    echo $this->Html->link(
        'Retour',
        ['controller' => 'Activites',
            'action' => 'affiche'],
        ['class' => 'button',
            'title' => 'retour']);

/*
echo $this->Form->control('adherents._ids', ['options' => $adherents]) . '<br>'; probleme on ne voit pas les nom mais les id ... 
echo $this->Form->end();

echo $this->Html->link('Inscrire', ['action' => 'inscrire_adherents',$activite->id], ['class' => 'button', 'title' => 'Inscrire adherent']);



*/








/*echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Option</th>
  </tr>';
foreach ($adherents as $adherent) {
    echo '
  <tr>
    <td>' . $adherent->nom . '</td>';
    echo '<td>' . $this->Html->link(
            'Supprimer',
            ['controller' => 'Activites',
                'action' => 'delete', $adherent->id],
            ['class' => 'button',
                'title' => 'suppression activite']) .'
  </tr>';
}
echo '</table>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Activites', 'action' => 'affiche'],
        ['class' => 'button', 'title' => 'Retour']
    );*/
