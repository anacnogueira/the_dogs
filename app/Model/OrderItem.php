<?php
class OrderItem extends AppModel {
  public $name = 'OrderItem';

   public $belongsTo = array(
		'Order'=> array('foreignKey' => 'order_id'),
	);

  public $validate = array(

  );

}
?>
