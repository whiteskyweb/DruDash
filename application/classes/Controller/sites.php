<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Sites extends Controller_Template
{
	public $template = 'sites-view';

	public function generate_key(){
		$key = md5(rand());

		return $key;
	}

	public function parse_xml(){
		$url = URL::base('http', FALSE).'assets/test.xml';
		$xml=simplexml_load_file($url);

		return $xml;
	}

	public function action_index(){
		$this->template->key = $this->generate_key();
		$this->template->xml = $this->parse_xml();
		$this->response->body(View::factory('sites-view'));
	}
}