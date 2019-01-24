<?php

echo '<table style="width:100%">
  <tr>
    <th>Nom adhérent</th>
    <th>Prenom adhérent</th>
    <th>Téléphone adhérent</th> 
    <th>Mail adhérent</th>
    <th>Date de naissance</th>
    <th>Handicap de l\'adhérent</th>
    <th>Licence</th>
    <th>Nom de son tuteur</th>
    <th>Adresse tuteur</th>
    <th>Téléphone tuteur</th>
    <th>Mail tuteur</th>
  </tr>';

foreach ($adherent as $adherents) {
    echo'
    <tr>
        <td>'. $this->Html->link($adherents->nom,['controller' => 'Factures', 'action' => 'add', $adherents->id]).'</td>
        <td>'. $adherents->prenom.'</td>
        <td>'. $adherents->tel.'</td>
        <td>'. $adherents->mail.'</td>
        <td>'. $adherents->dateNaissance.'</td>
        <td>'. $adherents->handicap.'</td>
        <td>'. $adherents->licence.'</td>
    ';
    if($adherents->nomTuteur == null || $adherents->adresseTuteur == null || $adherents->telTuteur == null || $adherents->mailTuteur == null){
        echo'
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
        ';
    }
    else {
        echo'
            <td>'. $adherents->nomTuteur. '</td>
            <td>'. $adherents->adresseTuteur. '</td>
            <td>'. $adherents->telTuteur. '</td>
            <td>'. $adherents->mailTuteur. '</td>
        ';
    }
    echo'
        <td>'. $this->Html->link('Supprimer',['controller' => 'Adherents', 'action' => 'delete', $adherents->id],
            ['class' => 'button', 'title' => 'Suppression adherent'])
            .$this->Html->link('Modifier',['controller' => 'Adherents', 'action' => 'modif', $adherents->id],
                ['class' => 'button', 'title' => 'Modification adherent'])
            .$this->Html->link('Voir factures',['controller' => 'Factures', 'action' => 'affiche', $adherents->id],
                ['class' => 'button', 'title' => 'Voir factures']).
        '</td>        
    </tr>';
}

echo'</table>';

echo $this->Html->link('Retour',['controller'=>'Adherents','action'=> 'add'],['class'=>'button','title'=>'revenir à l\'ajout d\'un adherent']);
