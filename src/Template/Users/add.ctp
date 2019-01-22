<?php



echo $this->Form->create($user);//url->
echo $this->Form->select('statut', [
    '0' => 'Gérant',
    '1' => 'Moniteur'
]);
<<<<<<< HEAD
=======
echo $this->Form->create($user, ['type' => 'file']);//url->
>>>>>>> 970d14cb2c7d6509a93679a92c54183d02f09043
echo $this->Form->control('nom', ['label' => 'Nom de l\'utilisateur']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'utilisateur']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'utilisateur', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'utilisateur', 'type' => 'email']);
<<<<<<< HEAD
echo $this->Form->control('password', ['label' => 'Password de l\'utilisateur']);

=======
echo $this->Form->control('dateNaissance', [
    'label' => 'Date de naissance',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),
]);
>>>>>>> 970d14cb2c7d6509a93679a92c54183d02f09043
echo $this->Form->button('Ajouter');
echo $this->Form->end();

