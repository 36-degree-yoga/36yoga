<?php
require __DIR__ . '/parts/config.php';
if (isset($_GET['sid'])) {
    $sid = intval($_GET['sid']);
} else {
    header('Location:member_design.php');
    exit;
}
$delete_sql = "DELETE FROM `custom_product` WHERE sid=$sid";
$pdo->query($delete_sql);

if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location:member_design.php');
}
