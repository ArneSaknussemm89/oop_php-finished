<?php
namespace Base;

class Ball implements BallInterface {
  protected $radius;

  function __construct() {
    $this->radius = 5;
  }

  public function getRadius() {
    return $this->radius;
  }

  public function setRadius($radius) {
    $this->radius = $radius;
  }
}