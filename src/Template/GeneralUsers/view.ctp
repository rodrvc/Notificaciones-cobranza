<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralUser $generalUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General User'), ['action' => 'edit', $generalUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General User'), ['action' => 'delete', $generalUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Cargos'), ['controller' => 'GeneralCargos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Cargo'), ['controller' => 'GeneralCargos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalUsers view large-9 medium-8 columns content">
    <h3><?= h($generalUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($generalUser->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($generalUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($generalUser->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($generalUser->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($generalUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($generalUser->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Cargo') ?></th>
            <td><?= $generalUser->has('general_cargo') ? $this->Html->link($generalUser->general_cargo->id, ['controller' => 'GeneralCargos', 'action' => 'view', $generalUser->general_cargo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($generalUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($generalUser->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $generalUser->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrador') ?></th>
            <td><?= $generalUser->administrador ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cobranza Notificacion Configuraciones') ?></h4>
        <?php if (!empty($generalUser->cobranza_notificacion_configuraciones)): ?>
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
            <?php foreach ($generalUser->cobranza_notificacion_configuraciones as $cobranzaNotificacionConfiguraciones): ?>
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
    <div class="related">
        <h4><?= __('Related Fact Dtes') ?></h4>
        <?php if (!empty($generalUser->fact_dtes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General Maestro Cliente Id') ?></th>
                <th scope="col"><?= __('General Maestro Persona Id') ?></th>
                <th scope="col"><?= __('Folio') ?></th>
                <th scope="col"><?= __('Fact Dte Tipo Id') ?></th>
                <th scope="col"><?= __('Fact Dte Estado Id') ?></th>
                <th scope="col"><?= __('Fact Dte Movimiento Id') ?></th>
                <th scope="col"><?= __('Fact Dte Pago Id') ?></th>
                <th scope="col"><?= __('Fecha Pago') ?></th>
                <th scope="col"><?= __('Fecha Emision') ?></th>
                <th scope="col"><?= __('Fecha Vencimiento') ?></th>
                <th scope="col"><?= __('Abono') ?></th>
                <th scope="col"><?= __('Saldo') ?></th>
                <th scope="col"><?= __('Descuento') ?></th>
                <th scope="col"><?= __('Monto Neto') ?></th>
                <th scope="col"><?= __('Monto Exento') ?></th>
                <th scope="col"><?= __('Monto Iva') ?></th>
                <th scope="col"><?= __('Monto Total') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col"><?= __('Referencias') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Fact Sii Comercial Id') ?></th>
                <th scope="col"><?= __('Fecha Contrato') ?></th>
                <th scope="col"><?= __('Fecha Embarque') ?></th>
                <th scope="col"><?= __('Fecha Llegada') ?></th>
                <th scope="col"><?= __('Pais Origen') ?></th>
                <th scope="col"><?= __('Incoterms') ?></th>
                <th scope="col"><?= __('Tipocambio') ?></th>
                <th scope="col"><?= __('Fact Sii Mercaderia Id') ?></th>
                <th scope="col"><?= __('Acuse Recibo') ?></th>
                <th scope="col"><?= __('Recepcionado') ?></th>
                <th scope="col"><?= __('Contabilizado') ?></th>
                <th scope="col"><?= __('Nota Credito') ?></th>
                <th scope="col"><?= __('General User Id') ?></th>
                <th scope="col"><?= __('Dte Ref') ?></th>
                <th scope="col"><?= __('IsManual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalUser->fact_dtes as $factDtes): ?>
            <tr>
                <td><?= h($factDtes->id) ?></td>
                <td><?= h($factDtes->general_maestro_cliente_id) ?></td>
                <td><?= h($factDtes->general_maestro_persona_id) ?></td>
                <td><?= h($factDtes->folio) ?></td>
                <td><?= h($factDtes->fact_dte_tipo_id) ?></td>
                <td><?= h($factDtes->fact_dte_estado_id) ?></td>
                <td><?= h($factDtes->fact_dte_movimiento_id) ?></td>
                <td><?= h($factDtes->fact_dte_pago_id) ?></td>
                <td><?= h($factDtes->fecha_pago) ?></td>
                <td><?= h($factDtes->fecha_emision) ?></td>
                <td><?= h($factDtes->fecha_vencimiento) ?></td>
                <td><?= h($factDtes->abono) ?></td>
                <td><?= h($factDtes->saldo) ?></td>
                <td><?= h($factDtes->descuento) ?></td>
                <td><?= h($factDtes->monto_neto) ?></td>
                <td><?= h($factDtes->monto_exento) ?></td>
                <td><?= h($factDtes->monto_iva) ?></td>
                <td><?= h($factDtes->monto_total) ?></td>
                <td><?= h($factDtes->observacion) ?></td>
                <td><?= h($factDtes->referencias) ?></td>
                <td><?= h($factDtes->created) ?></td>
                <td><?= h($factDtes->fact_sii_comercial_id) ?></td>
                <td><?= h($factDtes->fecha_contrato) ?></td>
                <td><?= h($factDtes->fecha_embarque) ?></td>
                <td><?= h($factDtes->fecha_llegada) ?></td>
                <td><?= h($factDtes->pais_origen) ?></td>
                <td><?= h($factDtes->incoterms) ?></td>
                <td><?= h($factDtes->tipocambio) ?></td>
                <td><?= h($factDtes->fact_sii_mercaderia_id) ?></td>
                <td><?= h($factDtes->acuse_recibo) ?></td>
                <td><?= h($factDtes->recepcionado) ?></td>
                <td><?= h($factDtes->contabilizado) ?></td>
                <td><?= h($factDtes->nota_credito) ?></td>
                <td><?= h($factDtes->general_user_id) ?></td>
                <td><?= h($factDtes->dte_ref) ?></td>
                <td><?= h($factDtes->isManual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FactDtes', 'action' => 'view', $factDtes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FactDtes', 'action' => 'edit', $factDtes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FactDtes', 'action' => 'delete', $factDtes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDtes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
