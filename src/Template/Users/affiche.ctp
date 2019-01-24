
<?php

echo '<table style="width:100%">

  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Téléphone</th> 
    <th>Mail</th>
    <th>Statut</th>
    <th>Mot de passe</th>
  </tr>';

foreach ($user as $users) {
    echo'
    <tr>
        <td>'. $users->nom.'</td>
        <td>'. $users->prenom.'</td>
        <td>'. $users->tel.'</td>
        <td>'. $users->mail.'</td>
        <td>'. $users->statut.'</td>
        <td>'. $users->password.'</td>
        <td>'. $this->Html->link('Supprimer',['controller' => 'Users', 'action' => 'delete', $users->id],
            ['class' => 'button', 'title' => 'Suppression user'])
        .$this->Html->link('Modifier',['controller' => 'Users', 'action' => 'modif', $users->id],
            ['class' => 'button', 'title' => 'Modification user']
        ).'</td>
    </tr>';
}

echo'</table>';

echo $this->Html->link('Retour',['controller'=>'Users','action'=> 'add'],['class'=>'button','title'=>'revenir à l\'ajout d\'un user']);
<<<<<<< HEAD
=======
        );
<p style="text-align: center;">
    <?php
    echo '<br>' . "Mon compte";
    ?>
</p>

<?php
//afficher informations de la session
echo '<br>';
echo "Nom : " . $this->getRequest()->getSession()->read("Auth.User.nom") . '<br>';
echo "Prenom : " . $this->getRequest()->getSession()->read("Auth.User.prenom") . '<br>';
echo "Telephone : " . $this->getRequest()->getSession()->read("Auth.User.tel") . '<br>';
echo "Mail : " . $this->getRequest()->getSession()->read("Auth.User.mail") . '<br>';
echo "Statut : " . $this->getRequest()->getSession()->read("Auth.User.statut") . '<br>';

echo "<br>" . $this->Html->link(
        'Modifier mes informations',
        ['controller' => 'Users', 'action' => 'modif', $this->getRequest()->getSession()->read("Auth.User.id")],
        ['class' => 'button', 'title' => 'Modification de mes informations']
    );

?>
<p style="text-align: center;">
    <?php
    echo "Gestion des autres utilisateurs";
    ?>
</p>

<?php
foreach ($user as $users) {
//afficher informations de tous les autres users
    if ($users->id == $this->getRequest()->getSession()->read("Auth.User.id")) {

    } else {
        echo '<br>';
        echo "Nom : $users->nom" . '<br>';
        echo "Prenom : $users->prenom" . '<br>';
        echo "Telephone : $users->tel" . '<br>';
        echo "Mail : $users->mail" . '<br>';
        echo "Statut : $users->statut" . '<br>';

        echo "<br>" . $this->Html->link(
                'Suppression de l\'utilisateur',
                ['controller' => 'Users', 'action' => 'delete', $users->id],
                ['class' => 'button', 'title' => 'Suppression utilisateur']
            );
    }
}

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );

>>>>>>> 8be64f6aaf923864d36696849a91d90ca581e6f3
