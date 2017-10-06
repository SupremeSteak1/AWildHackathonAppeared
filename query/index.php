<?php
$files = scandir("../posts", 1);
$f = $files[0];
$array = array_pad(explode("\n", file_get_contents("../posts/" . $f)), 3, null);
$date = filter_var($array[0], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$loc = filter_var($array[1], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$desc = filter_var($array[2], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$spch = "Aoun was last seen at " . $loc . ".";
$response->speech = $spch;
$response->display = $spch;
$response->source = "WheresAoun.tk";

echo json_encode($response);
?>
