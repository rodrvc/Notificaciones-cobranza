<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteTipo $factDteTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factDteTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factDteTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDteTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($factDteTipo) ?>
    <fieldset>
        <legend><?= __('Edit Fact Dte Tipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('codigo_SII');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
