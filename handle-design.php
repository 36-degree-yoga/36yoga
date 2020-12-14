<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['custom'])) {
    $_SESSION['custom'] = [];
}

$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$sid = isset($_GET['sid']);
$save = isset($_GET['save']);

$design_sql = "SELECT * WHERE `sid` = $sid";
$design_stmt = $pdo->query($design_sql);
$design_rows = $design_stmt->fetchAll();

$sql = "INSERT INTO `custom_product`( `member_id`, `mat-count`, `weight`, `mat-total-price`, `matw`, `mat-h`, `mat-thickness`, `mat-texture`, `pick_color`, `design_img`, `mat-print`, `save_data`, `created_at`
        ) VALUES (
        ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, ?, NOW()
    )";



$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $design_rows['mat-count'],
    $design_rows['weight'],
    $design_rows['mat-total-price'],
    $design_rows['matw'],
    $design_rows['mat-h'],
    $design_rows['mat-thickness'],
    $design_rows['mat-texture'],
    $design_rows['pick_color'],
    $design_rows['design_img'],
    $design_rows['mat-print'],
    $save,
]);




$custom_sid = $pdo->lastInsertId();

$sql = "UPDATE `custom_product` SET  `save_data`=? WHERE `sid`= $sid";


$stmt = $pdo->prepare($sql);
$stmt->execute([
    $save,
]);


switch ($action) {
    default:
    case 'read':
        break;

        // 加商品
    case 'add':
        // 判斷有沒有值
        if (!'sid') {
            $output['code'] = 401;
        } else {
            if (isset($_SESSION['cart'][$sid])) {
                $_SESSION['cart'][$sid]['quantity'] = $quantity;
            } else {
                $sql = "SELECT * FROM custom_product WHERE `sid` = $sid AND ";
                $row = $pdo->query($sql)->fetch();
                if (empty($row)) {
                    $output['code'] = 410;
                } else {
                    $row['quantity'] = $quantity;
                    $_SESSION['cart'][$row['sid']] = $row;
                }
            }
        }
        break;

    case 'remove':
        if (isset($_SESSION['cart'][$sid])) {
            unset($_SESSION['cart'][$sid]);
        } else {
            $output['code'] = 420;
        }
        break;
}
$output['cart'] = $_SESSION['cart'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
