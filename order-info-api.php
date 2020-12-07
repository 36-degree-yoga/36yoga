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
// $output = [];
// $output = $_GET['email'];
if (empty($_POST['email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$member_id = $_SESSION['user']['id'] ?? 1;
// $o_sql = "SELECT * FROM orders WHERE member_sid=$member_id";
// $o_stmt = $pdo->query($o_sql);

// $amount = isset($_GET['amount']) ? intval($_GET['amount']) : 1;
// $logistic = isset($_GET['logistic']) ? intval($_GET['logistic']) : 0;
// $trans_fee = isset($_GET['trans_fee']) ? intval($_GET['trans_fee']) : 0;
// $payment = isset($_GET['payment']) ? intval($_GET['payment']) : 0;
// $deduction = isset($_GET['deduction']) ? intval($_GET['deduction']) : 0;
// $buyer = isset($_GET['buyer']) ? ($_GET['buyer']) : 0;
// $address = isset($_GET['address']) ? intval($_GET['address']) : 0;
// $mobile = isset($_GET['mobile']) ? intval($_GET['mobile']) : 0;
// $email = isset($_GET['email']) ? intval($_GET['email']) : 0;
// $payment_status = isset($_GET['payment_status']) ? intval($_GET['payment_status']) : 0;

//有無新增查看 有rowCount()＝1/無rowCount()=0
// if ($o_stmt->rowCount() == 1) {

//外來資料使用問號
$oh_stmt = $pdo->prepare("INSERT INTO `orders`( `member_sid`, `amount`, `logistic`, `trans_fee`, `payment`, `deduction`, `buyer`, `address`, `mobile`, `email`, `points`, `payment_status`, `order_date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,NOW())");

$oh_stmt->execute([
    // $_SESSION['user']['id'],
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
    // $amount,
    // $logistic,
    // $trans_fee,
    // $payment,
    // $deduction,
    // $buyer,
    // $address,
    // $mobile,
    // $email,
    // $payment_status
]);
// $output['ke'] = $_GET['email'];
$output['success'] = true;
$output['error'] = '';
// }

// } else {
//     $oh_stmt = $pdo->prepare("INSERT INTO `orders`( `member_sid`, `amount`, `logistic`, `trans_fee`, `payment`, `deduction`, `buyer`, `address`, `mobile`, `email`, `points`, `payment_status`, `order_date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,NOW())");

//     $oh_stmt->execute([
//         $member_id,
//         $amount,
//         $logistic,
//         $trans_fee,
//         $payment,
//         $deduction,
//         $buyer,
//         $address,
//         $mobile,
//         $email,
//         $payment_status,
//     ]);
//     $output['success'] = true;
//     $output['error'] = '';
// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);
