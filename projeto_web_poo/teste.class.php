<?php

//importação (forma de importar meu projeto para dentro do meu arquivo)
require_once("pessoa.class.php");
//nome classe
class Teste {
    //objeto pessoa com a classe privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe pessoa
        $pessoa = new Pessoa();

        //passar um valor para o método setNome
        $pessoa ->setNome($_POST['nome']);
        //imprimir o valor do método getNome
        echo $pessoa -> getNome();

         //passar um valor para o método setEndereco
         $pessoa ->setEndereco($_POST['endereco']);
         //imprimir o valor do método getEndereco
         echo $pessoa -> getEndereco();

        //passar um valor para o método setBairro
        $pessoa ->setBairro($_POST['bairro']);
        //imprimir o valor do método getBairro
        echo $pessoa -> getBairro();

        //passar um valor para o método setCep
        $pessoa ->setCep($_POST['cep']);
        //imprimir o valor do método getCep
        echo $pessoa -> getCep();

        //passar um valor para o método setCidade
        $pessoa ->setCidade($_POST['cidade']);
        //imprimir o valor do método getCidade
        echo $pessoa -> getCidade();

        //passar um valor para o métodod setEstado
        $pessoa ->setEstado($_POST['estado']);
        //imprimir o valor do método getEstado
        echo $pessoa -> getEstado();
    }
 
}new Teste();

?>