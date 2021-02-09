<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralUser[]|\Cake\Collection\CollectionInterface $generalUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Cargos'), ['controller' => 'GeneralCargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Cargo'), ['controller' => 'GeneralCargos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalUsers index large-9 medium-8 columns content">
    <h3><?= __('General Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_cargo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalUsers as $generalUser): ?>
            <tr>
                <td><?= $this->Number->format($generalUser->id) ?></td>
                <td><?= h($generalUser->username) ?></td>
                <td><?= h($generalUser->name) ?></td>
                <td><?= h($generalUser->last_name) ?></td>
                <td><?= h($generalUser->email) ?></td>
                <td><?= h($generalUser->password) ?></td>
                <td><?= h($generalUser->telefono) ?></td>
                <td><?= h($generalUser->created) ?></td>
                <td><?= h($generalUser->modified) ?></td>
                <td><?= h($generalUser->status) ?></td>
                <td><?= h($generalUser->administrador) ?></td>
                <td><?= $generalUser->has('general_cargo') ? $this->Html->link($generalUser->general_cargo->id, ['controller' => 'GeneralCargos', 'action' => 'view', $generalUser->general_cargo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalUser->id)]) ?>
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
