<div class="container">
<?php
$files = scandir("posts", 1);
foreach ($files as &$f) {
  $array = array_pad(explode("\n", file_get_contents("posts/" . $f)), 3, null);
  $date = filter_var($array[0], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $loc = filter_var(str_replace("&", "and", $array[1]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $desc = filter_var($array[2], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
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
		<div class="report">
			<form id="report_form" method="post" role="form" action="report.php">
				<input type='hidden' name='var' value='<?php echo "$f";?>'/> 
				<input type="submit" name="report" id="reportid" alt="Report" value="" style="background:url(flag.png) no-repeat; background-size: 100%; height: 30px; width: 30px; padding: 0; border: none;">
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
