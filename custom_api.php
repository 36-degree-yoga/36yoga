<?php
require __DIR__ . '/parts/config.php';
// include __DIR__ . '/parts/required.php';
// $output = [
//     'success' => false,
//     'code' => 0,
//     'error' => '失敗',
// ];



// if (empty($_POST['name'])) {
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// `member_sid`,

//     $_SESSION['user']['id'],
// }

$sql = "INSERT INTO `custom_product`( `member_id`, `mat-count`, `weight`, `mat-total-price`, `matw`, `mat-h`, `mat-thickness`, `mat-texture`, `pick_color`, `design_img`, `mat-print`, `save_data`, `created_at`
        ) VALUES (
        ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, ?, NOW()
    )";



$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $_POST['mat-count'],
    $_POST['weight'],
    $_POST['mat-total-price'],
    $_POST['matw'],
    $_POST['mat-h'],
    $_POST['mat-thickness'],
    $_POST['mat-texture'],
    $_POST['pick_color'],
    $_POST['design_img'],
    $_POST['mat-print'],
    $_POST['save_data'],
]);




$custom_sid = $pdo->lastInsertId();

$member_id = intval($_SESSION['user']['id']);
$design_sql = "SELECT `sid`, `member_id`, `mat-total-price`, `mat-count`, `matw`, `mat-h`, `weight`, `mat-thickness`, `mat-texture`, `pick_color`, `design_img`, `mat-print`, `save_data`, `created_at` FROM `custom_product` WHERE `sid` = $custom_sid AND `save_data`='no'";
$design_stmt = $pdo->query($design_sql);
$design_rows = $design_stmt->fetch();


$_SESSION['custom'][$design_rows['sid']] = $design_rows;

// if ($stmt->rowCount() == 1) {
//     $output['success'] = true;
//     $output['error'] = '';
// }

// if (!isset($_SESSION['custom'])) {
//     $_SESSION['custom'] = [];
// }

// $output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
// $sid = isset($_GET['sid']) ? $_GET['sid'] : 0;
// // $item = isset($_GET['item']) ? intval($_GET['item']) : '0';
// $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;


// switch ($action) {
//     default:
//     case 'read':
//         break;

//         // 加商品
//     case 'add':
//         // 判斷有沒有值
       
//             if (isset($_SESSION['custom'][$sid])) {
//                 $_SESSION['custom'][$sid]['mat-count'] = $quantity;
//             } else {
                
//                 $_SESSION['custom'][$design_rows['sid']] = $design_rows;

//                 if (empty($design_rows)) {
//                     $output['code'] = 410;
//                 } else {
//                     $design_rows['mat-count'] = $quantity;
//                     $_SESSION['custom'][$design_rows['sid']] = $design_rows;
//                 }
//             }
        
//         break;

//     case 'remove':
//         if (isset($_SESSION['custom'][$sid])) {
//             unset($_SESSION['custom'][$sid]);
//         } else {
//             $output['code'] = 420;
//         }
//     break;
//     }

    

    $_SESSION['custom'][$design_rows['sid']] = $design_rows;
    if (isset($_SESSION['custom'][''])) {
        unset($_SESSION['custom']['']);
    }

    $output['custom'] = $_SESSION['custom'];


    // $output['success'] = true;

echo json_encode($output, JSON_UNESCAPED_UNICODE);
