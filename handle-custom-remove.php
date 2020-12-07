<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['custom'])) {
    $_SESSION['custom'] = [];
}

$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

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
            if (isset($_SESSION['custom'][$sid])) {
                $_SESSION['custom'][$sid]['mat-count'] = $quantity;
                
            } else {
                $sql = "SELECT * FROM `custom_product` WHERE `sid` = $sid AND `save_data`='no'";
                $row = $pdo->query($sql)->fetch();
                if (empty($row)) {
                    $output['code'] = 410;
                } else {
                    $row['mat-count'] = $quantity;
                    $_SESSION['custom'][$row['sid']] = $row;
                }
            }
        }
        break;

    case 'remove':
        if (isset($_SESSION['custom'][$sid])) {
            unset($_SESSION['custom'][$sid]);
        } else {
            $output['code'] = 420;
        }
        break;
}
// if()
// $output['cart']['34']['sid']
// $sql = "SELECT `sid`,`mat-total-price`, `mat-count` , `matw` , `mat-h` , `pick_color` , `design_img` FROM `custom_product` WHERE `design_img` = ";


// $row = $pdo->query($sql)->fetch();


// $output['cart']['34']['color'] = 'hahaha';


//最後的最後才存到session裡面
$output['custom'] = $_SESSION['custom'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
