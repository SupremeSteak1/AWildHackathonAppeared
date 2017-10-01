<div class="container">
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
<div class="row post">
  <div class='location-time-map'>
	<div class='location-time-report'>
		<div class="location-time">
		  <div class="location-formatting">
			<h1 class="location">
			  <?php echo $loc; ?>
			</h1>
		  </div>
		  <p class="time">
			<?php echo $date; ?>
		  </p>
		</div>
		<div>
			<form id="report_form" method="post" role="form" action="">
				<input type="submit" name="report" value="Report">
			</form>
		</div>
	</div>
    <div class="map">
      <iframe
         frameborder="0"
         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCQjxdV0gtbzW2a2sF253fckRP4fUUx1u0&q=<?php echo str_replace(" ", "+", $loc); ?>+in+Boston,+MA" allowfullscreen>
      </iframe>
    </div>
  </div>
  <div class="desc">
    <p class="desc-text">
      <?php echo $desc; ?>
    </p>
  </div>
</div>
<?php
}?>
</div>
