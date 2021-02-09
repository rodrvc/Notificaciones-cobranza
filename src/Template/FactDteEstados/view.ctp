<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FactDteEstado $factDteEstado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fact Dte Estado'), ['action' => 'edit', $factDteEstado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fact Dte Estado'), ['action' => 'delete', $factDteEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factDteEstado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dte Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte Estado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="factDteEstados view large-9 medium-8 columns content">
    <h3><?= h($factDteEstado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($factDteEstado->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($factDteEstado->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fact Dtes') ?></h4>
        <?php if (!empty($factDteEstado->fact_dtes)): ?>
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
            <?php foreach ($factDteEstado->fact_dtes as $factDtes): ?>
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
