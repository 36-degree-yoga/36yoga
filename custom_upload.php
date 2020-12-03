<?php
require __DIR__ . '/parts/config.php';
header('Content-Type: application/json');
//echo json_encode($_FILES);
$allowFiles = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
];

$output = [
    'img' => '',
    'error' => '只接受 jpeg 圖檔'
];

if (empty($_FILES['inputpic'])) {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$newName = uniqid() . rand(100, 999) . $allowFiles[$_FILES['inputpic']['type']];

move_uploaded_file($_FILES['inputpic']['tmp_name'], __DIR__ . '/img/customize/upload/' . $newName);
$output['img'] = WEB_ROOT . '/img/customize/upload/' . $newName;
$output['error'] = '';

echo json_encode($output, JSON_UNESCAPED_UNICODE);
