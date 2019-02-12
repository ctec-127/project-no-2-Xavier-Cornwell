<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Project 2 - Page 1</title>
</head>
<body>
<?php
require 'inc/header.inc.php';
?>

<div id="readme">
<h1><b>How to use the page 2 site</b></h1>
<div id="explain">
<p>In the url make a php query to do this at the end of the url add? then add a param</p>

<p>The url should look something like: <br> <span>thisismyurl.com/page2.php?(param)=(value)</span></p>
<div id="list"><p><h2> <b> list structure is as follows: </b><br></h2>
<ul><li>Parameter<ul><li>Value</li></ul></li></ul>
<h3><b>Have FUN!</b></h3>

</div>
<div id="params">
<ul>
<li>darkmode <ul><li>yes</li></ul></li>
<li>spartan <ul><li>no</li></ul></li>
<li>font <ul><li>open-sans</li></ul></li>
<li>align <ul><li>justify</li></ul></li>
<li>text <ul><li>no</li></ul></li>
<li>img <ul><li>no</li></ul></li>
<li>flex <ul><li>no</li></ul></li>
<li>cards <ul><li>(integer with a range of 0-100)</li></ul></li>
</ul>
</div>
</div>
</div>
<?php
require 'inc/footer.inc.php';
?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>