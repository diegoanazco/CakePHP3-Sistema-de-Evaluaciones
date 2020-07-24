<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudyPlans Controller
 *
 * @property \App\Model\Table\StudyPlansTable $StudyPlans
 *
 * @method \App\Model\Entity\StudyPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudyPlansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schools'],
        ];
        $studyPlans = $this->paginate($this->StudyPlans);

        $this->set(compact('studyPlans'));
    }

    /**
     * View method
     *
     * @param string|null $id Study Plan id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studyPlan = $this->StudyPlans->get($id, [
            'contain' => ['Schools'],
        ]);

        $this->set('studyPlan', $studyPlan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studyPlan = $this->StudyPlans->newEntity();
        if ($this->request->is('post')) {
            $studyPlan = $this->StudyPlans->patchEntity($studyPlan, $this->request->getData());
            if ($this->StudyPlans->save($studyPlan)) {
                $this->Flash->success(__('The study plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The study plan could not be saved. Please, try again.'));
        }
        $schools = $this->StudyPlans->Schools->find('list', ['limit' => 200]);
        $this->set(compact('studyPlan', 'schools'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Study Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studyPlan = $this->StudyPlans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studyPlan = $this->StudyPlans->patchEntity($studyPlan, $this->request->getData());
            if ($this->StudyPlans->save($studyPlan)) {
                $this->Flash->success(__('The study plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The study plan could not be saved. Please, try again.'));
        }
        $schools = $this->StudyPlans->Schools->find('list', ['limit' => 200]);
        $this->set(compact('studyPlan', 'schools'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Study Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studyPlan = $this->StudyPlans->get($id);
        if ($this->StudyPlans->delete($studyPlan)) {
            $this->Flash->success(__('The study plan has been deleted.'));
        } else {
            $this->Flash->error(__('The study plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
