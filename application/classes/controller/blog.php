<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Welcome {

	public function action_index()
	{
		$this->template->message='Say hi';
		$db=Database::instance();
		$result=$db->query(Database::SELECT,'select * from test');
		$data=array();
		foreach($result as $res)
		{
			$data[]=$res;
		}
		$data=array_reverse($data);
		$this->template->data=$data;
		$this->template->content=View::factory('pages/pageone');
	}

	public function action_another()
	{
		$this->template->message=$_GET['name'];
		$db=Database::instance();
		$query=DB::insert('test',array('test_name'))->values(array($_GET['name']));
		$query->execute();
		
		$this->template->content=View::factory('pages/pagetwo');
		$this->request->redirect('blog');
	}

	public function action_populateDb()
	{
		$this->template->message=$_GET['message'];
		$db=Database::instance();
		$query=DB::insert('test',array('test_name'))->values(array($_GET['message']));
		$query->execute();

		$this->request->redirect('blog');
	}

	public function action_emptyDb()
	{
		$db=Database::instance();
		$query=DB::query(NULL,"truncate test");
		$query->execute();
		$this->request->redirect('blog');
	}

} // End Welcome
