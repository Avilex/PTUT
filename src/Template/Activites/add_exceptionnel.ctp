<?php
echo $this->Form->create($activite);
echo $this->Form->control('nom');
echo $this->Form->control('duree');
echo $this->Form->control('date',['label'=> 'Jour']);
$activite->jour = null;
echo $this->Form->select('typeSeance',['Forfait','Seance'],['empty'=>'Choisissez le type de seance']);
echo $this->Form->control('prix');
echo $this->Form->control('divers');
echo $this->Form->button('Ajouter');
echo $this->Form->end();
echo$this->Html->link('Retour',['action'=>'add'],['class'=>'button']);

