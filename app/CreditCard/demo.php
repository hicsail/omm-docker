<?php
 session_start();
 include 'connect.php'; 
?>
<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:"Vani Bold",serif;font-size:9.2px;color:rgb(0,0,0ß);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_002{font-family:"Vani Bold",serif;font-size:9.2px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:"Vani",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:"Vani",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:"Vani",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:"Vani",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:"Vani Bold",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:"Vani Bold",serif;font-size:7.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="387abd8e-235b-11ea-a5fd-0cc47a792c0a_id_387abd8e-235b-11ea-a5fd-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body onload = "toggleZoomScreen()">
	<button value="help" style = "background-color:#33CEFF; font-family: georgia; color: white; position:absolute; right:10px;" onclick="HelpAlert(this)">Help</button>

<script>
	function toggleZoomScreen() {
       document.body.style.zoom = "170%";
   } 

   function setColor(e) {
  /*var target = e.target;
  var count = +target.dataset.count;
  
   target.style.color = count === 0 ? "#000000 " : "#FF00FF";
   target.dataset.count = count === 0 ? 1 : 0;*/
   var id = e.id;
   document.getElementById(id).style.color = "#FF00FF";
   e.setAttribute("onclick","invertColor(this)");
}
	function invertColor(e)
	{
	var id = e.id;
   document.getElementById(id).style.color = "#000000";
   e.setAttribute("onclick","setColor(this)");
	}

	function changePage(e)
	{
		window.location = "task_instructionp3.php";
	} 

</script>
<br><br><br>
<center>
  <a href="demo.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<div style="position:absolute;left:50%;margin-left:-121px;top:0px;width:243px;height:153px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="Background/background1.jpg" width=243 height=153></div>
<div style="position:absolute;left:127.20px;top:13.05px" class="cls_002"><span id = "1" class="cls_002" onclick="setColor(this)"; data-count="1">Pat Miller</span></div>
<div style="position:absolute;left:126.96px;top:20.73px" class="cls_003"><span id = "2" class="cls_003" onclick="setColor(this)";>Manager</span></div>
<div style="position:absolute;left:126.96px;top:49.77px" class="cls_005"><span id = "3" class="cls_005" onclick="setColor(this)";>ISSUE:</span></div>
<div style="position:absolute;left:174.96px;top:49.53px" class="cls_007"><span id = "4" class="cls_007" onclick="setColor(this)";>02/02/2017</span></div>
<div style="position:absolute;left:127.20px;top:63.93px" class="cls_005"><span id = "5" class="cls_005" onclick="setColor(this)";>EXPIRIES:</span></div>
<div style="position:absolute;left:174.96px;top:63.69px" class="cls_007"><span id = "6" class="cls_007" onclick="setColor(this)";>02/02/2018</span></div>
<div style="position:absolute;left:126.96px;top:78.33px" class="cls_005"><span id = "7" class="cls_005" onclick="setColor(this)";>ADDRESS:</span></div>
<div style="position:absolute;left:174.72px;top:82.17px" class="cls_007"><span id = "8" class="cls_007" onclick="setColor(this)";>123 Anywhere</span></div>
<div style="position:absolute;left:175.20px;top:91.05px" class="cls_007"><span id = "9" class="cls_007" onclick="setColor(this)";>Street 1, NYC</span></div>
<div style="position:absolute;left:126.96px;top:99.69px" class="cls_005"><span id = "10" class="cls_005" onclick="setColor(this)";>PHONE:</span></div>
<div style="position:absolute;left:174.72px;top:99.45px" class="cls_007"><span id = "11" class="cls_007" onclick="setColor(this)";>212 900 5124</span></div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><button value="Next" style = "background-color:red; font-family: georgia; color: white;" onclick="changePage(this)">Next</button></center>
</body>
</html>
