<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Dashboard extends Controller_Template
{
    public $template = 'dashboard-view';

    public function get_gravatar() {
        
        $email = Model::factory('dashboard')->get_email();
    	$url = 'http://www.gravatar.com/avatar/';
    	$url .= md5( strtolower( trim( $email ) ) );
    	$url .= "?s=30&d=mm&r=g";

    	return $url;
    }


    public function register_user() {
        $new_user = ORM::factory('');

        $new_user->email = $this->request->post('email');
        $new_user->username = $this->request->post('username');
        $new_user->password = $this->request->post('password');
        $new_user->company_name = $this->request->post('company');

        $new_user->save();

        if ($success)
        {
            HTTP::redirect('dashboard');
        }
        else
        {
            // Login failed, send back to form with error message
        }
    }

    private function check_if_logged_in(){
        if (!Auth::instance()->logged_in())
        {
            HTTP::redirect('login');
        }
    }

    public function action_index()
    {
        $this->template->message = date("Y");
        $this->template->amessage = 'hello, world!123';
        $this->template->profilePicUrl = $this->get_gravatar();
        $this->check_if_logged_in();
        $this->template->get_company_name = Model::factory('dashboard')->get_company_name();
        $this->template->get_username = Model::factory('dashboard')->get_username();
    }
}