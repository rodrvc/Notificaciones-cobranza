<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Service\Service;

//***EMULADOR DE SESION***///
use Cake\ORM\TableLocator;
use Cake\ORM\TableRegistry;

/**
 * CobranzaNotificacionConfiguraciones Controller
 *
 * @property \App\Model\Table\CobranzaNotificacionConfiguracionesTable $CobranzaNotificacionConfiguraciones
 *
 * @method \App\Model\Entity\CobranzaNotificacionConfiguracione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CobranzaNotificacionConfiguracionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeneralUsers', 'GeneralMaestroClientes', 'CobranzaNotificacionTipos']
        ];
        $cobranzaNotificacionConfiguraciones = $this->paginate($this->CobranzaNotificacionConfiguraciones);
        $jsonCobranzas = json_encode($cobranzaNotificacionConfiguraciones);

        $service = new Service();
        $result = $service->evaluatedFactures();

       

        // DEBUG
        echo '<pre>';
        // print_r($result);
        echo '</pre>';
        
        $this->set(compact('cobranzaNotificacionConfiguraciones'));
        $this->set(compact('jsonCobranzas')); // para grid 
    }

    /**
     * View method
     *
     * @param string|null $id Cobranza Notificacion Configuracione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id, [
            'contain' => ['GeneralUsers', 'GeneralMaestroClientes', 'CobranzaNotificacionTipos']
        ]);

        $this->set('cobranzaNotificacionConfiguracione', $cobranzaNotificacionConfiguracione);
    }

    // public function viewconf($id = null)
    // {
    //     $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id, [
    //         'contain' => ['GeneralUsers', 'GeneralMaestroClientes', 'CobranzaNotificacionTipos']
    //     ]);

    //     $service = new Service();
    //     $configuration = $service->evaluatedFactures();

    //     // print_r($configuration);

    //     $this->set('configuration', $configuration); //pasa toda la lista de notificaciones con sus respectivas facturas
    //     $this->set('cobranzaNotificacionConfiguracione', $cobranzaNotificacionConfiguracione); // cobranzaNotificacion que se ve 
    // }



    //Plantilla para envio de correo 
    // public function plantillaCorreos($id = null)
    // {
    //     $notificacion  = $this->CobranzaNotificacionConfiguraciones->get($id, [
    //         'contain' => ['GeneralUsers', 'GeneralMaestroClientes', 'CobranzaNotificacionTipos']
    //     ]);

    //     $service = new Service();
    //     $notificacionesYFacturas = $service->evaluatedFactures();

    //     // print_r($configuration);

    //     return ['notificacionesYFacturas' => $notificacionesYFacturas, //pasa toda la lista de notificaciones con sus respectivas facturas
    //     'id' => $id , 
    //     'cobranzaNotificacionConfiguracione' => $notificacion]; //cobranzaNotificacion que se ve 
    // }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        //***SESSION EMULADA***//
        $sesionEmulada = $this->obtenerSesionEmulada();
        $this->set('sesionEmulada', $sesionEmulada);
         //***END SESSION EMULADA***//

        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->newEntity();
        if ($this->request->is('post')) {
            $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->patchEntity($cobranzaNotificacionConfiguracione, $this->request->getData());
            if ($this->CobranzaNotificacionConfiguraciones->save($cobranzaNotificacionConfiguracione)) {

                $this->Flash->success(__('La Notificacion fue guardada exitosamente.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Ha ocurrido un error. Por favor, intente nuevamente'));
        }

        $generalUsers = $this->CobranzaNotificacionConfiguraciones->GeneralUsers->find('list', ['limit' => 200]);
        $generalMaestroClientes = $this->CobranzaNotificacionConfiguraciones->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $cobranzaNotificacionTipos = $this->CobranzaNotificacionConfiguraciones->CobranzaNotificacionTipos->find('list', ['limit' => 200]);


        $this->set(compact('cobranzaNotificacionConfiguracione', 'generalUsers', 'generalMaestroClientes', 'cobranzaNotificacionTipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobranza Notificacion Configuracione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

         //***SESSION EMULADA***//
         $sesionEmulada = $this->obtenerSesionEmulada();
         $this->set('sesionEmulada', $sesionEmulada);
          //***END SESSION EMULADA***//

        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->patchEntity($cobranzaNotificacionConfiguracione, $this->request->getData());
            if ($this->CobranzaNotificacionConfiguraciones->save($cobranzaNotificacionConfiguracione)) {

                $this->Flash->success(__('La notificacion ha sido modificada'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ha ocurrido un error. Por favor intente nuevamente'));
        }

        $generalUsers = $this->CobranzaNotificacionConfiguraciones->GeneralUsers->find('list', ['limit' => 200]);
        $generalMaestroClientes = $this->CobranzaNotificacionConfiguraciones->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $cobranzaNotificacionTipos = $this->CobranzaNotificacionConfiguraciones->CobranzaNotificacionTipos->find('list', ['limit' => 200]);

        $this->set(compact('cobranzaNotificacionConfiguracione', 'generalUsers', 'generalMaestroClientes', 'cobranzaNotificacionTipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cobranza Notificacion Configuracione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {   
        $message = 'plantilla borrado'; 
        $this->request->allowMethod(['post', 'delete']);
        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id);
        
        if (!$this->CobranzaNotificacionConfiguraciones->delete($cobranzaNotificacionConfiguracione)) {
            // $this->Flash->success(__('La notificacion fue eliminada.'));

            $message = 'error al eliminar';
        }

        exit();
        return $this->redirect(['action' => 'index']);
    
    }

    public function obtenerSesionEmulada(){
        $sesionEmulada = TableRegistry::getTableLocator()->get('GeneralMaestroClientes') ->find()
        ->where(['id =' => 2 ])
        ->first();
        

        return $sesionEmulada; 
    }






}
