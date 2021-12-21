<?php

class User_premium
{
  public $name;
  public $lastname;
  public $email;
  public $number_credit_card;
  public $purchase_history_number;

  /**
  * User premium constructor
  * @param string $name
  * @param string $lastname
  * @param string $email
  * @param string $number_credit_card
  * @param string $purchase_history_number
  */

  function __construct(string $name, string $lastname, string $email, string $number_credit_card, int $purchase_history_number)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->number_credit_card = $number_credit_card;
    $this->purchase_history_number = $purchase_history_number;
  }
}