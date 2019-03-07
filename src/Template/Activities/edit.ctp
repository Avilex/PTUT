<p style="text-align: center;">
    <?php
    echo '<br>' . "Modification de l'activité";
    ?>
</p>

<?php
//formulaire modification activités
echo $this->Form->create($activiteEdit);
if ($activiteEdit->jour != null) {
    echo $this->Form->control('nom');
    echo $this->Form->control('heures', ['label' => 'Heures', 'type' => 'number']);
    echo $this->Form->control('minutes', ['label' => 'Minutes', 'type' => 'number']);
    echo $this->Form->select('jour', ['0' => 'lundi', '1' => 'mardi', '2' => 'mercredi', '3' => 'jeudi', '4' => 'vendredi', '5' => 'samedi', '6' => 'dimanche'], ['empty' => 'choisissez un jour']);
    echo $this->Form->select('typeSeance', ['Forfait', 'Seance'], ['empty' => 'Choisissez le type de seance']);
    echo $this->Form->control('prix');
    echo $this->Form->control('divers');
    echo $this->Form->button('Valider');
    echo $this->Form->end();
}
if ($activiteEdit->dateDebut != null) {
    echo $this->Form->control('nom');
    echo $this->Form->control('dateDebut', ['label' => 'Date de début']);
    echo $this->Form->control('dateFin', ['label' => 'Date de fin']);
    echo $this->Form->control('prix');
    echo $this->Form->control('divers');
    echo $this->Form->button('Valider');
    echo $this->Form->end();
}

//bouton annuler
echo $this->Html->link(
    'Annuler',
    ['controller' => 'Activities',
        'action' => 'affiche'],
    ['class' => 'button',
        'title' => 'Annuler la modification']
);
