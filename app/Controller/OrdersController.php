<?php
  App::uses('CakeSession', 'Model/Datasource');
  Class OrdersController extends AppController{
     public $name = 'Orders';

    public $uses = array('Product','Cart','Order');


    public function add(){
      $carts = $this->Cart->readProduct();
    	$products = array();
      if(null != $carts){
        foreach($carts as $productId => $count){
          $product = $this->Product->read(null,$productId);
          $product['Product']['count'] = $count;
          $products[] = $product;
        }
      }
      $this->set(compact('products'));
    
      if (!empty($this->data)) {
        if ($this->Order->validates()) {
        //1. Inserir pedido (Order)
        $this->Order->create();
        $this->Order->save($this->data);
        $order_id = $this->Order->id;
        //2. Inserir item do pedido (OrderItem)


        $carts = $this->Cart->readProduct();
        print_r($carts);
        $order_items = array();
        if(null != $carts){
          foreach($carts as $product_id => $count){
            $order_item = $this->Product->read(null,$product_id);
            $order_item['OrderItem']['order_id'] = $order_id;
            $order_item['OrderItem']['product_id'] = $product_id;
            $order_item['OrderItem']['quantity'] = $count;
            $order_items[] = $order_item;
            $this->Order->OrderItem->create();
            $this->Order->OrderItem->save($order_item);
        }

      }

      //3. Limpar Sessão
      CakeSession::delete('cart');

      //4. Voltar para a home
          $this->redirect('/');
        }  else{
          $errors = $this->Order->validationErrors;
          print_r($errors);
        }
     }
  }
}

?>
