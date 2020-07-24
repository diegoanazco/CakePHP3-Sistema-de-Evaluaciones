<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Annexes Controller
 *
 * @property \App\Model\Table\AnnexesTable $Annexes
 *
 * @method \App\Model\Entity\Annex[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnnexesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tests'],
        ];
        $annexes = $this->paginate($this->Annexes);

        $this->set(compact('annexes'));
    }

    /**
     * View method
     *
     * @param string|null $id Annex id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $annex = $this->Annexes->get($id, [
            'contain' => ['Tests'],
        ]);

        $this->set('annex', $annex);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $annex = $this->Annexes->newEntity();
        if ($this->request->is('post')) {
            $annex = $this->Annexes->patchEntity($annex, $this->request->getData());
            if ($this->Annexes->save($annex)) {
                $this->Flash->success(__('The annex has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annex could not be saved. Please, try again.'));
        }
        $tests = $this->Annexes->Tests->find('list', ['limit' => 200]);
        $this->set(compact('annex', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Annex id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $annex = $this->Annexes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $annex = $this->Annexes->patchEntity($annex, $this->request->getData());
            if ($this->Annexes->save($annex)) {
                $this->Flash->success(__('The annex has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annex could not be saved. Please, try again.'));
        }
        $tests = $this->Annexes->Tests->find('list', ['limit' => 200]);
        $this->set(compact('annex', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Annex id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $annex = $this->Annexes->get($id);
        if ($this->Annexes->delete($annex)) {
            $this->Flash->success(__('The annex has been deleted.'));
        } else {
            $this->Flash->error(__('The annex could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
public function isAuthorized($user)
{
	if(isset($user['roles_id']) and $user['roles_id'] === 6)
	{
		return true;
	}
	return parent::isAuthorized($user);
}



}
