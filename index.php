<!-- ///LEVEL => 8 = low, 1 = high ///TITLE ///DESCRIPTION  -->

<?php
// 1
$kata = new class {
  public function get_volume_of_cuboid($length, $width, $height) {
    return $length * $width * $height;
  }
};

// 2 
function litres($t) {
  return floor($t / 2);
}

//  3 
function even_or_odd(int $n): string {
  if ($n % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}
function even_or_odd(int $n): string {
  return $n % 2 ? "Odd" : "Even";
}

//  4 
function no_space(string $s): string {
  return $s = preg_replace('/\s+/','',$s);
}
function no_space(string $s): string {
  return $a = str_replace(" ", "", $s);
}

//  5
function multiply($a, $b) {
  return $a * $b;
};

//  6
function multi($array) {
  return array_product($array);
}
function add($array) {
  return array_sum($array);
}
function reverse($string) {
  return strrev($string);
}

//  7
function find_average($array) {
  return array_sum($array) / sizeof($array);
}

//  8 
function is_palindrome($line) {
  return $line == strrev($line);
}

//  9
function sum_from_string(string $str): int {
  $match = [];
  preg_match_all('/([\d]+)/', $str, $match);
  return array_sum($match[0]);
}
function sum_from_string(string $str): int {
    preg_match_all('/[0-9]+/', $str, $matches);

    return array_sum($matches[0]);
}

//  10
function opposite($n) {
  return $n >= 0 ? $n * -1 : abs($n);
}
function opposite($n) {
  return -$n;
}

//  11
function findShort($str){
  $pieces = explode(" ", $str);
  return sort($pieces);
}

//  12
function get_average($a) {
  return floor(array_sum($a) / sizeof($a));
}


//  13
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

//  14
function positive_sum($arr) {
  $total = 0;

  foreach($arr as $number) {
  $number > 0 ? $total += $number : $total += 0;
  };
  return $total;
}

//  15 
function reverse($string) {
  return implode(' ', array_reverse(explode(" " , $string)));
}

// 16 
function maximum($array) {
  return max($array);
}
function minimum($array) {
  return min($array);
}

//  17
function celsius_to_romer($temp) {
  return $temp * floatval(21/40) + 7.5;
}

//  18 
function greet($name) {
    if ($name == 'Johnny') {
        return "Hello, my love!";
    }
    else {
      return "Hello, $name!";
    }
}

//  19 
function pre_fizz($n) {
  $output = [];
  for ($x = 1; $x <= $n; $x++) {
    array_push($output, $x);
  }
  return $output;
}
function pre_fizz(int $n): array {
  return range(1, $n);
}

// 20
function sqInRect($lng, $wdth) {
  $arr = [];
    if ($lng === $wdth) {
      return null;
    }
    while($lng > 0 && $wdth > 0) {
      array_push($arr, min($lng, $wdth));
      if ($lng >= $wdth) {
        $lng -= $wdth;
      }
      else {
        $wdth -= $lng;
      }
    }
  return $arr;
}

//  21
function remove_exclamation_marks($string) {
  return preg_replace('/!/', '', $string);
}

//  22
function fake_bin(string $s): string {
  $s = str_split($s);
  foreach($s as &$num){
    if ($num < 5) {
      $num = 0;
    }
    else {
      $num = 1;
    }
  }
  $s = implode($s);
  return $s;
}

//  23
function howManyLightsabersDoYouOwn($name = '') {
    if ($name === 'Zach') {
      return 18;
    }
    else {
      return 0;
    };
};

//  24
function repeatStr($n, $str) {
  return str_repeat($str, $n);
}

//  25 
function calculator($a, $b, $sign) {
  if (is_string ($a) || is_string ($b)) {  return 'unknown value'; }
  switch ($sign) {
    case "+" : return $a + $b ;
    case "-" : return $a - $b ;
    case "*" : return $a * $b ;
    case "/" : return $a / $b ;
    default : return 'unknown value';
  }
}
?>
