<?php

ob_start();
?>

<div class='container-fluid'>
    <?php

    require_once './views/content/groupe.php';
    require_once './views/content/contact.php';
    ?>
</div>

<?php

$content= ob_get_clean();
require_once './views/base.php';
?>