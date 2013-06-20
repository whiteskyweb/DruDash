<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Login extends Controller_Template
{
    public $template = 'login-view';
 
    public function action_index()
    {
    	//Get form values and login
        if ($this->request->post()) {
        	Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
	 
		    if (Auth::instance()->logged_in())
		    {
		        HTTP::redirect('dashboard');
		    }
		    else
		    {
		        // Login failed, send back to form with error message
		    }
		}
    }
    
    
}