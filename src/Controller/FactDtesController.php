<?php
namespace App\Controller;

use App\Controller\AppController;
//use App\Controller\TableRegistry;
use Cake\ORM\TableRegistry;

/**
 * FactDtes Controller
 *
 * @property \App\Model\Table\FactDtesTable $FactDtes
 *
 * @method \App\Model\Entity\FactDte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDtesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            
            'contain' => ['GeneralMaestroClientes', 'GeneralMaestroPersonas', 'FactDteTipos', 'FactDteEstados', 'FactDteMovimientos', 'FactDtePagos', 'GeneralUsers']
        ];

        $factDtes = $this->paginate($this->FactDtes);

        $this->set(compact('factDtes'));
    }


    public function obtenerFacturasCliente($clienteId) 
    {
        $query = $this->FactDtes->find('all')->contain(['GeneralMaestroClientes'])->where(['general_maestro_cliente_id' => $clienteId]);
        $lista = $query->all();
        return $lista;
    }


    public function getInvoices(){
        $articles = TableRegistry::getTableLocator()->get('FactDtes');
        $query = $articles->find();
        $query->where(['id' => 1]);
        $result = $query->all();
        return $result;
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDte = $this->FactDtes->get($id, [
            'contain' => ['GeneralMaestroClientes', 'GeneralMaestroPersonas', 'FactDteTipos', 'FactDteEstados', 'FactDteMovimientos', 'FactDtePagos', 'FactSiiComercials', 'FactSiiMercaderias', 'GeneralUsers']
        ]);

        $this->set('factDte', $factDte);
    }

   

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDte = $this->FactDtes->newEntity();
        if ($this->request->is('post')) {
            $factDte = $this->FactDtes->patchEntity($factDte, $this->request->getData());
            if ($this->FactDtes->save($factDte)) {
                $this->Flash->success(__('The fact dte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte could not be saved. Please, try again.'));
        }
        $generalMaestroClientes = $this->FactDtes->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $generalMaestroPersonas = $this->FactDtes->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $factDteTipos = $this->FactDtes->FactDteTipos->find('list', ['limit' => 200]);
        $factDteEstados = $this->FactDtes->FactDteEstados->find('list', ['limit' => 200]);
        $factDteMovimientos = $this->FactDtes->FactDteMovimientos->find('list', ['limit' => 200]);
        $factDtePagos = $this->FactDtes->FactDtePagos->find('list', ['limit' => 200]);
        $factSiiComercials = $this->FactDtes->FactSiiComercials->find('list', ['limit' => 200]);
        $factSiiMercaderias = $this->FactDtes->FactSiiMercaderias->find('list', ['limit' => 200]);
        $generalUsers = $this->FactDtes->GeneralUsers->find('list', ['limit' => 200]);
        $this->set(compact('factDte', 'generalMaestroClientes', 'generalMaestroPersonas', 'factDteTipos', 'factDteEstados', 'factDteMovimientos', 'factDtePagos', 'factSiiComercials', 'factSiiMercaderias', 'generalUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDte = $this->FactDtes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDte = $this->FactDtes->patchEntity($factDte, $this->request->getData());
            if ($this->FactDtes->save($factDte)) {
                $this->Flash->success(__('The fact dte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte could not be saved. Please, try again.'));
        }
        $generalMaestroClientes = $this->FactDtes->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $generalMaestroPersonas = $this->FactDtes->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $factDteTipos = $this->FactDtes->FactDteTipos->find('list', ['limit' => 200]);
        $factDteEstados = $this->FactDtes->FactDteEstados->find('list', ['limit' => 200]);
        $factDteMovimientos = $this->FactDtes->FactDteMovimientos->find('list', ['limit' => 200]);
        $factDtePagos = $this->FactDtes->FactDtePagos->find('list', ['limit' => 200]);
        $factSiiComercials = $this->FactDtes->FactSiiComercials->find('list', ['limit' => 200]);
        $factSiiMercaderias = $this->FactDtes->FactSiiMercaderias->find('list', ['limit' => 200]);
        $generalUsers = $this->FactDtes->GeneralUsers->find('list', ['limit' => 200]);
        $this->set(compact('factDte', 'generalMaestroClientes', 'generalMaestroPersonas', 'factDteTipos', 'factDteEstados', 'factDteMovimientos', 'factDtePagos', 'factSiiComercials', 'factSiiMercaderias', 'generalUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDte = $this->FactDtes->get($id);
        if ($this->FactDtes->delete($factDte)) {
            $this->Flash->success(__('The fact dte has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



//     public fuction getCliente(){
//     $query = $addresses->find('all')->contain(['Users'])->all();
//     foreach ($query as $address) {
//         echo $address->user->username;
//     }
// }
}
