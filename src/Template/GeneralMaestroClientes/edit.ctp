<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralMaestroCliente $generalMaestroCliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $generalMaestroCliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $generalMaestroCliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List General Maestro Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List General Maestro Personas'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Maestro Persona'), ['controller' => 'GeneralMaestroPersonas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['controller' => 'CobranzaNotificacionConfiguraciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fact Dtes'), ['controller' => 'FactDtes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fact Dte'), ['controller' => 'FactDtes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Clasificacion Rut Maestro Personas'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Clasificacion Rut Maestro Persona'), ['controller' => 'GeneralClasificacionRutMaestroPersonas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalMaestroClientes form large-9 medium-8 columns content">
    <?= $this->Form->create($generalMaestroCliente) ?>
    <fieldset>
        <legend><?= __('Edit General Maestro Cliente') ?></legend>
        <?php
            echo $this->Form->control('general_maestro_persona_id', ['options' => $generalMaestroPersonas, 'empty' => true]);
            echo $this->Form->control('nombre');
            echo $this->Form->control('logo');
            echo $this->Form->control('actividad_economica');
            echo $this->Form->control('octava_username');
            echo $this->Form->control('octava_password');
            echo $this->Form->control('octava_apipass');
            echo $this->Form->control('prefijo_oc');
            echo $this->Form->control('activa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
