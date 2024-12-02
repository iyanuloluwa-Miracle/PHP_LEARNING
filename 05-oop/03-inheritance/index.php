<?php

class User
{
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    parent::__construct($name, $email); // Call parent constructor first
    $this->level = $level;
  }


  public function login(){
    echo 'Admin' .  $this->name. ' logged in <br>';
  }
}

$admin1 = new Admin('Tom Smith', 'tom@gmail.com', 5);

$admin1->login();

echo $admin1->name;
echo $admin1->email;


var_dump($admin1);
