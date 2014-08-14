<?php
  //app/Test/Case/Model/product.test.php
  public $fixtures = array('app.product');

  public function startTest {
   $this->Product = ClassRegistry::init('Product');
}

?>
