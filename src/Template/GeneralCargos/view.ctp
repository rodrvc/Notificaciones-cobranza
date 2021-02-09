<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralCargo $generalCargo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Cargo'), ['action' => 'edit', $generalCargo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Cargo'), ['action' => 'delete', $generalCargo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalCargo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Cargos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Cargo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalCargos view large-9 medium-8 columns content">
    <h3><?= h($generalCargo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($generalCargo->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalCargo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related General Users') ?></h4>
        <?php if (!empty($generalCargo->general_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Administrador') ?></th>
                <th scope="col"><?= __('General Cargo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalCargo->general_users as $generalUsers): ?>
            <tr>
                <td><?= h($generalUsers->id) ?></td>
                <td><?= h($generalUsers->username) ?></td>
                <td><?= h($generalUsers->name) ?></td>
                <td><?= h($generalUsers->last_name) ?></td>
                <td><?= h($generalUsers->email) ?></td>
                <td><?= h($generalUsers->password) ?></td>
                <td><?= h($generalUsers->telefono) ?></td>
                <td><?= h($generalUsers->created) ?></td>
                <td><?= h($generalUsers->modified) ?></td>
                <td><?= h($generalUsers->status) ?></td>
                <td><?= h($generalUsers->administrador) ?></td>
                <td><?= h($generalUsers->general_cargo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralUsers', 'action' => 'view', $generalUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralUsers', 'action' => 'edit', $generalUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralUsers', 'action' => 'delete', $generalUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
