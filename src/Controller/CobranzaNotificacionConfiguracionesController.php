<?php
namespace App\Controller;
// namespace App\Model\Entity;


include 'src\Service\Service.php';


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
class CobranzaNotificacionConfiguracionesController extends AppController

{   
     public $uses = ["FactDtes"];
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {   
        // $articles = TableRegistry::getTableLocator()->get('FactDtes', [
        //     'className' => 'App\Model\Entity\FactDtes',
        //     'table' => 'fact_dtes',
        //     'connection' => $connectionObject,
        //     'schema' => $schemaObject,
        //     'entityClass' => 'Custom\EntityClass',
        //     'eventManager' => $eventManager,
        //     'behaviors' => $behaviorRegistry
        // ]);
        //$factu =$this->CobranzaNotificacionConfiguraciones->GeneralUsers->find('list', ['limit' => 200]) ;
        //$factu = new FactDtes();
        //echo $this->CobranzaNotificacionConfiguraciones->find('list', ['limit' => 200]);
        
        $factura = new FactDtesController();
        $cliente = new GeneralMaestroClientesController();
        // $factura->index2();
        // $this->loadModel('FactDtes'); 
        
        $this->paginate = [
            'conditions' => ['general_maestro_cliente_id' => 1],
            'contain' => ['GeneralUsers', 'GeneralMaestroClientes', 'CobranzaNotificacionTipos']
        ];


        $cobranzaNotificacionConfiguraciones = $this->paginate($this->CobranzaNotificacionConfiguraciones);
        
        $this->set(compact('cobranzaNotificacionConfiguraciones'));
        $this->set(compact('greeting'));
        
        
        // echo print_r($uses['FactDtes']->find()->all());
        // echo print_r($factura->find()->all()) 
        //$factura->FactDtes->find()->all();
        
        //echo print_r($factura->$factDtes);
        
        
        //$json_string =  json_encode($factura->obtenerFacturasCliente(2 , JSON_PRETTY_PRINT));
        $response = $factura->getInvoices();
        // echo $json_string;
        echo '\n\n';
        echo $response;


        // $articles = TableRegistry::getTableLocator()->get('FactDtes');
        // $query = $articles->find();
        // foreach ($query as $row) {

        //      echo $row;
        //      echo '<hr>';
        // }
        
        $service = new Service();
        
        
        $list = $service->greeting();
        $whatIsUses = $service->evaluatedFactures();
        print_r($list[0]);
        echo '<hr>';
        echo '<pre>';
        print_r($whatIsUses);
        echo '</pre>';
        //echo json_encode($array);
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

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->newEntity();
        if ($this->request->is('post')) {
            $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->patchEntity($cobranzaNotificacionConfiguracione, $this->request->getData());
            if ($this->CobranzaNotificacionConfiguraciones->save($cobranzaNotificacionConfiguracione)) {
                $this->Flash->success(__('The cobranza notificacion configuracione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza notificacion configuracione could not be saved. Please, try again.'));
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
        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->patchEntity($cobranzaNotificacionConfiguracione, $this->request->getData());
            if ($this->CobranzaNotificacionConfiguraciones->save($cobranzaNotificacionConfiguracione)) {
                $this->Flash->success(__('The cobranza notificacion configuracione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza notificacion configuracione could not be saved. Please, try again.'));
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
        $this->request->allowMethod(['post', 'delete']);
        $cobranzaNotificacionConfiguracione = $this->CobranzaNotificacionConfiguraciones->get($id);
        if ($this->CobranzaNotificacionConfiguraciones->delete($cobranzaNotificacionConfiguracione)) {
            $this->Flash->success(__('The cobranza notificacion configuracione has been deleted.'));
        } else {
            $this->Flash->error(__('The cobranza notificacion configuracione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function generalusers() {
        // ...

        $num = 200; 
        $generalClients = $this->CobranzaNotificacionConfiguraciones->GeneralMaestroClientes->find('list', ['limit' => $num]);
        //$generalClients = $this->CobranzaNotificacionConfiguraciones->GeneralMaestroClientes->fact->find('list', ['limit' => $num]);
        // ...

        $results = $generalClients->all();

        $data = $results->toList();
        
        echo $data[0] ;
        foreach ($data as $row) {
            echo '<p>'.$row.'</p>';
        }
        


        $this->autoRender = false;
    }
    



}
