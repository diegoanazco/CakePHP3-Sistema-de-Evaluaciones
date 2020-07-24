<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rectors Controller
 *
 * @property \App\Model\Table\RectorsTable $Rectors
 *
 * @method \App\Model\Entity\Rector[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RectorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Colleges'],
        ];
        $rectors = $this->paginate($this->Rectors);

        $this->set(compact('rectors'));
    }

    /**
     * View method
     *
     * @param string|null $id Rector id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rector = $this->Rectors->get($id, [
            'contain' => ['Users', 'Colleges'],
        ]);

        $this->set('rector', $rector);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rector = $this->Rectors->newEntity();
        if ($this->request->is('post')) {
            $rector = $this->Rectors->patchEntity($rector, $this->request->getData());
            if ($this->Rectors->save($rector)) {
                $this->Flash->success(__('The rector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rector could not be saved. Please, try again.'));
        }
        $users = $this->Rectors->Users->find('list', ['limit' => 200]);
        $colleges = $this->Rectors->Colleges->find('list', ['limit' => 200]);
        $this->set(compact('rector', 'users', 'colleges'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rector id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rector = $this->Rectors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rector = $this->Rectors->patchEntity($rector, $this->request->getData());
            if ($this->Rectors->save($rector)) {
                $this->Flash->success(__('The rector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rector could not be saved. Please, try again.'));
        }
        $users = $this->Rectors->Users->find('list', ['limit' => 200]);
        $colleges = $this->Rectors->Colleges->find('list', ['limit' => 200]);
        $this->set(compact('rector', 'users', 'colleges'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rector id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rector = $this->Rectors->get($id);
        if ($this->Rectors->delete($rector)) {
            $this->Flash->success(__('The rector has been deleted.'));
        } else {
            $this->Flash->error(__('The rector could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
