<?php

// Loop que vai de 1 a 100.
for($numero = 1; $numero <=	100; $numero++){

	// Verifica se o numero é dificivel por 3 e 5.
	if($numero % 3 == 0 and $numero % 5 == 0){

		echo "FizzBuzz <br>";

	// Verifica se o numero é dificil por 3.
	}elseif($numero % 3 == 0){

		echo "Fizz <br>"; 

	// Verifica se o numero é dificil por 5
	}elseif ($numero % 5 == 0) {

		echo "Buzz <br>";
	//
	}else{
		echo "$numero <br>";
	}
}

?>