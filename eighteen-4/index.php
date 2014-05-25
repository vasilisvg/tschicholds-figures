<!doctype html>
<?php
include '../parsedown/Parsedown.php';
$Parsedown = new Parsedown();
$articleMain = file_get_contents('article.md', FILE_USE_INCLUDE_PATH);
$articleAside = file_get_contents('aside.md', FILE_USE_INCLUDE_PATH);
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eighteen blocks — researching Jan Tschicholds theory</title>
	<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-006956.css">
	<link rel="stylesheet" href="../css/typography.css">
<style>
body {
	margin: 0;
	padding: 0;
	background-color: #ebebeb;
	background-image: url(../sketch/complete-octavoformat.svg);
	background-size: 100% 100vh;
	background-attachment: fixed;
	background-position: 0 0;
}
body:target,
.flat {
	background: hsla(315,52%,24%,1);
}

article {
	float: left;
	margin: 11.1111vh 0% 22.2222vh 11.11111%;
	width: 38.8888%;
	box-sizing: border-box;
	min-height: 66.66666vh;
}
article + article {
	width: 27.77777%
}
</style>
</head>
<body id="g">

<article>
<?php
echo $Parsedown->text($articleMain);
?>

</article>
<article>
<?php
echo $Parsedown->text($articleAside);
?>
	<form action="#g">
		<button id="toggle">Toggle background</button>
	</form>

</article>

<script>
document.getElementById('toggle').onclick = function(e){
	document.querySelector('body').classList.toggle('flat');
	e.preventDefault();
}
</script>
</body>
</html>