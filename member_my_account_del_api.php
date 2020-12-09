<?php

require __DIR__ . '/parts/config.php';

if (isset($_SESSION['user']) and $_SESSION['user']['id']) {
    $id =  intval($_SESSION['user']['id']);

    $sql = "DELETE FROM `members` WHERE `id`=$id";
    $pdo->query($sql);

    unset($_SESSION['user']);
    echo "我刪囉";
    header('Location: product_list.php');
};
