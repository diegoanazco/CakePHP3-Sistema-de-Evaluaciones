<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
	use MailerAwareTrait;
public function initialize()
{
    parent::initialize();
    $this->Auth->allow(['logout','add', 'register']);
}

    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Degrees'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Degrees'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
	   if ($this->Users->save($user)) {
		$this->getMailer('Users')->send('welcome', [$user]);
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $degrees = $this->Users->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'degrees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $degrees = $this->Users->Degrees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'degrees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('Your username or password is incorrect.');
    }
}

	public function logout()
	{
		$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());
	}

	public function isAuthorized($user)
	{
		// The owner of an article can edit and delete it
		return parent::isAuthorized($user);
	}

	public function register()
	{
	        $user = $this->Users->newEntity();
        	if ($this->request->is('post')) {
	            $user = $this->Users->patchEntity($user, $this->request->getData());
		   if ($this->Users->save($user)) {
			$this->getMailer('Users')->send('welcome', [$user]);
	                $this->Flash->success(__('You are register and can login.'));
	                return $this->redirect(['action' => 'login']);
        	    }
	            $this->Flash->error(__('You are not register. Please, try again.'));
	        }
	        $roles = $this->Users->Roles->find('list')->where(['Roles.roles_id !=' => 3]);
	        $degrees = $this->Users->Degrees->find('list', ['limit' => 200]);
	        $this->set(compact('user', 'roles', 'degrees'));

	}

}

