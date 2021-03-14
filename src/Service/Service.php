<?php
namespace App\Service;
// namespace App\Model\Entity;





use App\Controller\AppController;
use Cake\ORM\TableLocator;
use Cake\ORM\TableRegistry;


/**
 * CobranzaNotificacionConfiguraciones Controller
 *
 * @property \App\Model\Table\CobranzaNotificacionConfiguracionesTable $CobranzaNotificacionConfiguraciones
 *
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Service extends AppController

{   
   

    public function evaluatedFactures(){
   
        
        $plantillas = $this->ObtenerCobranzaNotificacionConfiguraciones();


        $data = array();
        $testResult; 

        foreach ($plantillas as $key => $configuracion) {
            
            
            if (!$configuracion->activo == 1 ) {
                continue; 
            }

            $tipo = $configuracion->cobranza_notificacion_tipo_id;
            $fecha_actual = date("y-m-d");
            $dias = $configuracion->dias; // dias rango
            $dia_envio_notificacion = $configuracion->dia_notificacion;//que dia
            $todayText = date('l'); //se obtiene fecha actual
            
            
            if($dia_envio_notificacion == $todayText){
                if ($tipo == 1 ){ // si es previo al vencimiento
                   
                    $fecha_rango_vencimiento = date("y-m-d", strtotime($fecha_actual."+ ".$dias." days"));
                    $sql =  
                    $this->obtenerFacturasEntreFechas( $fecha_actual,  $fecha_rango_vencimiento , $configuracion->general_maestro_cliente_id);
                    $sql->enableHydration(false);
                    $result = $sql->toList();
                    
                    //DATA TEXT GENERAL     
                    // $data[$configuracion->id]["mensaje"] = $configuracion->mensaje;
                    // $data[$configuracion->id]["asunto"] = $configuracion->asunto;
                    // $data[$configuracion->id]["nombre"] = $configuracion->general_maestro_cliente->nombre;
                    // $data[$configuracion->id]["empresa"]["id"] = $result[0]["general_maestro_persona_id"] ;
                    // $data[$configuracion->id]["empresa"]["razon_social"] = $result[0]["general_maestro_persona"]["razon_social"];
                    // $data[$configuracion->id]["empresa"]["rut"] = $result[0]["general_maestro_persona"]["rut"];
                    // $data[$configuracion->id]["empresa"]["fact_dtes"] = $result;

                    $data[$configuracion->id] = $this->respuestaOrdenada($result , $configuracion);
                    
                 
                }

                if($tipo == 2 ) {
                    $vencimiento = date("y-m-d", strtotime($fecha_actual."- ".$dias." days"));
                    // $d =  date("d", strtotime($fecha_actual));
                    

                    $sql =  
                    $this->obtenerFacturasVencidas($vencimiento  ,$configuracion->general_maestro_cliente_id );
                    $sql->enableHydration(false);
                    $result = $sql->toList();


                    // $data[$configuracion->id]["mensaje"] = $configuracion->mensaje;
                    // $data[$configuracion->id]["asunto"] = $configuracion->asunto;
                    // $data[$configuracion->id]["tipo"] = "Vencimiento Factura";
                    // $data[$configuracion->id]["nombre"] = $configuracion->general_maestro_cliente->nombre;
                    // $data[$configuracion->id]["empresa"]["id"] = $result[0]["general_maestro_persona_id"] ;
                    // $data[$configuracion->id]["empresa"]["razon_social"] = $result[0]["general_maestro_persona"]["razon_social"];
                    // $data[$configuracion->id]["empresa"]["rut"] = $result[0]["general_maestro_persona"]["rut"];
                    // $data[$configuracion->id]["empresa"]["fact_dtes"] = $result;

                    $data[$configuracion->id] = $this->respuestaOrdenada($result , $configuracion);

                }
           
            }
        }
        return $data;




    }

    public function ObtenerCobranzaNotificacionConfiguraciones(){
        $plantillasTable = TableRegistry::getTableLocator()->get('CobranzaNotificacionConfiguraciones');
        $contador = 0; 
        $queryPlantilla = $plantillasTable->find('all')
        ->contain(['GeneralMaestroClientes'])
        ->contain(['GeneralMaestroClientes.GeneralMaestroPersonas'])
        ->where([ 'activo' => 1])
        ->order(['CobranzaNotificacionConfiguraciones.id'=> 'ASC']);
        $plantillas = $queryPlantilla->all();
        return $plantillas; 
    }



    public function obtenerFact(){
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');
        $queryFact = $facturasEmitidas->find('all')->contain(['GeneralMaestroClientes'])
        ->where(['fact_dte_movimiento_id' => 1 ]);
        //$queryFact->enableHydration(false);
        return $queryFact; 
    }

    public function obtenerFacturasEntreFechas($dia_Actual, $fecha_rango_vencimiento, $empresa ){
        
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');

        $query = $facturasEmitidas->find('all')->contain(['GeneralMaestroPersonas', 'FactDteTipos' ])
            ->select(['folio', 'general_maestro_persona_id', 'general_maestro_cliente_id', 'monto_total', 'fecha_emision','fecha_vencimiento', 'abono' , 'saldo', 'FactDteTipos.nombre', 'FactDteTipos.codigo_SII' , 'GeneralMaestroPersonas.id' , 'GeneralMaestroPersonas.nombre' , 'GeneralMaestroPersonas.rut', 'GeneralMaestroPersonas.razon_social', 'GeneralMaestroPersonas.nombre_fantasia' ])
            ->where(['FactDtes.fecha_vencimiento >' => $dia_Actual ])
            ->where(['FactDtes.fecha_vencimiento <=' => $fecha_rango_vencimiento  ])
            ->where(['FactDtes.fact_dte_movimiento_id ' => 1 ]) // si no esta pagada
            ->where(['FactDtes.general_maestro_cliente_id' => $empresa]); //corresponde a la empresa
            return $query;

    }

    
    public function obtenerFacturasVencidas ( $vencimiento,   $empresa ){
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');

        

        $query = $facturasEmitidas->find('all')->contain(['GeneralMaestroPersonas', 'FactDteTipos' ])
            ->select(['folio', 'general_maestro_persona_id', 'general_maestro_cliente_id', 'monto_total', 'fecha_emision','fecha_vencimiento', 'abono' , 'saldo', 'FactDteTipos.nombre', 'FactDteTipos.codigo_SII' , 'GeneralMaestroPersonas.id' , 'GeneralMaestroPersonas.nombre',  'GeneralMaestroPersonas.rut', 'GeneralMaestroPersonas.razon_social', 'GeneralMaestroPersonas.nombre_fantasia' ])
            ->where(['FactDtes.fecha_vencimiento <' => $vencimiento ]) // tiene que ser menor al vencimiento Más el numero de dia para el aviso
            // ->where(['FactDtes.fecha_vencimiento <' => $diaActual ])
            ->where(['FactDtes.fact_dte_movimiento_id ' => 1 ]) // 
            ->where(['FactDtes.general_maestro_cliente_id' => $empresa]);
            return $query;

    }


    public function respuestaOrdenada($fact_dtes , $configuracionActual ){
        $respuesta = array();
        // echo '<pre>';
        // print_r($conf);
        // echo '</pre>';

        if (empty($fact_dtes)) {
            return ; 
        }
        
        // $respuesta["mensaje"] = $configuracionActual->mensaje;
        // $respuesta["asunto"] = $configuracionActual->asunto;
        // $respuesta["nombre"] = $configuracionActual->general_maestro_cliente->nombre;
        // $respuesta["general_maestro_cliente"] = $configuracionActual->general_maestro_cliente->id;
        // $respuesta["cobranza_notificacion_tipo_id"] = $configuracionActual->cobranza_notificacion_tipo_id ;  ;
        // $respuesta["empresa"]["id"] = $conf[0]["general_maestro_persona"];
        // $respuesta["empresa"]["nombre"] = $conf[0]["general_maestro_persona"]["nombre"];
        // $respuesta["empresa"]["razon_social"] = $conf[0]["general_maestro_persona"]["razon_social"];
        // $respuesta["empresa"]["rut"] = $conf[0]["general_maestro_persona"]["rut"];
        // $respuesta["empresa"]["fact_dtes"] = $conf;

            $respuesta["mensaje"] = $configuracionActual->mensaje;
            $respuesta["asunto"] = $configuracionActual->asunto;
            $respuesta["nombre"] = $configuracionActual->general_maestro_cliente->nombre;
            $respuesta["general_maestro_cliente"] = $configuracionActual->general_maestro_cliente->id;
            $respuesta["cobranza_notificacion_tipo_id"] = $configuracionActual->cobranza_notificacion_tipo_id ;
            // $respuesta["empresa"]["id"] = $fact_dtes[0]["general_maestro_persona"];
            // $respuesta["empresa"]["nombre"] = $fact_dtes[0]["general_maestro_persona"]["nombre"];
            // $respuesta["empresa"]["razon_social"] = $conf[0]["general_maestro_persona"]["razon_social"];
            // $respuesta["empresa"]["rut"] = $fact_dtes[0]["general_maestro_persona"]["rut"];
            
           

            $datas = [];

            $value; 

            // foreach ($fact_dtes as $key => $value) {
                    
            //         empty($datas[$value["general_maestro_persona_id"]]["general_maestro_persona"]) ? $datas[$value["general_maestro_persona_id"]]["general_maestro_persona"] =  $value["general_maestro_persona"] : null;                 
            //         $datas[$value["general_maestro_persona_id"]]["fact_dtes"] =  $value;
            //         $datas[$value["general_maestro_persona_id"]]["general_maestro_persona_id"] =  $value["general_maestro_persona_id"]; 
            // }

            foreach ($fact_dtes as $key => $value) {
                    
                empty($datas[$value["general_maestro_persona_id"]]["general_maestro_persona"]) ? $datas[$value["general_maestro_persona_id"]]["general_maestro_persona"] =  $value["general_maestro_persona"] : null;                 
                //$datas[$value["general_maestro_persona_id"]]["fact_dtes"] =  $value;
                empty($respuesta["general_maestro_personas"][$value["general_maestro_persona_id"]]) ? $respuesta["general_maestro_personas"][$value["general_maestro_persona_id"]] = $datas[$value["general_maestro_persona_id"]]["general_maestro_persona"] : null ;
                $respuesta["general_maestro_personas"][$value["general_maestro_persona_id"]]["fact_dtes"][] = $value;
            
            
            }   
        


           
           
               
               

                   
                    //$respuesta["debug4"][] = $value_fact_dtes[$i]["folio"]; 

                    //$respuesta["empresa"][$fact_dtes[$key_fact_dtes]] =$value_fact_dtes;
                    // $respuesta["empresa"]["nombre"] = "PEPE";

                    // $respuesta["empresa"][$fact_dtes[$key_fact_dtes]] = $fact_dtes[0]["general_maestro_persona"];
                    // $respuesta["empresa"]["nombre"] = $fact_dtes[0]["general_maestro_persona"]["nombre"];
                    // $respuesta["empresa"]["razon_social"] = $conf[0]["general_maestro_persona"]["razon_social"];
                    // $respuesta["empresa"]["rut"] = $fact_dtes[0]["general_maestro_persona"]["rut"];
                    // $respuesta["empresa"]["fact_dtes"] = $fact_dtes;
              
                

        

        return $respuesta;  

    }


    
}
