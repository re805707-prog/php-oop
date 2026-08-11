<?php

class user
{
  private $username;

  public function setusername($username)

    {
        $this->username = $username;
    }

    public function getusername()
    {
        return $this->username;
    }
}

class Admin extends user
{
    public function getusername()
    {
        return "Admin: " . $this->username;
    }

    public function sayhello()
    {
        return "Hello, " . $this->getusername();
    }
}

$admin=new Admin();
$admin->setusername("rawan");

echo $admin->sayhello();
?> 