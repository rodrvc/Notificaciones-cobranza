<?php

namespace App\Controller; 

use App\Cotroller\CobranzaNotificacionConfiguraciones; 
use \DateTime;

//include 'src/Controller/CobranzaNotificacionConfiguracionesController.php';



$d = new CobranzaNotificacionConfiguracionesController();
$datos = $d->plantillaCorreos(18);



$texto = "esto es un correo "; 

// echo $texto; 


$plantilla = "";
            
$plantilla_datos = "";

$plantilla .= '<div class="cobranzaNotificacionConfiguraciones viewconfcontainer container \">

<h3 style="margin-top:130px; text-aling:center">'.h($datos["cobranzaNotificacionConfiguracione"]->asunto).'</h3>'.
$datos["cobranzaNotificacionConfiguracione"]->mensaje.
'<hr>
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
    <tbody>';
      

            $hoy = new DateTime();  
            $count = 1; 
            foreach($datos["configuration"][$datos["id"]]["empresa"]["fact_dtes"] as $value)
                $fecha_actual = date("d-m-Y"); 
                $fecha_rango = date_format($value["fecha_vencimiento"] ,"d-m-Y");
                
          
                $plantilla_datos.= '<tr> 
                    <th scope="row">'.$count .'</th>'.
                    '<td>'.$value["fact_dte_tipo"]["codigo_SII"].'</td>'. 
                   '<td>'.$value["fact_dte_tipo"]["nombre"].'</td>                 
                    <td>'.$value["folio"].'</td> 
                    <td>'. $fecha_rango .'</td> 
                    <td>'.$fecha_actual.'</td> 
                    <td>';
                         $diff;  
                         $mensaje; 

                         if ($datos["cobranzaNotificacionConfiguracione"]->cobranza_notificacion_tipo_id == 2) {
                            $diff =  $hoy->diff($value["fecha_vencimiento"]);
                            $mensaje = 'dias de mora';
                         } else {
                            $diff =  $value["fecha_vencimiento"]->diff($hoy);
                            $mensaje = 'dias para vencimiento';
                         }
                        //  echo $cobranzaNotificacionConfiguracione->cobranza_notificacion_tipo_id; 
                        //  $diff =  $hoy->diff($value["fecha_vencimiento"]);
                         $plantilla_datos .=  $diff->format('%d '.$mensaje).
                         '</td> 
                        </tr>';
//         php endforeach;
// <!--                
//         <tr> 
//             <th scope="row">2</th> 
//                 <td></td> 
//                 <td></td> 
//                 <td></td> 
//         </tr> 
//         <tr> 
//             <th scope="row">3</th> 
//                 <td></td> 
//                 <td></td> 
//                 <td></td> 
//         </tr>  -->
$plantilla.=$plantilla_datos ;     
$plantilla.='</tbody> 
    </table>                             
</div></body></html>';  

echo $plantilla;