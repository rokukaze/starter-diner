<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends Application
{
	function __construct() {
		parent::__construct();
	}
    
    public function index() {
     $userrole = $this->session->userdata('userrole');
     if ($userrole != 'admin') {
             $message = 'You are not authorized to access this page. Go away';
             $this->data['content'] = $message;
             $this->render();
             return;
     }

     $message = 'Get ready to fix stuff.';
     $this->data['content'] = $message;
     $this->render();
}
}