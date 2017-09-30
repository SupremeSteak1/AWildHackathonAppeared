<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Where's Aoun?">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <title>Where's Aoun?</title>
  </head>
  <body>
  	<div class="jumbotron text-left">
    	<h1>Where's Aoun??!?</h1>
    	<button class="btn btn-light float-right" style="font-size: 20pt; padding:4px;" onclick="location.reload();">refresh</button>
    	<button class="btn btn-light float-right" style="font-size: 20pt; padding:4px;margin-right:10px;" data-toggle="modal" data-target="#form-modal">add post</button>
	</div>

<?php
require 'posts.php';
?>

<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Submit a new post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		    <form action="process-new.php" method="post">
		    	<div class="form-group">
		    		<input type="text" class="form-control" name="loc" placeholder="Location?">
		    		<input type="text" class="form-control" name="desc" placeholder="Description? (Room #, Access to location, etc.)">
		    	</div>
		    	<button type="submit" class="btn btn-primary">Submit</button>
		    </form>
      </div>
      <div class="modal-footer">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Discard">Discard</button>
      </div>
		</div>
	</div>
</div>

	<hr>
	<div class="mx-auto" style="width: 54px">
		<img src="AounLogo_transparent.png" height=100 class="mx-auto">
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
