<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Directors Controller
 *
 * @property \App\Model\Table\DirectorsTable $Directors
 *
 * @method \App\Model\Entity\Director[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DirectorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Departments'],
        ];
        $directors = $this->paginate($this->Directors);

        $this->set(compact('directors'));
    }

    /**
     * View method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $director = $this->Directors->get($id, [
            'contain' => ['Users', 'Departments'],
        ]);

        $this->set('director', $director);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $director = $this->Directors->newEntity();
        if ($this->request->is('post')) {
            $director = $this->Directors->patchEntity($director, $this->request->getData());
            if ($this->Directors->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The director could not be saved. Please, try again.'));
        }
        $users = $this->Directors->Users->find('list', ['limit' => 200]);
        $departments = $this->Directors->Departments->find('list', ['limit' => 200]);
        $this->set(compact('director', 'users', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $director = $this->Directors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $director = $this->Directors->patchEntity($director, $this->request->getData());
            if ($this->Directors->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The director could not be saved. Please, try again.'));
        }
        $users = $this->Directors->Users->find('list', ['limit' => 200]);
        $departments = $this->Directors->Departments->find('list', ['limit' => 200]);
        $this->set(compact('director', 'users', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $director = $this->Directors->get($id);
        if ($this->Directors->delete($director)) {
            $this->Flash->success(__('The director has been deleted.'));
        } else {
            $this->Flash->error(__('The director could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
