<?php

require 'src/app.php';

use src\App\App as app;

class AppTest extends PHPUnit_Framework_TestCase
{

  public function testAdd()
  {
     $c = New App;
     $result = $c->add(10, 5);
     $this->assertEquals(15, $result);
  }

  public function testSubtract()
  {
     $result = app::subtract(10, 5);
     $this->assertEquals(5, $result);
  }

}


