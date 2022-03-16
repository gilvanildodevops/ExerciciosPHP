<?php
//Eranças OOP
class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;
    
    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "<h3>Agencia: {$this->agencia} /|/ Conta: {$this->conta} /|/ Saldo: {$this->saldo}<br /></h3>";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "<h2>Depósito de: R$ {$valor} /|/ Saldo atual é de: R$ {$this->saldo}<br /></h2>";
    }
}

class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor):
            $this->saldo -= $valor;
            echo "<h3>Saque de: R$ {$valor} /|/ Saldo atual é de: R$ {$this->saldo}<br /></h3>";
        else:
            echo "<h3>Saque não autorizado de R$ {$valor} /|/ Saldo atual: R$ {$this->saldo}<br /></h3";
        endif;
    }
}


class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function saque($valor){
        if(($this->saldo + $this->limite) >= $valor):
            $this->saldo -= $valor;
            echo "<h3>Saque de: R$ {$valor} /|/ Saldo atual é de: R$ {$this->saldo}<br /></h3>";
        else:
            echo "<h3>Saque não autorizado de R$ {$valor} /|/ 
                Saldo atual: R$ {$this->saldo} /|/ 
                Limite em Contade de: R$ {$this->limite}<br /></h3>";
        endif;
    }
}

$cnt = new Corrente(100, 2500, 5000, 500);
$cnt->depositar(1800);
$cnt->saque(2500);
$cnt->saque(4500);

echo $cnt->getDetalhes();