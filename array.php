<?php 
	
	
	$array = [1,2,3,4,5,6,7,8,9,10];
	//$result = array_chunk($array,3);
	
	for($i=0;$i<count($array);$i++){
		
		// if ($i == 2) {
		// 	print "</br>";
		// } elseif($i == 5) {
		// 	print "</br>";
		// } elseif($i == 8) {
		// 	print "</br>";
		// } 

		if ($i>0 && $i%5 == 0) {
			print "</br>";

		}

		echo $array[$i];


	}
		echo '<pre>';
		$array2 =array_reverse($array);
		echo '</pre>';

		for ($i = 0; $i < count($array2); $i++) {
			if ($i%3 == 0) {
				print "</br>";

				
			}
			echo $array2[$i];
			
		}

	// echo '<pre>';
	// print_r($result);
	// echo '</pre>';
	
	
// $array = [1,2,3,4,5,6,7,8,9,10];
	// echo '<pre>';
	// print_r(array_chunk($array,4));
	// echo '</pre>';
	// $array = [1,2,3,4,5,6,7,8,9,10];

	// 	for ($i = 0; $i <count($array) ; $i++) {
	// 		// echo $array[$i];
	// 		if ($i > 0 && $i%3 == 0) {
	// 			print "</br>";
	// 		}
	// 		echo $array[$i];
	// 	}

	// 	//Reverse......
		
	// 	echo '<pre>';
	// 	$array2 =array_reverse($array);
	// 	echo '</pre>';

	// 	for ($i = 0; $i < count($array2); $i++) {
	// 		if ($i > 0 && $i%3 == 0) {
	// 			print "</br>";

				
	// 		}
	// 		echo $array2[$i];
			
	// 	}
	// 	echo '</br>';
 ?>