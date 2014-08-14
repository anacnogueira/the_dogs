<?php if(count($products) > 0): ?>
<?php foreach($products as $product): ?>

<div class="row">

    <a class="fancybox" href="products/view/<?php echo $product['Product']['id']; ?>">
        <div class="col-md-3">
            <div class="box-cachorro">
                <?php echo $this->Html->image('dogs/'.$product['Product']['image'],array(
                   'title'=>  $product['Product']['name'],
                   'alt' => $product['Product']['name']   
                )); ?>
                
                <div class="btn-foto">Leva eu!</div>
                <div>
                    <span class="titulo-cachorro">
                        <?php echo $product['Product']['name']; ?>
                    </span>
                    <span class="detalhes-cachorro"><strong>R$ 
                        <?php echo $product['Product']['price']; ?></strong>
                    <br><?php echo $product['Product']['age']; ?></span>
                </div>
            </div>
        </div>
    </a>
</div>
<?php endforeach; ?>
<?php else: ?>
<p>Nenhum resultado encontrado para esta busca</p>
<?php endif; ?>