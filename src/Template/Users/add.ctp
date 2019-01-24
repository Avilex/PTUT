<?php
//formulaire création d'un utilisateur
echo $this->Form->create($user); //url->
echo $this->Form->select('statut', [
    '0' => 'Gérant',
    '1' => 'Moniteur'
]);
echo $this->Form->control('nom', ['label' => 'Nom de l\'utilisateur']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'utilisateur']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'utilisateur (Format 0X.XX.XX.XX.XX)', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'utilisateur', 'type' => 'email']);
echo $this->Form->control('password', ['label' => 'Password de l\'utilisateur']);

echo $this->Form->button('Ajouter');
echo $this->Form->end();

