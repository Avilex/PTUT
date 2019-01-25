<p style="text-align: center;">
    <?php
    echo '<br>' . "Ajouter d'un établissement";
    ?>
</p>

<?php
//formulaire création établissements
echo $this->Form->create($etablissement);
echo $this->Form->control('nom', ['label' => 'Nom de l\'établissement']);
echo $this->Form->control('adresse');
echo $this->Form->control('codePostal');
echo $this->Form->control('ville');
echo $this->Form->control('nomDirecteur');
echo $this->Form->control('tel', ['label' => 'Téléphone (Format 0X.XX.XX.XX.XX)', 'type' => 'tel']);
echo $this->Form->button('Ajouter');
echo ' ' . $this->Html->link('Retour', ['action' => 'affiche'], ['class' => 'button']);
echo $this->Form->end();
