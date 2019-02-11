<?php#logic.inc.php is a file for parameters to set via the url?>


<?php                
                if (isset($_GET['darkmode'])){
                    if ($_GET['darkmode'] == 'yes') {        
?> 
   <style type = "text/css">
    body{background-color:black;
        color:white;}

    .card,.card-body{background-color:gray;}
    </style>
        <?php
    }
    } ?>


<?php                
                if (isset($_GET['spartan'])){
                    if ($_GET['spartan'] == 'no') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>

