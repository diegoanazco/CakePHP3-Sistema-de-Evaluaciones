<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Academics Controller
 *
 * @property \App\Model\Table\AcademicsTable $Academics
 *
 * @method \App\Model\Entity\Academic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademicsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coordinators', 'Schools'],
        ];
        $academics = $this->paginate($this->Academics);

        $this->set(compact('academics'));
    }

    /**
     * View method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academic = $this->Academics->get($id, [
            'contain' => ['Coordinators', 'Schools'],
        ]);

        $this->set('academic', $academic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academic = $this->Academics->newEntity();
        if ($this->request->is('post')) {
            $academic = $this->Academics->patchEntity($academic, $this->request->getData());
            if ($this->Academics->save($academic)) {
                $this->Flash->success(__('The academic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic could not be saved. Please, try again.'));
        }
        $coordinators = $this->Academics->Coordinators->find('list', ['limit' => 200]);
        $schools = $this->Academics->Schools->find('list', ['limit' => 200]);
        $this->set(compact('academic', 'coordinators', 'schools'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academic = $this->Academics->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academic = $this->Academics->patchEntity($academic, $this->request->getData());
            if ($this->Academics->save($academic)) {
                $this->Flash->success(__('The academic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The academic could not be saved. Please, try again.'));
        }
        $coordinators = $this->Academics->Coordinators->find('list', ['limit' => 200]);
        $schools = $this->Academics->Schools->find('list', ['limit' => 200]);
        $this->set(compact('academic', 'coordinators', 'schools'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academic = $this->Academics->get($id);
        if ($this->Academics->delete($academic)) {
            $this->Flash->success(__('The academic has been deleted.'));
        } else {
            $this->Flash->error(__('The academic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
