<?php

require __DIR__ . '/parts/config.php';

if (isset($_SESSION['user']) and $_SESSION['user']['id']) {
    $id =  intval($_SESSION['user']['id']);

    $sql = "DELETE FROM `members` WHERE `id`=$id";
    $pdo->query($sql);

    unset($_SESSION['user']);
    header('Location: product_list.php');
    exit;


    // echo json_encode($_GET['id'], JSON_UNESCAPED_UNICODE);
} else {

    // echo json_encode([
    //     'success' => false,
    // ], JSON_UNESCAPED_UNICODE);
}
