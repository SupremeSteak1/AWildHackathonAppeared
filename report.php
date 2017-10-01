<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
rename("posts/" . $_POST["var"], "reported/" . $_POST["var"]);
}
echo "<script>window.location.replace('/');</script>";
?>