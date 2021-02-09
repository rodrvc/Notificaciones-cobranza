<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralComunas Controller
 *
 * @property \App\Model\Table\GeneralComunasTable $GeneralComunas
 *
 * @method \App\Model\Entity\GeneralComuna[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralComunasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalComunas = $this->paginate($this->GeneralComunas);

        $this->set(compact('generalComunas'));
    }

    /**
     * View method
     *
     * @param string|null $id General Comuna id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalComuna = $this->GeneralComunas->get($id, [
            'contain' => ['GeneralMaestroPersonas']
        ]);

        $this->set('generalComuna', $generalComuna);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalComuna = $this->GeneralComunas->newEntity();
        if ($this->request->is('post')) {
            $generalComuna = $this->GeneralComunas->patchEntity($generalComuna, $this->request->getData());
            if ($this->GeneralComunas->save($generalComuna)) {
                $this->Flash->success(__('The general comuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general comuna could not be saved. Please, try again.'));
        }
        $this->set(compact('generalComuna'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Comuna id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalComuna = $this->GeneralComunas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalComuna = $this->GeneralComunas->patchEntity($generalComuna, $this->request->getData());
            if ($this->GeneralComunas->save($generalComuna)) {
                $this->Flash->success(__('The general comuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general comuna could not be saved. Please, try again.'));
        }
        $this->set(compact('generalComuna'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Comuna id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalComuna = $this->GeneralComunas->get($id);
        if ($this->GeneralComunas->delete($generalComuna)) {
            $this->Flash->success(__('The general comuna has been deleted.'));
        } else {
            $this->Flash->error(__('The general comuna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
