<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralMaestroPersonas Controller
 *
 * @property \App\Model\Table\GeneralMaestroPersonasTable $GeneralMaestroPersonas
 *
 * @method \App\Model\Entity\GeneralMaestroPersona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralMaestroPersonasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeneralMaestroPersonaTipos', 'GeneralRegiones', 'GeneralProvincias', 'GeneralComunas']
        ];
        $generalMaestroPersonas = $this->paginate($this->GeneralMaestroPersonas);

        $this->set(compact('generalMaestroPersonas'));
    }

    /**
     * View method
     *
     * @param string|null $id General Maestro Persona id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalMaestroPersona = $this->GeneralMaestroPersonas->get($id, [
            'contain' => ['GeneralMaestroPersonaTipos', 'GeneralRegiones', 'GeneralProvincias', 'GeneralComunas', 'FactDtes', 'GeneralClasificacionRutMaestroPersonas', 'GeneralMaestroClientes']
        ]);

        $this->set('generalMaestroPersona', $generalMaestroPersona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalMaestroPersona = $this->GeneralMaestroPersonas->newEntity();
        if ($this->request->is('post')) {
            $generalMaestroPersona = $this->GeneralMaestroPersonas->patchEntity($generalMaestroPersona, $this->request->getData());
            if ($this->GeneralMaestroPersonas->save($generalMaestroPersona)) {
                $this->Flash->success(__('The general maestro persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro persona could not be saved. Please, try again.'));
        }
        $generalMaestroPersonaTipos = $this->GeneralMaestroPersonas->GeneralMaestroPersonaTipos->find('list', ['limit' => 200]);
        $generalRegiones = $this->GeneralMaestroPersonas->GeneralRegiones->find('list', ['limit' => 200]);
        $generalProvincias = $this->GeneralMaestroPersonas->GeneralProvincias->find('list', ['limit' => 200]);
        $generalComunas = $this->GeneralMaestroPersonas->GeneralComunas->find('list', ['limit' => 200]);
        $this->set(compact('generalMaestroPersona', 'generalMaestroPersonaTipos', 'generalRegiones', 'generalProvincias', 'generalComunas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Maestro Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalMaestroPersona = $this->GeneralMaestroPersonas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalMaestroPersona = $this->GeneralMaestroPersonas->patchEntity($generalMaestroPersona, $this->request->getData());
            if ($this->GeneralMaestroPersonas->save($generalMaestroPersona)) {
                $this->Flash->success(__('The general maestro persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro persona could not be saved. Please, try again.'));
        }
        $generalMaestroPersonaTipos = $this->GeneralMaestroPersonas->GeneralMaestroPersonaTipos->find('list', ['limit' => 200]);
        $generalRegiones = $this->GeneralMaestroPersonas->GeneralRegiones->find('list', ['limit' => 200]);
        $generalProvincias = $this->GeneralMaestroPersonas->GeneralProvincias->find('list', ['limit' => 200]);
        $generalComunas = $this->GeneralMaestroPersonas->GeneralComunas->find('list', ['limit' => 200]);
        $this->set(compact('generalMaestroPersona', 'generalMaestroPersonaTipos', 'generalRegiones', 'generalProvincias', 'generalComunas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Maestro Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalMaestroPersona = $this->GeneralMaestroPersonas->get($id);
        if ($this->GeneralMaestroPersonas->delete($generalMaestroPersona)) {
            $this->Flash->success(__('The general maestro persona has been deleted.'));
        } else {
            $this->Flash->error(__('The general maestro persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
