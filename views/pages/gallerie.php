<?php

ob_start();
?>

<div class='container'>
    <?php
    require_once '../views/content/gallerie.php';
    ?>
</div>

<?php

$content= ob_get_clean();
require_once '../views/base.php';
?>