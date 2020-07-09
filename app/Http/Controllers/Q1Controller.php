<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Q1Controller extends Controller
{
		public function index()
		{
			/*Remove comment lines to test the cases.(Only remove one at a time)*/ 
			//$this->testCaseA(); 
			//$this->testCaseB(); 
			$this->testCaseC();
			//echo($this->rollDice());    
		}

		public  function rollDice()
		{
			return $this->myRand()%6 + 1;
		}

		public function myRand()
		{ 
			$number = hrtime(true); //Get system time
			$number =  ($number % pow(10, 14)) /100; //Get time in a fixed digit range to work on and remove lowest repetitive digit
			$lowerDigits = $number % pow(10, 4); //Get lower digits, they are way too more random than higher digits

			//Multiply lowerDigits with a big number to randomize higher digits in "number" variable, use bitwise XOR operator to do that
			$number = ($number ^ (pow(10, 8)*($lowerDigits))) 
				+ ($number ^ (pow(10, 4)*($lowerDigits))) 
				+ $lowerDigits;
			$number = ($lowerDigits ^ ($number%pow(10, 10))/pow(10, 6));//Now shuffle lower digits

			//Get rid of repetitive digits
			$number =  $number % pow(10, 9);
		
			return $number;
		}

		public function testCaseA(): void //Print some random numbers
		{
			for ($i=0; $i < 100; $i++) { 
				echo($this->myRand());
				echo("<br>");
			}
		}

		public  function testCaseB(): void //Check how close the fuction to determine if the results are similar to the real world experience
		{
			$lessThen = 0;
			for ($i=0; $i < 1000; $i++) { 
				if($this->myRand()%10 < 5){
					$lessThen += 1;
				}	
			}
			echo ($lessThen);
		}

		public  function testCaseC(): void //Throw dice 600000 times and checkout the results
		{
			$diceCounter = array_fill(0, 6, 0);;
			for ($i=0; $i < 600000; $i++) { 
				$diceValue = $this->rollDice();
				$diceCounter[$diceValue-1] += 1;
			}

			for ($i=0; $i < 6; $i++) { 
				echo($diceCounter[$i]);	  		
				echo("<br>");
			}
		}


}
