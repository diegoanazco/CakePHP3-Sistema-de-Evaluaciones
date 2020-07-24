<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesSubjects Controller
 *
 * @property \App\Model\Table\TypesSubjectsTable $TypesSubjects
 *
 * @method \App\Model\Entity\TypesSubject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesSubjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typesSubjects = $this->paginate($this->TypesSubjects);

        $this->set(compact('typesSubjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Types Subject id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesSubject = $this->TypesSubjects->get($id, [
            'contain' => [],
        ]);

        $this->set('typesSubject', $typesSubject);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesSubject = $this->TypesSubjects->newEntity();
        if ($this->request->is('post')) {
            $typesSubject = $this->TypesSubjects->patchEntity($typesSubject, $this->request->getData());
            if ($this->TypesSubjects->save($typesSubject)) {
                $this->Flash->success(__('The types subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types subject could not be saved. Please, try again.'));
        }
        $this->set(compact('typesSubject'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Subject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesSubject = $this->TypesSubjects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesSubject = $this->TypesSubjects->patchEntity($typesSubject, $this->request->getData());
            if ($this->TypesSubjects->save($typesSubject)) {
                $this->Flash->success(__('The types subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types subject could not be saved. Please, try again.'));
        }
        $this->set(compact('typesSubject'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Subject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesSubject = $this->TypesSubjects->get($id);
        if ($this->TypesSubjects->delete($typesSubject)) {
            $this->Flash->success(__('The types subject has been deleted.'));
        } else {
            $this->Flash->error(__('The types subject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
