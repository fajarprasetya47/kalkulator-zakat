<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>ZAKAT CALCULATOR</title>
    <!-- LINK -->
    <link rel="shortcut icon" href="assets/images/zakat-calculator-logo.png" type="image/x-icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

    <body class="is-preload">

        <div id="wrapper">
            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <?php
                        include 'template/header.php';
                        
                        if(!empty($_GET['menu'])&&$_GET['page']){
                            include 'menu/'.$_GET['menu'].'/'.$_GET['page'].'.php';
                        }
                        else{
                            include 'menu/homepage/homepage.php';
                        }
                    ?> 
                </div>
            </div>
            <!-- SIDEBAR -->
            <?php
                include 'template/sidebar.php';
            ?>
        </div>

    </body>

<!-- Scripts -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/transition.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/custom.js"></script>


</html>
