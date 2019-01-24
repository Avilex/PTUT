<?php

echo $this->Form->create($facture);
echo $this->Form->control('nom', ['label' => 'Nom de la facture']);

echo $this->Form->select('etat', [
        'Payé' => 'Payé',
        'Non payé' => 'Pas payé'
    ]);

echo $this->Form->button('Ajouter');


echo $this->Html->link(
    'Retour',
    ['controller' => 'Adherents', 'action' => 'affiche'],
    ['class' => 'button', 'title' => 'retour adherent']
);
echo $this->Form->end();