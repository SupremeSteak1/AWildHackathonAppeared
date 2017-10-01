<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (1 == preg_match("/^\d{10}\.post$/",$_POST["var"])) {
    mkdir("reported", 0755, true);
    rename("posts/" . $_POST["var"], "reported/" . $_POST["var"]);
  }
}
echo "<script>window.location.replace('/');</script>";
?>
