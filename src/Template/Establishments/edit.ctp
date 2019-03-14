<p style="text-align: center;">
    <?php
    echo '<h4 align="center">'."Modification de l'établissement".'</h4>';
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
echo '<br>' . $this->Html->link(
        'Annuler',
        ['controller' => 'Establishments',
            'action' => 'affiche'],
        ['class' => 'button',
            'title' => 'Annuler la modification']);
echo $this->Form->end();
