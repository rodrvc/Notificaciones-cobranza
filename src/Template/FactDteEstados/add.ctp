<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteEstado $factDteEstado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Estados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDteEstados form large-9 medium-8 columns content">
    <?= $this->Form->create($factDteEstado) ?>
    <fieldset>
        <legend><?= __('Add Fact Dte Estado') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
