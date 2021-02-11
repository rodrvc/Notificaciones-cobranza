<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDte $factDte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fact Dte'), ['action' => 'edit', $factDte->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fact Dte'), ['action' => 'delete', $factDte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDte->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Estados'), ['controller' => 'FactDteEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Estado'), ['controller' => 'FactDteEstados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Movimientos'), ['controller' => 'FactDteMovimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Movimiento'), ['controller' => 'FactDteMovimientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Pagos'), ['controller' => 'FactDtePagos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Pago'), ['controller' => 'FactDtePagos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factDtes view large-9 medium-8 columns content">
    <h3><?= h($factDte->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('General Maestro Cliente') ?></th>
            <td><?= $factDte->has('general_maestro_cliente') ? $this->Html->link($factDte->general_maestro_cliente->nombre, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $factDte->general_maestro_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Maestro Persona') ?></th>
            <td><?= $factDte->has('general_maestro_persona') ? $this->Html->link($factDte->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $factDte->general_maestro_persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Folio') ?></th>
            <td><?= h($factDte->folio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Dte Tipo') ?></th>
            <td><?= $factDte->has('fact_dte_tipo') ? $this->Html->link($factDte->fact_dte_tipo->id, ['controller' => 'FactDteTipos', 'action' => 'view', $factDte->fact_dte_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Dte Estado') ?></th>
            <td><?= $factDte->has('fact_dte_estado') ? $this->Html->link($factDte->fact_dte_estado->id, ['controller' => 'FactDteEstados', 'action' => 'view', $factDte->fact_dte_estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Dte Movimiento') ?></th>
            <td><?= $factDte->has('fact_dte_movimiento') ? $this->Html->link($factDte->fact_dte_movimiento->id, ['controller' => 'FactDteMovimientos', 'action' => 'view', $factDte->fact_dte_movimiento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Dte Pago') ?></th>
            <td><?= $factDte->has('fact_dte_pago') ? $this->Html->link($factDte->fact_dte_pago->id, ['controller' => 'FactDtePagos', 'action' => 'view', $factDte->fact_dte_pago->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencias') ?></th>
            <td><?= h($factDte->referencias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais Origen') ?></th>
            <td><?= h($factDte->pais_origen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Incoterms') ?></th>
            <td><?= h($factDte->incoterms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General User') ?></th>
            <td><?= $factDte->has('general_user') ? $this->Html->link($factDte->general_user->name, ['controller' => 'GeneralUsers', 'action' => 'view', $factDte->general_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($factDte->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abono') ?></th>
            <td><?= $this->Number->format($factDte->abono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo') ?></th>
            <td><?= $this->Number->format($factDte->saldo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descuento') ?></th>
            <td><?= $this->Number->format($factDte->descuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Neto') ?></th>
            <td><?= $this->Number->format($factDte->monto_neto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Exento') ?></th>
            <td><?= $this->Number->format($factDte->monto_exento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Iva') ?></th>
            <td><?= $this->Number->format($factDte->monto_iva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto Total') ?></th>
            <td><?= $this->Number->format($factDte->monto_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Sii Comercial Id') ?></th>
            <td><?= $this->Number->format($factDte->fact_sii_comercial_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipocambio') ?></th>
            <td><?= $this->Number->format($factDte->tipocambio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fact Sii Mercaderia Id') ?></th>
            <td><?= $this->Number->format($factDte->fact_sii_mercaderia_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acuse Recibo') ?></th>
            <td><?= $this->Number->format($factDte->acuse_recibo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recepcionado') ?></th>
            <td><?= $this->Number->format($factDte->recepcionado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contabilizado') ?></th>
            <td><?= $this->Number->format($factDte->contabilizado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota Credito') ?></th>
            <td><?= $this->Number->format($factDte->nota_credito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dte Ref') ?></th>
            <td><?= $this->Number->format($factDte->dte_ref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsManual') ?></th>
            <td><?= $this->Number->format($factDte->isManual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Pago') ?></th>
            <td><?= h($factDte->fecha_pago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Emision') ?></th>
            <td><?= h($factDte->fecha_emision) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Vencimiento') ?></th>
            <td><?= h($factDte->fecha_vencimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($factDte->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Contrato') ?></th>
            <td><?= h($factDte->fecha_contrato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Embarque') ?></th>
            <td><?= h($factDte->fecha_embarque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Llegada') ?></th>
            <td><?= h($factDte->fecha_llegada) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($factDte->observacion)); ?>
    </div>
</div>
