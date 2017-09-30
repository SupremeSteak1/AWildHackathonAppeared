Thanks for submitting!<br>
Good location! -> <?php echo $_POST['loc']; ?>.<br>
DESC: <?php echo $_POST['desc']; ?><br>
<?php
  date_default_timezone_set('America/New_York');
  $d = time();
  $ddisp = date("n/j/y h:i:sa");
?>
Time: <?php echo $d ?>.<br>
<?php
  mkdir("posts");
  $fname = "posts/" . $d . ".post";
  $fcontents =
    $ddisp . "\n" .
    $_POST['loc'] . "\n" .
    substr($_POST['desc'], 0, 100);
  file_put_contents($fname,
    $fcontents);
?>
