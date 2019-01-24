<?php

echo '<table style="width:100%">

  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Téléphone</th> 
    <th>Mail</th>
    <th>Statut</th>
    <th>Mot de passe</th>
  </tr>';

foreach ($user as $users) {
    echo'
    <tr>
        <td>'. $users->nom.'</td>
        <td>'. $users->prenom.'</td>
        <td>'. $users->tel.'</td>
        <td>'. $users->mail.'</td>
        <td>'. $users->statut.'</td>
        <td>'. $users->password.'</td>
        <td>'. $this->Html->link('Supprimer',['controller' => 'Users', 'action' => 'delete', $users->id],
            ['class' => 'button', 'title' => 'Suppression user'])
        .$this->Html->link('Modifier',['controller' => 'Users', 'action' => 'modif', $users->id],
            ['class' => 'button', 'title' => 'Modification user']
        ).'</td>
    </tr>';
}

echo'</table>';

echo $this->Html->link('Retour',['controller'=>'Users','action'=> 'add'],['class'=>'button','title'=>'revenir à l\'ajout d\'un user']);
