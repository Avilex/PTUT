<p style="text-align: center;">
    <?php
    echo '<br>' . "Modification de l'établissements";
    ?>
</p>

<?php
//modification établissement
echo $this->Form->create($etablissementEdit);
echo $this->Form->control('nom');
echo $this->Form->control('adresse');
echo $this->Form->control('codePostal');
echo $this->Form->control('ville');
echo $this->Form->control('nomDirecteur');
echo $this->Form->control('tel');
echo $this->Form->button('Valider');
echo ' ' . $this->Html->link(
        'Annuler',
        ['controller' => 'Etablissements',
            'action' => 'affiche'],
        ['class' => 'button',
            'title' => 'Annuler la modification']);
echo $this->Form->end();
