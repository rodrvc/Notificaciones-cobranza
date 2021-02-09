<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteTipoDetalle $factDteTipoDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipo Detalles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDteTipoDetalles form large-9 medium-8 columns content">
    <?= $this->Form->create($factDteTipoDetalle) ?>
    <fieldset>
        <legend><?= __('Add Fact Dte Tipo Detalle') ?></legend>
        <?php
            echo $this->Form->control('fact_dte_tipo_id', ['options' => $factDteTipos, 'empty' => true]);
            echo $this->Form->control('nombre');
            echo $this->Form->control('codigo_sii');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
