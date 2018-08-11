<?php 
	$diaDaSemana = date("w");

	switch($diaDaSemana){
		case 0:
			echo"Esse é o $diaDaSemana º dia da semana Domingo";
		break;
		case 1:
			echo "Esse é o $diaDaSemana º dia da semana Segunda-Feira";
		break;
		case 2:
			echo "Esse é o $diaDaSemana º dia da semana Terça-Feira";
		break;
		case 3:
			echo "Esse é o $diaDaSemana º dia da semana Quarta-Feira";
		break;
		case 4:
			echo "Esse é o $diaDaSemana º dia da semana Quinta-Feira";
		break;
		case 5:
			echo "Esse é o $diaDaSemana º dia da semana Sexta-Feira";
		break;
		case 6:
			echo"Esse é o $diaDaSemana º dia da semana Sábado";
		break;
		default:
			echo "Não foi informado o dia da semana";
		break;
	}
	
 ?>