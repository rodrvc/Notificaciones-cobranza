<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FactDtesProducto Controller
 *
 * @property \App\Model\Table\FactDtesProductoTable $FactDtesProducto
 *
 * @method \App\Model\Entity\FactDtesProducto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactDtesProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
   




    public function index()
    {
        $factDtesProducto = $this->paginate($this->FactDtesProducto);

        $this->set(compact('factDtesProducto'));
    }

    /**
     * View method
     *
     * @param string|null $id Fact Dtes Producto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factDtesProducto = $this->FactDtesProducto->get($id, [
            'contain' => []
        ]);

        $this->set('factDtesProducto', $factDtesProducto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factDtesProducto = $this->FactDtesProducto->newEntity();
        if ($this->request->is('post')) {
            $factDtesProducto = $this->FactDtesProducto->patchEntity($factDtesProducto, $this->request->getData());
            if ($this->FactDtesProducto->save($factDtesProducto)) {
                $this->Flash->success(__('The fact dtes producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dtes producto could not be saved. Please, try again.'));
        }
        $this->set(compact('factDtesProducto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fact Dtes Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factDtesProducto = $this->FactDtesProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factDtesProducto = $this->FactDtesProducto->patchEntity($factDtesProducto, $this->request->getData());
            if ($this->FactDtesProducto->save($factDtesProducto)) {
                $this->Flash->success(__('The fact dtes producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fact dtes producto could not be saved. Please, try again.'));
        }
        $this->set(compact('factDtesProducto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fact Dtes Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factDtesProducto = $this->FactDtesProducto->get($id);
        if ($this->FactDtesProducto->delete($factDtesProducto)) {
            $this->Flash->success(__('The fact dtes producto has been deleted.'));
        } else {
            $this->Flash->error(__('The fact dtes producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
