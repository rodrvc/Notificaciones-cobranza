<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralCargos Controller
 *
 * @property \App\Model\Table\GeneralCargosTable $GeneralCargos
 *
 * @method \App\Model\Entity\GeneralCargo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralCargosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalCargos = $this->paginate($this->GeneralCargos);

        $this->set(compact('generalCargos'));
    }

    /**
     * View method
     *
     * @param string|null $id General Cargo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalCargo = $this->GeneralCargos->get($id, [
            'contain' => ['GeneralUsers']
        ]);

        $this->set('generalCargo', $generalCargo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalCargo = $this->GeneralCargos->newEntity();
        if ($this->request->is('post')) {
            $generalCargo = $this->GeneralCargos->patchEntity($generalCargo, $this->request->getData());
            if ($this->GeneralCargos->save($generalCargo)) {
                $this->Flash->success(__('The general cargo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general cargo could not be saved. Please, try again.'));
        }
        $this->set(compact('generalCargo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Cargo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalCargo = $this->GeneralCargos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalCargo = $this->GeneralCargos->patchEntity($generalCargo, $this->request->getData());
            if ($this->GeneralCargos->save($generalCargo)) {
                $this->Flash->success(__('The general cargo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general cargo could not be saved. Please, try again.'));
        }
        $this->set(compact('generalCargo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Cargo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalCargo = $this->GeneralCargos->get($id);
        if ($this->GeneralCargos->delete($generalCargo)) {
            $this->Flash->success(__('The general cargo has been deleted.'));
        } else {
            $this->Flash->error(__('The general cargo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
