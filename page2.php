<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
    <?php include 'inc/logic.inc.php';
?>
</head>
<body>
<?php
require 'inc/header.inc.php';
?>

<div class="flex">
<div id="cars">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/car1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">cars</h5>
    <p class="card-text">Marty, you interacted with anybody else today, besides me? It's cold, damn cold. Ha, ha, ha, Einstein, you little devil. Einstein's clock is exactly one minute behind mine, it's still ticking.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/car2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">cars</h5>
    <p class="card-text">Marty, you interacted with anybody else today, besides me? It's cold, damn cold. Ha, ha, ha, Einstein, you little devil. Einstein's clock is exactly one minute behind mine, it's still ticking.</p>
  </div>
</div>
</div>


<div id="food">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/food.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">food</h5>
    <p class="card-text">Bacon ipsum dolor amet tenderloin buffalo porchetta jerky beef ground round brisket turkey shoulder. Strip steak chicken shank pork chop, picanha t-bone doner. </p>
  </div>
</div>
</div>


<div id="tea">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/tea.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">tea</h5>
    <p class="card-text">Percolator grounds redeye qui caffeine frappuccino whipped spoon. Irish est eu filter flavour aromatic, steamed pumpkin spice affogato brewed shop.</p>
  </div>
</div>
</div>
<?php include 'inc/cards.inc.php';
?>
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
