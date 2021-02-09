<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralUsers Controller
 *
 * @property \App\Model\Table\GeneralUsersTable $GeneralUsers
 *
 * @method \App\Model\Entity\GeneralUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeneralCargos']
        ];
        $generalUsers = $this->paginate($this->GeneralUsers);

        $this->set(compact('generalUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id General User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalUser = $this->GeneralUsers->get($id, [
            'contain' => ['GeneralCargos', 'CobranzaNotificacionConfiguraciones', 'FactDtes']
        ]);
        $this->set('generalUser', $generalUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalUser = $this->GeneralUsers->newEntity();
        if ($this->request->is('post')) {
            $generalUser = $this->GeneralUsers->patchEntity($generalUser, $this->request->getData());
            if ($this->GeneralUsers->save($generalUser)) {
                $this->Flash->success(__('The general user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general user could not be saved. Please, try again.'));
        }
        $generalCargos = $this->GeneralUsers->GeneralCargos->find('list', ['limit' => 200]);
        $this->set(compact('generalUser', 'generalCargos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalUser = $this->GeneralUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalUser = $this->GeneralUsers->patchEntity($generalUser, $this->request->getData());
            if ($this->GeneralUsers->save($generalUser)) {
                $this->Flash->success(__('The general user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general user could not be saved. Please, try again.'));
        }
        $generalCargos = $this->GeneralUsers->GeneralCargos->find('list', ['limit' => 200]);
        $this->set(compact('generalUser', 'generalCargos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalUser = $this->GeneralUsers->get($id);
        if ($this->GeneralUsers->delete($generalUser)) {
            $this->Flash->success(__('The general user has been deleted.'));
        } else {
            $this->Flash->error(__('The general user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
