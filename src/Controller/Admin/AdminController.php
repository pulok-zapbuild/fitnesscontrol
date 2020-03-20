<?php
declare(strict_types=1);

namespace App\Controller\Admin;



class AdminController extends AppController
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
		    $this->Authentication->addUnauthenticatedActions(['login','addMember']);
		}

	public function login()
    {	
    	$this->viewBuilder()->setLayout('myLayout');
    	$this->loadModel('Users');
    	$this->request->allowMethod(['get', 'post']);
	    $result = $this->Authentication->getResult();
	    // regardless of POST or GET, redirect if user is logged in
	    if ($result->isValid()) {
	        // redirect to /articles after login success
	        $redirect = $this->request->getQuery('redirect', [
	            'controller' => 'Admin',
	            'action' => 'index',
	        ]);

	        return $this->redirect($redirect);
	    }
	    // display error if user submitted and authentication failed
	    if ($this->request->is('post') && !$result->isValid()) {
	        $this->Flash->error(__('Invalid username or password'));
	    }
	}
	public function logout()
	{
	    $result = $this->Authentication->getResult();
	    // regardless of POST or GET, redirect if user is logged in
	    if ($result->isValid()) {
	        $this->Authentication->logout();
	        return $this->redirect(['controller' => 'Admin', 'action' => 'login']);
	    }
	}
	public function index()
	{
		
	}
	


}