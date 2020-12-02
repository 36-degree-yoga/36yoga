<?php
include __DIR__ . '/parts/config.php';
// require __DIR__ . '/parts/db-comment.php';
//用來處理購物車 有新增 刪除 讀取
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
//isset 是否設定true/false
//回傳
$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
//指定sid  intval整數表示
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
//數量預設值為1
$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;



switch ($action) {
    default:
    case 'read':
        break;
        //default（預設） 'read'設定無動作
    case 'add':
        if (!$sid or !$quantity) {
            //  除錯用
            $output['code'] = 401;
        } else {
            //產品編號當key 整筆內容為value
            //如果項目已經存在
            if (isset($_SESSION['cart'][$sid])) {
                $_SESSION['cart'][$sid]['quantity'] = $quantity;
            } else {
                $sql = "SELECT `sid`, `product_name`, `price`, `length`, `width`, `color`, `weight`, `img` FROM `products` WHERE sid=$sid";
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
