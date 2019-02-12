<!--php include file is the logic of the page checking for params  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--------------------------dark mode param -------------------------------->
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


<!------------------------------------spartan param ------------------------------------->
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


<!------------------------------------font style param ------------------------------------->
<?php                
                if (isset($_GET['font'])){
                    if ($_GET['font'] == 'open-sans') {        
?> 
   <style type = "text/css">
body{
    font-family: 'Open Sans', sans-serif;
}
    </style>
        <?php
    }
    } ?>


<!------------------------------------align param ------------------------------------->
    <?php                
                if (isset($_GET['align'])){
                    if ($_GET['align'] == 'justify') {        
?> 
   <style type = "text/css">
p,h5,h1{
    text-align: justify;
}
    </style>
        <?php
    }
    } ?>


<!------------------------------------text param------------------------------------->
<?php                
                if (isset($_GET['text'])){
                    if ($_GET['text'] == 'no') {        
?> 
   <style type = "text/css">
p,h5,h1{
    display: none;
}
    </style>
        <?php
    }
    } ?>

<!------------------------------------img param ------------------------------------->
    <?php                
                if (isset($_GET['img'])){
                    if ($_GET['img'] == 'no') {        
?> 
   <style type = "text/css">
img{
    display:none;
}
    </style>
        <?php
    }
    } ?>

    
<!------------------------------------flex param ------------------------------------->
    <?php                
                if (isset($_GET['flex'])){
                    if ($_GET['flex'] == 'no') {        
?> 
   <style type = "text/css">
.flex{
    display:block;
}
    </style>
        <?php
    }
    } ?>











