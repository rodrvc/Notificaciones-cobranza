<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>

<?php echo $session ?>

<div class="flex">
    <div class="panel panel-default m-6 side" id="actions-sidebar">
        <div class="panel-heading">
            Actions
        </div>
            <ul class="list-group">
                <li class="list-group-item" ><?= $this->Html->link(__('Planilla configuraciones'), ['action' => 'index']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Usuarios'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Nuevo usuario'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Lista clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Nuevo cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Notificacion tipos'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?= $this->Html->link(__('Nueva notificacion tipo'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?></li>
            </ul>
        
    </div>
    <div class="cobranzaNotificacionConfiguraciones form frm container">
        <?= $this->Form->create($cobranzaNotificacionConfiguracione) ?>
        <fieldset>
            <legend><?= __('Añadir nueva configuracion') ?></legend>
            <?php
                echo $this->Form->control('general_user_id', ['options' => $generalUsers, 'class' => 'form-control'] );
                echo $this->Form->control('general_maestro_cliente_id', ['options' => $generalMaestroClientes]);
                echo $this->Form->control('cobranza_notificacion_tipo_id', ['options' => $cobranzaNotificacionTipos]);
                echo $this->Form->control('dias');
                echo $this->Form->control('activo');
                echo $this->Form->control('mensaje');
                echo $this->Form->control('asunto');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>