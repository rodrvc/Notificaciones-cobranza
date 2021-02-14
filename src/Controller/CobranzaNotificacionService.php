<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MedioPagoVentas Controller
 *
 * @property \App\Model\Table\MedioPagoVentasTable $MedioPagoVentas
 *
 * @method \App\Model\Entity\MedioPagoVenta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificacionSendController extends AppController
{

    public function getFacturesByProvider(){
        $factura = new FactDtesController();
        $cliente = new GeneralMaestroClientesController();
        
        
    }


    

}