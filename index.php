<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php

		require_once 'Conta.php';
		require_once 'Cliente.php';
		require_once 'ContaCorrente.php';
		require_once 'ContaEstudante.php';

		$clientePF = new Cliente();
		$clientePF->setNome("Diego");

		$conta = new ContaCorrente($clientePF);
		$conta->depositar(1000);
		$conta->sacar(5);

		echo "----------  Saldo   ------------<br/>";
		echo $conta->saldo();
		?>

</body>
</html>