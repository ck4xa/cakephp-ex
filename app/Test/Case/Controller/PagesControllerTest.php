<?php
App::uses('PagesController', 'Controller');
App::uses('Home', 'View');

class PagesControllerTest extends ControllerTestCase {
  public function setUp() {
    parent::setUp();
    $PagesController = new PagesController();
    $HomeView = new View($PagesController);
  }

@ignore
  public function testHomePageContents() {
    $result = $this->testAction('/',
      array('method' => 'get', 'return' => 'contents')
    );

//    $this->assertContains('',$result); // Why is this written this way?
	$this->assertTrue();
  }
}
