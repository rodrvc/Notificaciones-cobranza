<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteTipoDetalle[]|\Cake\Collection\CollectionInterface $factDteTipoDetalles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo Detalle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDteTipoDetalles index large-9 medium-8 columns content">
    <h3><?= __('Fact Dte Tipo Detalles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_dte_tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_sii') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factDteTipoDetalles as $factDteTipoDetalle): ?>
            <tr>
                <td><?= $this->Number->format($factDteTipoDetalle->id) ?></td>
                <td><?= $factDteTipoDetalle->has('fact_dte_tipo') ? $this->Html->link($factDteTipoDetalle->fact_dte_tipo->id, ['controller' => 'FactDteTipos', 'action' => 'view', $factDteTipoDetalle->fact_dte_tipo->id]) : '' ?></td>
                <td><?= h($factDteTipoDetalle->nombre) ?></td>
                <td><?= $this->Number->format($factDteTipoDetalle->codigo_sii) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $factDteTipoDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factDteTipoDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factDteTipoDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDteTipoDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
