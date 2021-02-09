<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersonaTipo[]|\Cake\Collection\CollectionInterface $generalMaestroPersonaTipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona Tipo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalMaestroPersonaTipos index large-9 medium-8 columns content">
    <h3><?= __('General Maestro Persona Tipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalMaestroPersonaTipos as $generalMaestroPersonaTipo): ?>
            <tr>
                <td><?= $this->Number->format($generalMaestroPersonaTipo->id) ?></td>
                <td><?= h($generalMaestroPersonaTipo->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalMaestroPersonaTipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalMaestroPersonaTipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalMaestroPersonaTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroPersonaTipo->id)]) ?>
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
