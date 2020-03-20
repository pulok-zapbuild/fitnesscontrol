<?php
declare(strict_types=1);

namespace App\Controller;



class TrainerController extends AppController
{
	public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Users');

        // $this->loadComponent('Paginator');
         $this->loadComponent('Flash'); // Include the FlashComponent

        //using my costom layout
         $this->viewBuilder()->setLayout('trainerLayout');
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
	{
	    parent::beforeFilter($event);
	    // Configure the login action to not require authentication, preventing
	    // the infinite redirect loop issue
	    $this->Authentication->addUnauthenticatedActions(['login']);
	}
	public function index()
	{
	}
	public function login()
    {   
        $this->viewBuilder()->setLayout('myLayout');
        $this->loadModel('Users');
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();


        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid() ) {
           
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Trainer',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !($result->isValid() && $result->getData()->role==1)) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Trainer', 'action' => 'login']);
        }
    }

    public function view($id = null)
    {
        $user=$this->Users->get($id);
        $this->set(compact(user));
    }

}