<?php
namespace NewProject;

require ('src/Base.php');

class BaseTest extends \PHPUnit_Framework_TestCase {
  /**
   * @covers NewProject\Base::__construct
   */
  public function testConstructor() {
    new Base(0);
  }

  public function testShouldFail() {
    new Base('string');
  }
}
?>
