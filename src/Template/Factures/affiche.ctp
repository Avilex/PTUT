<?php

echo '<br>' . $this->Html->link('Ajouter une Facture',
        ['controller' => 'Factures', 'action' => 'add', $id],
        ['class' => 'button', 'title' => 'Ajouter une facture']);
?>

    <p style="text-align: center;">
        <?php
        echo '<br>' . "Liste des factures";
        ?>
    </p>

<?php
//affichage des factures de l'adhérent
echo '<table style="width:100%">
  <tr>
    <th>Nom facture</th>
    <th>Etat facture</th>
  </tr>';

foreach ($facture as $factures) {
    echo '
     <tr>
        <td>' . $factures->nom . '</td>
        <td>' . $factures->etat . '</td>
        <td>' . $this->Html->link('Supprimer', ['controller' => 'Factures', 'action' => 'delete', $factures->id],
            ['class' => 'button', 'title' => 'Validation facture']) .
        ' ' . $this->Html->link('Modifier', ['controller' => 'Factures', 'action' => 'modif', $factures->id],
            ['class' => 'button', 'title' => 'Modifier facture']) .
        ' ' . $this->Html->link('Voir la Facture', ['controller' => 'Adherents', 'action' => 'pdf', $id, $factures->nom],
            ['class' => 'button', 'title' => ' Voir la facture']) . '</td>        
    </tr>';
}


echo '</table>';

echo $this->Html->link('Retour',
    ['controller' => 'Adherents',
        'action' => 'affiche'],
    ['class' => 'button',
        'title' => 'revenir à l\'affiche des adherents']);

