<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteTipoDetalle $factDteTipoDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fact Dte Tipo Detalle'), ['action' => 'edit', $factDteTipoDetalle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fact Dte Tipo Detalle'), ['action' => 'delete', $factDteTipoDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDteTipoDetalle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Tipo Detalles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo Detalle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factDteTipoDetalles view large-9 medium-8 columns content">
    <h3><?= h($factDteTipoDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fact Dte Tipo') ?></th>
            <td><?= $factDteTipoDetalle->has('fact_dte_tipo') ? $this->Html->link($factDteTipoDetalle->fact_dte_tipo->id, ['controller' => 'FactDteTipos', 'action' => 'view', $factDteTipoDetalle->fact_dte_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($factDteTipoDetalle->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($factDteTipoDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Sii') ?></th>
            <td><?= $this->Number->format($factDteTipoDetalle->codigo_sii) ?></td>
        </tr>
    </table>
</div>
