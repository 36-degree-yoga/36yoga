<?php
require __DIR__ . '/parts/config.php';
// include __DIR__ . '/parts/required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '失敗',
];

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
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
