<?php
class Order extends AppModel {
  public $name = 'Order';

   public $validate = array(
     'name' => array(
       'rule' => 'notEmpty',
       'required' => false,
       'message' => 'Informe o nome'
     ),  
     
     'cpf' => array(
        'validCPF'=>array(
          'rule'=>array('isCPF','cpf'),
          'required' => false,
          'message'=>'Formato de CPF inválido'
        ),
        'isEmptyCPF'=>array(
          'rule'=>'notEmpty',
          'required'=>false,
          'message'=>'Informe seu CPF'
        )
     ),
     'email' => array(
        'rule' => 'email',
        'required' => false,
        'message' => 'Informe um formato de e-mail válido',

      ),

       'address'=>array(
      'rule' => 'notEmpty',
      'required' => false,
      'message' => 'Informe o endereço'
     ),
     'neighborhood'=>array(
      'rule' => 'notEmpty',
      'required' => false,
      'message' => 'Informe o bairro'
     ),
     'cep'=>array(
      'rule'=>array('custom','/^[0-9]{5}\-[0-9]{3}$/'),
      'required'=>false,
      'message' => 'Informe o cep no formato indicado'
     ),
     'city'=>array(
       'rule' => 'notEmpty',
       'required' => false,
       'message' => 'Informe a cidade'
     ),
     'state'=>array(
      'rule' => 'notEmpty',
      'required' => false,
      'message' => 'Infore o estado'
     ),
     'country'=>array(
      'rule' => 'notEmpty',
      'required' => false,
      'message' => 'Informe o país'
     ),    
     
    );

   public $hasMany = array(
		'OrderItem'=> array('foreignKey' => 'order_id'),
   );

   public function isCPF($data){
    //if(!empty($data['cpf'])){
      // Retira pontos e traços
      $data['cpf'] = str_replace("-","",(str_replace(".","",$data['cpf'])));

      //Verifica se o tamanho contem 11 caracteres (sem traço e ponto)
      if(strlen($data['cpf']) != 11){
       return false;
      }
      //Verifica se o CPF informado é um numero inteiro
      elseif(!is_numeric($data['cpf'])){
        return false;
      }
      //Verifica se o CPF é constituído de números repetidos de 11111111111 até 99999999999
      elseif(($data['cpf'] == '11111111111') || ($data['cpf'] == '22222222222') ||
        ($data['cpf'] == '33333333333')  ||  ($data['cpf'] == '44444444444') ||
        ($data['cpf'] == '55555555555') ||  ($data['cpf'] == '6666666666') ||
        ($data['cpf'] == '77777777777') ||  ($data['cpf'] == '88888888888') ||
        ($data['cpf'] == '99999999999') ||  ($data['cpf'] == '00000000000'))  {
        return false;
      }
      else {
        //Pega o digito verificador
        $dv_informado = substr($data['cpf'],9,2);

        for($i=0;$i<=8;$i++){
         $digito[$i] = substr($data['cpf'],$i,1);
        }

        //Calcula o valor do 10º digito de verificação
        $posicao = 10;
        $soma = 0;

         for($i=0;$i<=8;$i++){
          $soma = $soma + $digito[$i] * $posicao;
          $posicao--;
         }

        $digito[9] = $soma % 11;

        if($digito[9] < 2){
          $digito[9] = 0;
        }
        else{
          $digito[9] = 11 - $digito[9];
        }

        //Calcula o valor do 11º digito de verificação
        $posicao = 11;
        $soma = 0;

        for($i=0;$i<=9;$i++){
          $soma = $soma + $digito[$i] * $posicao;
          $posicao--;
        }

        $digito[10] = $soma %11;

        if($digito[10]<2){
          $digito[10] = 0;
        }
        else{
          $digito[10] = 11 - $digito[10];
        }

        //verifica se o dv calculado é igual ao informado
        $dv = $digito[9] * 10 + $digito[10];
        if($dv != $dv_informado){
          return false;
        }
        else {
          return true;
        }
      }
    //}
  }

  public  function beforeSave(){ 
  	return true;
  }
}
?>