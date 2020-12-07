<?php
include __DIR__ . '/parts/config.php';

//---------------------------------------------
// $oh_sql = "INSERT INTO `orders`( `member_sid`, `amount`, `logistic`, `trans_fee`, `payment`, `deduction`, `buyer`, `address`, `mobile`, `email`, `points`, `payment_status`, `order_date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
//---------------------------------------------
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有資料',
];

if (empty($_POST['email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$member_id = $_SESSION['user']['id'] ?? 1;


//外來資料使用問號
$oh_stmt = $pdo->prepare("INSERT INTO `orders`( `member_sid`, `amount`, `logistic`, `trans_fee`, `payment`, `deduction`, `buyer`, `address`, `mobile`, `email`, `points`, `payment_status`,`logistic_status`, `order_status`, `order_date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");

$oh_stmt->execute([

    $member_id,
    $_POST['amount'],
    $_POST['logistic'],
    $_POST['trans_fee'],
    $_POST['payment'],
    $_POST['deduction'],
    $_POST['buyer'],
    $_POST['address'],
    $_POST['mobile'],
    $_POST['email'],
    $_POST['points'],
    $_POST['payment_status'],
    $_POST['logistic_status'],
    $_POST['order_status'],

]);

$output['success'] = true;
$output['error'] = '';

echo json_encode($output, JSON_UNESCAPED_UNICODE);
