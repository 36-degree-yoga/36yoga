<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;
$img = isset($_GET['img']) ? intval($_GET['img']) : 0;
$weight = isset($_GET['weight']) ? intval($_GET['weight']) : 0;
$length = isset($_GET['length']) ? intval($_GET['length']) : 0;
$width = isset($_GET['width']) ? intval($_GET['width']) : 0;
$color = isset($_GET['color']) ? ($_GET['color']) : 0;
$price = isset($_GET['price']) ? intval($_GET['price']) : 0;
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
                $_SESSION['cart'][$sid]['img'] = $img;
                $_SESSION['cart'][$sid]['weight'] = $weight;
                $_SESSION['cart'][$sid]['length'] = $length;
                $_SESSION['cart'][$sid]['width'] = $width;
                $_SESSION['cart'][$sid]['color'] = $color;
                $_SESSION['cart'][$sid]['price'] = $price;
            } else {
                $sql = "SELECT * FROM products WHERE sid=$sid";
                $row = $pdo->query($sql)->fetch();
                if (empty($row)) {
                    $output['code'] = 410;
                } else {
                    $row['quantity'] = $quantity;
                    $row['img'] = $img;
                    $row['weight'] = $weight;
                    $row['length'] = $length;
                    $row['width'] = $width;
                    $row['color'] = $color;
                    $row['price'] = $price;
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
// if()
// $output['cart']['34']['sid']
// $sql = "SELECT `sid`,`mat-total-price`, `mat-count` , `matw` , `mat-h` , `pick_color` , `design_img` FROM `custom_product` WHERE `design_img` = ";


// $row = $pdo->query($sql)->fetch();


// $output['cart']['34']['color'] = 'hahaha';


//最後的最後才存到session裡面
$output['cart'] = $_SESSION['cart'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
