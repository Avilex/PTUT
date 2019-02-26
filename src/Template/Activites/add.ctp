<?php
//formulaire création d'une activité
echo $this->Form->create($activite);
echo $this->Form->control('nom');
echo $this->Form->control('duree');
echo $this->Form->select('jour', ['lundi' => 'lundi', 'mardi' => 'mardi', 'mercredi' => 'mercredi', 'jeudi' => 'jeudi', 'vendredi' => 'vendredi', 'samedi' => 'samedi', 'dimanche' => 'dimanche'], ['empty' => 'Choisissez un jour']);
$activite->date = null;
echo $this->Form->select('typeSeance', ['Forfait', 'Seance'], ['empty' => 'Choisissez le type de séance']);
echo $this->Form->control('prix');
echo $this->Form->control('divers');
echo $this->Form->button('Ajouter');
echo $this->Form->end();


//bouton activité exceptionnelle
echo $this->Html->link(
    'Ajouter activité événementielle',
    ['action' => 'addExceptionnel'],
    ['class' => 'button',
        'title' => 'Ajouter une activité événementielle']
);

//bouton retour
echo '<br>'.$this->Html->link(
    'Retour',
    ['action' => 'affiche'],
    ['class' => 'button',
        'title' => 'Retour']
);