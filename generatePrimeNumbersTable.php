<?php

class PrintPrimeNumberTable {

        /**
         * Get getPrimeNumbersTable for given number
         *
         * 
         * @return string
         */
	public function getPrimeNumbersTable()
	{
		if ($_SERVER['argc'] != 3 ) {
		    print "Please enter correct options";
			return;	
		} else {
			if ($_SERVER['argv'][2] != 0) {
				$givenNumber = $_SERVER['argv'][2];
			} else {
				print "Please provide a number greater than 0";
				return;					
			}
		}		
            //Get getPrimeNumbersList for given number
	    $primeNumbers = $this->getPrimeNumbersList($givenNumber);
	    foreach ($primeNumbers as $num) {
		    print " | ". "$num ";
	    }
	    for( $i = 0; $i < count($primeNumbers); $i++) {
		    $offset = $primeNumbers[$i]; echo "\n";
		    for ($j = 0; $j < count($primeNumbers); $j++) {
			    if ($j == 0) {
				    print $offset." |". $offset*$primeNumbers[$j]. " | ";			
			    } else {
				    print $offset*$primeNumbers[$j]. " | ";						
			    }
		    }
			echo "\n";
		}

	}
	
  	/**
         * Get getPrimeNumbersList for given number
         *
         * 
         * @return array
         */	
	public function getPrimeNumbersList(int $maxPrimeNumber) : array
	{
	    if ($maxPrimeNumber <= 0 ) {
	        print "Please enter a valid number to generate prime number table!";
			return 0;
		}
	    $pNumbers = array();  
	    $num = 2;
	    $count = 0;
	    while ($count < $maxPrimeNumber )  
	    {  
		    $keepCount = 0;  
		    for ( $i=1; $i<=$num; $i++) {  
			    if (( $num % $i )==0) {  
				    $keepCount++;  
			    }  
		    }  
		    if ($keepCount < 3) {  
			    $pNumbers[] = $num;  
			    $count = $count+1;  
		    }  
		    $num = $num+1;  
	    }  
	    return $pNumbers;
    }	

}
$object = new PrintPrimeNumberTable();
print $object->getPrimeNumbersTable();
?>
