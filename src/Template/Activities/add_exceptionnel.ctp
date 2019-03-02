<p style="text-align: center;">
    <?php
    echo '<br>' . "Ajouter une activité événementielle";
    ?>
</p>

<?php
//formulaire ajout d'une activité événementielle
echo $this->Form->create($activite);
echo $this->Form->control('nom',['label'=>'Nom de l\'activité']);
echo $this->Form->control('dateDebut', ['label' => 'Date de début']);
$activite->jour = null;
echo $this->Form->control('dateFin', ['label' => 'Date de fin']);
$activite->jour = null;
echo $this->Form->control('prix', ['label' => 'Prix (en €)', 'type' => 'number']);
echo $this->Form->control('divers');
echo $this->Form->button('Ajouter');
echo $this->Form->end();

//bouton retour
echo $this->Html->link(
    'Retour',
    ['action' => 'add'],
    ['class' => 'button',
        'title' => 'Retour']
);

