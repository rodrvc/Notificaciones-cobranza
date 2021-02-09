<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MedioPagoVentas Controller
 *
 * @property \App\Model\Table\MedioPagoVentasTable $MedioPagoVentas
 *
 * @method \App\Model\Entity\MedioPagoVenta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedioPagoVentasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $medioPagoVentas = $this->paginate($this->MedioPagoVentas);

        $this->set(compact('medioPagoVentas'));
    }

    /**
     * View method
     *
     * @param string|null $id Medio Pago Venta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medioPagoVenta = $this->MedioPagoVentas->get($id, [
            'contain' => ['GeneralClasificacionRutMaestroPersonas']
        ]);

        $this->set('medioPagoVenta', $medioPagoVenta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medioPagoVenta = $this->MedioPagoVentas->newEntity();
        if ($this->request->is('post')) {
            $medioPagoVenta = $this->MedioPagoVentas->patchEntity($medioPagoVenta, $this->request->getData());
            if ($this->MedioPagoVentas->save($medioPagoVenta)) {
                $this->Flash->success(__('The medio pago venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio pago venta could not be saved. Please, try again.'));
        }
        $this->set(compact('medioPagoVenta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medio Pago Venta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medioPagoVenta = $this->MedioPagoVentas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medioPagoVenta = $this->MedioPagoVentas->patchEntity($medioPagoVenta, $this->request->getData());
            if ($this->MedioPagoVentas->save($medioPagoVenta)) {
                $this->Flash->success(__('The medio pago venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio pago venta could not be saved. Please, try again.'));
        }
        $this->set(compact('medioPagoVenta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medio Pago Venta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medioPagoVenta = $this->MedioPagoVentas->get($id);
        if ($this->MedioPagoVentas->delete($medioPagoVenta)) {
            $this->Flash->success(__('The medio pago venta has been deleted.'));
        } else {
            $this->Flash->error(__('The medio pago venta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
