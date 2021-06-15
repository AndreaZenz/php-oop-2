<?php

class User
{
    protected $name;
    protected $email;
    protected $age;
    protected $userPaymentMethod;


    function __construct($name, $email, $age, $userPaymentMethod)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setPaymentMethod($userPaymentMethod);
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setAge($value)
    {
        if($value < 18){
            echo "età non valida";
        } else {
            $this->age = $value;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setPaymentMethod($value){
        $this->userPaymentMethod = $value;
    }

    public function getPaymentMethod()
    {
        return $this->userPaymentMethod;
    }

    public function renderUser()
    {
        $render = "<h1>" . $this->name . $this->email . "</h1>" ;
        $render .= "<h2> l'eta dell'utente è:" . $this->age . "Ed il metodo di pagamento utilizzato " .$this->userPaymentMethod . "</h2>" ;
        return $render;
    }
}
