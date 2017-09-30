Thanks for submitting!<br>
Good location! -> <?php echo $_POST['loc']; ?>.<br>
DESC: <?php echo $_POST['desc']; ?><br>
<?php $d = date("h:i:sa") ?>
Time: <?php echo $d ?>.<br>
<?php
  mkdir("posts");
  $fname = "posts/" . $d . ".post";
  $fcontents = $_POST['loc'] . "\n" . $_POST['desc'];
  file_put_contents($fname,
    $fcontents);
?>
