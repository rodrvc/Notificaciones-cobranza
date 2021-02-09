<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroCliente $generalMaestroCliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Maestro Cliente'), ['action' => 'edit', $generalMaestroCliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Maestro Cliente'), ['action' => 'delete', $generalMaestroCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroCliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalMaestroClientes view large-9 medium-8 columns content">
    <h3><?= h($generalMaestroCliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('General Maestro Persona') ?></th>
            <td><?= $generalMaestroCliente->has('general_maestro_persona') ? $this->Html->link($generalMaestroCliente->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $generalMaestroCliente->general_maestro_persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($generalMaestroCliente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($generalMaestroCliente->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actividad Economica') ?></th>
            <td><?= h($generalMaestroCliente->actividad_economica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Octava Username') ?></th>
            <td><?= h($generalMaestroCliente->octava_username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Octava Password') ?></th>
            <td><?= h($generalMaestroCliente->octava_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Octava Apipass') ?></th>
            <td><?= h($generalMaestroCliente->octava_apipass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefijo Oc') ?></th>
            <td><?= h($generalMaestroCliente->prefijo_oc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalMaestroCliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activa') ?></th>
            <td><?= $generalMaestroCliente->activa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cobranza Notificacion Configuraciones') ?></h4>
        <?php if (!empty($generalMaestroCliente->cobranza_notificacion_configuraciones)): ?>
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
            <?php foreach ($generalMaestroCliente->cobranza_notificacion_configuraciones as $cobranzaNotificacionConfiguraciones): ?>
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
        <?php if (!empty($generalMaestroCliente->fact_dtes)): ?>
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
            <?php foreach ($generalMaestroCliente->fact_dtes as $factDtes): ?>
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
    <div class="related">
        <h4><?= __('Related General Clasificacion Rut Maestro Personas') ?></h4>
        <?php if (!empty($generalMaestroCliente->general_clasificacion_rut_maestro_personas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General Maestro Persona Id') ?></th>
                <th scope="col"><?= __('General Maestro Cliente Id') ?></th>
                <th scope="col"><?= __('General Clasificacion Rut Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Plazo Venta') ?></th>
                <th scope="col"><?= __('Plazo Compra') ?></th>
                <th scope="col"><?= __('Medio Pago Venta Id') ?></th>
                <th scope="col"><?= __('Medio Pago Compra Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalMaestroCliente->general_clasificacion_rut_maestro_personas as $generalClasificacionRutMaestroPersonas): ?>
            <tr>
                <td><?= h($generalClasificacionRutMaestroPersonas->id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_maestro_persona_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_maestro_cliente_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->general_clasificacion_rut_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->estado) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->plazo_venta) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->plazo_compra) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->medio_pago_venta_id) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersonas->medio_pago_compra_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'view', $generalClasificacionRutMaestroPersonas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'edit', $generalClasificacionRutMaestroPersonas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'delete', $generalClasificacionRutMaestroPersonas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRutMaestroPersonas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
