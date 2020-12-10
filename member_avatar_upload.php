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

if (empty($_FILES['avatar'])) {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$newName = uniqid() . rand(100, 999) . $allowFiles[$_FILES['avatar']['type']];



move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/img/member/' . $newName);
$output['img'] = WEB_ROOT . '/img/member/' . $newName;
$output['error'] = '';


// 更新圖片

$output1 = [
    'success' => false,
    // 'code' => 0,
    // 'error' => '沒有上傳圖片',
];


$sql = "UPDATE `members` SET `avatar`=? WHERE `id`=?";


$stmt = $pdo->prepare($sql);
$stmt->execute([
    $newName,
    $_POST['id'],
]);

if ($stmt->rowCount() == 1) {
    $output1['success'] = true;
    // $output1['error'] = '';
} else {
    $output1['success'] = [];
    // $output1['error'] = '沒有上傳圖片';
}

echo json_encode($output1, JSON_UNESCAPED_UNICODE);
