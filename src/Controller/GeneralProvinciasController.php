<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralProvincias Controller
 *
 * @property \App\Model\Table\GeneralProvinciasTable $GeneralProvincias
 *
 * @method \App\Model\Entity\GeneralProvincia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralProvinciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalProvincias = $this->paginate($this->GeneralProvincias);

        $this->set(compact('generalProvincias'));
    }

    /**
     * View method
     *
     * @param string|null $id General Provincia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalProvincia = $this->GeneralProvincias->get($id, [
            'contain' => ['GeneralMaestroPersonas']
        ]);

        $this->set('generalProvincia', $generalProvincia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalProvincia = $this->GeneralProvincias->newEntity();
        if ($this->request->is('post')) {
            $generalProvincia = $this->GeneralProvincias->patchEntity($generalProvincia, $this->request->getData());
            if ($this->GeneralProvincias->save($generalProvincia)) {
                $this->Flash->success(__('The general provincia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general provincia could not be saved. Please, try again.'));
        }
        $this->set(compact('generalProvincia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Provincia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalProvincia = $this->GeneralProvincias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalProvincia = $this->GeneralProvincias->patchEntity($generalProvincia, $this->request->getData());
            if ($this->GeneralProvincias->save($generalProvincia)) {
                $this->Flash->success(__('The general provincia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general provincia could not be saved. Please, try again.'));
        }
        $this->set(compact('generalProvincia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Provincia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalProvincia = $this->GeneralProvincias->get($id);
        if ($this->GeneralProvincias->delete($generalProvincia)) {
            $this->Flash->success(__('The general provincia has been deleted.'));
        } else {
            $this->Flash->error(__('The general provincia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
