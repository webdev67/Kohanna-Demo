<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template='pages/blog';

	public function action_index()
	{
		$this->template->message="Say hello!";
	}

} // End Welcome
