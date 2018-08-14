<?php 

/**
 * Retorna um times temp no formato string; Como parametro ele aceita expressões
 */
$ts = strtotime("2001-09-11");
// $ts = strtotime("now");
// $ts = strtotime("+ 1 day");
// $ts = strtotime("+ 2 week");
// $ts = strtotime("+ 1 month");
// $ts = strtotime("+ 3 year");




echo date("l, d-m-Y", $ts);

 ?>