<?php 
ini_set('display_errors',true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5.2.2-->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ac64632661.js" crossorigin="anonymous"></script>

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick.css"/>
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick-theme.css"/>

    <!-- LIGHTBOX -->
    <link rel="stylesheet" type="text/css" href="../assets/css/lightbox.min.css"/>
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">



    <title><?=$titre?></title>
    <?=$css?>

</head>
<body>
    
    <div class='container-fluid'>

            <?php 
                $menu ? require_once './views/template/nav.php' : false;
                $header ? require_once './views/template/header.php' : false;
            ?>

        <div class='row main'>
            <?=$content?>
        </div>

        <div class="row">
            <?php
            require_once './views/template/footer.php';
            ?>
        </div>
        
    </div>
    
<!-- BOOTSTRAP 5.2.2-->
<script type="text/javascript" src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- JQUERY 3.6.1 -->
<script type="text/javascript" src="../assets/js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate-1.4.1.min.js"></script>

<!-- SLICK 1.8.1-->
<script type="text/javascript" src="../assets/js/slick/slick.min.js"></script>

<!-- Lightbox -->
<script src="../assets/js/lightbox.js"></script>

<script type="text/javascript" src="../assets/js/base.js"></script>

<!-- SCRIPT SPECIFIQUE -->
<?=$script?>


</body>
</html>