<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['custom_cart'])) {
    $_SESSION['custom_cart'] = [];
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
            if (isset($_SESSION['custom_cart'][$sid])) {
                $_SESSION['custom_cart'][$sid]['quantity'] = $quantity;
                $_SESSION['custom_cart'][$sid]['img'] = $img;
                $_SESSION['custom_cart'][$sid]['weight'] = $weight;
                $_SESSION['custom_cart'][$sid]['length'] = $length;
                $_SESSION['custom_cart'][$sid]['width'] = $width;
                $_SESSION['custom_cart'][$sid]['color'] = $color;
                $_SESSION['custom_cart'][$sid]['price'] = $price;
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
                    $_SESSION['custom_cart'][$row['sid']] = $row;
                }
            }
        }
        break;

    case 'remove':
        if (isset($_SESSION['custom_cart'][$sid])) {
            unset($_SESSION['custom_cart'][$sid]);
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
$output['custom_cart'] = $_SESSION['custom_cart'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
