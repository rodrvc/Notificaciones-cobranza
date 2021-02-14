<?php
namespace App\Controller;
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

    public $uses = ["FactDtes"];


    //test method //TODO borrar esto
    public function greeting(){
        $articles = TableRegistry::getTableLocator()->get('FactDtes');
        $query = $articles->find();
        $query->enableHydration(false);
        $result = $query->toList();
        // foreach ($query as $row) {

        //      return $row;
        //      echo '<hr>';
        // }
        
        return $result;
    } 

    public function evaluatedFactures(){
   
        $plantillasTable = TableRegistry::getTableLocator()->get('CobranzaNotificacionConfiguraciones');
        
        //****** $queryPlantilla->enableHydration(false);
        //****$resultPlantilla = $queryPlantilla->all();
       

        $contador = 0; 
        //TODO obtener todas las plantillas activas
        $queryPlantilla = $plantillasTable->find('all')
        ->contain(['GeneralMaestroClientes'])
        ->contain(['GeneralMaestroClientes.GeneralMaestroPersonas'])
        
        ->where([ 'activo' => 1])
        //->order(['cobranza_notificacion_tipo_id' => 'DESC', 'dias' => 'DESC']);
        ->order(['CobranzaNotificacionConfiguraciones.id'=> 'ASC']);
        $plantillas = $queryPlantilla->all();
        //TODO extraer la CONFIGURACION de dias y el tipo de vencimiento
        
        //TODO Traer todas las factutas
      
        //$facturasAndClient = $this->obtenerFacturasSegunVencimiento(1 , 2)->all();
        // $query = $this->FactDtes->find('all')->contain(['GeneralMaestroClientes'])->where(['general_maestro_cliente_id' => $clienteId]);
        // $lista = $query->all();

    
        //return $facturasAndClient;
        
      
        $data = array(
            "empresa" => array(),
        );
        $testResult; 

        foreach ($plantillas as $key => $configuracion) {
            $configuracion; // principal 
            $tipo = $configuracion->cobranza_notificacion_tipo_id;
            $fecha_actual = date("y-m-d");
            $dias = $configuracion->dias;
            $dia_envio_notificacion = $configuracion->dia_notificacion;
            $todayText = date('l');
            
            
            if($dia_envio_notificacion == $todayText){
                if ($tipo == 1 ){
                    $fecha_rango_vencimiento = date("y-m-d", strtotime($fecha_actual."+ ".$dias." days"));
                    $sql =  
                    $this->obtenerFacturasSegunVencimiento( $fecha_actual,  $fecha_rango_vencimiento , $configuracion->general_maestro_cliente_id );
                    $sql->enableHydration(false);
                    $result = $sql->toList();
                    
                    //DATA TEXT GENERAL                                     
                    $data[$configuracion->id]["mensaje"] = $configuracion->mensaje;
                    $data[$configuracion->id]["nombre"] = $configuracion->general_maestro_cliente->nombre;
                    $data[$configuracion->id]["empresa"]["id"] = $result[0]["general_maestro_persona_id"] ;
                    $data[$configuracion->id]["empresa"]["razon_social"] = $result[0]["general_maestro_persona"]["razon_social"];
                    $data[$configuracion->id]["empresa"]["rut"] = $result[0]["general_maestro_persona"]["rut"];
                    $data[$configuracion->id]["empresa"]["fact_dtes"] = $result;
                    
                    //$data[$configuracion->id]["general_maestro_persona"] = $sql 

                 

                    
                    // $info = array(
                    //     "id" => $configuracion->general_maestro_cliente_id,
                    //     "nombre" => 
                    //     "mensaje" => $configuracion->mensaje, 
                        
                        
                    // );



                  
                   
                    // $associativeArray = array();
                    // foreach ($sql as $key => $row) {
                    // // Put the values into the array, no other variables needed
                    //     $data[] = $row;
                    // }

                }
                // else 
                // {
                //     $fecha_rango_vencimiento = date("y-m-d", strtotime($fecha_actual."- ".$dias." days"));
                //     $testResult =  $data[] = $this->obtenerFacturasVencidas( $fecha_actual,  $fecha_rango_vencimiento )->all();
                //     $data[] = $testResult;
                // }
            }
        }
        return $data;

        function existe (){
            
        };

        //return $testResult;

         


        //guardar la configuracion
        //pasar un array de facturas EMITIDAS ver si configuracion se cumple



        //obtener logica configuracion hora 
        //obtenerfacturasyusuarios que sean de tipo_movimiento = 1; 



    
        //here
        // $plantillas = $plantillasTable->find()
        // ->join([
        //         'table' => 'general_maestro_clientes',
        //         'alias' => 'c',
        //         'type' => 'LEFT',
        //         'conditions' => 'c.id = 1',
        // ]);
        // return  $result;
            
            $facturas = $this->obtenerFact()->all();
            
            // $fecha_actual = date("y-m-d");
            // $detalleNotificacion = array(); 
            // foreach ($facturas as $fac) {
            //     foreach($plantillas as $plan){
            //         //planilla es de tipo vencimiento
            //         if($plan->cobranza_notificacion_tipo_id == 2 ){  
            //             $dias = $plan->dias ;  

            //             $fecha_rango_vencimiento = date("y-m-d", strtotime($fecha_actual."- ".$dias." days"));
            //             //fecha 12-02-2021 -> 08-12-21
            //             if($fac->fecha_vencimiento < $fecha_rango_vencimiento ){
                            

            //             }
                            
            //         }
                   


            //     }
            // }



            


            return $plantillas;



    }

    public function obtenerFact(){
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');
        $queryFact = $facturasEmitidas->find('all')->contain(['GeneralMaestroClientes'])
        ->where(['fact_dte_movimiento_id' => 1 ]);
        //$queryFact->enableHydration(false);
        return $queryFact; 
    }

    public function obtenerFacturasSegunVencimiento($dia_Actual, $fecha_rango_vencimiento, $empresa ){
        
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');

        $query = $facturasEmitidas->find('all')->contain(['GeneralMaestroPersonas'])
            ->select(['folio', 'general_maestro_persona_id', 'general_maestro_cliente_id', 'monto_total', 'fecha_emision','fecha_vencimiento', 'abono' , 'saldo', 'GeneralMaestroPersonas.id' , 'GeneralMaestroPersonas.rut', 'GeneralMaestroPersonas.razon_social', 'GeneralMaestroPersonas.nombre_fantasia' ])
            ->where(['FactDtes.fecha_vencimiento >' => $dia_Actual ])
            ->where(['FactDtes.fecha_vencimiento <=' => $fecha_rango_vencimiento  ])
            ->where(['FactDtes.fact_dte_movimiento_id ' => 1 ])
            ->where(['FactDtes.general_maestro_cliente_id' => $empresa]);
            return $query;

    }

    
    public function obtenerFacturasVencidas($dia_Actual, $fecha_rango_vencimiento){

        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');

        $query = $facturasEmitidas->find('all')->contain(['GeneralMaestroPersonas'])
            ->where(['FactDtes.fecha_vencimiento <' => $dia_Actual ])
            ->select(['folio', 'general_maestro_persona_id', 'monto_total', 'fecha_emision','fecha_vencimiento', 'abono' , 'saldo' ])
            ->where(['FactDtes.fecha_vencimiento <' => $fecha_rango_vencimiento  ])
            ->where(['FactDtes.fact_dte_movimiento_id ' => 1 ]);
            return $query;

    }


    public function obtenerClientes(){
             
        $facturasEmitidas = TableRegistry::getTableLocator()->get('FactDtes');

        $query = $facturasEmitidas->find()->where(['FactDtes.fecha_vencimiento >' => $dia_Actual ])
            ->select(['folio', 'general_maestro_persona_id', 'monto_total', 'fecha_emision','fecha_vencimiento', 'abono' , 'saldo' ])
            ->where(['FactDtes.fecha_vencimiento <=' => $fecha_rango_vencimiento  ])
            ->where(['FactDtes.fact_dte_movimiento_id ' => 1 ]);
            return $query;

    }
}
