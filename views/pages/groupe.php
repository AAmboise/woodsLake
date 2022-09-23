<?php

ob_start();
?>

<div class='container-fluid border border-light'>
    <?php
    require_once './views/content/groupe.php';
    ?>
</div>

<?php

$content= ob_get_clean();
require_once './views/base.php';
?>