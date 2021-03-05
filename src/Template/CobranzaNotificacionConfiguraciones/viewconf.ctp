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
    <div class="cobranzaNotificacionConfiguraciones viewconfcontainer container \">

        <h3 style="margin-top:130px; text-aling:center"><?= h($cobranzaNotificacionConfiguracione->asunto) ?></h3>
        <?= $cobranzaNotificacionConfiguracione->mensaje ?>
        <hr>
        <table class="table table-bordered"> 
            <thead> 
                <tr> 
                    <th>#</th>
                    <th>Cod. SII</th> 
                    <th>Documento tipo</th> 
                    <th>Folio</th> 
                    <th>fecha Vencimiento</th> 
                    <th>fecha presente</th> 
                    <th>Diferencia plazo</th> 
                    
                </tr> 
            </thead> 
            <tbody>
              
                <?php 
                    $hoy = new DateTime();  
                    $count = 1; 
                    foreach($configuration[$cobranzaNotificacionConfiguracione->id]["empresa"]["fact_dtes"] as $value): ?>
                    <?php $fecha_actual = date("d-m-Y"); 
                    $fecha_rango = date_format($value["fecha_vencimiento"] ,"d-m-Y");
                        
                    ?>
                    <tr> 
                            <th scope="row"><?= $count++  ?></th> 
                            <td><?= $value["fact_dte_tipo"]["codigo_SII"] ?></td> 
                            <td><?= $value["fact_dte_tipo"]["nombre"]?></td>                 
                            <td><?= $value["folio"]?></td> 
                            <td><?= $fecha_rango ; ?></td> 
                            <td><?= $fecha_actual ; ?></td> 
                            <td><?php 
                                 $diff;  
                                 $mensaje; 

                                 if ($cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo_id == 2) {
                                    $diff =  $hoy->diff($value["fecha_vencimiento"]);
                                    $mensaje = 'dias de mora';
                                 } else {
                                    $diff =  $value["fecha_vencimiento"]->diff($hoy);
                                    $mensaje = 'dias para vencimiento';
                                 }
                                //  echo $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo_id; 
                                //  $diff =  $hoy->diff($value["fecha_vencimiento"]);
                                 echo $diff->format('%d '.$mensaje);
                                 ; ?></td> 
                    </tr> 
                <?php endforeach; ?>
<!--                
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
                </tr>  -->
            </tbody> 
        </table>    
                
        <!-- <?= $time = getdate(); print_r($time); ?> -->
                                 
</div>  



