<?php


$cakeDescription = __d('the_dogs', 'The Dogs');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Na TheDogs você com certeza encontra o seu próximo melhor amigo">
  <meta name="viewport" content="width=device-width">
	<?php
    echo $this->Html->css(array('cake.generic','bootstrap.min.css','http://fonts.googleapis.com/css?family=Amatic+SC:400,700','jquery.fancybox.css?v=2.1.5','main.min.css'));
    echo $this->Html->script(array('vendor/modernizr-2.6.2-respond-1.1.0.min'));

 echo $this->Html->script(array('http://code.jquery.com/jquery-1.10.2.min.js','vendor/bootstrap.min.js','jquery.fancybox.pack.js?v=2.1.5','main','main.min')); 
 echo $scripts_for_layout; 

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');


	?>
</head>
<body>
	<div id="container">

    <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?php echo $this->html->image("logo.svg",array(
                              'url'=>'/',
                              'alt'=>'TheDogss',
                              'title'=>'TheDogs'  
                            ));

                        ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <?php echo $this->Form->create("Search",array(
                            'div'=>false,
                            'url' => '/'));
                        ?>
                        <div class="input-group buscar">

                          <input type="text" class="form-control input-lg" placeholder="Buscar por..." name="keyword" id="keyword" value="<?php echo $keyword; ?>">
                          <span class="input-group-btn">
                            <button class="btn btn-default input-lg search" type="button"><span class="glyphicon glyphicon-search"></span></button>
                          </span>
                         
                            
                        </div>
                     <?php  echo $this->Form->end();  ?>
                    </div>
                </div>
            </div>
        </div>

		<div id="content">
       <div class="container">
          	<?php echo $this->fetch('content'); ?>
       </div>
		</div>


<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <ul class="list-group lista-links">
                            <li class="list-group-item">
                                <?php echo $this->Html->link('mini','index/size:mini',
                                array('title'=>'mini')); ?>
                                
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->link('pequeno porte','index/size:small',
                                array('title'=>'pequeno porte')); ?>
                                
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->link('médio porte','index/size:medium',
                                array('title'=>'médio porte')); ?>
                                
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->link('grande porte','index/size:big',
                                array('title'=>'grande porte')); ?>
                                
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <ul class="list-group lista-links">
                            <li class="list-group-item">
                                <?php echo $this->Html->link('até R$100','index/price:price<100',
                                array('title'=>'até R$100')); ?>
                                
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->link('de R$100 a R$300','index/price:price>100 and price <=300',
                                array('title'=>'de R$100 a R$300')); ?>
                                
                            </li>    
                            <li class="list-group-item">
                                <?php echo $this->Html->link('de R$300 a R$500','index/price:price>300 and price <=500',
                                array('title'=>'de R$300 a R$500')); ?>
                                
                            </li>  
                            <li class="list-group-item">
                                <?php echo $this->Html->link('acima de R$500','index/price:price>500',
                                array('title'=>'acima de R$500')); ?>
                                
                            </li>  
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                        <?php echo $this->Html->image('logo-rodape.png',array(
                             'alt'=>'TheDogs',
                             'title'=>'TheDogs'   
                            )); ?>
                        <br />
                        <p class="telefone">11 0000.0000<br />
                        <a href="mailto:ontato@charlieedog.com.br" title="Entre em contato!">contato@charlieedog.com.br</a></p>
                    </div>
                </div>
            </div>
        </div>

	</div>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
