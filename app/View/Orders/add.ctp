<!-- File: /app/View/Orders/add.ctp -->
<?php
	$script = $this->Html->script(array('jquery.numeric','jquery.mousewheel','jquery.maskedinput','mascara_campo'))."\n";
	echo $this->addScript('scripts_for_layout',$script);  
?>
<h3>Finalizar pedido</h3>
<?php echo $this->Form->create('Order'); ?>
<fieldset>
	<legend>Cães</legend>
	<table style='border: 1px solid #ccc;width: 100%;padding: 5px'>
      	<thead>
        <tr>
          <th>Raça</th>
          <th>Preço</th>
          <th>Qtde</th>
          <th>Total</th>
          
        </tr>
      </thead>
      <tbody>
         <?php
          $total = 0;
          foreach($products as $product){
            echo "<tr>";
            echo "  <td>". $product['Product']['name'] ."</td>";
            echo "  <td>R$" . $product['Product']['price']."</td>";
            echo "  <td><div>".$product['Product']['count']." </div></td>";
            echo "  <td>R$ " . $product['Product']['count'] * $product['Product']['price']."</td>";
            
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
</fieldset>
<br />
<fieldset>
 <legend>Dados Pessoais</legend>
 <?php echo $this->Form->input('name',array(
 		'label'=>false,
 		'placeholder'=>'Nome',
 		'required'=>false,
 		))."\n"; ?>

 <?php echo $this->Form->input('cpf',array(
 	  'label'=>false,	 
      'placeholder'=>'CPF',
      'class'=>'cpf',
      'after'=>"<span class='instrucoes'> 999.999.999-99</span>"))."\n"; ?>
 <?php echo $this->Form->input('email',array(
 	'label'=>false,
    'placeholder'=>'E-mail:'))."\n"; ?>      
</fieldset>
<br />
<fieldset>
	<legend>Dados para entrega</legend>
	 <?php echo $this->Form->input('address',array(
	 'label'=>false,		
	 'placeholder'=>'Endereço'))."\n"; ?>
      <?php echo $this->Form->input('complement',array(
      	'label'=>false,
        'placeholder'=>'Complemento'))."\n"; ?>
      <?php echo $this->Form->input('neighborhood',array(
      'label'=>false,
      'placeholder' =>'Bairro'))."\n"; ?>
      <?php echo $this->Form->input('cep',array(
        'label'=>false,
        'placeholder'=>'CEP',
        'class'=>'cep',
        'after'=>"<span class='instrucoes'> 99999-999</span>"))."\n"; ?>
      <?php echo $this->Form->input('city',array(
      'label'=>false,
      'placeholder'=>'Cidade'))."\n"; ?>
      <?php echo $this->Form->input('state',array(
      'label'=>false,
      'placeholder'=>'Estado'))."\n"; ?>
      <?php echo $this->Form->input('country',array(
      	'label'=>false,
      'placeholder'=>'País'))."\n"; ?>
</fieldset>

<br />
<?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-success','div'=>false));?>
<?php echo $this->Form->end(); ?>