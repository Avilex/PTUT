<?php

echo '<table style="width:100%">
  <tr>
    <th>Nom adhérent</th>
    <th>Prenom adhérent</th>
    <th>Facture</th>
    <th>Payé ou pas</th>
  </tr>
  <tr>
      <td>'. $adherentFact->nom.'</td>
      <td>'. $adherentFact->prenom.'</td>
      <td>'. "Danse". '</td>';

echo '<td>'.$this->Form->select('etat', [
    '0' => 'Payé',
    '1' => 'Pas payé'
]).'</td>';

echo'
     <td>'. $this->Html->link('Valider',['controller' => 'Invoices', 'action' => 'add', $adherentFact->id],
        ['class' => 'button', 'title' => 'Validation facture'])
    .$this->Html->link('Modifier',['controller' => 'Adherents', 'action' => 'modifFacture', $adherentFact->id],
        ['class' => 'button', 'title' => 'Modification facture']).
    '</td>        
    </tr>';

echo'  
  </tr>';


echo '</table>';
