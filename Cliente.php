<?php
	class Cliente{
		private $nome;


		public  function getNome(){
			return $this->nome;
		}
		
		public function setNome($n){
			$this->nome = $n;
		}
	}
?>