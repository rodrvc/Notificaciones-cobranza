<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralClasificacionRut[]|\Cake\Collection\CollectionInterface $generalClasificacionRuts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalClasificacionRuts index large-9 medium-8 columns content">
    <h3><?= __('General Clasificacion Ruts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalClasificacionRuts as $generalClasificacionRut): ?>
            <tr>
                <td><?= $this->Number->format($generalClasificacionRut->id) ?></td>
                <td><?= h($generalClasificacionRut->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalClasificacionRut->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalClasificacionRut->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalClasificacionRut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRut->id)]) ?>
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
