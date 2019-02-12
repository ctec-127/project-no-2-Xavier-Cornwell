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


<?php                
                if (isset($_GET['font'])){
                    if ($_GET['font'] == 'open-sans') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>


    <?php                
                if (isset($_GET['align'])){
                    if ($_GET['align'] == 'justify') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>

<?php                
                if (isset($_GET['text'])){
                    if ($_GET['text'] == 'no') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>

    <?php                
                if (isset($_GET['img'])){
                    if ($_GET['img'] == 'no') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>

    <?php                
                if (isset($_GET['flex'])){
                    if ($_GET['flex'] == 'no') {        
?> 
   <style type = "text/css">
.hero-image {

background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/hero2.png");}
    </style>
        <?php
    }
    } ?>



