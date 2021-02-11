<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDte[]|\Cake\Collection\CollectionInterface $factDtes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Tipos'), ['controller' => 'FactDteTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Tipo'), ['controller' => 'FactDteTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Estados'), ['controller' => 'FactDteEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Estado'), ['controller' => 'FactDteEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Movimientos'), ['controller' => 'FactDteMovimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Movimiento'), ['controller' => 'FactDteMovimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dte Pagos'), ['controller' => 'FactDtePagos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte Pago'), ['controller' => 'FactDtePagos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factDtes index large-9 medium-8 columns content">
    <h3><?= __('Fact Dtes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_maestro_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_maestro_persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_dte_tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_dte_estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_dte_movimiento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_dte_pago_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pago') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_emision') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_vencimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saldo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descuento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_neto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_exento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_iva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_sii_comercial_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_contrato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_embarque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_llegada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais_origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incoterms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipocambio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fact_sii_mercaderia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acuse_recibo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recepcionado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contabilizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota_credito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dte_ref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isManual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factDtes as $factDte): ?>
            <tr>
                <td><?= $this->Number->format($factDte->id) ?></td>
                <td><?= $factDte->has('general_maestro_cliente') ? $this->Html->link($factDte->general_maestro_cliente->nombre, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $factDte->general_maestro_cliente->id]) : '' ?></td>
                <td><?= $factDte->has('general_maestro_persona') ? $this->Html->link($factDte->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $factDte->general_maestro_persona->id]) : '' ?></td>
                <td><?= h($factDte->folio) ?></td>
                <td><?= $factDte->has('fact_dte_tipo') ? $this->Html->link($factDte->fact_dte_tipo->id, ['controller' => 'FactDteTipos', 'action' => 'view', $factDte->fact_dte_tipo->id]) : '' ?></td>
                <td><?= $factDte->has('fact_dte_estado') ? $this->Html->link($factDte->fact_dte_estado->id, ['controller' => 'FactDteEstados', 'action' => 'view', $factDte->fact_dte_estado->id]) : '' ?></td>
                <td><?= $factDte->has('fact_dte_movimiento') ? $this->Html->link($factDte->fact_dte_movimiento->id, ['controller' => 'FactDteMovimientos', 'action' => 'view', $factDte->fact_dte_movimiento->id]) : '' ?></td>
                <td><?= $factDte->has('fact_dte_pago') ? $this->Html->link($factDte->fact_dte_pago->id, ['controller' => 'FactDtePagos', 'action' => 'view', $factDte->fact_dte_pago->id]) : '' ?></td>
                <td><?= h($factDte->fecha_pago) ?></td>
                <td><?= h($factDte->fecha_emision) ?></td>
                <td><?= h($factDte->fecha_vencimiento) ?></td>
                <td><?= $this->Number->format($factDte->abono) ?></td>
                <td><?= $this->Number->format($factDte->saldo) ?></td>
                <td><?= $this->Number->format($factDte->descuento) ?></td>
                <td><?= $this->Number->format($factDte->monto_neto) ?></td>
                <td><?= $this->Number->format($factDte->monto_exento) ?></td>
                <td><?= $this->Number->format($factDte->monto_iva) ?></td>
                <td><?= $this->Number->format($factDte->monto_total) ?></td>
                <td><?= h($factDte->referencias) ?></td>
                <td><?= h($factDte->created) ?></td>
                <td><?= $this->Number->format($factDte->fact_sii_comercial_id) ?></td>
                <td><?= h($factDte->fecha_contrato) ?></td>
                <td><?= h($factDte->fecha_embarque) ?></td>
                <td><?= h($factDte->fecha_llegada) ?></td>
                <td><?= h($factDte->pais_origen) ?></td>
                <td><?= h($factDte->incoterms) ?></td>
                <td><?= $this->Number->format($factDte->tipocambio) ?></td>
                <td><?= $this->Number->format($factDte->fact_sii_mercaderia_id) ?></td>
                <td><?= $this->Number->format($factDte->acuse_recibo) ?></td>
                <td><?= $this->Number->format($factDte->recepcionado) ?></td>
                <td><?= $this->Number->format($factDte->contabilizado) ?></td>
                <td><?= $this->Number->format($factDte->nota_credito) ?></td>
                <td><?= $factDte->has('general_user') ? $this->Html->link($factDte->general_user->name, ['controller' => 'GeneralUsers', 'action' => 'view', $factDte->general_user->id]) : '' ?></td>
                <td><?= $this->Number->format($factDte->dte_ref) ?></td>
                <td><?= $this->Number->format($factDte->isManual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $factDte->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factDte->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factDte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDte->id)]) ?>
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
