<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (1 == preg_match("^\d{10}.post$",$_POST["var"])) {
    rename("posts/" . $_POST["var"] . ".post", "reported/" . $_POST["var"] . ".post");
  }
}
echo "<script>window.location.replace('/');</script>";
?>
