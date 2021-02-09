<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDteTipos Controller
 *
 * @property \App\Model\Table\FactDteTiposTable $FactDteTipos
 *
 * @method \App\Model\Entity\FactDteTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDteTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $factDteTipos = $this->paginate($this->FactDteTipos);

        $this->set(compact('factDteTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDteTipo = $this->FactDteTipos->get($id, [
            'contain' => ['FactDteTipoDetalles', 'FactDtes']
        ]);

        $this->set('factDteTipo', $factDteTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDteTipo = $this->FactDteTipos->newEntity();
        if ($this->request->is('post')) {
            $factDteTipo = $this->FactDteTipos->patchEntity($factDteTipo, $this->request->getData());
            if ($this->FactDteTipos->save($factDteTipo)) {
                $this->Flash->success(__('The fact dte tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDteTipo = $this->FactDteTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDteTipo = $this->FactDteTipos->patchEntity($factDteTipo, $this->request->getData());
            if ($this->FactDteTipos->save($factDteTipo)) {
                $this->Flash->success(__('The fact dte tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('factDteTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDteTipo = $this->FactDteTipos->get($id);
        if ($this->FactDteTipos->delete($factDteTipo)) {
            $this->Flash->success(__('The fact dte tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
