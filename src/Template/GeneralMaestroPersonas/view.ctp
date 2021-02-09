<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersona $generalMaestroPersona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Maestro Persona'), ['action' => 'edit', $generalMaestroPersona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Maestro Persona'), ['action' => 'delete', $generalMaestroPersona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroPersona->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Persona Tipos'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona Tipo'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Regiones'), ['controller' => 'GeneralRegiones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Regione'), ['controller' => 'GeneralRegiones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Provincias'), ['controller' => 'GeneralProvincias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Provincia'), ['controller' => 'GeneralProvincias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Comunas'), ['controller' => 'GeneralComunas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Comuna'), ['controller' => 'GeneralComunas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalMaestroPersonas view large-9 medium-8 columns content">
    <h3><?= h($generalMaestroPersona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('General Maestro Persona Tipo') ?></th>
            <td><?= $generalMaestroPersona->has('general_maestro_persona_tipo') ? $this->Html->link($generalMaestroPersona->general_maestro_persona_tipo->id, ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'view', $generalMaestroPersona->general_maestro_persona_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Regione') ?></th>
            <td><?= $generalMaestroPersona->has('general_regione') ? $this->Html->link($generalMaestroPersona->general_regione->id, ['controller' => 'GeneralRegiones', 'action' => 'view', $generalMaestroPersona->general_regione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Provincia') ?></th>
            <td><?= $generalMaestroPersona->has('general_provincia') ? $this->Html->link($generalMaestroPersona->general_provincia->id, ['controller' => 'GeneralProvincias', 'action' => 'view', $generalMaestroPersona->general_provincia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Comuna') ?></th>
            <td><?= $generalMaestroPersona->has('general_comuna') ? $this->Html->link($generalMaestroPersona->general_comuna->id, ['controller' => 'GeneralComunas', 'action' => 'view', $generalMaestroPersona->general_comuna->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rut') ?></th>
            <td><?= h($generalMaestroPersona->rut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dv') ?></th>
            <td><?= h($generalMaestroPersona->dv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($generalMaestroPersona->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Paterno') ?></th>
            <td><?= h($generalMaestroPersona->apellido_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Materno') ?></th>
            <td><?= h($generalMaestroPersona->apellido_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razon Social') ?></th>
            <td><?= h($generalMaestroPersona->razon_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($generalMaestroPersona->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($generalMaestroPersona->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($generalMaestroPersona->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Fantasia') ?></th>
            <td><?= h($generalMaestroPersona->nombre_fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalMaestroPersona->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($generalMaestroPersona->direccion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fact Dtes') ?></h4>
        <?php if (!empty($generalMaestroPersona->fact_dtes)): ?>
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
            <?php foreach ($generalMaestroPersona->fact_dtes as $factDtes): ?>
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
        <?php if (!empty($generalMaestroPersona->general_clasificacion_rut_maestro_personas)): ?>
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
            <?php foreach ($generalMaestroPersona->general_clasificacion_rut_maestro_personas as $generalClasificacionRutMaestroPersonas): ?>
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
    <div class="related">
        <h4><?= __('Related General Maestro Clientes') ?></h4>
        <?php if (!empty($generalMaestroPersona->general_maestro_clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('General Maestro Persona Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Actividad Economica') ?></th>
                <th scope="col"><?= __('Octava Username') ?></th>
                <th scope="col"><?= __('Octava Password') ?></th>
                <th scope="col"><?= __('Octava Apipass') ?></th>
                <th scope="col"><?= __('Prefijo Oc') ?></th>
                <th scope="col"><?= __('Activa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generalMaestroPersona->general_maestro_clientes as $generalMaestroClientes): ?>
            <tr>
                <td><?= h($generalMaestroClientes->id) ?></td>
                <td><?= h($generalMaestroClientes->general_maestro_persona_id) ?></td>
                <td><?= h($generalMaestroClientes->nombre) ?></td>
                <td><?= h($generalMaestroClientes->logo) ?></td>
                <td><?= h($generalMaestroClientes->actividad_economica) ?></td>
                <td><?= h($generalMaestroClientes->octava_username) ?></td>
                <td><?= h($generalMaestroClientes->octava_password) ?></td>
                <td><?= h($generalMaestroClientes->octava_apipass) ?></td>
                <td><?= h($generalMaestroClientes->prefijo_oc) ?></td>
                <td><?= h($generalMaestroClientes->activa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $generalMaestroClientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralMaestroClientes', 'action' => 'edit', $generalMaestroClientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralMaestroClientes', 'action' => 'delete', $generalMaestroClientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroClientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
