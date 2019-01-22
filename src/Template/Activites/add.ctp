<?php
echo $this->Form->create($activite);
echo $this->Form->control('nom');
echo $this->Form->control('duree');
echo $this->Form->select('jour',['lundi'=>'lundi','mardi'=>'mardi','mercredi'=>'mercredi','jeudi'=>'jeudi','vendredi'=>'vendredi','samedi'=>'samedi','dimanche'=>'dimanche'],['empty'=>'choisissez un jour']);
$activite->date = null;
echo $this->Form->select('typeSeance',['Forfait','Seance'],['empty'=>'Choisissez le type de seance']);
echo $this->Form->control('prix');
echo $this->Form->control('divers');
echo $this->Form->button('Ajouter');
echo $this->Form->end();
echo $this->Html->link('Ajouter Activitee evenementiel',['action'=>'addExceptionnel'],['class'=>'button']);
echo$this->Html->link('Retour',['action'=>'affiche'],['class'=>'button']);