<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDteTipoDetalles Controller
 *
 * @property \App\Model\Table\FactDteTipoDetallesTable $FactDteTipoDetalles
 *
 * @method \App\Model\Entity\FactDteTipoDetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDteTipoDetallesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FactDteTipos']
        ];
        $factDteTipoDetalles = $this->paginate($this->FactDteTipoDetalles);

        $this->set(compact('factDteTipoDetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dte Tipo Detalle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDteTipoDetalle = $this->FactDteTipoDetalles->get($id, [
            'contain' => ['FactDteTipos']
        ]);

        $this->set('factDteTipoDetalle', $factDteTipoDetalle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDteTipoDetalle = $this->FactDteTipoDetalles->newEntity();
        if ($this->request->is('post')) {
            $factDteTipoDetalle = $this->FactDteTipoDetalles->patchEntity($factDteTipoDetalle, $this->request->getData());
            if ($this->FactDteTipoDetalles->save($factDteTipoDetalle)) {
                $this->Flash->success(__('The fact dte tipo detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte tipo detalle could not be saved. Please, try again.'));
        }
        $factDteTipos = $this->FactDteTipoDetalles->FactDteTipos->find('list', ['limit' => 200]);
        $this->set(compact('factDteTipoDetalle', 'factDteTipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dte Tipo Detalle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDteTipoDetalle = $this->FactDteTipoDetalles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDteTipoDetalle = $this->FactDteTipoDetalles->patchEntity($factDteTipoDetalle, $this->request->getData());
            if ($this->FactDteTipoDetalles->save($factDteTipoDetalle)) {
                $this->Flash->success(__('The fact dte tipo detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dte tipo detalle could not be saved. Please, try again.'));
        }
        $factDteTipos = $this->FactDteTipoDetalles->FactDteTipos->find('list', ['limit' => 200]);
        $this->set(compact('factDteTipoDetalle', 'factDteTipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dte Tipo Detalle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDteTipoDetalle = $this->FactDteTipoDetalles->get($id);
        if ($this->FactDteTipoDetalles->delete($factDteTipoDetalle)) {
            $this->Flash->success(__('The fact dte tipo detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dte tipo detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
