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



        $facturas = TableRegistry::getTableLocator()->get('FactDtes');
        $query = $facturas->find();
        $query->enableHydration(false);
        $result = $query->toList();
       



        $plantillasTable = TableRegistry::getTableLocator()->get('CobranzaNotificacionConfiguraciones');
        $query = $facturas->find();
        $query->enableHydration(false);
        $result = $query->toList();
       
        //obtener logica configuracion hora 
        //obtenerfacturasyusuarios que sean de tipo_movimiento = 1; 
        //

        //here
        $plantillas = $plantillasTable->find()
        ->join([
            'table' => 'general_maestro_clientes',
            'alias' => 'c',
            'type' => 'INNER',
            'conditions' => 'c.id = 1',
        ]);
        
        $list = $plantillas->toList();

        
        return  $list;
       
        
    }



}
