<?php

namespace NewProject;

class Base {
  /**
   * @var integer
   */
  private $counter;

  /**
   * param integer $count
   */
  public function __construct($counter) {
    if (!is_int($counter)) {
      throw new \InvalidArgumentException('$counter must be an Integer');
    }
    $this->counter = $counter;
  }

  /**
   * Return the current counter value
   * 
   * @return integer
   */
  public function getCount() {
    return $this->counter;
  }

  /**
   * Increase the counter and return its current value
   *
   * @return integer
   */
  public function increaseCount() {
    $this->counter++;

    return $this->counter;
  }
}

?>
