<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>
<div class=flex > 
    <div class="panel panel-default m-6 side" id="actions-sidebar">
        <div class="panel-heading">
            Actions
        </div>
        <ul class="list-group">
            <li class="list-group-item"><?= $this->Html->link(__('Edit Cobranza Notificacion Configuracione'), ['action' => 'edit', $cobranzaNotificacionConfiguracione->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Delete Cobranza Notificacion Configuracione'), ['action' => 'delete', $cobranzaNotificacionConfiguracione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguracione->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Cobranza Notificacion Configuraciones'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Cobranza Notificacion Configuracione'), ['action' => 'add']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List General Users'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New General User'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List General Maestro Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New General Maestro Cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('List Cobranza Notificacion Tipos'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('New Cobranza Notificacion Tipo'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?> </li>
        </ul>
    </div>
    <div class="cobranzaNotificacionConfiguraciones m-6 container preview">

    <h3><?= h($cobranzaNotificacionConfiguracione->asunto) ?></h3>
        <hr>
        <table class="table vertical-table">
            <tr class="col">
                <th scope="row m-6"><?= __('General User') ?></th>
                <td><?= $cobranzaNotificacionConfiguracione->has('general_user') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_user->name, ['controller' => 'GeneralUsers', 'action' => 'view', $cobranzaNotificacionConfiguracione->general_user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('General Maestro Cliente') ?></th>
                <td><?= $cobranzaNotificacionConfiguracione->has('general_maestro_cliente') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_maestro_cliente->id, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $cobranzaNotificacionConfiguracione->general_maestro_cliente->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Cobranza Notificacion Tipo') ?></th>
                <td><?= $cobranzaNotificacionConfiguracione->has('cobranza_notificacion_tipo') ? $this->Html->link($cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->id, ['controller' => 'CobranzaNotificacionTipos', 'action' => 'view', $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Asunto') ?></th>
                <td><?= h($cobranzaNotificacionConfiguracione->asunto) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Dias') ?></th>
                <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->dias) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($cobranzaNotificacionConfiguracione->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($cobranzaNotificacionConfiguracione->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Activo') ?></th>
                <td><?= $cobranzaNotificacionConfiguracione->activo ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
        <hr>
        <div class="container   mb-10 preview">
           
            
            <h3 class="mb-10 "><?= h($cobranzaNotificacionConfiguracione->asunto) ?></h3>
            <?php  echo $cobranzaNotificacionConfiguracione->mensaje; ?>
        </div>
</div>  
<div class="cobranzaNotificacionConfiguraciones m-6 container preview ">
     
</div>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>