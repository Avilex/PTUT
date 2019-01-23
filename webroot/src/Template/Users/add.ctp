<?php
echo $this->Form->create($user, ['type' => 'file']);
echo $this->Form->control('nom', ['label' => 'Nom de l\'utilisateur']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'utilisateur']);
echo $this->Form->control('password', ['label' => 'Password de l\'utilisateur']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'utilisateur', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'utilisateur', 'type' => 'email']);
echo $this->Form->control('dateNaissance', [
    'label' => 'Date de naissance',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),
]);
echo $this->Form->select('statut',[0, 1, 2],['empty' => 'Choisissez le statut']);
echo $this->Form->button('Ajouter'); 
echo $this->Form->end();

