<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"></meta>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class=" teal lighten-4">
<div class="main">
<h1 class="light-blue-text lighten-2"> Блог </h1>
<?php  
 include 'da.php' ;
 for ($i=0; $i < count($da); $i++) { 
 		echo '<div class=" card-panel teal lighten-2 white-text">';
		echo '<h3>' . $da[$i]['title'] . '</h3>';
		echo '<p>' . $da[$i]['short'] . '</p>';
		echo '<a class="white waves-effect waves-light btn light-blue-text lighten-2" href="page.php?index='. $i .' "> Далее </a>';
		echo '<img class="img" src="' . $da[$i]['img'] . '"> </div>';
	}
?>
</div>
</body>
</html>