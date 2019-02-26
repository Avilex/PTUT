<?php

echo '<table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Ville</th>
    <th>Adresse</th> 
    <th>Code postal</th>
    <th>Options</th>
  </tr>';
foreach ($etablissements as $etablissement) {
    echo '
  <tr>
    <td>' . $etablissement->nom . '</td>
    <td>' . $etablissement->ville . '</td>
    <td>' . $etablissement->adresse . '</td>
    <td>' . $etablissement->codePostal . '</td>';
    echo
        '<td>' . $this->Html->link(
            'Supprimer',
            ['action' => 'delete', $etablissement->id],
            ['class' => 'button',
                'title' => 'suppressimer l\'établissement']) .
        ' '.$this->Html->link(
            'Modifier',
            ['action' => 'edit', $etablissement->id],
            ['class' => 'button',
                'title' => 'modifier l\'établissement']) . '</td>
        </tr>';
}
echo '</table>';

//bouton ajouter
echo $this->Html->link(
    'Ajouter',
    ['action' => 'add'],
    ['class' => 'button',
        'title' => 'ajouter un établissement']
);

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );
