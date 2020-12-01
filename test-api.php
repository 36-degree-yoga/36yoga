<?php
require __DIR__ . '/parts/config.php';
$output = [
    'success' => false,
];

if (empty($_POST[$name])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
} else {
    $output['success'] = true;
    $_SESSION['yoga_test'][$name] = $_POST[$name];
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
};


echo json_encode($output, JSON_UNESCAPED_UNICODE);
