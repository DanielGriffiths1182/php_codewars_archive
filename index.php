<!-- ///LEVEL => 8 = low, 1 = high ///TITLE ///DESCRIPTION  -->

<?php
// 1 (LVL 8) "Volume of a Cuboid" - Give dimensions of cube, execute the proper operation to return volume.
$kata = new class {
  public function get_volume_of_cuboid($length, $width, $height) {
    return $length * $width * $height;
  }
};

// 2 (LVL 8) "Keep Hydrated!" - Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
// You get given the time and you need to return the number of litres Nathan will drink, rounded to the smallest value.
function litres($t) {
  return floor($t / 2);
}

//  3 (LVL 8) "Even of Odd?" - Give an integer, return the string "Even" or the string "Odd" depending on the value of the integer.
function even_or_odd(int $n): string {
  if ($n % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}
// Alternate solution
function even_or_odd(int $n): string {
  return $n % 2 ? "Odd" : "Even";
}

//  4 (LVL 8) "Remove String Spaces" - Given a string, strip all whitespace and return.
function no_space(string $s): string {
  return $s = preg_replace('/\s+/','',$s);
}
// Better slternate solution?
function no_space(string $s): string {
  return $a = str_replace(" ", "", $s);
}

//  5 (LVL 8) "Multiply" - (INSTRUCTIONS): The code does not execute properly. Try to figure out why.
//                 (SOLUTION): declare variables correctly, ; at code blocks correctly
function multiply($a, $b) {
  return $a * $b;
};

//  6 (LVL 8) "Debug the functions EASY" - (INSTRUCTIONS): Given incorrect syntax, correct the syntax.
//                                 (SOLUTION): array * array/arr + arr/string_reverse(string) are incorrect
function multi($array) {
  return array_product($array);
}
function add($array) {
  return array_sum($array);
}
function reverse($string) {
  return strrev($string);
}

//  7 (LVL 8) "Calculate average" - Given an array of values, calculate the average. (I keep forgetting the ; after code)
function find_average($array) {
  return array_sum($array) / sizeof($array);
}

//  8 (LVL 8) "Palindrome Strings" - Given string, write algorithm that returns boolean for "is it a Palindrome".
function is_palindrome($line) {
  return $line == strrev($line);
}

//  9 (LVL 7) "Sum up the random string" - Given string with letters and numbers, extract the numbers and return sum.
function sum_from_string(string $str): int {
  $match = [];
  preg_match_all('/([\d]+)/', $str, $match);
  return array_sum($match[0]);
}
// Alternate Solution
function sum_from_string(string $str): int {
    preg_match_all('/[0-9]+/', $str, $matches);

    return array_sum($matches[0]);
}

//  10 (LVL 8) "Opposite number" - Very simple, given a number, find its opposite.
function opposite($n) {
  return $n >= 0 ? $n * -1 : abs($n);
}
// Alternate Solution
function opposite($n) {
  return -$n;
}

//  11 (LVL 7) "Shortest Word" - x Simple, given a string of words, return the length of the shortest word(s).
//                               String will never be empty and you do not need to account for different data types.
function findShort($str){
  $pieces = explode(" ", $str);
  return sort($pieces);
}

//  12 (LVL 8) "Get the mean of an array" - Return the average of the given array rounded down to its nearest integer.
function get_average($a) {
  return floor(array_sum($a) / sizeof($a));
}


//  13 (LVL 8) "Basic Mathematical Operations" - The function should take three arguments - operation(string/char),
//    value1(number), value2(number). The function should return result of numbers after applying the chosen operation.


function basicOp($op, $val1, $val2) {
  switch($op) {
    case '*':
      $result = $val1 * $val2;
      break;

    case '+':
      $result = $val1 + $val2;
      break;

    case '-':
      $result = $val1 - $val2;
      break;

    case '/':
      $result = $val1 / $val2;
      break;
    };
  return $result;
}

//  14 (LVL 8) "Sum of positive" - You get an array of numbers, return the sum of all of the positives ones.
function positive_sum($arr) {
  $total = 0;

  foreach($arr as $number) {
  $number > 0 ? $total += $number : $total += 0;
  };
  return $total;
}

//  15 (LVL 8) "Reversing Words in a String" - You need to write a function that reverses the words in a given string.
function reverse($string) {
  return implode(' ', array_reverse(explode(" " , $string)));
}

// 16 (LVL 8) "Find Maximum and Minimum Values of a List" - Your task is to make two functions,
// max and min (maximum and minimum in PHP) that take a(n) array/vector of integers list as input and outputs,
// respectively, the largest and lowest number in that array/vector.
function maximum($array) {
  return max($array);
}
function minimum($array) {
  return min($array);
}
?>
