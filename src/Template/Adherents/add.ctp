<?php

echo $this->Form->create($adherent, ['type' => 'file']);
echo $this->Form->control('nom', ['label' => 'Nom de l\'utilisateur']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'utilisateur']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'utilisateur', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'utilisateur', 'type' => 'email']);
echo $this->Form->control('dateNaissance', [
    'label' => 'Date de naissance',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),
]);
echo $this->Form->control('nomTuteur', ['label' => 'Nom du tuteur']);
echo $this->Form->control('adresseTuteur', ['label' => 'Adresse du tuteur']);
echo $this->Form->control('telTuteur', ['label' => 'Téléphone du tuteur', 'type' => 'tel']);
echo $this->Form->control('mailTuteur', ['label' => 'Mail du tuteur', 'type' => 'email']);

echo $this->Form->button('Ajouter');
echo $this->Form->end();

