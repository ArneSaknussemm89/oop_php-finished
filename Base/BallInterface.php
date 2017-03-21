<?php
namespace Base;

/**
 * Interface Ball
 */
interface BallInterface {
  /**
   * Standard function that will return the current circle's radius
   *
   * @return mixed
   */
  public function getRadius();

  /**
   * Standard function that will set the current objects' radius.
   *
   * @param $radius
   */
  public function setRadius($radius);
}