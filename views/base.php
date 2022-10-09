<?php 
ini_set('display_errors',true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ac64632661.js" crossorigin="anonymous"></script>

    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick.css"/>
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick-theme.css"/>

    <!-- LIGHTBOX -->
    <link rel="stylesheet" type="text/css" href="../assets/css/lightbox.min.css"/>



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
    
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- JQUERY -->
<script type="text/javascript" src="../assets/js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-migrate-1.4.1.min.js"></script>

<!-- SLICK -->
<script type="text/javascript" src="../assets/js/slick/slick.min.js"></script>

<!-- Lightbox -->
<script src="../assets/js/lightbox.js"></script>

<!-- SCRIPT SPECIFIQUE -->
<?=$script?>


</body>
</html>