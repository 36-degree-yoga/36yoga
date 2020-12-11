<?php
require __DIR__ . '/parts/config.php';

$output = [
    'success' => false,
    'post' => $_POST,
];


$sql = "INSERT INTO `my_coupon`(
        `member_sid`,`coupon_code`,`description`,`deadline`
        ) VALUES (
        ?, ?,?, ?
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $_POST['coupon_code'],
    $_POST['description'],
    $_POST['deadline']


]);

echo json_encode($output, JSON_UNESCAPED_UNICODE);
