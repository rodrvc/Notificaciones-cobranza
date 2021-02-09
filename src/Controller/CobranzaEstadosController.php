<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CobranzaEstados Controller
 *
 * @property \App\Model\Table\CobranzaEstadosTable $CobranzaEstados
 *
 * @method \App\Model\Entity\CobranzaEstado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CobranzaEstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cobranzaEstados = $this->paginate($this->CobranzaEstados);

        $this->set(compact('cobranzaEstados'));
    }

    /**
     * View method
     *
     * @param string|null $id Cobranza Estado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cobranzaEstado = $this->CobranzaEstados->get($id, [
            'contain' => []
        ]);

        $this->set('cobranzaEstado', $cobranzaEstado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cobranzaEstado = $this->CobranzaEstados->newEntity();
        if ($this->request->is('post')) {
            $cobranzaEstado = $this->CobranzaEstados->patchEntity($cobranzaEstado, $this->request->getData());
            if ($this->CobranzaEstados->save($cobranzaEstado)) {
                $this->Flash->success(__('The cobranza estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza estado could not be saved. Please, try again.'));
        }
        $this->set(compact('cobranzaEstado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobranza Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cobranzaEstado = $this->CobranzaEstados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobranzaEstado = $this->CobranzaEstados->patchEntity($cobranzaEstado, $this->request->getData());
            if ($this->CobranzaEstados->save($cobranzaEstado)) {
                $this->Flash->success(__('The cobranza estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza estado could not be saved. Please, try again.'));
        }
        $this->set(compact('cobranzaEstado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cobranza Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cobranzaEstado = $this->CobranzaEstados->get($id);
        if ($this->CobranzaEstados->delete($cobranzaEstado)) {
            $this->Flash->success(__('The cobranza estado has been deleted.'));
        } else {
            $this->Flash->error(__('The cobranza estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
