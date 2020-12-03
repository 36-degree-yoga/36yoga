<?php
require __DIR__ . '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
    'post' => $_POST,
];


if (empty($_POST['regis_email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
}

$sql = "INSERT INTO `members`(
        `email`,`password`,`create_at`
        ) VALUES (
        ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['regis_email'],
    $_POST['regis_pw1']
]);

$user_sid = $pdo->lastInsertId();

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $output['error'] = '';
    // $_SESSION['user'] = $_POST['regis_email'];
    $_SESSION['user']['id'] = $user_sid;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
