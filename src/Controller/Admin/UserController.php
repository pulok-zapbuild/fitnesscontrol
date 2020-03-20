<?php
declare(strict_types=1);

namespace App\Controller\Admin;



class UserController extends AppController
{
	public function initialize(): void
    {
        parent::initialize();

        // $this->loadComponent('Paginator');
         $this->loadComponent('Flash'); // Include the FlashComponent

        //using my costom layout
		$this->viewBuilder()->setLayout('ownerLayout');
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
	{
	    parent::beforeFilter($event);
	    // Configure the login action to not require authentication, preventing
	    // the infinite redirect loop issue
	    $this->Authentication->addUnauthenticatedActions(['login']);
	}
	public function index($id = null)
	{
		$this->loadModel('Users');
		$data=$this->Users->findByRole($id);
		$this->set(compact('data'));
	}
	public function addMember($role = null)
	{	
		$this->loadModel('Users');
		$user = $this->Users->newEmptyEntity();
		if($this->request->is('post'))
		{
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user->role=$role;
			$user->status=1;
			if ($this->Users->save($user)) 
			{
               $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index',$role]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));

	}
	public function delete($id = null)
    {
    	$this->loadModel('Users');
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $role=$user->role;
        if ($this->Users->delete($user)) 
        {        	
            $this->Flash->success(__('The user has been deleted.'));
        } 
        else 
        {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index',$role]);
    }


}