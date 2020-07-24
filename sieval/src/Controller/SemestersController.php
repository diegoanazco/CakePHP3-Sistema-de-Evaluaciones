<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Semesters Controller
 *
 * @property \App\Model\Table\SemestersTable $Semesters
 *
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SemestersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StudyPlans'],
        ];
        $semesters = $this->paginate($this->Semesters);

        $this->set(compact('semesters'));
    }

    /**
     * View method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semester = $this->Semesters->get($id, [
            'contain' => ['StudyPlans'],
        ]);

        $this->set('semester', $semester);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semester = $this->Semesters->newEntity();
        if ($this->request->is('post')) {
            $semester = $this->Semesters->patchEntity($semester, $this->request->getData());
            if ($this->Semesters->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $studyPlans = $this->Semesters->StudyPlans->find('list', ['limit' => 200]);
        $this->set(compact('semester', 'studyPlans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semester = $this->Semesters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semester = $this->Semesters->patchEntity($semester, $this->request->getData());
            if ($this->Semesters->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $studyPlans = $this->Semesters->StudyPlans->find('list', ['limit' => 200]);
        $this->set(compact('semester', 'studyPlans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semester = $this->Semesters->get($id);
        if ($this->Semesters->delete($semester)) {
            $this->Flash->success(__('The semester has been deleted.'));
        } else {
            $this->Flash->error(__('The semester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
