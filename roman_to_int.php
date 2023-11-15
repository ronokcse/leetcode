<?php 
	
	function roman_to_int($number){
		$roman_numeral = array(
		"I"=>1,
		'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000);

		$result = 0;
		for ($i = 0; $i < strlen($number); $i++)
		{
			$current_value = $roman_numeral[$number[$i]];
			
			if($i < strlen($number) -1){
				$next_value = $roman_numeral[$number[$i+1]];
				if($current_value < $next_value){
					$result = $result+($next_value-$current_value);
					$i++;
				}
				else{
					$result = $result+$current_value;
				}
			}
			else{
				$result = $result + $roman_numeral[$number[$i]];
			}	
		}
		return $result;


	}

	echo roman_to_int("III");

 ?>