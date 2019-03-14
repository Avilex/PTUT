<p style="text-align: center;">
    <?php
    echo '<h4 align="center">'."Modification de l'utilisateur".'</h4>';
    ?>
</p>

<?php
//formulaire modification d'un user

echo $this->Form->create($userModif);
echo $this->Form->select('statut', [
    '0' => 'Gérant',
    '1' => 'Moniteur'
]);
echo $this->Form->control('nom', ['label' => 'Nom de l\'utilisateur']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'utilisateur']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'utilisateur (Format 0X.XX.XX.XX.XX)', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'utilisateur', 'type' => 'email']);


echo $this->Form->button('Mettre à jour');
//Lien retour
echo ' ' . $this->Html->link(
        'Modifier le mot de passe',
        ['controller' => 'Users', 'action' => 'modifpassword',$this->getRequest()->getSession()->read("Auth.User.id")],
        ['class' => 'button', 'title' => 'modification du mot de passe']
    );
echo $this->Form->end();

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'affiche'],
        ['class' => 'button', 'title' => 'Retour']
    );
