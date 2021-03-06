<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['custom'])) {
    $_SESSION['custom'] = [];
}

$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$sid = isset($_GET['sid']) ? $_GET['sid'] : 0 ;
$save = isset($_GET['save'])? $_GET['save'] : 'no' ;

// $output = $save;
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
// exit;


$design_sql = "SELECT * FROM `custom_product` WHERE `sid` = $sid";
$design_stmt = $pdo->query($design_sql);
$design_rows = $design_stmt->fetch();


// $output = $design_rows['mat-count'];
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
// exit;


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


// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $save,
// ]);


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
            
                $sql = "SELECT * FROM custom_product WHERE `sid` = $custom_sid ";
                $row = $pdo->query($sql)->fetch();
                $_SESSION['custom'][$row['sid']] =$row;  
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

$output['custom'] = $_SESSION['custom'];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
