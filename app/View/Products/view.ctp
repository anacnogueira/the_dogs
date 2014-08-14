<!-- File: /app/View/Products/view.ctp -->
<?php
  $script  = $this->Html->script(array('cart'))."\n";
?>
<div class="product_detail">
  <?php echo $this->Html->link(
    $this->Html->image('dogs/'.$product['Product']['image']),
            '/img/dogs/'.$product['Product']['image'],
            array('class'=>'fancybox','escape'=>false)
    );
?> 
<p><?php echo $product['Product']['name']; ?></p>
<p><?php echo $product['Product']['price']; ?></p>
<p><?php echo $product['Product']['age']; ?>  </p>
<p><strong>Vacinado:  </strong><?php echo $product['Product']['vaccinated']; ?></p>
<p><strong>Vermifugado:  </strong><?php echo $product['Product']['vermifugated']; ?></p>
<p><strong>Possui Pedigree?  </strong> <?php echo $product['Product']['pedigree']; ?></p>
<div class='info'>
  <?php echo $product['Product']['info']; ?>
</div>
<br />
<div class="cart">
     <?php
        echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));
        echo $this->Form->hidden('product_id',array('value'=>$product['Product']['id']));
        echo $this->Form->submit('Adicionar ao carrinho',array('class'=>'btn-success btn btn-lg'));
         echo $this->Form->end();
     ?>
  </div>
</div>
