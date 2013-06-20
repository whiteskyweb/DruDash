<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Logout extends Controller_Template
{
 	public $template = 'logout-view';

    public function action_index()
    {	
        Auth::instance()->logout();
        HTTP::redirect('login');
    }
}