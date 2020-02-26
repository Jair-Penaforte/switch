<?php
	
	$valor= $_GET['num'];
	$oper= $_GET['op'];
	switch($oper){
		case 1: //caso seja 1, ele vai multiplicar por 2 e dar um break pra parar
		$r= $valor*2;
		echo "$r";
		break;
		
		case 2: //caso seja 2, ele vai escrever valor elevado 3 e dar um break pra parar
		$r = $valor^3;
		echo "$r";
		break;
		
		case 3: //caso seja 3, ele vai fazer a raiz quadrada e dar um break pra parar
		sqrt($raiz);
		echo "$r";
		break;
		 
		default: //será default caso nenhum dos três itens sejam escolhidos, ele vai escrever erro e dar um break pra parar
		echo "erro"
		break;
		
	}


?>