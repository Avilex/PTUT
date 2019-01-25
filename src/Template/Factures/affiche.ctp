<p style="text-align: center;">
    <?php
    echo '<br>' . "Liste des factures";
    ?>
</p>

<?php
//affichage des factures de l'adhérent
echo '<table style="width:100%">
  <tr>
    <th>Numéro facture</th>
    <th>Nom facture</th>
    <th>Etat facture</th>
  </tr>';

 foreach($facture as $factures) {
     echo '
     <tr>
        <td>' . $factures->id . '</td>
        <td>' . $factures->nom . '</td>
        <td>' . $factures->etat . '</td>
        <td>' . $this->Html->link('Supprimer', ['controller' => 'factures', 'action' => 'delete', $factures->id],
             ['class' => 'button', 'title' => 'Validation facture']).
         ' '.$this->Html->link('Modifier', ['controller' => 'factures', 'action' => 'modif', $factures->id],
             ['class' => 'button', 'title' => 'Modifier facture']).'</td>        
    </tr>';
 }

echo'</table>';

echo $this->Html->link('Retour',
    ['controller'=>'Adherents',
        'action'=> 'affiche'],
    ['class'=>'button',
        'title'=>'revenir à l\'affiche des adherents']);

