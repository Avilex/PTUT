<?php
//modification de la facture
echo $this->Form->create($factureModif);
echo $this->Form->control('nom');
echo $this->Form->select('etat', [
    'Payé' => 'Payé',
    'Non payé' => 'Pas payé'
]);

echo $this->Form->button('Mettre à jour');
echo $this->Form->end();
