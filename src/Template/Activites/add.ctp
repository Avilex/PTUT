<?php
echo $this->Form->create($activite);
echo $this->Form->control('nom');
echo $this->Form->control('duree',['label' => 'Durée de l\'activite', 'type' => 'time']);
echo $this->Form->select('jour',['0'=>'lundi','1'=>'mardi','2'=>'mercredi','3'=>'jeudi','4'=>'vendredi','5'=>'samedi','6'=>'dimanche'],['empty'=>'choisissez un jour']);
$activite->date = null;
echo $this->Form->select('typeSeance',['Forfait','Seance'],['empty'=>'Choisissez le type de seance']);
echo $this->Form->control('prix');
echo $this->Form->control('divers');
echo $this->Form->button('Ajouter');
echo $this->Form->end();
echo $this->Html->link('Ajouter Activitee evenementiel',['action'=>'addExceptionnel'],['class'=>'button']);
echo$this->Html->link('Retour',['action'=>''],['class'=>'button']);
