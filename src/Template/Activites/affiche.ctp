<?php

echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Duree</th>
    <th>Nombre Participant activitée</th> 
    <th>Jour</th>
    <th>Option</th>
  </tr>';
  foreach ($activites as $activite){
    echo'
  <tr>
    <td>'. $activite->nom.'</td>
    <td>'.$activite->duree.'</td>
    <td>A faire</td>';
    if($activite->jour == null)
        echo'<td>'.$activite->date.'</td>';
    if($activite->date == null)
      echo'<td>'.$activite->jour.'</td>';
    echo '<td>'.$this->Html->link('Supprimer', ['controller' => 'Activites', 'action' => 'delete',$activite->id], ['class' => 'button', 'title' => 'suppression activite']).
        $this->Html->link('Modifier', ['controller' => 'Activites', 'action' => 'edit',$activite->id], ['class' => 'button', 'title' => 'modifier l\'activite']). '</td>
  </tr>';
}
echo'</table>';

echo $this->Html->link('Ajouter',['controller'=>'Activites','action'=> 'add'],['class'=>'button','title'=>'ajouter une activiteée']);

