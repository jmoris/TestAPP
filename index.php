<!DOCTYPE html> 
<html>
<head>
<? require("info.php"); ?>
<meta charset="UTF-8">
<title>Aplic. Web de jQuery Mobile</title>
<link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Página uno</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview">
			<li><a href="#page2">Página dos</a></li>
            <li><a href="#page3">Página tres</a></li>
			<li><a href="#page4">Página cuatro</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Página dos</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header">
		<h1>Página tres</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header">
		<h1>Página cuatro</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

</body>
</html>