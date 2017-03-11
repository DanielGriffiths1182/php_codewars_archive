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

function sum_from_string(string $str): int {
  $match = [];
  preg_match_all('/([\d]+)/', $str, $match);
  return array_sum($match[0]);
}

//  9 (LVL 7) "Sum up the random string" - Given string with letters and numbers, extract the numbers and return sum.
function sum_from_string(string $str): int {
    preg_match_all('/[0-9]+/', $str, $matches);

    return array_sum($matches[0]);
}

//  10 (LVL 8) "Opposite number" - Very simple, given a number, find its opposite.
function opposite($n) {
  return $n >= 0 ? $n * -1 : abs($n);
}
?>
