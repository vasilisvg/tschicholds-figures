<!doctype html>
<?php
//include '../includes/parsedown/Parsedown.php';
//$Parsedown = new Parsedown();
//$articleMain = file_get_contents('article.md', FILE_USE_INCLUDE_PATH);
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Tschichold Figure</title>
	<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-006956.css">
 <link rel="stylesheet" href="../css/typography.css">
 <link rel="stylesheet" href="../css/tool.css">
 <style>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 11.1111vh 22.2222vw 22.2222vh 11.1111vw;
    background-color: white;
    background-image: url(../sketch/half-octavoformat-a.svg);
    background-size: 100% 100vh;
    background-attachment: fixed;
    background-position: 0 0;
    transition: 0s;
}
body:target, .nine .flat, .flat {
    background: white;
}
article {
    padding: 0;
    width: auto;
    margin: 0;
    float: none;
}
@media (min-width:30em){
    body {
        padding: 11.1111vh 11.1111vw 22.2222vh 22.2222vw;
        background-image: url(../sketch/half-octavoformat-b.svg);
    }
}
@media (min-aspect-ratio: 1/1) {
    body {
        padding: 11.1111vh 11.1111vw 22.2222vh;
        background-image: url(../sketch/complete-octavoformat.svg);
        background-position: 0 0;
    }
    article {
        min-height: 66.6666vh;
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
        -webkit-column-gap: 11.1111vw;
        -moz-column-gap: 11.1111vw;
        column-gap: 11.1111vw;
        -webkit-column-rule: 1px solid blue;
        -moz-column-rule: 1px solid blue;
        column-rule: 1px solid blue;
    }
    p + p {
        margin: 1em 0;
        text-indent: 0;
    }
}
@media (max-height:35em) {
    article {
        min-height: inherit;
    }
}
 </style>
</head>
<body>


<article>
    <?php
    //echo $Parsedown->text($articleMain);
    include '../includes/toggleform.php';
    ?>
</article>


</body>
</html>
