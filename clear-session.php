<?php
session_start();
session_destroy();
$output = [
    'session' => '沒有資料',
];
echo json_encode([
    $output
], JSON_UNESCAPED_UNICODE);
