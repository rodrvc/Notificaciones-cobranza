<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralClasificacionRutMaestroPersona $generalClasificacionRutMaestroPersona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General Clasificacion Rut Maestro Persona'), ['action' => 'edit', $generalClasificacionRutMaestroPersona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General Clasificacion Rut Maestro Persona'), ['action' => 'delete', $generalClasificacionRutMaestroPersona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRutMaestroPersona->id)]) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Clasificacion Ruts'), ['controller' => 'GeneralClasificacionRuts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut'), ['controller' => 'GeneralClasificacionRuts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medio Pago Ventas'), ['controller' => 'MedioPagoVentas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medio Pago Venta'), ['controller' => 'MedioPagoVentas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medio Pago Compras'), ['controller' => 'MedioPagoCompras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medio Pago Compra'), ['controller' => 'MedioPagoCompras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generalClasificacionRutMaestroPersonas view large-9 medium-8 columns content">
    <h3><?= h($generalClasificacionRutMaestroPersona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('General Maestro Persona') ?></th>
            <td><?= $generalClasificacionRutMaestroPersona->has('general_maestro_persona') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_maestro_persona->id, ['controller' => 'GeneralMaestroPersonas', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_maestro_persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Maestro Cliente') ?></th>
            <td><?= $generalClasificacionRutMaestroPersona->has('general_maestro_cliente') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_maestro_cliente->id, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_maestro_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Clasificacion Rut') ?></th>
            <td><?= $generalClasificacionRutMaestroPersona->has('general_clasificacion_rut') ? $this->Html->link($generalClasificacionRutMaestroPersona->general_clasificacion_rut->id, ['controller' => 'GeneralClasificacionRuts', 'action' => 'view', $generalClasificacionRutMaestroPersona->general_clasificacion_rut->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plazo Venta') ?></th>
            <td><?= h($generalClasificacionRutMaestroPersona->plazo_venta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plazo Compra') ?></th>
            <td><?= h($generalClasificacionRutMaestroPersona->plazo_compra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($generalClasificacionRutMaestroPersona->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($generalClasificacionRutMaestroPersona->estado) ?></td>
        </tr>
    </table>
</div>
