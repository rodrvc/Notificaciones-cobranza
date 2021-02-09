<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDteMovimientos Controller
 *
 * @property \App\Model\Table\FactDteMovimientosTable $FactDteMovimientos
 *
 * @method \App\Model\Entity\FactDteMovimiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDteMovimientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $factDteMovimientos = $this->paginate($this->FactDteMovimientos);

        $this->set(compact('factDteMovimientos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte Movimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDteMovimiento = $this->FactDteMovimientos->get($id, [
            'contain' => ['FactDtes']
        ]);

        $this->set('factDteMovimiento', $factDteMovimiento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDteMovimiento = $this->FactDteMovimientos->newEntity();
        if ($this->request->is('post')) {
            $factDteMovimiento = $this->FactDteMovimientos->patchEntity($factDteMovimiento, $this->request->getData());
            if ($this->FactDteMovimientos->save($factDteMovimiento)) {
                $this->Flash->success(__('The fact dte movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte movimiento could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteMovimiento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte Movimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDteMovimiento = $this->FactDteMovimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDteMovimiento = $this->FactDteMovimientos->patchEntity($factDteMovimiento, $this->request->getData());
            if ($this->FactDteMovimientos->save($factDteMovimiento)) {
                $this->Flash->success(__('The fact dte movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte movimiento could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteMovimiento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte Movimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDteMovimiento = $this->FactDteMovimientos->get($id);
        if ($this->FactDteMovimientos->delete($factDteMovimiento)) {
            $this->Flash->success(__('The fact dte movimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte movimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
