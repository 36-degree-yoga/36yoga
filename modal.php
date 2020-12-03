<?php include __DIR__ . '/parts/config.php';

$sid = intval($_GET['sid'] ?? 0);
// 瑜珈墊
$modal_sql = "SELECT `sid`, `product_name`, `list_id`, `product_num`, `price`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `color`, `img` FROM `products` WHERE sid=$sid";
$modal_stmt = $pdo->query($modal_sql);

$modal_rows = $modal_stmt->fetch();
// echo json_encode($modal_rows, JSON_UNESCAPED_UNICODE);
// exit;
$pic = explode(",", $modal_rows['img'])[1];


$product_name = $pdo->quote($modal_rows['product_name']);

$others_sql = "SELECT `sid`, `product_name`, `list_id`, `product_num`, `price`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `color`, `img` FROM `products` WHERE product_name=$product_name  GROUP BY `color` ORDER BY sid";
$others_stmt = $pdo->query($others_sql);
$others_rows = $others_stmt->fetchAll();


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/quick_view.css">


<div class="modal_wrap d-flex align-items-center justify-content-center" data-sid="<?= $modal_rows['sid'] ?>">
    <div class="quick_view_img_wrap">
        <img src="./img/product_list/<?= $pic ?>.jpg" alt="">
    </div>
    <div class="ml-5">
        <h3>
            <?= $modal_rows['product_name'] ?>
        </h3>
        <div class="space_30"></div>
        <div class="item-tag d-flex">
            <h6 class="text-justify" style="color: #F2A200;">止滑</h6>
            <h6 class="text-justify" style="color: #F2A200;">防水</h6>
        </div>
        <div class="space_30"></div>
        <p style="line-height: 30px;">
            <?= $modal_rows['quick_view_01'] ?>
            <br>
            <?= $modal_rows['quick_view_02'] ?>
            <br>
            <?= $modal_rows['quick_view_03'] ?>
        </p>

        <div class="d-flex align-items-center">
            <div style="width: 10px;height: 20px;background-color: #db5c00;"></div>
            <h6 class="ml-2"> NT.<?= $modal_rows['price'] ?></h6>
        </div>
        <div class="space_60"></div>
        <div class="d-flex">
            <?php foreach ($others_rows as $i) : ?><a href="?sid=<?= $i['sid'] ?>">
                    <div class="color_circle" style="background-color:<?= $i['color'] ?>"></div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="space_60"></div>
        <div>
            <button class="btn_l" style="margin-right: 40px;">了解更多</button>
            <button class="btn_f buy_btn">加入購物車</button>
        </div>
    </div>
</div>


<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script>
    const others = <?= json_encode($others_rows, JSON_UNESCAPED_UNICODE) ?>;

    $('.buy_btn').on('click', function(event) {
        const sid = $('.modal_wrap').attr('data-sid');
        const qty = 1;

        console.log({
            sid: sid,
            quantity: qty
        });

        $.get('handle-cart.php', {
            sid: sid,
            quantity: qty,
            action: 'add'
        }, function(data) {
            console.log(data);
            if (window.parent && window.parent.renderSmallCart) {
                window.parent.renderSmallCart(data.cart);
            }

        }, 'json');
    });
</script>
<?php include __DIR__ . '/parts/html-end.php'; ?>