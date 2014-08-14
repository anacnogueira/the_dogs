<!-- File: /app/View/Carts/view.ctp -->
<?php
  $script  = $this->Html->script(array('cart'))."\n";
   echo $this->addScript('scripts_for_layout',$script);
?>
<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li><?php echo $this->Html->link('Home','/'); ?></li>
      <li class="active">Minha sacola</li>
    </ol>
  </div>
</div>

<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update'))); ?>
<div>
  <div >
    <table style='border: 1px solid #ccc;width: 100%;padding: 5px'>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Preço</th>
          <th>Qtde</th>
          <th>Total</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
         <?php
          $total = 0;
          foreach($products as $product){
            echo "<tr>";
            echo "  <td>". $product['Product']['name'] ."</td>";
            echo "  <td>R$" . $product['Product']['price']."</td>";
            echo "  <td><div>".
                      $this->Form->hidden('product_id.',array('value'=>$product['Product']['id'])).
                      $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                    'class'=>'form-control input-sm', 'value'=>$product['Product']['count'])).
                    " </div></td>";
            echo "  <td>R$ " . $product['Product']['count'] * $product['Product']['price']."</td>";
            echo "<td>".$this->Html->link('Remover',array('controller'=>'carts','action'=>'remove',$product['Product']['id']))."</td>";
            echo "</tr>";
           $total = $total + ($product['Product']['count'] * $product['Product']['price']);
          }
         ?>
         <tr>
             <td colspan=3></td>
             <td>R$ <?php echo $total;?></td>
         </tr>
      </tbody>
    </table>
    <br />
    <p class="text-right">
       <?php
          echo $this->Html->link('Adicionar mais animais',
            '/',
            array('class'=>'btn btn-warning'))
       ?>
       <?php echo $this->Form->submit('Atualizar',array('class'=>'btn btn-warning','div'=>false));?>
       <?php
          echo $this->Html->link('Finalizar Pedido',
            '/finalizar_pedido',
            array('class'=>'btn btn-success'))
       ?>
  
    </p>
  </div>
</div>
