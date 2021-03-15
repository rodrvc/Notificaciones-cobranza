<?php

namespace App\Controller; 

use App\Controller\CobranzaNotificacionConfiguraciones; 
use \DateTime;
use \DateInterval;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\I18n\FrozenDate;
use Cake\I18n;

//include 'src/Controller/CobranzaNotificacionConfiguracionesController.php';



// $d = new CobranzaNotificacionConfiguracionesController();
// $datos = $d->plantillaCorreos(45); // lista notificacionYfacturas & la entidad a comparar  
// $notificacion = $datos["cobranzaNotificacionConfiguracione"];
// $notificacionesYFacturas = $datos["notificacionesYFacturas"];

?>




<div style="max-width:1000px; 
    margin:auto;padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
">

    <!-- <h3 style="margin-top:130px; margin-bottom:200px; text-aling:center"> <?= h($notificacion["asunto"]) ?></h3> -->
        <?php 
                $mensajeDinamico = str_replace( "@@empresa_cliente@@", $notificacion["general_maestro_personas"][$maestro_persona_id]["nombre"] ,$notificacion["mensaje"]);
                echo $mensajeDinamico; 
             
                // echo $notificacion["mensaje"]; 
                // echo $this->Html->image("logo-empresa.png", ['fullBase' => true]);
                // echo "<img src='https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png' ></img>";
                // echo "<img src='cid:logo-empresa' ></img>";
                // echo "<img src='https://res.cloudinary.com/rodvall/image/upload/v1615693486/logo-empresa_ohltk8.png' ></img>";
                
        ?>


  
    <table class="table table-bordered" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%; margin-top:100px; " > 
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
        <?php if(!empty($notificacion["general_maestro_personas"][$maestro_persona_id]["fact_dtes"])): ?>
            <?php 
                $hoy = new FrozenDate();   
                $count = 1; 
                    
                    foreach($notificacion["general_maestro_personas"][$maestro_persona_id]["fact_dtes"] as $factura): ?>
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
                                $detalleTiempo; 

                                if ($notificacion["cobranza_notificacion_tipo_id"] == 2) {

                                    $diff =  $hoy->diff($factura["fecha_vencimiento"]->setTimezone(new \DateTimeZone('America/Santiago')));
                                    $detalleTiempo = 'dias de mora';

                                } else {
                                   
                                    // $frozenTime = new FrozenDate();    
                                    $diff =  $hoy->diff($factura["fecha_vencimiento"]->setTimezone(new \DateTimeZone('America/Santiago')));
                                    $detalleTiempo = 'dia(s) para vencimiento';
                                    
                                }
                                //  echo $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo_id; 
                                    // echo $diff->format('%d days '.$detalleTiempo);
                                    echo $diff->format('%d '.$detalleTiempo);
                                    
                                    //echo $diff.' '.$detalleTiempo;
                                    // echo $time = Time::now();
                                    

                                    // echo $time->isYesterday();
                                ?>
                            </td> 
                        </tr>    
                <?php $count=$count + 1; endforeach; ?> 
            <?php else: ?>
            <div style="text-aling:center"> 
                </h1 style=""> No cuenta con facturas asociadas</h1> 
            </div> 
            <?php endif ?>
            </tbody> 
    </table>                             
</div>
