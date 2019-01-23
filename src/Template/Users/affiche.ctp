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
<<<<<<< HEAD
        ).'</td>
    </tr>';
}

echo'</table>';

echo $this->Html->link('Retour',['controller'=>'Users','action'=> 'add'],['class'=>'button','title'=>'revenir à l\'ajout d\'un user']);
=======
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

>>>>>>> c960663829c66d8ff16c608493b21dda0ea48d17
