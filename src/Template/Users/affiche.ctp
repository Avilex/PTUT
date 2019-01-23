<?php

foreach ($user as $users) {
    echo '<br>' . '<br>';
    echo "Nom : $users->nom" . '<br>';
    echo "Prenom : $users->prenom" . '<br>';
    echo "Telephone : $users->tel" . '<br>';
    echo "Mail : $users->mail" . '<br>';
    echo "Statut : $users->statut" . '<br>';
    echo "Password : $users->password" . '<br>';

    echo " " . $this->Html->link(
            'Suppression d\'un user',
            ['controller' => 'Users', 'action' => 'delete', $users->id],
            ['class' => 'button', 'title' => 'Suppression user']
        );

    echo " " . $this->Html->link(
            'Modification d\'un user',
            ['controller' => 'Users', 'action' => 'modif', $users->id],
            ['class' => 'button', 'title' => 'Modification user']
        );
}

echo '<br>' . '<br>';
echo "Nom : " . $this->getRequest()->getSession()->read("Auth.User.nom") . '<br>';
echo "Prenom : " . $this->getRequest()->getSession()->read("Auth.User.prenom") . '<br>';
echo "Telephone : " . $this->getRequest()->getSession()->read("Auth.User.tel") . '<br>';
echo "Mail : " . $this->getRequest()->getSession()->read("Auth.User.mail") . '<br>';
echo "Statut : " . $this->getRequest()->getSession()->read("Auth.User.statut") . '<br>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );

