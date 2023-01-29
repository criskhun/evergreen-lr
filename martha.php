<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />


<!--
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
    hs.graphicsDir = '../highslide/graphics/';
    hs.outlineType = 'rounded-white';
</script>

<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
</head>

<body>
<br />



<!--
	3) The contentId option points to the id of the div below. Remember to change it in both
	places if you have multiple popups!
-->
<div class="highslide-body">
<div align="center"><strong>MARTHA 1ST FLOOR (FLOOR PLAN)</strong></div>
		<img src="img/martha.png" alt="" />	</div>
<!--2ndfloor	
-->
<span style="font-weight: bold"><a style="color:#000000" href="#" onclick="return hs.htmlExpand(this, { contentId: 'martha_2ndfloor' } )"
		class="highslide">
View 2nd Floor (Floor Plan)</a></span>
<div class="highslide-html-content style1" id="martha_2ndfloor">
	<div class="highslide-header">
		<ul>
			<li class="highslide-move">
				<a href="#" onclick="return false">Move</a>			</li>
			<li class="highslide-close">
				<a href="#" onclick="return hs.close(this)">Close</a>			</li>
		</ul>
	</div>
	<div class="highslide-body">
<div align="center"><strong>MARTHA 2ND FLOOR (FLOOR PLAN)</strong></div>
	<img src="img/martha2nd.png" alt="" />	</div>
</div>
</body>
</html>