Thanks for submitting!<br>
Good location! -> <?php echo $_POST['loc']; ?>.<br>
DESC: <?php echo $_POST['desc']; ?><br>
<?php $d = date("h:i:sa") ?>
Time: <?php echo $d ?>.<br>
$handle = fopen($d + ".post", "w+");
fwrite($handle
