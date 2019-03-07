<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-1.5.min.js"
  integrity="sha256-IpJ49qnBwn/FW+xQ8GVI/mTCYp9Z9GLVDKwo5lu5OoM="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	   var jQ5 = $.noConflict(true); 
  </script>

  <script
  src="https://code.jquery.com/jquery-2.2.0.min.js"
  integrity="sha256-ihAoc6M/JPfrIiIeayPE9xjin4UWjsx2mjW/rtmxLM4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	   var jQ22 = $.noConflict(true);
  </script>	

  <script type="text/javascript">
  	  jQ5(document).ready(function(){
  	  	jQ5("#jQ5").live("click", function(){
  	  		alert('This is jQuery older version 1.5.0')
  	  	});
  	  });

  	  jQ22(document).ready(function(){
  	  	jQ22("#jQ22").on("click", function(){
  	  		alert('This is jQuery new version 2.2.0');
  	  	});
  	  });
  </script>

    <title>First Page!</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<h1>How to use jQuery Two version!</h1>
		    <button id="jQ5">jQuery5</button>
		    <button id="jQ22">jQuery2.2.0</button>
    	</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>