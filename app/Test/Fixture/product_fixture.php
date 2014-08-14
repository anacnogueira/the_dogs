<?php
 //app/Test/Fixture/product_fixture.php
 public $fields = array(
   'id' => array(
      'type' => 'integer',
      'null' => false,
      'default' => NULL,
      'length' => 15,
      'key' => 'primary'
   ),
   'name' => array(
      'type' => 'string',
      'null' => false,
      'default' => NULL,
      'length' => 50
   ),
   'color' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 50
   ),
   'size' => array(
      'type' => 'string',
      'null' => false,
      'default' => NULL,
      'length' => 50
   ),
   'price' => array(
      'type' => 'float',
      'null' => false,
      'default' => NULL,
      'length' => '10,2'
   ),
   'age' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 50
   ),
   'vaccinated' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 50
   ),
   'vermifugated' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 50
   ),
   'pedigreee' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 50
   ),
   'status' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 1
   ),
   'image' => array(
      'type' => 'string',
      'null' => true,
      'default' => NULL,
      'length' => 150
   ),
   'info' => array(
      'type' => 'text',
      'null' => true,
      'default' => NULL,
   ),
   'indexes' => array(
      'PRIMARY' => array('column' => 'id', 'unique' => 1)
   ),
   'tableParameters' => array(
      'charset' => 'utf8',
      'collate' => 'utf8_general_ci',
      'engine' => 'InnoDB'
   )
);
public $records = Array(
   Array(
      'id' => 11,
      'name' => 'dalmata',
      'color' => 'Preta e branca',
      'size'= 'medium',
      'price' => 200.00,
      'age'=> '2 anos',
      'vaccinated'=>'S',
      'vermifugated'=>'S',
      'pedigree'=>'S',
      'status'=>'S',
      'image' =>'dalamata.jpg',
      'info'=>'Sua simpática vivacidade aliada a suas linhas harmoniosas e, principalmente a sua típica pelagem manchada fazem dele uma raça apreciada em todo o mundo. É, hoje em dia, um cão de companhia, que se destaca por sua inteligência e fidelidade ao dono.'
   ),
   Array(
      'id' => 12,
      'name' => 'SRD',
      'color' => 'Cinza e bege',
      'size'= 'medium',
      'price' => 0.00,
      'age'=> '3 meses',
      'vaccinated'=>'N',
      'vermifugated'=>'N',
      'pedigree'=>'N',
      'status'=>'S',
      'image' =>'srd.jpg',
      'info'=>'Mistura de duas ou mais raças pode ter comportamentos diferentes, dependo das rasças misturadas'
   )
);

?>
