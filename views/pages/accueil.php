<?php
ob_start();
?>

<div class="container border border-light">
    <?php
    require_once './views/content/concerts.php';
    require_once './views/content/slider.php';
    require_once './views/content/extraits.php';
    ?>
</div>


<?php
$content= ob_get_clean();
require_once './views/base.php';
?>