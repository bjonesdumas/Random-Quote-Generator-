<?php 
 
include 'inc/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <!-- automatically refreshes page every 20 seconds -->
  <meta http-equiv="refresh" content="20"/>
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<!-- pulls color from background color function -->
<body style='background-color: <?php backgroundColor(); ?>'>
  <div class="container">
    <div id="quote-box">
     <?php printQuote($quotes); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</>
</html>