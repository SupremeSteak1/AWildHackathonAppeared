<?php
$files = scandir("posts", 1);
foreach ($files as &$f) {
  $array = array_pad(explode("\n", file_get_contents("posts/" . $f)), 3, null);
  $date = $array[0];
  $loc = $array[1];
  $desc = $array[2];
  if ($date == "")
    continue;
?>
<div class="container">
<div class='row' class='post'>
  <div class='location-time'>
    <div class='location-formatting'>
      <p class='location'>
        <?php echo $loc; ?>
      </p>
    </div>
    <p class='time'>
      <?php echo $date; ?>
    </p>
  </div>
  <div class="map">
    <iframe
       width="600"
       height="450"
       frameborder="0" style="border:0"
       src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCQjxdV0gtbzW2a2sF253fckRP4fUUx1u0
       &q=<?php echo $loc; ?>Northeastern,Boston+MA" allowfullscreen>
    </iframe>
  </div>
  <div class='desc'>
    <p class="desc-text">
      <?php echo $desc; ?>
    </p>
  </div>
</div>
<?php
}?>
</div>
