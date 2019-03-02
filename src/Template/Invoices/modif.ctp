<p style="text-align: center;">
    <?php
    echo '<br>' . "Modification de la facture";
    ?>
</p>

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

//bouton retour
echo ' '.$this->Html->link(
        'Retour',
        ['controller' => 'Invoices', 'action' => 'affiche',$factureModif->id],
        ['class' => 'button', 'title' => 'retour adherent']
    );
