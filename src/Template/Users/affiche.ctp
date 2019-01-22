<?php

echo '<br>' . '<br>';
echo "Nom : " . $this->getRequest()->getSession()->read("Auth.User.nom") . '<br>';
echo "Prenom : " . $this->getRequest()->getSession()->read("Auth.User.prenom") . '<br>';
echo "Telephone : " . $this->getRequest()->getSession()->read("Auth.User.tel") . '<br>';
echo "Mail : " . $this->getRequest()->getSession()->read("Auth.User.mail") . '<br>';
echo "Statut : " . $this->getRequest()->getSession()->read("Auth.User.statut") . '<br>';


//Lien retour
echo '<br>' . $this->Html->link(
        'retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );