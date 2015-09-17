<!DOCTYPE HTML>
 <html lang = "pt-br">
 	<head>
		<title>Calculadora </title>
		<meta charset = "UTF 8">
        </head>
      <body>	
	<form action="" method = "post">
Primeiro numero: <input name "num1" type="text"><br>
Segundo numero: <input name "num2" type="text"><br>
<input type = "subimit" name = "operacao"value "+">
	<?php
	$a = $_POST ['num1'];
        $b = $_POST ['num2'];
        $op = $_POST [operacao];
	
	if(!empty($op)){
         if($op == '+');
 		$c = &a + $b;
		else if(
			echo "Opcao invalida"
			)
		} 
echo "Rsultado da soma: $c "
}

?>
</body>
</html>
