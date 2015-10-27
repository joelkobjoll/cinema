<?php namespace Cinema\Http\Controllers;

class TestController extends Controller {

	public function index() 
	{
		return 'Hola desde controller';
	}

	public function name($name = "Name") 
	{
		return "Hello my name is: " . $name;
	}

}

?>