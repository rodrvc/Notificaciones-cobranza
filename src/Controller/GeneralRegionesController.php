<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralRegiones Controller
 *
 * @property \App\Model\Table\GeneralRegionesTable $GeneralRegiones
 *
 * @method \App\Model\Entity\GeneralRegione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralRegionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalRegiones = $this->paginate($this->GeneralRegiones);

        $this->set(compact('generalRegiones'));
    }

    /**
     * View method
     *
     * @param string|null $id General Regione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalRegione = $this->GeneralRegiones->get($id, [
            'contain' => ['GeneralMaestroPersonas']
        ]);

        $this->set('generalRegione', $generalRegione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalRegione = $this->GeneralRegiones->newEntity();
        if ($this->request->is('post')) {
            $generalRegione = $this->GeneralRegiones->patchEntity($generalRegione, $this->request->getData());
            if ($this->GeneralRegiones->save($generalRegione)) {
                $this->Flash->success(__('The general regione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general regione could not be saved. Please, try again.'));
        }
        $this->set(compact('generalRegione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Regione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalRegione = $this->GeneralRegiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalRegione = $this->GeneralRegiones->patchEntity($generalRegione, $this->request->getData());
            if ($this->GeneralRegiones->save($generalRegione)) {
                $this->Flash->success(__('The general regione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general regione could not be saved. Please, try again.'));
        }
        $this->set(compact('generalRegione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Regione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalRegione = $this->GeneralRegiones->get($id);
        if ($this->GeneralRegiones->delete($generalRegione)) {
            $this->Flash->success(__('The general regione has been deleted.'));
        } else {
            $this->Flash->error(__('The general regione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
