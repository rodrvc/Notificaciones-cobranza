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
        <?=$this
    ->Form
    ->create($cobranzaNotificacionConfiguracione) ?>
        <fieldset>
            <legend><?=__('Edit Cobranza Notificacion Configuracione') ?></legend>
            <?php
echo $this
    ->Form
    ->control('general_user_id', ['options' => $generalUsers]);

echo $this
    ->Form
    ->control('general_maestro_cliente_id', ['options' => $generalMaestroClientes]);

echo $this
    ->Form
    ->control('cobranza_notificacion_tipo_id', ['options' => $cobranzaNotificacionTipos]);
echo $this
    ->Form
    ->control('dias');
echo $this
    ->Form
    ->control('activo');
// echo $this->Form->control('mensaje');
echo '<textarea name="mensaje" id="mensaje" rows="10" cols="80">' . $cobranzaNotificacionConfiguracione->mensaje . '
                </textarea>

                <script>
                // Replace the <textarea id="mensaje"> with a CKEditor 4
                // instance, using default configuration.
                    CKEDITOR.replace( "mensaje" );
                    console.log("this is a mensaje")

                    
                 </script>';
echo $this
    ->Form
    ->control('asunto');
?>
        </fieldset>
        <?=$this
    ->Form
    ->button(__('Submit')) ?>
        <?=$this
    ->Form
    ->end() ?>
    </div>
</div>
