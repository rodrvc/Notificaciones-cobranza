<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroPersona $generalMaestroPersona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Persona Tipos'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona Tipo'), ['controller' => 'GeneralMaestroPersonaTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Regiones'), ['controller' => 'GeneralRegiones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Regione'), ['controller' => 'GeneralRegiones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Provincias'), ['controller' => 'GeneralProvincias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Provincia'), ['controller' => 'GeneralProvincias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Comunas'), ['controller' => 'GeneralComunas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Comuna'), ['controller' => 'GeneralComunas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalMaestroPersonas form large-9 medium-8 columns content">
    <?= $this->Form->create($generalMaestroPersona) ?>
    <fieldset>
        <legend><?= __('Add General Maestro Persona') ?></legend>
        <?php
            echo $this->Form->control('general_persona_tipo_id', ['options' => $generalMaestroPersonaTipos]);
            echo $this->Form->control('general_regione_id', ['options' => $generalRegiones, 'empty' => true]);
            echo $this->Form->control('general_provincia_id', ['options' => $generalProvincias, 'empty' => true]);
            echo $this->Form->control('general_comuna_id', ['options' => $generalComunas, 'empty' => true]);
            echo $this->Form->control('rut');
            echo $this->Form->control('dv');
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
            echo $this->Form->control('razon_social');
            echo $this->Form->control('telefono');
            echo $this->Form->control('email');
            echo $this->Form->control('direccion');
            echo $this->Form->control('referencia');
            echo $this->Form->control('nombre_fantasia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
