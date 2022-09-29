<?php
ob_start();
?>

<div class="container">
    <?php
    require_once './views/content/nav2.php';
    require_once './views/content/concerts.php';
    require_once './views/content/extraits.php';
    ?>
</div>


<?php
$content= ob_get_clean();
require_once './views/base.php';
?>