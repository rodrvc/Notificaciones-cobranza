<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionTipo $cobranzaNotificacionTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cobranza Notificacion Tipo'), ['action' => 'edit', $cobranzaNotificacionTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cobranza Notificacion Tipo'), ['action' => 'delete', $cobranzaNotificacionTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cobranzaNotificacionTipos view large-9 medium-8 columns content">
    <h3><?= h($cobranzaNotificacionTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($cobranzaNotificacionTipo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cobranzaNotificacionTipo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cobranza Notificacion Configuraciones') ?></h4>
        <?php if (!empty($cobranzaNotificacionTipo->cobranza_notificacion_configuraciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General User Id') ?></th>
                <th scope="col"><?= __('General Maestro Cliente Id') ?></th>
                <th scope="col"><?= __('Cobranza Notificacion Tipo Id') ?></th>
                <th scope="col"><?= __('Dias') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col"><?= __('Mensaje') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Asunto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cobranzaNotificacionTipo->cobranza_notificacion_configuraciones as $cobranzaNotificacionConfiguraciones): ?>
            <tr>
                <td><?= h($cobranzaNotificacionConfiguraciones->id) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->general_user_id) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->general_maestro_cliente_id) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->cobranza_notificacion_tipo_id) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->dias) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->activo) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->mensaje) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->created) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->modified) ?></td>
                <td><?= h($cobranzaNotificacionConfiguraciones->asunto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'view', $cobranzaNotificacionConfiguraciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'edit', $cobranzaNotificacionConfiguraciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'delete', $cobranzaNotificacionConfiguraciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguraciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
