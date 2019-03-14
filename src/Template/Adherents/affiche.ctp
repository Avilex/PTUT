<?php

//Lien pour créer un adhérent
echo '<br>' . $this->Html->link(
        'Créer un adhérent',
        ['controller' => 'Adherents', 'action' => 'add'],
        ['class' => 'button', 'title' => 'Créer un adhérent']
    );
?>
<p style="text-align: center;">
    <?php
    echo '<h4 align="center">'."Liste des adhérents".'</h4>';
    ?>
</p>
<?php
echo '<table style="width:100%">
  <tr>
    <th>Nom adhérent</th>
    <th>Prénom adhérent</th>
    <th>Téléphone adhérent</th> 
    <th>Mail adhérent</th>
    <th>Date de naissance</th>
    <th>Etablissement</th>
    <th>Handicap de l\'adhérent</th>
    <th>Licence</th>
    <th>Nom tuteur</th>
    <th>Adresse tuteur</th>
    <th>Téléphone tuteur</th>
    <th>Mail tuteur</th>
    
  </tr>';

//affichage des adhérents
foreach ($adherent as $adherents) {
    echo '
    <tr>
        <td>'. $adherents->nom.'</td>
        <td>'. $adherents->prenom.'</td>
        <td>'. $adherents->tel.'</td>
        <td>'. $adherents->mail.'</td>
        <td>'. $adherents->dateNaissance.'</td>
        <td>'. $adherents->establishment_id.'</td>
        <td>'. $adherents->handicap.'</td>
        <td>'. $adherents->licence.'</td>
    ';
    if ($adherents->nomTuteur == null || $adherents->adresseTuteur == null || $adherents->telTuteur == null || $adherents->mailTuteur == null) {
        echo '
            <td>' . "Pas de tuteur renseigné" . '</td>
            <td>' . "Pas de tuteur renseigné" . '</td>
            <td>' . "Pas de tuteur renseigné" . '</td>
            <td>' . "Pas de tuteur renseigné" . '</td>
        ';
    } else {
        echo '
            <td>' . $adherents->nomTuteur . '</td>
            <td>' . $adherents->adresseTuteur . '</td>
            <td>' . $adherents->telTuteur . '</td>
            <td>' . $adherents->mailTuteur . '</td>
        ';
    }

    echo'
        <td>'. $this->Html->link('Supprimer',['controller' => 'Adherents', 'action' => 'delete', $adherents->id],
            ['class' => 'button', 'title' => 'Suppression adherent']).
            ' '.$this->Html->link('Modifier',['controller' => 'Adherents', 'action' => 'modif', $adherents->id],
                ['class' => 'button', 'title' => 'Modification adherent'])
            .' '.$this->Html->link('Voir factures',['controller' => 'Invoices', 'action' => 'affiche', $adherents->id],
                ['class' => 'button', 'title' => 'Voir factures']).
        '</td>        
    </tr>';
}

echo'</table>';


//Lien retour
echo $this->Html->link(
    'Retour',
    ['controller' => 'Users', 'action' => 'home'],
    ['class' => 'button', 'title' => 'Retour']
);
