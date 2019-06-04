<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body class=" teal lighten-4">
<?php include 'da.php' ?>
<?php $index = $_GET['index'] ?>
<div class="main">
<h1 class="light-blue-text lighten-2">Блог</h1>
<div class="card-panel teal lighten-2 white-text">
	<h3> <?php echo $da[$index]['title'] ?></h3>
	<p> <?php echo $da[$index]['long'] ?></p>
	<img class="img" src="<?php echo $da[$index]['img'] ?>" alt="">
</div>
</div>
</body>
</html>