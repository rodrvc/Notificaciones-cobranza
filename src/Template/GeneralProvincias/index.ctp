<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralProvincia[]|\Cake\Collection\CollectionInterface $generalProvincias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Provincia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalProvincias index large-9 medium-8 columns content">
    <h3><?= __('General Provincias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalProvincias as $generalProvincia): ?>
            <tr>
                <td><?= $this->Number->format($generalProvincia->id) ?></td>
                <td><?= h($generalProvincia->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalProvincia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalProvincia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalProvincia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalProvincia->id)]) ?>
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
