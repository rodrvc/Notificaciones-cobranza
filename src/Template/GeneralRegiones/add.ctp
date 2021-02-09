<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralRegione $generalRegione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Regiones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalRegiones form large-9 medium-8 columns content">
    <?= $this->Form->create($generalRegione) ?>
    <fieldset>
        <legend><?= __('Add General Regione') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
