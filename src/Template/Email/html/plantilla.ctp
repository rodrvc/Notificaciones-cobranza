<?php

namespace App\Controller; 

use App\Cotroller\CobranzaNotificacionConfiguraciones; 
use \DateTime;

//include 'src/Controller/CobranzaNotificacionConfiguracionesController.php';



$d = new CobranzaNotificacionConfiguracionesController();
$datos = $d->plantillaCorreos(1); // lista notificacionYfacturas & la entidad a comparar  
$notificacion = $datos["cobranzaNotificacionConfiguracione"];
$notificacionesYFacturas = $datos["notificacionesYFacturas"];

?>




<div  class="cobranzaNotificacionConfiguraciones viewconfcontainer container " style="max-width:1000px; margin:auto;">

    <!-- <h3 style="margin-top:130px; margin-bottom:200px; text-aling:center"> <?= h($notificacion->asunto) ?></h3> -->
        <?=$notificacion->mensaje ?>
    <hr>
    <table class="table table-bordered" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100% " > 
        <thead> 
            <tr> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">#</th>
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Cod. SII</th> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Documento tipo</th> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Folio</th> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">fecha Vencimiento</th> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">fecha presente</th> 
                <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Diferencia plazo</th> 
               
            </tr> 
        </thead> 
        <tbody>
        <?php 
            $hoy = new DateTime();  
            $count = 1; 
                foreach($notificacionesYFacturas[$notificacion["id"]]["empresa"]["fact_dtes"] as $factura): ?>
                    <?php
                        $fecha_actual = date("d-m-Y"); 
                        $fecha_rango = date_format($factura["fecha_vencimiento"] ,"d-m-Y");
                    ?>
                    <tr> 
                        <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;" scope="row"><?=$count?> </th>
                        <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" ><?= $factura["fact_dte_tipo"]["codigo_SII"] ?></td> 
                        <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" ><?= $factura["fact_dte_tipo"]["nombre"] ?></td>                 
                        <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" ><?= $factura["folio"] ?></td> 
                        <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" ><?= $fecha_rango ?></td> 
                        <td style="border: 1px solid #dddddd;text-align: left;padding: 8px;" > <?= $fecha_actual ?></td> 
                        <td 
                        
                            style="border: 1px solid #dddddd;text-align: left;padding: 8px;" > 
                            <?php 
                            $diff;  
                            $mensaje; 

                            if ($notificacion->cobranza_notificacion_tipo_id == 2) {
                                $diff =  $hoy->diff($factura["fecha_vencimiento"]);
                                $mensaje = 'dias de mora';
                            } else {
                                $diff =  $factura["fecha_vencimiento"]->diff($hoy);
                                $mensaje = 'dia(s) para vencimiento';
                            }
                            //  echo $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo_id; 
                            //  $diff =  $hoy->diff($value["fecha_vencimiento"]);
                            echo $diff->format('%d '.$mensaje);
                            ?>
                        </td> 
                    </tr>    
            <?php $count=$count + 1; endforeach; ?>
            </tbody> 
    </table>                             
</div>
