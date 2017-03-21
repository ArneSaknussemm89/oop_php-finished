<?php
namespace Extended;

use Base\Ball;

class BeachBall extends Ball {
  protected $color;

  function __construct() {
    parent::__construct();
    $this->radius = 10;
    $this->color = "blue";
  }

  public function getColor() {
    return $this->color;
  }

  public function setColor($color) {
    $this->color = $color;
  }
}