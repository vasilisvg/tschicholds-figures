<!doctype html>
<?php
include '../includes/parsedown/Parsedown.php';
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
	<link rel="stylesheet" href="../css/tool.css">
</head>
<body id="g">

<article id="col-left">
<input type="checkbox" id="toggle-code"> <label for="toggle-code">Show the source code</label>
<pre><code>body{
	padding-top: <span id="pTop">1.111vh</span>;
	padding-bottom: <span id="pBottom">2.222vh</span>;
}
article {
	margin-right: <span id="col-left-right">0</span>;
	margin-left: <span id="col-left-left">11.111%</span>;
	width: <span id="col-left-width">33.333%</span>;
}
article + article {
	margin-right: <span id="col-right-right">0</span>;
	margin-left: <span id="col-right-left">11.111%</span>;
	width: <span id="col-right-width">33.333%</span>;
}
</code></pre>
<div contenteditable>
<?php
echo $Parsedown->text($articleMain);
?>
	
</div>
<form action="" class="control control-left">
	<button name="left" data-for="#col-left" data-direction="left" id="margin-left-min" value="min">←</button>
	<button name="left" data-for="#col-left" data-direction="left" id="margin-left-plus" value="plus">→</button>
</form>
<form action="" class="control control-right">
	<button name="right" data-for="#col-left" data-direction="right" id="margin-right-min" value="min">←</button>
	<button name="right" data-for="#col-left" data-direction="right" id="margin-right-plus" value="plus">→</button>
</form>
<form action="" class="control control-top">
	<button name="top" data-for="#g" data-direction="top" value="min">↑</button>
	<button name="top" data-for="#g" data-direction="top" value="plus">↓</button>
</form>
<form action="" class="control control-bottom">
	<button name="bottom" data-for="#g" data-direction="bottom" value="min">↑</button>
	<button name="bottom" data-for="#g" data-direction="bottom" value="plus">↓</button>
</form>
</article>
<article id="col-right">
	<form action="" class="control control-left">
		<button name="left" data-for="#col-right" data-direction="left" value="min">←</button>
		<button name="left" data-for="#col-right" data-direction="left" value="plus">→</button>
	</form>
	<form action="" class="control control-right">
		<button name="right" data-for="#col-right" data-direction="right" value="min">←</button>
		<button name="right" data-for="#col-right" data-direction="right" value="plus">→</button>
	</form>
	<form action="" class="control control-top">
		<button name="top" data-for="#g" data-direction="top" value="min">↑</button>
		<button name="top" data-for="#g" data-direction="top" value="plus">↓</button>
	</form>
	<form action="" class="control control-bottom">
		<button name="bottom" data-for="#g" data-direction="bottom" value="min">↑</button>
		<button name="bottom" data-for="#g" data-direction="bottom" value="plus">↓</button>
	</form>
<?php
echo $Parsedown->text($articleAside);
include '../includes/toggleform.php';
?>

</article>
<script src="../js/tool.js"></script>
</body>
</html>
