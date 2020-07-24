<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deans Controller
 *
 * @property \App\Model\Table\DeansTable $Deans
 *
 * @method \App\Model\Entity\Dean[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Faculties'],
        ];
        $deans = $this->paginate($this->Deans);

        $this->set(compact('deans'));
    }

    /**
     * View method
     *
     * @param string|null $id Dean id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dean = $this->Deans->get($id, [
            'contain' => ['Users', 'Faculties'],
        ]);

        $this->set('dean', $dean);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dean = $this->Deans->newEntity();
        if ($this->request->is('post')) {
            $dean = $this->Deans->patchEntity($dean, $this->request->getData());
            if ($this->Deans->save($dean)) {
                $this->Flash->success(__('The dean has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dean could not be saved. Please, try again.'));
        }
        $users = $this->Deans->Users->find('list', ['limit' => 200]);
        $faculties = $this->Deans->Faculties->find('list', ['limit' => 200]);
        $this->set(compact('dean', 'users', 'faculties'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dean id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dean = $this->Deans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dean = $this->Deans->patchEntity($dean, $this->request->getData());
            if ($this->Deans->save($dean)) {
                $this->Flash->success(__('The dean has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dean could not be saved. Please, try again.'));
        }
        $users = $this->Deans->Users->find('list', ['limit' => 200]);
        $faculties = $this->Deans->Faculties->find('list', ['limit' => 200]);
        $this->set(compact('dean', 'users', 'faculties'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dean id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dean = $this->Deans->get($id);
        if ($this->Deans->delete($dean)) {
            $this->Flash->success(__('The dean has been deleted.'));
        } else {
            $this->Flash->error(__('The dean could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
