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
<link rel="shortcut icon" href="./SVG/icon_green.svg" type="image/x-icon" />


<div class="modal_wrap d-flex align-items-center justify-content-center" data-sid="<?= $modal_rows['sid'] ?>" id="endformodal">
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
            <button class="btn_l" style="margin-right: 40px;" onclick="parent.location.href='product_mat.php?sid=<?= $_GET['sid'] ?>'">了解更多</button>
            <button class="btn_f buy_btn">加入購物車</button>
        </div>
    </div>
</div>


<?php include __DIR__ . '/parts/script.php'; ?>
<script src="<?= WEB_ROOT ?>lib/jquery.fly.min.js"></script>

<!-- js連結 -->
<script>
    const others = <?= json_encode($others_rows, JSON_UNESCAPED_UNICODE) ?>;

    //購物車動畫
    $('.buy_btn').on('click', addProduct);


    function addProduct(event) {
        var offset = $("#endformodal").offset(),
            img = "./img/product_list/<?= $pic ?>.jpg"
        flyer = $(`<img class="u-flyer" src="${img}" style="width: 100px; height: 100px;"/>`);
        flyer.fly({
            start: {
                left: event.pageX,
                top: event.pageY
            },
            end: {
                left: 900,
                top: offset.top,
                width: 0,
                height: 0
            },
            autoPlay: true, //是否直接运动,默认true
            speed: 1.8 //越大越快，默认1.2

        });
    }

    $('.buy_btn').on('click', function(event) {
        const sid = $('.modal_wrap').attr('data-sid');
        const qty = 1;

        console.log({
            sid: sid,
            quantity: qty
        });

        $.get('handle-cart-product.php', {
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