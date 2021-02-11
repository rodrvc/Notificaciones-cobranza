<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cobranza Notificacion Configuracione'), ['action' => 'edit', $cobranzaNotificacionConfiguracione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cobranza Notificacion Configuracione'), ['action' => 'delete', $cobranzaNotificacionConfiguracione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguracione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Tipos'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Tipo'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cobranzaNotificacionConfiguraciones view large-9 medium-8 columns content">
    <h3><?= h($cobranzaNotificacionConfiguracione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('General User') ?></th>
            <td><?= $cobranzaNotificacionConfiguracione->has('general_user') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_user->name, ['controller' => 'GeneralUsers', 'action' => 'view', $cobranzaNotificacionConfiguracione->general_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Maestro Cliente') ?></th>
            <td><?= $cobranzaNotificacionConfiguracione->has('general_maestro_cliente') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_maestro_cliente->id, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $cobranzaNotificacionConfiguracione->general_maestro_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cobranza Notificacion Tipo') ?></th>
            <td><?= $cobranzaNotificacionConfiguracione->has('cobranza_notificacion_tipo') ? $this->Html->link($cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->id, ['controller' => 'CobranzaNotificacionTipos', 'action' => 'view', $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Asunto') ?></th>
            <td><?= h($cobranzaNotificacionConfiguracione->asunto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias') ?></th>
            <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->dias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cobranzaNotificacionConfiguracione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cobranzaNotificacionConfiguracione->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $cobranzaNotificacionConfiguracione->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Mensaje') ?></h4>
        <?= $this->Text->autoParagraph(h($cobranzaNotificacionConfiguracione->mensaje)); ?>
    </div>
</div>
