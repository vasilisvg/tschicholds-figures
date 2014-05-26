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
	background: hsla(195,52%,51%,1);
}

article {
	float: left;
	margin: 11.1111vh 0% 22.2222vh 11.11111%;
	width: 33.3333%;
	box-sizing: border-box;
	min-height: 66.66666vh;
	position: relative;
	transition: .3s;
}
article + article {
	margin: 11.1111vh 0% 22.2222vh 11.11111%;
}
#toggle {
	display: block;
	margin: 5em auto;
}
.control-left {
	position: absolute;
	top: 45%;
	left: 0;
	border: solid #666;
	border-width: 1px 1px 1px 0;
	border-radius: 0 .3em .3em 0;
}
.control-right {
	position: absolute;
	top: 45%;
	right: 0;
	border: solid #666;
	border-width: 1px 0 1px 1px;
	border-radius: .3em 0 0 .3em ;
}
.control-top {
	position: absolute;
	left: 45%;
	top: 0;
	border: solid #666;
	border-width: 0 1px 1px;
	border-radius: 0 0 .3em .3em ;
}
.control-bottom {
	position: absolute;
	left: 45%;
	bottom: 0;
	border: solid #666;
	border-width: 1px 1px 0;
	border-radius: .3em .3em 0 0 ;
}
</style>
</head>
<body id="g">

<article id="col-left">
<?php
//echo $Parsedown->text($articleMain);
?>
<form action="" class="control control-left">
	<button name="left" data-for="#col-left" data-direction="left" id="margin-left-min" value="min">←</button>
	<button name="left" data-for="#col-left" data-direction="left" id="margin-left-plus" value="plus">→</button>
</form>
<form action="" class="control control-right">
	<button name="right" data-for="#col-left" data-direction="right" id="margin-right-min" value="min">←</button>
	<button name="right" data-for="#col-left" data-direction="right" id="margin-right-plus" value="plus">→</button>
</form>
<form action="" class="control control-top">
	<button name="top" data-for="#col-left" data-direction="top" value="min">↑</button>
	<button name="top" data-for="#col-left" data-direction="top" value="plus">↓</button>
</form>
<form action="" class="control control-bottom">
	<button name="bottom" data-for="#col-left" data-direction="bottom" value="min">↑</button>
	<button name="bottom" data-for="#col-left" data-direction="bottom" value="plus">↓</button>
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
		<button name="top" data-for="#col-right" data-direction="top" value="min">↑</button>
		<button name="top" data-for="#col-right" data-direction="top" value="plus">↓</button>
	</form>
	<form action="" class="control control-bottom">
		<button name="bottom" data-for="#col-right" data-direction="bottom" value="min">↑</button>
		<button name="bottom" data-for="#col-right" data-direction="bottom" value="plus">↓</button>
	</form>
<?php
echo $Parsedown->text($articleAside);
include '../includes/toggleform.php';
?>

</article>
<script>
var btn = document.querySelectorAll('.control button');
var i = 0;
while( i<btn.length ) {
	btn[i].onclick = function(){
		adjustSize(this);
		return false;
	}
	i++;
}

function adjustSize($this) {
	var vw = document.documentElement.clientWidth;
	var vh = document.documentElement.clientHeight;
	var ml = document.querySelector($this.getAttribute('data-for'));
	var direction = $this.getAttribute('data-direction');
	var plusmin = $this.value;

	// set the variables
	if (direction === 'left') {
		marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-left");
		sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("width");
		if (plusmin === 'plus') {
			var marginUnit = '1';
			var sizeUnit = '-1';
		}
		if (plusmin === 'min') {
			var marginUnit = '-1';
			var sizeUnit = '1';
		}
		sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vw,5.5555555);
		ml.style.marginLeft = sizesArr.split('+')[0]+'%';
		ml.style.width = sizesArr.split('+')[1]+'%';
	}
	if (direction === 'right') {
		marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-right");
		sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("width");
		if (plusmin === 'plus') {
			var marginUnit = '-1';
			var sizeUnit = '1';
		}
		if (plusmin === 'min') {
			var marginUnit = '1';
			var sizeUnit = '-1';
		}
		sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vw,5.5555555);
		ml.style.marginRight = sizesArr.split('+')[0]+'%';
		ml.style.width = sizesArr.split('+')[1]+'%';
	}
	if (direction === 'top') {
		marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-top");
		sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("min-height");
		//console.log(sizeOffset);
		if (plusmin === 'plus') {
			var marginUnit = '1';
			var sizeUnit = '-1';
		}
		if (plusmin === 'min') {
			var marginUnit = '-1';
			var sizeUnit = '1';
		}
		sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vh,11.1111111);
		ml.style.marginTop = sizesArr.split('+')[0] + 'vh';
		ml.style.minHeight = sizesArr.split('+')[1] + 'vh';
	}
	if (direction === 'bottom') {
		marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-bottom");
		sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("min-height");
		//console.log(sizeOffset);
		if (plusmin === 'plus') {
			var marginUnit = '-1';
			var sizeUnit = '1';
		}
		if (plusmin === 'min') {
			var marginUnit = '1';
			var sizeUnit = '-1';
		}
		sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vh,11.1111111);
		ml.style.marginBottom = sizesArr.split('+')[0] + 'vh';
		ml.style.minHeight = sizesArr.split('+')[1] + 'vh';
	}


	//console.log(direction);
}

function returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vmin,fact){
	marginOffset = marginOffset.split('px')[0];
	sizeOffset = sizeOffset.split('px')[0];

	currMargin =  ( (marginOffset/vmin)*100 );
	currMargin = Math.round(currMargin/fact);
	newMargin = ((currMargin*1) + (marginUnit*1)) * fact;
	//ml.style.marginLeft = newMargin;

	currSize = ((sizeOffset/vmin)*100 );
	currSize = (Math.round(currSize/fact));
	newSize = ((currSize*1) + (sizeUnit*1)) * fact;

	return (newMargin +'+'+newSize );
}

/*
document.getElementById('margin-left-min').onclick = function(){
	vw = document.documentElement.clientWidth;
	var ml = document.querySelector('article');
	// Adjust left margin
	currLeft =  ( (ml.offsetLeft/vw)*100 );
	currLeft = Math.round(currLeft/5.55555);
	newLeft = (currLeft-1) * 5.55555555555 + '%';
	ml.style.marginLeft = newLeft;
	// adjust width
	currWidth = ((ml.offsetWidth/vw)*100 );
	currWidth = (Math.round(currWidth/5.55555));
	newWidth = (currWidth+1) * 5.55555555555 + '%';
	ml.style.width = newWidth;
	return false;
} */
</script>
</body>
</html>
