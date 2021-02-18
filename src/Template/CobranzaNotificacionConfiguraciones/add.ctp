<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>


<?php echo $this->Html->script('ckeditor/ckeditor'); ?> 
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
                echo $this->Form->control('dias', ['input' , 'min' => '0' ]);              
                echo $this->Form->control('activo');
                $sizes = ['Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miercoles' , 'Thursday' => 'Jueves' , 'Friday' => 'Viernes'];
                echo $this->Form->control('dia_notificacion', ['options' => $sizes]);  
                echo $this->Form->control('asunto' );
                // echo $this->Form->control('mensaje' );
                echo '<textarea name="mensaje" id="mensaje" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor 4.
                </textarea>

                <script>
                // Replace the <textarea id="mensaje"> with a CKEditor 4
                // instance, using default configuration.
                    CKEDITOR.replace( "mensaje" );
                    console.log("this is a mensaje")

                    var url = [] ; 
                 </script>';

                
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar')) ?>
        <?= $this->Form->end() ?>
    </div>
    
</div>
