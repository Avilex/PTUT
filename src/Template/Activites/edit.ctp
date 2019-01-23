<?php

echo $this->Form->create($activiteEdit);
if($activiteEdit->jour != null) {
    echo $this->Form->control('nom');
    echo $this->Form->control('duree');
    echo $this->Form->select('jour',['0'=>'lundi','1'=>'mardi','2'=>'mercredi','3'=>'jeudi','4'=>'vendredi','5'=>'samedi','6'=>'dimanche'],['empty'=>'choisissez un jour']);
    echo $this->Form->select('typeSeance',['Forfait','Seance'],['empty'=>'Choisissez le type de seance']);
    echo $this->Form->control('prix');
    echo $this->Form->control('divers');
    echo $this->Form->button('Valider');
    echo $this->Form->end();
}
if($activiteEdit->date != null){
    echo $this->Form->control('nom');
    echo $this->Form->control('duree',['label' => 'Durée de l\'activite', 'type' => 'time']);
    echo $this->Form->control('date',['label'=> 'Jour']);
    echo $this->Form->select('typeSeance',['Forfait','Seance'],['empty'=>'Choisissez le type de seance']);
    echo $this->Form->control('prix');
    echo $this->Form->control('divers');
    echo $this->Form->button('Valider');
    echo $this->Form->end();
}
echo $this->Html->link('Annuler', ['controller' => 'Activites', 'action' => 'affiche'],['class' => 'button', 'title' => 'Annuler la modification'])
?>