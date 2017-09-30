<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  date_default_timezone_set('America/New_York');
  $d = time();
  $ddisp = date("n/j/y h:i:sa");
  mkdir("posts", 0755, true);
  $fname = "posts/" . $d . ".post";
  $fcontents =
    $ddisp . "\n" .
    $_POST['loc'] . "\n" .
    substr($_POST['desc'], 0, 100);
  file_put_contents($fname,
    $fcontents);
}
?>
