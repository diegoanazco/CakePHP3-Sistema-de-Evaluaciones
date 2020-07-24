<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesTest Controller
 *
 * @property \App\Model\Table\TypesTestTable $TypesTest
 *
 * @method \App\Model\Entity\TypesTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesTestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typesTest = $this->paginate($this->TypesTest);

        $this->set(compact('typesTest'));
    }

    /**
     * View method
     *
     * @param string|null $id Types Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesTest = $this->TypesTest->get($id, [
            'contain' => [],
        ]);

        $this->set('typesTest', $typesTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesTest = $this->TypesTest->newEntity();
        if ($this->request->is('post')) {
            $typesTest = $this->TypesTest->patchEntity($typesTest, $this->request->getData());
            if ($this->TypesTest->save($typesTest)) {
                $this->Flash->success(__('The types test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types test could not be saved. Please, try again.'));
        }
        $this->set(compact('typesTest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesTest = $this->TypesTest->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesTest = $this->TypesTest->patchEntity($typesTest, $this->request->getData());
            if ($this->TypesTest->save($typesTest)) {
                $this->Flash->success(__('The types test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types test could not be saved. Please, try again.'));
        }
        $this->set(compact('typesTest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesTest = $this->TypesTest->get($id);
        if ($this->TypesTest->delete($typesTest)) {
            $this->Flash->success(__('The types test has been deleted.'));
        } else {
            $this->Flash->error(__('The types test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
public function isAuthorized($user)
{
	if(isset($user['roles_id']) and $user['roles_id'] === 7)
	{
		return true;
	}
	return parent::isAuthorized($user);
}


}
