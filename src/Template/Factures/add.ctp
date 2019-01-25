<p style="text-align: center;">
    <?php
    echo '<br>' . "Ajouter une facture";
    ?>
</p>

<?php
//formulaire ajout factures
echo $this->Form->create($facture);
echo $this->Form->control('nom', ['label' => 'Nom de la facture']);
echo $this->Form->select('etat', [
        'Payé' => 'Payé',
        'Non payé' => 'Non payé'
    ]);

echo $this->Form->button('Ajouter');
echo $this->Form->end();

//bouton retour
echo ' '.$this->Html->link(
    'Retour',
    ['controller' => 'Adherents', 'action' => 'affiche'],
    ['class' => 'button', 'title' => 'retour adherent']
);
