<?php
include(login.php);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Теплый Стан.</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/nav.css" type="text/css">
</head>
<body>
<div id="wrap-header">
	<div id="header">
	<section>
		<h1>[Теплый Стан.]</h1>
		<h4><em>Такой как есть...</em></h4>
	</section>
	</div>
</div>
<div id="wrapper">
	<div id="nav">
		<ul id="nav">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Чат</a></li>
			<li><a href="#">Статьи</a></li>
			<li><a href="#">Музыка</a></li>
			<li><a href="#">Фотографии</a></li>
			<li><a href="#">Канал на YouTube</a></li>
		</ul>
	</div>
	<div id="content">
	<?php
	    $ok_name = "SuperUser";
	    $ok_pass = "dima005";
	    
	    $name = $_POST['name'];
	    $pass = $_POST['pass'];
	    
	    if ($_POST[ok]){
		if ($ok_name == $name && $ok_pass == $pass){
		    echo "Привет, $name";
		    }
		}
	?>
	<p><h3 style="width:200px; float:left;">Немного истории.</h3><span style="width:300px;"><em>(06-03-2013)</em></span></p>
	<p style="float:left;">В 1972 году на юго-западе Москвы началось строительство нового 
	жилого массива Тёплый Стан на месте южной части села Коньково, деревни Верхние 
	Тёплые Станы (Тёплый Стан), села Богородское-Воронино, поселка Новодмитровский и 
	территории между ними. Его назвали Тёплый Стан, по самому крупному из находившихся з
	десь населённых пунктов. До 1991 года Теплый Стан находился в составе Черёмушкинского 
	(с 1983 по 1988 — Брежневский) района, после административной реформы — в 
	Юго-Западном округе города Москвы. 5 июля 1995 г. согласно закону г. Москвы № 13-47 
	"О территориальном делении города Москвы" образован район "Тёплый Стан" с современными границами.</p>
	
	</div>
	<div id="sidebar">
	<h4>Вход</h4>
	<form method="POST">
	    <input name="name" type="text" value = "Имя"/><br />
	    <input name="pass" type="password" value = "Фамилия"/> <br />
	    <input name="ok" type="submit" value="Вход" />
	</form>
	<hr />
	<h4>Архив</h4>
	<ul id="menu">
		<li><a href="">Март(2013)</a></li>
	</ul>
	<hr />
	</div>
</div>
</body>
</html>
