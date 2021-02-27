<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>


<?php echo $this->Html->script('ckeditor/ckeditor'); ?> 
<?php echo $this->Html->script('ckfinder/ckfinder'); ?> 
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
        <?=  $this->element('forms/formplantilla' , ['title_form' => 'Agregar Plantilla de Cobranza']);  ?>         
    </div>
   
</div>
