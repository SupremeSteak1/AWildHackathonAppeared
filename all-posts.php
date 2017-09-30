<?php
$files = scandir("posts", 1);
foreach ($files as &$f) {
  $array = array_pad(explode("\n", file_get_contents("posts/" . $f)), 3, null);
  echo $array[0] . "<br>";
  echo $array[1] . "<br>";
  echo $array[2] . "<br>";
}
?>
