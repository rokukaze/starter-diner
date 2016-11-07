<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application {

	public function index()
	{
                $role = $this->session->userdata('userrole');
		//if ($role == 'user') $role = 'admin';
		$this->data['content'] = $role;
		$this->render();
	}

}


