<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaEstado[]|\Cake\Collection\CollectionInterface $cobranzaEstados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cobranza Estado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobranzaEstados index large-9 medium-8 columns content">
    <h3><?= __('Cobranza Estados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cobranzaEstados as $cobranzaEstado): ?>
            <tr>
                <td><?= $this->Number->format($cobranzaEstado->id) ?></td>
                <td><?= h($cobranzaEstado->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cobranzaEstado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cobranzaEstado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cobranzaEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaEstado->id)]) ?>
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
