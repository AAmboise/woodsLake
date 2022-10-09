<?php
ob_start();
?>

<div class="container">
    <?php

    ?>
</div>


<?php
$content= ob_get_clean();
require_once './views/base.php';
?>