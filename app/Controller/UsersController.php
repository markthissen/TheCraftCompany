<!--This is the users controller for where all authorisation methods are located-->


<?php

class UsersController extends AppController {
var $components = array('Session');

	public function beforeFilter() {
     	$this->Auth->allow('register');
    }

	public function index(){

		$users = $this->User->find('all');
		

		$this->set('users', $users);
	}

	public function register() {
    if ($this->request->is('post')) {
        $this->User->create();
        if ($this->User->saveAll($this->request->data)) {
            $this->Session->setFlash(__('The user has been saved'));
            $this->redirect(array('controller' => 'home','action' => 'index'));
        } else {
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }
}

	public function logout() {
    $this->redirect($this->Auth->logout());
	}

	public function login() {
    if (!empty($this->request->data['User']) && $this->Auth->login()) {
        $this->redirect($this->Auth->redirect());
        (debug($this->data));
    } else {
        $this->Session->setFlash(__('Invalid username or password, try again'), 'default', array(), 'auth');
    }
}


	public function loggedin(){

	}
}
?>