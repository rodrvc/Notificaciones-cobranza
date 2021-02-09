<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CobranzaNotificacionTipos Controller
 *
 * @property \App\Model\Table\CobranzaNotificacionTiposTable $CobranzaNotificacionTipos
 *
 * @method \App\Model\Entity\CobranzaNotificacionTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CobranzaNotificacionTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cobranzaNotificacionTipos = $this->paginate($this->CobranzaNotificacionTipos);

        $this->set(compact('cobranzaNotificacionTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cobranza Notificacion Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->get($id, [
            'contain' => ['CobranzaNotificacionConfiguraciones']
        ]);

        $this->set('cobranzaNotificacionTipo', $cobranzaNotificacionTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->newEntity();
        if ($this->request->is('post')) {
            $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->patchEntity($cobranzaNotificacionTipo, $this->request->getData());
            if ($this->CobranzaNotificacionTipos->save($cobranzaNotificacionTipo)) {
                $this->Flash->success(__('The cobranza notificacion tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza notificacion tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('cobranzaNotificacionTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobranza Notificacion Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->patchEntity($cobranzaNotificacionTipo, $this->request->getData());
            if ($this->CobranzaNotificacionTipos->save($cobranzaNotificacionTipo)) {
                $this->Flash->success(__('The cobranza notificacion tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobranza notificacion tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('cobranzaNotificacionTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cobranza Notificacion Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cobranzaNotificacionTipo = $this->CobranzaNotificacionTipos->get($id);
        if ($this->CobranzaNotificacionTipos->delete($cobranzaNotificacionTipo)) {
            $this->Flash->success(__('The cobranza notificacion tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The cobranza notificacion tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
