<?php
	$uID = '';
	$annon = 'no';
	
	if (isset($_POST['userID'])) $uID = $_POST['userID'];
	if (isset($_POST['sesID'])) $uID = $_POST['sesID'];
	if (strlen($uID) > 1) $annon = 'yes';
	

?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="noobFav.ico">
        <link href="nvlstyle.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Noobs vs. Leets</title>
        <script type="text/javascript" src="swfobject.js"></script>
    </head>
    
    <body>
    	<div id="container">
        	<div id="headerContainer">
            	<div class="headerLogo"></div>
            </div>
            <div class="clearSet"></div>
            <div id="content">
            	<div id="flashContent">
					<script>
						var swfWidth = 1024;
						var swfHeight = 768;
						
						var contBox = document.getElementById("flashContent").getBoundingClientRect();
						
						var pageWidth = window.innerWidth;
						var pageHeight = window.innerHeight;
						if (typeof pageWidth != "number") {
							if (document.compatMode == "CSS1Compat") {
								pageWidth = document.documentElement.clientWidth;
								pageHeight = document.documentElement.clientHeight;
							} else {
								pageWidth = document.body.clientWidth;
								pageHeight = document.body.clientHeight;
							}
						}
						
						var availHeight = pageHeight - contBox.top;
						var scale = 1;
						if (availHeight < swfHeight) {
							scale = availHeight / swfHeight;	
						}
						var wStr = String(swfWidth * scale);
						var hStr = String(swfHeight * scale);
						
						var fVar = {};
						var params = {};
						var att = {}; //{styleclass: "embedContent" };
						
						swfobject.embedSWF("NoobsVersusLeets.swf", "flashContent", wStr, hStr, "11.4.0", "expressInstall.swf", fVar, params, att);
                	</script>
            	</div>

             </div>
  
   <!-- END CONTAINER -->    
        </div>
    </body>
</html>