
<?php
include __DIR__ . '/config.php';



echo json_encode($_SESSION['cart'] ?? [], JSON_UNESCAPED_UNICODE);
