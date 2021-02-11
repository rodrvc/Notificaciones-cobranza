<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralMaestroClientes Controller
 *
 * @property \App\Model\Table\GeneralMaestroClientesTable $GeneralMaestroClientes
 *
 * @method \App\Model\Entity\GeneralMaestroCliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralMaestroClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeneralMaestroPersonas']
        ];
        $generalMaestroClientes = $this->paginate($this->GeneralMaestroClientes);

        $this->set(compact('generalMaestroClientes'));
    }

    /**
     * View method
     *
     * @param string|null $id General Maestro Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalMaestroCliente = $this->GeneralMaestroClientes->get($id, [
            'contain' => ['GeneralMaestroPersonas', 'CobranzaNotificacionConfiguraciones', 'FactDtes', 'GeneralClasificacionRutMaestroPersonas']
        ]);

        $this->set('generalMaestroCliente', $generalMaestroCliente);
    }


    public function buscarCliente($id = null)
    {
        $generalMaestroCliente = $this->GeneralMaestroClientes->get($id, [
            'contain' => ['GeneralMaestroPersonas', 'CobranzaNotificacionConfiguraciones', 'FactDtes', 'GeneralClasificacionRutMaestroPersonas']
        ]);

        $this->set('generalMaestroCliente', $generalMaestroCliente);
        return $generalMaestroCliente;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalMaestroCliente = $this->GeneralMaestroClientes->newEntity();
        if ($this->request->is('post')) {
            $generalMaestroCliente = $this->GeneralMaestroClientes->patchEntity($generalMaestroCliente, $this->request->getData());
            if ($this->GeneralMaestroClientes->save($generalMaestroCliente)) {
                $this->Flash->success(__('The general maestro cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro cliente could not be saved. Please, try again.'));
        }
        $generalMaestroPersonas = $this->GeneralMaestroClientes->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $this->set(compact('generalMaestroCliente', 'generalMaestroPersonas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Maestro Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalMaestroCliente = $this->GeneralMaestroClientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalMaestroCliente = $this->GeneralMaestroClientes->patchEntity($generalMaestroCliente, $this->request->getData());
            if ($this->GeneralMaestroClientes->save($generalMaestroCliente)) {
                $this->Flash->success(__('The general maestro cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro cliente could not be saved. Please, try again.'));
        }
        $generalMaestroPersonas = $this->GeneralMaestroClientes->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $this->set(compact('generalMaestroCliente', 'generalMaestroPersonas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Maestro Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalMaestroCliente = $this->GeneralMaestroClientes->get($id);
        if ($this->GeneralMaestroClientes->delete($generalMaestroCliente)) {
            $this->Flash->success(__('The general maestro cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The general maestro cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
