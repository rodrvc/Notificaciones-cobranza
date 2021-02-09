<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDtePago[]|\Cake\Collection\CollectionInterface $factDtePagos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Pago'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDtePagos index large-9 medium-8 columns content">
    <h3><?= __('Fact Dte Pagos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factDtePagos as $factDtePago): ?>
            <tr>
                <td><?= $this->Number->format($factDtePago->id) ?></td>
                <td><?= h($factDtePago->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $factDtePago->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factDtePago->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factDtePago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDtePago->id)]) ?>
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
