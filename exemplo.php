<?php
class Produto{

    private $descricao;
    private $preco;

    public function __construct($descricao, $preco){
        $this->descricao = $descricao;
        $this->preco = $preco; 
    }

    public function getDetalhes(){
        return "Memoria RAM - {$this->descricao} custa apenas - {$this->preco} reais";
    }

    public function setDescricao($valor){
        $this->descricao = $valor;
    }
    
    public function setPreco($valor){
        $this->preco = $valor;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function getPreco(){
        return $this->preco;
    }
}

$gil = new Produto('1333', 50);
//$gil->setdescricao('Livro');
//$gil->setpreco(50);

//var_dump($gil);
echo $gil->getDetalhes();