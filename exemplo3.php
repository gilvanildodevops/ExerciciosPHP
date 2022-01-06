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
        return "Agencia: {$this->agencia} /|/ Conta: {$this->conta} /|/ Saldo: {$this->saldo}<br />";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito de: {$valor} /|/ Saldo atual é de: {$this->saldo}<br />";
    }
}

class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} /|/ Saldo atual é de: {$this->saldo}<br />";
        else:
            echo "Saque não autorizado de {$valor} /|/ Saldo atual: {$this->saldo}<br />";
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
            echo "Saque de: {$valor} /|/ Saldo atual é de: {$this->saldo}<br />";
        else:
            echo "Saque não autorizado de {$valor} /|/ 
                Saldo atual: {$this->saldo} /|/ 
                Limite em Contade de: {$this->limite}<br />";
        endif;
    }
}

$cnt = new Corrente(100, 2500, 5000, 500);
$cnt->depositar(1800);
$cnt->saque(2500);
$cnt->saque(4500);

echo $cnt->getDetalhes();