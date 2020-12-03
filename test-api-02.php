<?php
include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['yoga_test'])) {
    $_SESSION['yoga_test'] = [];
}

$output = [];

$id = isset($_GET['yoga_test']) ? intval($_GET['sid']) + 1 : 1;


$where = " WHERE 1 ";
$test_num = count($_SESSION['yoga_test']) + 1;
$name = 'test' . $test_num;
echo 'name::' . $name;

if (count($_SESSION['yoga_test']) > 0) {
    $where .= " AND `question_id`=$test_num ";
}

$c_sql = "SELECT * FROM yoga_test $where";
$c_rows = $pdo->query($c_sql)->fetchAll();
$t = $c_rows[0]['question'];
$q = $c_rows[0]['ans'];
$v = $c_rows[0]['value'];
$pieces = explode(",", $q); //把string變成了array
$value = explode(",", $v);


if (!$id) {
    $output['code'] = 401;
} else {
    // 拿到下一個題目
    $sql = "SELECT `sid`, `author`, `bookname`, `book_id`, `price` FROM products WHERE sid=$sid";
    $row = $pdo->query($sql)->fetch();
    if (empty($row)) {
        $output['code'] = 410;
    } else {
        $row['quantity'] = $quantity;
        $_SESSION['cart'][$row['sid']] = $row;
    }
}


$output['yoga_test'] = $_SESSION['yoga_test'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
