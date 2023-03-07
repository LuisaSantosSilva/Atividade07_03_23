<?php

//classe com o nome Pessoa
class Pessoa {

    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    
    //Método de captura de valor do objeto
    public function getNome(){
        return $this->nome;
    }

    //Método de alteração de valor do objeto
    public function setNome($nome){
         $this->nome = $nome;
    }

    //Método de captura de valor do objeto
    public function getEndereco(){
        return $this->endereco;
    }

    //Método de alteração de valor do objeto
    public function setEndereco($endereco){
         $this->endereco = $endereco;
    }

    //Método de captura de valor do objeto
    public function getBairro(){
        return $this->bairro;
    }

    //Método de alteração de valor do objeto
    public function setBairro($bairro){
         $this->bairro = $bairro;
    }

    //Método de captura de valor do objeto
    public function getCep(){
        return $this->cep;
    }

    //Método de alteração de valor do objeto
    public function setCep($cep){
         $this->cep = $cep;
    }

    //Método de captura de valor do objeto
    public function getCidade(){
        return $this->cidade;
    }

    //Método de alteração de valor do objeto
    public function setCidade($cidade){
         $this->cidade = $cidade;
    }

    //Método de captura de valor do objeto
    public function getEstado(){
        return $this->estado;
    }

    //Método de alteração de valor do objeto
    public function setEstado($estado){
        $this->estado = $estado;
    }
}

?>