<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDtePagos Controller
 *
 * @property \App\Model\Table\FactDtePagosTable $FactDtePagos
 *
 * @method \App\Model\Entity\FactDtePago[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDtePagosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $factDtePagos = $this->paginate($this->FactDtePagos);

        $this->set(compact('factDtePagos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte Pago id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDtePago = $this->FactDtePagos->get($id, [
            'contain' => ['FactDtes']
        ]);

        $this->set('factDtePago', $factDtePago);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDtePago = $this->FactDtePagos->newEntity();
        if ($this->request->is('post')) {
            $factDtePago = $this->FactDtePagos->patchEntity($factDtePago, $this->request->getData());
            if ($this->FactDtePagos->save($factDtePago)) {
                $this->Flash->success(__('The fact dte pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte pago could not be saved. Please, try again.'));
        }
        $this->set(compact('factDtePago'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte Pago id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDtePago = $this->FactDtePagos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDtePago = $this->FactDtePagos->patchEntity($factDtePago, $this->request->getData());
            if ($this->FactDtePagos->save($factDtePago)) {
                $this->Flash->success(__('The fact dte pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte pago could not be saved. Please, try again.'));
        }
        $this->set(compact('factDtePago'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte Pago id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDtePago = $this->FactDtePagos->get($id);
        if ($this->FactDtePagos->delete($factDtePago)) {
            $this->Flash->success(__('The fact dte pago has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte pago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
