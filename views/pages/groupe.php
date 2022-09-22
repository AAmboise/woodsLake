<?php

ob_start();
?>

<div>groupe</div>

<?php

$content= ob_get_clean();
require_once './views/base.php';
?>