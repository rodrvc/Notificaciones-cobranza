<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralClasificacionRuts Controller
 *
 * @property \App\Model\Table\GeneralClasificacionRutsTable $GeneralClasificacionRuts
 *
 * @method \App\Model\Entity\GeneralClasificacionRut[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralClasificacionRutsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalClasificacionRuts = $this->paginate($this->GeneralClasificacionRuts);

        $this->set(compact('generalClasificacionRuts'));
    }

    /**
     * View method
     *
     * @param string|null $id General Clasificacion Rut id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalClasificacionRut = $this->GeneralClasificacionRuts->get($id, [
            'contain' => ['GeneralClasificacionRutMaestroPersonas']
        ]);

        $this->set('generalClasificacionRut', $generalClasificacionRut);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalClasificacionRut = $this->GeneralClasificacionRuts->newEntity();
        if ($this->request->is('post')) {
            $generalClasificacionRut = $this->GeneralClasificacionRuts->patchEntity($generalClasificacionRut, $this->request->getData());
            if ($this->GeneralClasificacionRuts->save($generalClasificacionRut)) {
                $this->Flash->success(__('The general clasificacion rut has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general clasificacion rut could not be saved. Please, try again.'));
        }
        $this->set(compact('generalClasificacionRut'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Clasificacion Rut id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalClasificacionRut = $this->GeneralClasificacionRuts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalClasificacionRut = $this->GeneralClasificacionRuts->patchEntity($generalClasificacionRut, $this->request->getData());
            if ($this->GeneralClasificacionRuts->save($generalClasificacionRut)) {
                $this->Flash->success(__('The general clasificacion rut has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general clasificacion rut could not be saved. Please, try again.'));
        }
        $this->set(compact('generalClasificacionRut'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Clasificacion Rut id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalClasificacionRut = $this->GeneralClasificacionRuts->get($id);
        if ($this->GeneralClasificacionRuts->delete($generalClasificacionRut)) {
            $this->Flash->success(__('The general clasificacion rut has been deleted.'));
        } else {
            $this->Flash->error(__('The general clasificacion rut could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
