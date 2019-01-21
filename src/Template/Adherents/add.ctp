<?php
echo $this->Form->create($adherent, ['type' => 'file']);
echo $this->Form->control('Nom adherent', array(
    'options' => array($id),
    'empty' => 'Choisissez la personne souhaitée'
));
echo $this->Form->checkbox('tuteur'). ' Tuteur ? ' ;
echo $this->Form->control('nomTuteur', ['label' => 'Nom du tuteur', 'disabled' => false]);
echo $this->Form->control('adresseTuteur', ['label' => 'Adresse du tuteur', 'disabled' => false]);
echo $this->Form->control('telTuteur', ['label' => 'Téléphone du tuteur', 'type' => 'tel', 'disabled' => false]);
echo $this->Form->control('mailTuteur', ['label' => 'Mail du tuteur', 'type' => 'email', 'disabled' => false]);
echo $this->Form->button('Ajouter');
echo $this->Form->end();

