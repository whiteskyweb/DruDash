<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_dashboard extends Model_Database
{
 
    public function get_company_name()
    {
    	$userid = Auth::instance()->get_user();

    	$query = DB::select()->from('users')->where('id', '=', $userid)->execute();

    	$result = $query->get('company_name');

        return $result;
    }

    public function get_username()
    {
    	$userid = Auth::instance()->get_user();

    	$query = DB::select()->from('users')->where('id', '=', $userid)->execute();

    	$result = $query->get('username');

        return $result;
    }

    public function get_email()
    {
    	$userid = Auth::instance()->get_user();

    	$query = DB::select()->from('users')->where('id', '=', $userid)->execute();

    	$result = $query->get('email');

        return $result;
    }
}