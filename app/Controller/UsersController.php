<?php

class UsersController extends AppController {

	public function index(){

		$users = $this->User->find('all');
		

		$this->set('users', $users);
	}

	public function adduser(){
		if( $this->request->is('post')) {

		$this->User->save($this->request->data);
		$this->redirect('/users');

	}
	}

	public function login(){

		if( $this->request->is('post')){

			$user = $this->User->findByEmailAndPassword($this->request->data('User.email'), $this->request->data('User.password'));
			debug($user);

			if ($user){
				$this->Session->write('User', $user);
				$this->redirect(array(
					'controller' => 'user',
					'action' => 'adduser'
					));
			}

			$this->Session->setFlash('Email or Password is not correct');
		}
	}
}
?>