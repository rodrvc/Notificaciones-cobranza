<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MedioPagoCompras Controller
 *
 * @property \App\Model\Table\MedioPagoComprasTable $MedioPagoCompras
 *
 * @method \App\Model\Entity\MedioPagoCompra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedioPagoComprasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $medioPagoCompras = $this->paginate($this->MedioPagoCompras);

        $this->set(compact('medioPagoCompras'));
    }

    /**
     * View method
     *
     * @param string|null $id Medio Pago Compra id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medioPagoCompra = $this->MedioPagoCompras->get($id, [
            'contain' => ['GeneralClasificacionRutMaestroPersonas']
        ]);

        $this->set('medioPagoCompra', $medioPagoCompra);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medioPagoCompra = $this->MedioPagoCompras->newEntity();
        if ($this->request->is('post')) {
            $medioPagoCompra = $this->MedioPagoCompras->patchEntity($medioPagoCompra, $this->request->getData());
            if ($this->MedioPagoCompras->save($medioPagoCompra)) {
                $this->Flash->success(__('The medio pago compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio pago compra could not be saved. Please, try again.'));
        }
        $this->set(compact('medioPagoCompra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medio Pago Compra id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medioPagoCompra = $this->MedioPagoCompras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medioPagoCompra = $this->MedioPagoCompras->patchEntity($medioPagoCompra, $this->request->getData());
            if ($this->MedioPagoCompras->save($medioPagoCompra)) {
                $this->Flash->success(__('The medio pago compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio pago compra could not be saved. Please, try again.'));
        }
        $this->set(compact('medioPagoCompra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medio Pago Compra id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medioPagoCompra = $this->MedioPagoCompras->get($id);
        if ($this->MedioPagoCompras->delete($medioPagoCompra)) {
            $this->Flash->success(__('The medio pago compra has been deleted.'));
        } else {
            $this->Flash->error(__('The medio pago compra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
