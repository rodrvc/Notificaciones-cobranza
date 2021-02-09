<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralClasificacionRutMaestroPersona[]|\Cake\Collection\CollectionInterface $generalClasificacionRutMaestroPersonas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Ruts'), ['controller' => 'GeneralClasificacionRuts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut'), ['controller' => 'GeneralClasificacionRuts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medio Pago Ventas'), ['controller' => 'MedioPagoVentas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medio Pago Venta'), ['controller' => 'MedioPagoVentas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medio Pago Compras'), ['controller' => 'MedioPagoCompras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medio Pago Compra'), ['controller' => 'MedioPagoCompras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalClasificacionRutMaestroPersonas index large-9 medium-8 columns content">
    <h3><?= __('General Clasificacion Rut Maestro Personas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_maestro_persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_maestro_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_clasificacion_rut_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plazo_venta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plazo_compra') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalClasificacionRutMaestroPersonas as $generalClasificacionRutMaestroPersona): ?>
            <tr>
                <td><?= $this->Number->format($generalClasificacionRutMaestroPersona->id) ?></td>
                <td><?= $generalClasificacionRutMaestroPersona->has('general_maestro_persona') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_maestro_persona->id]) : '' ?></td>
                <td><?= $generalClasificacionRutMaestroPersona->has('general_maestro_cliente') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_maestro_cliente->id, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_maestro_cliente->id]) : '' ?></td>
                <td><?= $generalClasificacionRutMaestroPersona->has('general_clasificacion_rut') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_clasificacion_rut->id, ['controller' => 'GeneralClasificacionRuts', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_clasificacion_rut->id]) : '' ?></td>
                <td><?= $this->Number->format($generalClasificacionRutMaestroPersona->estado) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersona->plazo_venta) ?></td>
                <td><?= h($generalClasificacionRutMaestroPersona->plazo_compra) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalClasificacionRutMaestroPersona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalClasificacionRutMaestroPersona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalClasificacionRutMaestroPersona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRutMaestroPersona->id)]) ?>
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
