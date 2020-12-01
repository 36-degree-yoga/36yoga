<?php
require __DIR__ . '/parts/config.php';
$output = [
    'success' => false,
];


if (empty($_POST['loginemail'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
};

$sql = "SELECT `id`, `email`, `password` FROM `members` WHERE `email` = ? AND `password` = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['loginemail'],
    $_POST['loginpassword'],
]);

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $_SESSION['user'] = $stmt->fetch();
}

$output['rowCount'] = $stmt->rowCount();
echo json_encode($output, JSON_UNESCAPED_UNICODE);
