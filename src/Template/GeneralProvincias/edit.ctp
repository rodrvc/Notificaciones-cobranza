<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralProvincia $generalProvincia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $generalProvincia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $generalProvincia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List General Provincias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalProvincias form large-9 medium-8 columns content">
    <?= $this->Form->create($generalProvincia) ?>
    <fieldset>
        <legend><?= __('Edit General Provincia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
