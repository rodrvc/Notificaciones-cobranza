<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDteEstados Controller
 *
 * @property \App\Model\Table\FactDteEstadosTable $FactDteEstados
 *
 * @method \App\Model\Entity\FactDteEstado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDteEstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $factDteEstados = $this->paginate($this->FactDteEstados);

        $this->set(compact('factDteEstados'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte Estado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDteEstado = $this->FactDteEstados->get($id, [
            'contain' => ['FactDtes']
        ]);

        $this->set('factDteEstado', $factDteEstado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDteEstado = $this->FactDteEstados->newEntity();
        if ($this->request->is('post')) {
            $factDteEstado = $this->FactDteEstados->patchEntity($factDteEstado, $this->request->getData());
            if ($this->FactDteEstados->save($factDteEstado)) {
                $this->Flash->success(__('The fact dte estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte estado could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteEstado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDteEstado = $this->FactDteEstados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDteEstado = $this->FactDteEstados->patchEntity($factDteEstado, $this->request->getData());
            if ($this->FactDteEstados->save($factDteEstado)) {
                $this->Flash->success(__('The fact dte estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte estado could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteEstado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDteEstado = $this->FactDteEstados->get($id);
        if ($this->FactDteEstados->delete($factDteEstado)) {
            $this->Flash->success(__('The fact dte estado has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
