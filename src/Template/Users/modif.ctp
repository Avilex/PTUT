<?php
//formulaire modification d'un user
echo $this->Form->create($userModif);
echo $this->Form->control('nom');
echo $this->Form->control('prenom');
echo $this->Form->control('password');
echo $this->Form->control('tel');
echo $this->Form->control('mail');
echo $this->Form->select('statut', [
    '0' => 'Gérant',
    '1' => 'Moniteur'
]);
echo $this->Form->button('Mettre à jour');
echo $this->Form->end();
echo '<br>';
?>