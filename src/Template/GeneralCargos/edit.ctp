<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralCargo $generalCargo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $generalCargo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $generalCargo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List General Cargos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalCargos form large-9 medium-8 columns content">
    <?= $this->Form->create($generalCargo) ?>
    <fieldset>
        <legend><?= __('Edit General Cargo') ?></legend>
        <?php
            echo $this->Form->control('cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
