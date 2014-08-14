<?php
  Class ProductsController extends AppController{
     public $name = 'Products';


    
    /*--- SITE ---*/
    public function index(){
      
      
      $keyword = "";
      $title_for_layout = "Home";
      $conditions = array();
      $conditions['Product.status'] = 'S';

      
      if (isset($this->data['keyword']) or isset($this->params)) {
       
        $title_for_layout = "Resultado da busca";
        
        //Pesquisa por palavra chave
        if(isset($this->data['keyword'])){
          $conditions['Product.name LIKE'] = '%'.$this->data['keyword'].'%';
        }
          

        //Pesquisa por tamanho
        if(isset($this->params['named']['size'])){
          $conditions['Product.size'] = $this->params['named']['size'];
        }

        //Pesquisa por preço
        if(isset($this->params['named']['price']) ){
          $conditions[] = $this->params['named']['price'];
          
          
        }
      }

      

      $this->paginate = array(
        'limit'=>12,
         'conditions' => array($conditions),
       );

      $products = $this->paginate('Product');
      $this->set(compact('products','title_for_layout','keyword'));

    }

    public function view($id){
      $keyword = "";

      if (!$id) {
			  $this->Session->setFlash(__('Produto Inválido', true));
        $this->redirect(array('action'=>'index'));
		  }
      $product =  $this->Product->read(null, $id);
      $title_for_layout = $product['Product']['name'];
      $product['Product']['price'] = number_format($product['Product']['price'],2,',','.');
      $product['Product']['vaccinated'] = $product['Product']['vaccinated'] == 'S' ? 'Sim' : 'Não';
      $product['Product']['vermifugated'] = $product['Product']['vermifugated'] == 'S' ? 'Sim' : 'Não';
      $product['Product']['pedigree'] = $product['Product']['pedigree'] == 'S' ? 'Sim' : 'Não';

      $this->set(compact('product','title_for_layout','keyword'));

      //print_r($product);

    }


   }
?>
