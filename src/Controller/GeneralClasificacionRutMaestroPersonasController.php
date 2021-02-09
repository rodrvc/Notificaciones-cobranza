<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralClasificacionRutMaestroPersonas Controller
 *
 * @property \App\Model\Table\GeneralClasificacionRutMaestroPersonasTable $GeneralClasificacionRutMaestroPersonas
 *
 * @method \App\Model\Entity\GeneralClasificacionRutMaestroPersona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralClasificacionRutMaestroPersonasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeneralMaestroPersonas', 'GeneralMaestroClientes', 'GeneralClasificacionRuts']
        ];
        $generalClasificacionRutMaestroPersonas = $this->paginate($this->GeneralClasificacionRutMaestroPersonas);

        $this->set(compact('generalClasificacionRutMaestroPersonas'));
    }

    /**
     * View method
     *
     * @param string|null $id General Clasificacion Rut Maestro Persona id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->get($id, [
            'contain' => ['GeneralMaestroPersonas', 'GeneralMaestroClientes', 'GeneralClasificacionRuts']
        ]);

        $this->set('generalClasificacionRutMaestroPersona', $generalClasificacionRutMaestroPersona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->newEntity();
        if ($this->request->is('post')) {
            $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->patchEntity($generalClasificacionRutMaestroPersona, $this->request->getData());
            if ($this->GeneralClasificacionRutMaestroPersonas->save($generalClasificacionRutMaestroPersona)) {
                $this->Flash->success(__('The general clasificacion rut maestro persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general clasificacion rut maestro persona could not be saved. Please, try again.'));
        }
        $generalMaestroPersonas = $this->GeneralClasificacionRutMaestroPersonas->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $generalMaestroClientes = $this->GeneralClasificacionRutMaestroPersonas->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $generalClasificacionRuts = $this->GeneralClasificacionRutMaestroPersonas->GeneralClasificacionRuts->find('list', ['limit' => 200]);
        
        $this->set(compact('generalClasificacionRutMaestroPersona', 'generalMaestroPersonas', 'generalMaestroClientes', 'generalClasificacionRuts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Clasificacion Rut Maestro Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->patchEntity($generalClasificacionRutMaestroPersona, $this->request->getData());
            if ($this->GeneralClasificacionRutMaestroPersonas->save($generalClasificacionRutMaestroPersona)) {
                $this->Flash->success(__('The general clasificacion rut maestro persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general clasificacion rut maestro persona could not be saved. Please, try again.'));
        }
        $generalMaestroPersonas = $this->GeneralClasificacionRutMaestroPersonas->GeneralMaestroPersonas->find('list', ['limit' => 200]);
        $generalMaestroClientes = $this->GeneralClasificacionRutMaestroPersonas->GeneralMaestroClientes->find('list', ['limit' => 200]);
        $generalClasificacionRuts = $this->GeneralClasificacionRutMaestroPersonas->GeneralClasificacionRuts->find('list', ['limit' => 200]);
       
        $this->set(compact('generalClasificacionRutMaestroPersona', 'generalMaestroPersonas', 'generalMaestroClientes', 'generalClasificacionRuts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Clasificacion Rut Maestro Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalClasificacionRutMaestroPersona = $this->GeneralClasificacionRutMaestroPersonas->get($id);
        if ($this->GeneralClasificacionRutMaestroPersonas->delete($generalClasificacionRutMaestroPersona)) {
            $this->Flash->success(__('The general clasificacion rut maestro persona has been deleted.'));
        } else {
            $this->Flash->error(__('The general clasificacion rut maestro persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
