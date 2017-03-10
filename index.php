<!-- 1 "Volume of a Cuboid" - Give dimensions of cube, execute the proper operation to return volume. -->
<?php
  $kata = new class {
    public function get_volume_of_cuboid($length, $width, $height) {
      return $length * $width * $height;
    }
  };
?>

<!-- 2 "Keep Hydrated!" - Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
     You get given the time and you need to return the number of litres Nathan will drink, rounded to the smallest value. -->
<?php
  function litres($t) {
    return floor($t / 2);
  }
?>
