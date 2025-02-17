<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteMovimiento[]|\Cake\Collection\CollectionInterface $factDteMovimientos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Movimiento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDteMovimientos index large-9 medium-8 columns content">
    <h3><?= __('Fact Dte Movimientos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movimiento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factDteMovimientos as $factDteMovimiento): ?>
            <tr>
                <td><?= $this->Number->format($factDteMovimiento->id) ?></td>
                <td><?= h($factDteMovimiento->movimiento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $factDteMovimiento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factDteMovimiento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factDteMovimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDteMovimiento->id)]) ?>
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
