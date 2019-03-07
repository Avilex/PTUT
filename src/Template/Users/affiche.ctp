<p style="text-align: center;">
    <?php
    echo '<br>' . "Mon compte";
    ?>
</p>
<?php
echo '<table style="width:100%">

  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Téléphone</th> 
    <th>Mail</th>
    <th>Statut</th>
    <th>Mot de passe</th>
  </tr>';

echo '
    <tr>
        <td>' . $this->getRequest()->getSession()->read("Auth.User.nom") . '</td>
        <td>' . $this->getRequest()->getSession()->read("Auth.User.prenom") . '</td>
        <td>' . $this->getRequest()->getSession()->read("Auth.User.tel") . '</td>
        <td>' . $this->getRequest()->getSession()->read("Auth.User.mail") . '</td>
        <td>' . $this->getRequest()->getSession()->read("Auth.User.statut") . '</td>
        <td>' . $this->Html->link(
        'Modifier',
        ['controller' => 'Users',
            'action' => 'modif', $this->getRequest()->getSession()->read("Auth.User.id")],
        ['class' => 'button',
            'title' => 'Modification user']) . '</td>
    </tr>';

echo '</table>';
?>
<p style="text-align: center;">
    <?php
    echo "Gestion des autres utilisateurs";
    ?>
</p>
<?php
echo '
<table style="width:100%">

    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        <th>Statut</th>
        <th>Mot de passe</th>
    </tr>
    ';

foreach ($user as $users) {
    if ($users->id == $this->getRequest()->getSession()->read("Auth.User.id")) {
    } else {
        echo '
    <tr>
        <td>' . $users->nom . '</td>
        <td>' . $users->prenom . '</td>
        <td>' . $users->tel . '</td>
        <td>' . $users->mail . '</td>
        <td>' . $users->statut . '</td>
        <td>' . $this->Html->link('Supprimer', ['controller' => 'Users', 'action' => 'delete', $users->id],
                ['class' => 'button', 'title' => 'Suppression user']) . '
        </td>
    </tr>
    ';
    }
}

echo '
</table>';


//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );

