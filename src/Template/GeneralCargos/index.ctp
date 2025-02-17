<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralCargo[]|\Cake\Collection\CollectionInterface $generalCargos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Cargo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalCargos index large-9 medium-8 columns content">
    <h3><?= __('General Cargos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cargo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalCargos as $generalCargo): ?>
            <tr>
                <td><?= $this->Number->format($generalCargo->id) ?></td>
                <td><?= h($generalCargo->cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalCargo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalCargo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalCargo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalCargo->id)]) ?>
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
