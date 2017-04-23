<?php
	$myName = "Михаил";
	$myAge = 16;
	$myEmail = "mihershov9@gmail.com";
	$myCity = "Saint-Petersburg";
	$aboutMe = "Увлекаюсь дизайном, веб-разработкой. Хочу научиться создавать годные веб-приложения.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='google-code-prettify/prettify.css' rel='stylesheet' type='text/css'>
	<script src='google-code-prettify/prettify.js'></script>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body onload="prettyPrint()">
	<div id="main">
		<div class="result">
			<h1 class="result-h1">Результат</h1>
			<table>
				<tr>
					<td class="first-cell">Имя</td>
					<td><?= $myName ?></td>
				</tr>
				<tr>
					<td class="first-cell">Возраст</td>
					<td><?= $myAge ?></td>
				</tr>
				<tr>
					<td class="first-cell">Почта</td>
					<td><a href="mailto:mihershov9@gmail.com"><?= $myEmail ?></a></td>
				</tr>
				<tr>
					<td class="first-cell">Город</td>
					<td><?= $myCity ?></td>
				</tr>
				<tr>
					<td class="first-cell">Немного о себе</td>
					<td><?= $aboutMe ?></td>
				</tr>
			</table>
		</div>

		<!-- 

			
		Блок с кодом страницы


		-->
		<div class="code">
			<h1 class="code-h1">Исходный код страницы</h1>
			<pre class="prettyprint linenums lang-html">
	&lt;?php
		$myName = "Михаил";
		$myAge = 16;
		$myEmail = "mihershov9@gmail.com";
		$myCity = "Saint-Petersburg";
		$aboutMe = "Увлекаюсь дизайном, веб-разработкой. 
		Хочу научиться создавать годные веб-приложения.";
	?&gt;
	&lt;!DOCTYPE html&gt;
	&lt;html lang="en"&gt;
	&lt;head&gt;
		&lt;meta charset="UTF-8"&gt;
		&lt;title&gt;About me&lt;/title&gt;
		&lt;link rel="stylesheet" href="style.css"&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div id="main"&gt;
			&lt;table&gt;
				&lt;tr&gt;
					&lt;td class="first-cell"&gt;Имя&lt;/td&gt;
					&lt;td class="second-cell"&gt;&lt;?= $myName ?&gt;&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td class="first-cell"&gt;Возраст&lt;/td&gt;
					&lt;td class="second-cell"&gt;&lt;?= $myAge ?&gt;&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td class="first-cell"&gt;Почта&lt;/td&gt;
					&lt;td class="second-cell"&gt;&lt;?= $myEmail ?&gt;&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td class="first-cell"&gt;Город&lt;/td&gt;
					&lt;td class="second-cell"&gt;&lt;?= $myCity ?&gt;&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td class="first-cell"&gt;Немного о себе&lt;/td&gt;
					&lt;td class="second-cell"&gt;&lt;?= $aboutMe ?&gt;&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/table&gt;
		&lt;/div&gt;
	&lt;/body&gt;
	&lt;/html&gt;
			</pre>
		</div>
	</div>
</body>
</html>