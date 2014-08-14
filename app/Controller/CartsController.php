<?php

  Class CartsController extends AppController{
     public $name = 'Carts';

     public $uses = array('Product','Cart');

     public function add(){
       $this->autoRender = false;
       if($this->request->is('post')){
         $this->Cart->addProduct($this->request->data['Cart']['product_id']);
       }
       echo $this->Cart->getCount();
       $this->redirect(array('action'=>'view'));
     }

     public function update(){
       if($this->request->is('post')){
         if(!empty($this->request->data)){
           $cart = array();
           foreach($this->request->data['Cart']['count'] as $index => $count){
             if($count > 0){
               $productId = $this->request->data['Cart']['product_id'][$index];
               $cart[$productId] = $count;
             }
           }
           $this->Cart->saveProduct($cart);
         }
       }
       $this->redirect(array('action'=>'view'));
     }

     public function remove($productId = null){
        $this->autoRender = false;
       if($productId){
         $this->Cart->removeProduct($productId);
       }

       $this->redirect(array('action'=>'view'));
     }
     public function view(){
      
      $title_for_layout = "Carrinho";
      $this->set(compact('title_for_layout'));

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
     }
   }
?>
