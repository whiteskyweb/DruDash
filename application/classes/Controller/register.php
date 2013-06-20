<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Register extends Controller_Template
{
    public $template = 'register-view';
 
    public function action_index()
    {
    	if ($this->request->post()) {
    		$this->register_user();
    	}
    }

    public function register_user() 
    {
    	$new_user = ORM::factory('user');

		$new_user->email = $this->request->post('email');
		$new_user->username = $this->request->post('username');
		$new_user->password = $this->request->post('password');
		$new_user->company_name = $this->request->post('company');

		$new_user->save();

		$new_user->add('roles', array(1,3));

		$success = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));

		if ($success)
		{
			HTTP::redirect('dashboard');
		}
		else
		{
		    // Login failed, send back to form with error message
		}
	}
}