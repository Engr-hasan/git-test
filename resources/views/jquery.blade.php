<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#panel, #flip {
		  padding: 5px;
		  font-size: 18px;
		  text-align: center;
		  background-color: green;
		  color: white;
		  border: solid 1px #666;
		  border-radius: 3px;
		}

		#panel {
		  padding: 50px;
		  display: none;
		}
	</style>
</head>
<body>

<p id="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus beatae optio neque soluta distinctio, perferendis quibusdam ex, est doloribus quos quis deleniti. Soluta explicabo, illo aut odio, quae blanditiis sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quaerat itaque provident minus pariatur, omnis exercitationem vero sunt molestias explicabo rerum esse distinctio aliquid. Quidem animi pariatur deleniti, deserunt provident!!!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus beatae optio neque soluta distinctio, perferendis quibusdam ex, est doloribus quos quis deleniti. Soluta explicabo, illo aut odio, quae blanditiis sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quaerat itaque provident minus pariatur, omnis exercitationem vero sunt molestias explicabo rerum esse distinctio aliquid. Quidem animi pariatur deleniti, deserunt provident!!!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus beatae optio neque soluta distinctio, perferendis quibusdam ex, est doloribus quos quis deleniti. Soluta explicabo, illo aut odio, quae blanditiis sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quaerat itaque provident minus pariatur, omnis exercitationem vero sunt molestias explicabo rerum esse distinctio aliquid. Quidem animi pariatur deleniti, deserunt provident!!! aliquid. Quidem animi pariatur deleniti, deserunt provident!!!erunt provident!!!</p>
<button id="Chaining">Click me</button><br><br><br>

<button id="stop" class="btn btn-warning btn-sm">Stop sliding</button>
<button id="flip">Click to slide down panel</button>
<div id="panel">Hello hasan!</div><br><br><br>

<button id="samim">Start Animation</button>
<div style="background:#98bf21;height:100px;width:250px;position:absolute;">HELLO</div>

<button>Click to fade in boxes</button><br><br>
<p id="div1" style="width:80px;height:80px;display:none;color:red;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptate reiciendis nemo fugiat nihil in officiis ipsa, delectus nisi ratione. Suscipit, modi officiis, autem porro illum reiciendis nisi. Doloremque, explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, illum tempore at voluptatibus maxime exercitationem, odio asperiores aspernatur error ipsum impedit magnam accusamus rem minima sequi, porro! Exercitationem, adipisci.</p><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#Chaining").click(function(){
    $("#para").css("color", "red").slideUp(2000).slideDown(2000);
  });

  $("#flip").click(function(){
    $("#panel").slideDown(5000);
  });

  $("#stop").click(function(){
    $("#panel").stop();
  });

  $("#samim").click(function(){
    var div = $("div");  
    div.animate({left: '100px'}, "slow");
    div.animate({fontSize: '4em'}, "slow");
  });

  $("button").click(function(){
    $("#div1").fadeIn(3000);
  });

});
</script>
</body>
</html>
