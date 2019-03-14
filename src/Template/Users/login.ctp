<h1>Bienvenue sur ALOAS</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('mail', ['label'=>'Adresse mail']) ?>
<?= $this->Form->control('password', ['label'=>'Mot de passe']) ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>

