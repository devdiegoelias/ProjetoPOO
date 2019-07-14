<?php
	class ContaEstudante extends conta 
	{
		public function render(){
			$this->setSaldo($this->getSaldo() * 1.1);
		}
	}
?>