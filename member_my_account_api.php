<?php
require __DIR__ . '/parts/config.php';
// require __DIR__. '/parts/admin-required.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];
//如果送的資料name是空的就直接轉乘json
// if (empty($_POST['nickname'])) {
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }


$sql = "UPDATE `members` SET  `nickname`=?, `account`=?, `password`=?, `mobile`=?,`email`=?,`birthday`=? WHERE `id`=?";


$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['nickname'],
    $_POST['account'],
    $_POST['password'],
    $_POST['mobile'],
    $_POST['email'],
    $_POST['birthday'],
    $_POST['id'],
]);

if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '資料沒有變更';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
