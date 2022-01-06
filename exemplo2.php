<?php
//Realcionamento Associação entre diferentes objetos

//Class 01
class Fabricante{

    private $nome;
    
    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

//Class 02
class Produto{

    private $descricao;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $preco, Fabricante $fabricante){
        $this->descricao = $descricao;
        $this->preco = $preco; 
        $this->fabricante = $fabricante; 
    }

    public function getDetalhes(){
        return "Criação de Backup na {$this->descricao} 
                custa apenas {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
    }

}

$fab = new Fabricante('TecnoGil - MultiCloud');
$gil = new Produto('Nuvem - Cloud', 350, $fab);

//var_dump($gil);
echo $gil->getDetalhes();