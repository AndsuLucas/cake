<?php

class UsersController extends AppController
{
	public $name = "Users";

	public function index(): void
	{
	
		$this->set([
			"nome" => "Anderson",
			"idade" => 20
		]);

		$this->render("/Users/view2");	

	}

	public function redirecionamento(): void
	{
		if ($this->request->is('get')) {
			
			$this->render('/Users/formulario');
			return;	
		}

		if ( count($this->request->data) !== 0 ) {
			$number_choice = (int) $this->request->data["post"]["numero"];	
		
		}

		if (isset($number_choice) && $number_choice === 1) {
			//redirecionando com base nos diretórios
			$this->redirect(["action" => "redirect1", $number_choice]);
		
		}	
			
		$this->redirect(["action" => "redirect1", $number_choice]);
	}

	public function redirect1(int $number_choice): void
	{	
		$escaped_number_choice = preg_replace('/[^0-9]/', "", $number_choice);
		debug($this->referer());
		$this->set("number_choice", $number_choice);
	}
}