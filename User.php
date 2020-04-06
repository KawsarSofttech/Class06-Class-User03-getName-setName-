<?php

class User{
	public $name;

	public function __construct()
	{
		echo "This is from constructor<br>";
	}
	public function setName()
	{
		$this->name = "Jhandu Bhai";
	}
	public function getName()
	{
		echo $this->name;
	}
	public function greet()
	{
		echo "Welcome to OOP";
	}

}

$admin = new User();
$admin->setName();
$admin->getName();


?>