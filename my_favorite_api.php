<?php include __DIR__ . '/parts/config.php'; ?>
<?php

// $sid = intval($_GET['sid'] ?? 1);
$output = [
    'success' => false,
    'code' => 0,
    'add' => 0,
    'error' => '沒有加到我的最愛',
];

// is logined?
// if(empty(($_SESSION['user']['id']))){
//     location.href ='';
// };

if (empty($_POST['product_sid'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
};
// TODO: 檢查資料格式

$member_id = $_SESSION['user']['id'] ?? 1;
$product_sid = intval($_POST['product_sid']);

$f_sql = " SELECT * FROM favorite WHERE member_id=$member_id AND product_sid=$product_sid";

// $sql = "INSERT INTO `favorite`( `member_id`, `product_sid`, `created_at`) VALUES ( ?, ?, NOW())";

$f_stmt = $pdo->query($f_sql);
// $output['result1'] = $f_stmt->fetchAll();

$output['error'] = '';

if ($f_stmt->rowCount() == 1) {
    $pdo->query("DELETE FROM `favorite` WHERE `member_id`=$member_id AND `product_sid`=$product_sid");
    $output['success'] = true;
    $output['add'] = 0;
} else {
    $ff_stm = $pdo->prepare("INSERT INTO `favorite`( `member_id`, `product_sid`, `created_at`) VALUES ( ?, ?, NOW())");
    $ff_stm->execute([
        $member_id,
        $product_sid,

    ]);
    $output['success'] = true;
    $output['add'] = 1;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
