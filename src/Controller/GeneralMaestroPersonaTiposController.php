<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneralMaestroPersonaTipos Controller
 *
 * @property \App\Model\Table\GeneralMaestroPersonaTiposTable $GeneralMaestroPersonaTipos
 *
 * @method \App\Model\Entity\GeneralMaestroPersonaTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralMaestroPersonaTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generalMaestroPersonaTipos = $this->paginate($this->GeneralMaestroPersonaTipos);

        $this->set(compact('generalMaestroPersonaTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id General Maestro Persona Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->get($id, [
            'contain' => []
        ]);

        $this->set('generalMaestroPersonaTipo', $generalMaestroPersonaTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->newEntity();
        if ($this->request->is('post')) {
            $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->patchEntity($generalMaestroPersonaTipo, $this->request->getData());
            if ($this->GeneralMaestroPersonaTipos->save($generalMaestroPersonaTipo)) {
                $this->Flash->success(__('The general maestro persona tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro persona tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('generalMaestroPersonaTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General Maestro Persona Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->patchEntity($generalMaestroPersonaTipo, $this->request->getData());
            if ($this->GeneralMaestroPersonaTipos->save($generalMaestroPersonaTipo)) {
                $this->Flash->success(__('The general maestro persona tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general maestro persona tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('generalMaestroPersonaTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General Maestro Persona Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generalMaestroPersonaTipo = $this->GeneralMaestroPersonaTipos->get($id);
        if ($this->GeneralMaestroPersonaTipos->delete($generalMaestroPersonaTipo)) {
            $this->Flash->success(__('The general maestro persona tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The general maestro persona tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
