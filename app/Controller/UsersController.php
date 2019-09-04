<?php



class UsersController extends AppController
{
	public $name = "Users";
	public $helpers = ["Html", "Flash"];

	public function index()
	{
		$this->set("hello","world");
		
	}
	public function register()
	{
		
	}

}