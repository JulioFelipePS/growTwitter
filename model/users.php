<?php

class users{
    public $userId;
    private $name;
    private $userEmail;
   public $userName;
    private $password;


    public function __construct($nameP,$emailP,$userNameP,$password) {
        $this->userId = uniqid();
        $this->name = $nameP;
        $this->userEmail=$emailP;
        $this->userName=$userNameP;
        $this->password=$password;
    }

    public function add($userData){
        array_push($userData,$this);
        return $userData;
    }
    
    public function getId()
    {
        return $this->userId;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    
}