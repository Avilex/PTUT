<?php
//formulaire création établissements
echo $this->Form->create($etablissement);
echo $this->Form->control('nom');
echo $this->Form->control('adresse');
echo $this->Form->control('codePostal');
echo $this->Form->control('ville');
echo $this->Form->button('Ajouter');
echo $this->Html->link('Retour', ['action' => 'affiche'], ['class' => 'button']);
echo $this->Form->end();
