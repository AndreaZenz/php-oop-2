<?php

require_once(__DIR__ . "./users.php");


class SubscriptedUser extends User
{
    //propietà ereditate da User
    
    // protected $name;
    // protected $email;
    // protected $age;
    // protected $userPaymentMethod;
    
    public $subscriptionPlan;
    protected $discount = 0;

    function __construct($name, $email, $age, $userPaymentMethod, $subscriptionPlan)
    {
        parent::__construct($name, $email, $age, $userPaymentMethod);

        $this->setSubscriptionPlan($subscriptionPlan);
    }

    public function setSubscriptionPlan($value)
    {
        $this->subscriptionPlan = $value;
        if ($value == "premium") {
            $this->discount = 40;
        } else if ($value == "standard") {
            $this->discount = 20;
        }
    }

    public function getSubscriptionPlan()
    {
        return $this->subscriptionPlan;
    }

    public function setDiscount($value)
    {
        $this->discount = $value;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getUserName($index)
    {
        return $this->users[$index]->getName();
    }

    public function renderUser()
    {
        $render = "<p> Il tuo sconto è di "  . $this->discount . " perchè il tuo piano di abbonamento è " . $this->subscriptionPlan . "</p>" ;

        return parent::renderUser() . $render;
    }
}
