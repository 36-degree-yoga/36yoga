<?php
require __DIR__ . '/parts/config.php';
$output = [
    'success' => false,
];


if (empty($_POST['loginEmail'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
};

$sql = "SELECT `sid`, `loginEmail`, `loginPassword`, `nickname` FROM `admins` WHERE `loginEmail` = ? AND `loginPassword` = SHA1(?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['loginEmail'],
    $_POST['loginPassword'],
]);

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $_SESSION['admin'] = $stmt->fetch();
}

$output['rowCount'] = $stmt->rowCount();
echo json_encode($output, JSON_UNESCAPED_UNICODE);
