<?php

class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function __construct(string $name, string $email, int $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function getInfo(){
        return "Name : ". $this->name . " , " . "Email : " . $this->email;
    }
    public function isAdmin(){
        switch ($this->role){
            case 1 :
                return "You are Admin ";
            case 2 :
                return "You are not Admin";

        }
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setRole(int $role): void
    {
        $this->role = $role;
    }




}