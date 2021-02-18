<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione[]|\Cake\Collection\CollectionInterface $cobranzaNotificacionConfiguraciones
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>


<div class="flex" >
    <div class="panel panel-default m-6 side" id="actions-sidebar">
    <!-- Default panel contents -->
        <div class="panel-heading">Actions</div>
        <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Crear Plantilla'), ['action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Lista de plantilla'), ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('nuevo usuario general'), ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Clientes'), ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Nuevo cliente'), ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Tipos de notificaciones'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Nueva notificacion tipo'), ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?></li>
            </ul>
    </div>
    <div class="container  col-md-8 col-md-offset-1">
        <h3><?= __('Cobranza Notificacion Configuraciones') ?></h3>
        <table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('usuario') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('cliente') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('dias') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('asunto') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                 </tr>
            </thead>
            <tbody>
            <?php foreach ($cobranzaNotificacionConfiguraciones as $cobranzaNotificacionConfiguracione): ?>
                
                <tr>
                    <!-- <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->id) ?></td> -->
                    <!-- <td><?= $cobranzaNotificacionConfiguracione->has('general_user') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_user->name, ['controller' => 'GeneralUsers', 'action' => 'view', $cobranzaNotificacionConfiguracione-> general_user->id]) : '' ?></td> -->
                    <td><?= $cobranzaNotificacionConfiguracione->has('general_maestro_cliente') ? $this->Html->link($cobranzaNotificacionConfiguracione->general_maestro_cliente->nombre, ['controller' => 'GeneralMaestroClientes', 'action' => 'view', $cobranzaNotificacionConfiguracione-> general_maestro_cliente->logo ]) : '' ?></td>
                    <td><?= $cobranzaNotificacionConfiguracione->has('cobranza_notificacion_tipo') ? $this->Html->link($cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->nombre, ['controller' => 'CobranzaNotificacionTipos', 'action' => 'view', $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo->nombre]) : '' ?></td>
                    <td><?= $this->Number->format($cobranzaNotificacionConfiguracione->dias) ?></td>
                    <td><?= h($cobranzaNotificacionConfiguracione->activo) ?></td>
                    <!-- <td><?= h($cobranzaNotificacionConfiguracione->created) ?></td> -->
                    <td><?= h($cobranzaNotificacionConfiguracione->modified) ?></td>
                    <td><?= h($cobranzaNotificacionConfiguracione->asunto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cobranzaNotificacionConfiguracione->id ], ['class' => 'btn btn-default ']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cobranzaNotificacionConfiguracione->id] , ['class' => 'btn btn-default ']) ?>
                        <?= $this->Form->postLink(__('Delete') , ['action' => 'delete', $cobranzaNotificacionConfiguracione->id ], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguracione->id), 'class' => 'btn btn-danger'] )?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id='jqxWidget'>
            <div id="jqxgrid"></div>
        </div>
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
</div>

<script>
             <?php echo ' var url = '.$jsonCobranzas.'' ?>
</script> 
<?php echo $this->Html->script('grid'); ?> 






<!-- MODAL -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal8">
  Launch demo modal
</button>

<!-- Modal -->
<?php foreach ($cobranzaNotificacionConfiguraciones as $cobranzaNotificacionConfiguracione): ?>
<div class="modal fade" id="<?= "myModal".$cobranzaNotificacionConfiguracione->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
<?php endforeach; ?>











<!-- ANOTHER MODAL -->
<?php echo $this->Html->link('Lista', '#list', array(
                            'data-toggle' => 'modal',
                            'class' => 'btn btn-danger'
                        )); ?>


<


<div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                 <h4 class="modal-title" id="myModalLabel">Título da modal</h4>
             </div>
             <div class="modal-body">
                         Conteúdo da Modal           
             </div>
         </div>
     </div>
</div>
