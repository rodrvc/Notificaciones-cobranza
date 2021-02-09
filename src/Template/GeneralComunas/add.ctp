<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralComuna $generalComuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Comunas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalComunas form large-9 medium-8 columns content">
    <?= $this->Form->create($generalComuna) ?>
    <fieldset>
        <legend><?= __('Add General Comuna') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
