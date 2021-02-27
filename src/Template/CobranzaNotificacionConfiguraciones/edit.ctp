<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>
<?php echo $this
    ->Html
    ->script('ckeditor/ckeditor'); ?> 
<div class="flex">
    <div class="panel panel-default m-6 side" id="actions-sidebar">
            <div class="panel-heading">
                Actions
            </div>
            <ul class="list-group" >
                <!-- <li class="heading"><?=__('Actions') ?></li> -->
                <li class="list-group-item" ><?=$this
    ->Form
    ->postLink(__('Delete') , ['action' => 'delete', $cobranzaNotificacionConfiguracione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranzaNotificacionConfiguracione->id) ])
?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('List Cobranza Notificacion Configuraciones') , ['action' => 'index']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('List General Users') , ['controller' => 'GeneralUsers', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('New General User') , ['controller' => 'GeneralUsers', 'action' => 'add']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('List General Maestro Clientes') , ['controller' => 'GeneralMaestroClientes', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('New General Maestro Cliente') , ['controller' => 'GeneralMaestroClientes', 'action' => 'add']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('List Cobranza Notificacion Tipos') , ['controller' => 'CobranzaNotificacionTipos', 'action' => 'index']) ?></li>
                <li class="list-group-item" ><?=$this
    ->Html
    ->link(__('New Cobranza Notificacion Tipo') , ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']) ?></li>
            </ul>
    </div>
    <div class="cobranzaNotificacionConfiguraciones form frm container">
        <?=  $this->element('forms/formplantilla' , ['title_form' => 'Editar Plantilla de Cobranza']);  ?>      
      
    </div>
    
</div>
