<?php
//formulaire modification adhérent
echo $this->Form->create($adherentModif);
echo $this->Form->control('nom');
echo $this->Form->control('prenom');
echo $this->Form->control('tel');
echo $this->Form->control('mail');
echo $this->Form->control('dateNaissance', [
    'label' => 'Date de naissance',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),
]);
echo $this->Form->control('handicap');
echo $this->Form->control('licence');
echo $this->Form->control('nomTuteur');
echo $this->Form->control('adresseTuteur');
echo $this->Form->control('telTuteur');
echo $this->Form->control('mailTuteur');
echo $this->Form->button('Mettre à jour');
echo $this->Form->end();
echo '<br>';

