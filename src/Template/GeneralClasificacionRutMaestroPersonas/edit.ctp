<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralClasificacionRutMaestroPersona $generalClasificacionRutMaestroPersona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $generalClasificacionRutMaestroPersona->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $generalClasificacionRutMaestroPersona->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['action' => 'index']) ?></li>
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
<div class="generalClasificacionRutMaestroPersonas form large-9 medium-8 columns content">
    <?= $this->Form->create($generalClasificacionRutMaestroPersona) ?>
    <fieldset>
        <legend><?= __('Edit General Clasificacion Rut Maestro Persona') ?></legend>
        <?php
            echo $this->Form->control('general_maestro_persona_id', ['options' => $generalMaestroPersonas]);
            echo $this->Form->control('general_maestro_cliente_id', ['options' => $generalMaestroClientes]);
            echo $this->Form->control('general_clasificacion_rut_id', ['options' => $generalClasificacionRuts, 'empty' => true]);
            echo $this->Form->control('estado');
            echo $this->Form->control('plazo_venta');
            echo $this->Form->control('plazo_compra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
