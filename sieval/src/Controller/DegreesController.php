<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Degrees Controller
 *
 * @property \App\Model\Table\DegreesTable $Degrees
 *
 * @method \App\Model\Entity\Degree[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DegreesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $degrees = $this->paginate($this->Degrees);

        $this->set(compact('degrees'));
    }

    /**
     * View method
     *
     * @param string|null $id Degree id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $degree = $this->Degrees->get($id, [
            'contain' => [],
        ]);

        $this->set('degree', $degree);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $degree = $this->Degrees->newEntity();
        if ($this->request->is('post')) {
            $degree = $this->Degrees->patchEntity($degree, $this->request->getData());
            if ($this->Degrees->save($degree)) {
                $this->Flash->success(__('The degree has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The degree could not be saved. Please, try again.'));
        }
        $this->set(compact('degree'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Degree id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $degree = $this->Degrees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $degree = $this->Degrees->patchEntity($degree, $this->request->getData());
            if ($this->Degrees->save($degree)) {
                $this->Flash->success(__('The degree has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The degree could not be saved. Please, try again.'));
        }
        $this->set(compact('degree'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Degree id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $degree = $this->Degrees->get($id);
        if ($this->Degrees->delete($degree)) {
            $this->Flash->success(__('The degree has been deleted.'));
        } else {
            $this->Flash->error(__('The degree could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
