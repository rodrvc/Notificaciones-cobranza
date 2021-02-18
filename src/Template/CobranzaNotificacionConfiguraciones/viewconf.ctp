<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CobranzaNotificacionConfiguracione $cobranzaNotificacionConfiguracione
 */
?>
<div class="flex pdf-background" > 
    <div class="panel panel-default m-6 side" id="actions-sidebar">
        <div class="panel-heading">
            Actions
        </div>
        <ul class="list-group">
            <li class="list-group-item"><?= $this->Html->link(
                __('Edit Cobranza Notificacion Configuracione'),
                ['action' => 'edit', $cobranzaNotificacionConfiguracione->id]
            ) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(
                __('Delete Cobranza Notificacion Configuracione'),
                ['action' => 'delete', $cobranzaNotificacionConfiguracione->id],
                [
                    'confirm' => __(
                        'Are you sure you want to delete # {0}?',
                        $cobranzaNotificacionConfiguracione->id
                    ),
                ]
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('List Cobranza Notificacion Configuraciones'),
                ['action' => 'index']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('New Cobranza Notificacion Configuracione'),
                ['action' => 'add']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('List General Users'),
                ['controller' => 'GeneralUsers', 'action' => 'index']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('New General User'),
                ['controller' => 'GeneralUsers', 'action' => 'add']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('List General Maestro Clientes'),
                ['controller' => 'GeneralMaestroClientes', 'action' => 'index']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('New General Maestro Cliente'),
                ['controller' => 'GeneralMaestroClientes', 'action' => 'add']
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('List Cobranza Notificacion Tipos'),
                [
                    'controller' => 'CobranzaNotificacionTipos',
                    'action' => 'index',
                ]
            ) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(
                __('New Cobranza Notificacion Tipo'),
                ['controller' => 'CobranzaNotificacionTipos', 'action' => 'add']
            ) ?> </li>
        </ul>
    </div>
    <div class="cobranzaNotificacionConfiguraciones viewconfcontainer container preview">

        <h3><?= h($cobranzaNotificacionConfiguracione->asunto) ?></h3>
        <?= $cobranzaNotificacionConfiguracione->mensaje ?>
        <hr>
        <table class="table table-bordered"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Folio</th> 
                    <th>fecha Vencimiento</th> 
                    <th>Diferencia plazo</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <th scope="row">1</th> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                    </tr> 
                <tr> 
                    <th scope="row">2</th> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                </tr> 
                <tr> 
                    <th scope="row">3</th> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                </tr> 
            </tbody> 
        </table>
        <?php echo print_r($configuration); ?>
       
</div>  

<?php echo print_r($cobranzaNotificacionConfiguracione); ?>

