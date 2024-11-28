<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

//$fahrenheitToCelsius = fn ($f) =>($f - 32) * 5/9;

;
$baseTemp = 32;
$fahrenheitToCelsius = function($f) use ($baseTemp) {
  return ($f - $baseTemp) * 5/9;
};



$degToConvert = 68;

echo $degToConvert . '&deg;F= ' . $fahrenheitToCelsius($degToConvert) . '&degC';



echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/


function printNamesToUpperCase($names){
  foreach($names as $name){
    $uppercaseName = strtoupper($name);
    echo $uppercaseName . '<br>';
  }
}

$names = ['Alice', 'Bob', 'Steve', 'Marget'];

printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/


function findLongestWord($sentence){
  $words = explode(' ', $sentence);


  $longestWord = '';

  foreach($words as $word){
    $word = trim($word);

    if(strlen($word) > strlen($longestWord) || $longestWord === ''){
      $longestWord = $word;
    }
  }


  return $longestWord;
}


echo findLongestWord('The quick brown fox jumped over the lazy dog');