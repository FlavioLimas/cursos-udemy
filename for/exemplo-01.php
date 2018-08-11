<?php
	for($i = 0; $i < 1000; $i += 5){

		if($i > 200 && $i < 800) continue; // continue sai do laço for e continua até o termino

		if($i === 900) break; // sai do laço e interompe a execução
		echo "$i <br>";
	}
?>