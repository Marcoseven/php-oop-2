<?php

class Product
{
  public $name;
  public $description;
  public $operating_system;
  public $processor;
  public $chipset;
  public $price;

  /**
  * Product constructor
  * @param string $name
  * @param string $description
  * @param string $operating_system
  * @param string $processor
  * @param string $chipset
  * @param string $price
  */

  function __construct(string $name, string $description, string $operating_system, string $processor, string $chipset, int $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->operating_system = $operating_system;
    $this->processor = $processor;
    $this->chipset = $chipset;
    $this->price = $price;
  }
}
