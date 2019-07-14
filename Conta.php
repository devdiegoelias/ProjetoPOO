<?php


class Conta{

	private $saldo;
	private $cliente;


	function __construct($cliente){
		$this->cliente = $cliente;
		
	}

	public function sacar($valor)
	{
		if ($this->getSaldo() < $valor) {
			return false;
		} else {
			$this->setSaldo($this->getSaldo() - $valor);
		}
	}

	public function depositar($valor){
		$this->setSaldo($this->getSaldo() + $valor);
	}

	public function saldo(){
		return $this->saldo;
	}

	private function getSaldo(){
		return $this->saldo;
	}
	
	private function setSaldo($s){
		$this->saldo = $s;
	}

	private function getTipo(){
		return $this->tipo;
	}
	
	private function setTipo($t){
		$this->saldo = $t;
	}

}
?>