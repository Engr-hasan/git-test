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
	 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  	   var jQ3 = $.noConflict(true);
  </script>

  <script type="text/javascript">
  	  jQ5(document).ready(function(){
  	  	jQ5("#jQ5").live("click", function(){
  	  		alert('This is jQuery older version 1.5.0')
  	  	});
  	  });

  	  jQ22(document).ready(function(){
  	  	$("#jQ22").on("click", function(){
  	  		alert('This is jQuery new version 2.2.0');
  	  	});
  	  });

  	  jQ3(document).ready(function(){
  	  	$("#clickEventHide").click(function(){
  	  		$(this).hide();
  	    });

  	    $("#dblClickHideEvent").dblclick(function(){
  	    	$(this).hide();
  	    });

  	    $("#mouseEnter").mouseenter(function(){
  	    	alert("This is mouseEnter event");
  	    });

  	    $("#mouseleave").mouseleave(function(){
  	    	alert("This is mouseleave event")
  	    });

  	    $("#mouseup").mouseup(function(){
  	    	// alert("This is mouseup event");
  	    	console.log('This is mouseup event')
  	    });

  	    $("#mousedown").mousedown(function(){
  	    	// alert("This is mouseDown event");
  	    	console.log('This is mousedown event');
  	    });

  	    $("#hover").hover(function(){
  	    	console.log('This is hover event');
  	    });

  	     $("#fullname").focus(function(){
		    $(this).css("background-color", "green");
		 });

		 $("#email").blur(function(){
		    $(this).css("background-color", "red");
		 });

		 $("#name").on({
		    mouseenter: function(){
		      $(this).css("background-color", "lightgray");
		    },  
		    mouseleave: function(){
		      $(this).css("background-color", "lightblue");
		    }, 
		    click: function(){
		      $(this).css("background-color", "yellow");
		    }  
		 });

		 $("#hide").click(function(){
		    $("#hideShow").hide();
		 });

		 $("#show").click(function(){
		    $("#hideShow").show();
		 });			
  	  });
  </script>
	
	
    <title>First Page!</title>
  </head>
  <body>
    <div class="container">
		<h1 class="text-center">How to use jQuery all version!</h1><br><br>
	   <button class="btn btn-info btn-sm" id="jQ5">jQuery5 click event</button><br><br>
	   <button class="btn btn-primary btn-sm" id="jQ22">jQuery2.2.0 click event</button><br><br>
	   <button class="btn btn-warning btn-sm" id="clickEventHide">This is click event text hide</button><br><br>
	   <button class="btn btn-success btn-sm" id="dblClickHideEvent">This is bouble click event text hide</button><br><br>
	   <button class="btn btn-success btn-sm" id="mouseEnter">This is mouseenter event</button><br><br>
	   <button class="btn btn-info btn-sm" id="mouseleave">This is mouseleave event</button><br><br>
	   <button class="btn btn-info btn-sm" id="mouseup">This is mouseup event</button><br><br>
	   <button class="btn btn-dark btn-sm" id="mousedown">This is mousedown event</button><br><br>
	   <button class="btn btn-primary btn-sm" id="hover">This is hover event</button><br><br>
	   <input id="fullname" type="text" name="fullname">
	   <input id="email" type="text" name="email">
	   		<h4 id="name">Hasan Mahmud khan.</h4>
	   		<h5 id="hideShow">Welcome to jQuery</h5>
	   		<button id="hide">Hide</button>
	   		<button id="show">Show</button>
    </div>
  </body>
</html>