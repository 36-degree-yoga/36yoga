<?php include __DIR__ . '/parts/config.php';

// $p_stmt = $pdo->query("SELECT * FROM `products` ORDER BY `sid` ASC");
// // $rows=$stmt->fetchAll();
// $c = $p_stmt->fetch();


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->

<link rel="stylesheet" href="./CSS/shopping-cart.css" />
<?php include __DIR__ . '/parts/nav.php'; ?>
<!-- 貼上html -->

<div class="nav-place-zone"></div>
<div class="thermometer_container">
    <div class="order_step_title row justify-content-around">
        <p id="order_s_1">商品確認</p>
        <p id="order_s_2">填寫資料</p>
        <p id="order_s_3">確認付款</p>
        <p id="order_s_4">訂單完成</p>
    </div>
    <div class="thermometer_wrap d-flex align-items-center">
        <img class="thermometer d-block" src="img/step123needpic/order_thermometer.svg" alt="" />

        <!-- <div class="thermometer_line_wrap"> -->
        <div class="thermometer_line">
            <div class="thermometer_move"></div>
        </div>
        <!-- </div> -->
    </div>
    <div class="order_step_number row justify-content-around">
        <p id="order_n_1">01</p>
        <p id="order_n_2">02</p>
        <p id="order_n_3">03</p>
        <p id="order_n_4">04</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <!-- 電腦版 -->
        <div class="col-10 this-one-mobile-none">
            <table class="w-100">
                <tbody>
                    <tr class="shop-cart-title">
                        <td></td>
                        <td class="">內容</td>
                        <td>數量</td>
                        <td>價格</td>
                        <td>收藏</td>
                        <td>刪除</td>
                    </tr>
                    <!-- one product -->
                    <?php foreach ($_SESSION['cart'] as $c) : ?>
                        <tr class="mt-3">
                            <td>
                                <div class="product-img-pc mx-auto ">
                                    <img src="./img/product_list/<?= explode(",", $c['img'])[1] ?>.jpg" alt="">
                                </div>

                            </td>
                            <td class="pl-4">
                                <div class="product-info text-left">
                                    <p><?= $c['product_name'] ?></p>
                                    <p class="product-info-detail">
                                        顏色：<?= $c['color'] ?><br />尺寸：<?= $c['length'] ?>*<?= $c['width'] ?><br />重量：<?= $c['weight'] ?>g
                                    </p>
                                </div>
                            </td>
                            <td class="number-change w-25">

                                <!-- copy count -->
                                <div class="cart_count_wrap d-flex justify-content-center col align-items-lg-center">
                                    <!-- - -->
                                    <div class="minus add_cart_icon ">
                                        <img src="./SVG/custom/minus_g_icon.svg" alt="">
                                    </div>
                                    <!-- 數量 -->
                                    <!-- <div class="count">1</div> -->
                                    <input id="mat-count" name="mat-count" class="count" type="text" value="<?= $c['quantity'] ?>" readonly="readonly">
                                    <!-- + -->
                                    <div class="plus add_cart_icon">
                                        <img src="./SVG/custom/plus_g_icon.svg" alt="">
                                    </div>
                                </div>
                                <!-- copy count -->
                            </td>
                            <td class="price">NT.<?= $c['price'] * $c['quantity'] ?></td>
                            <td class="favorite-icon">
                                <a href="#"><img src="./SVG/icon_favorite.svg" alt=""></a>

                            </td>
                            <td class="delete-icon">
                                <a href="#"><img src="./SVG/icon_trash.svg" alt=""></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        <!-- 手機版 -->
        <?php foreach ($_SESSION['cart'] as $c) : ?>
            <div class="this-one-pc-none w-100">
                <div class="d-flex col-12">
                    <div class=" col-10 d-flex justify-content-start p-0">
                        <div class="product-img mr-3">
                            <img src="./img/product_list/<?= explode(",", $c['img'])[1] ?>.jpg" alt="" style="width: 100%;height:100px;">
                        </div>
                        <div class="product-info  d-flex flex-column">
                            <p><?= $c['product_name'] ?></p>
                            <p class="product-info-detail m-0">
                                顏色：<?= $c['color'] ?><br />尺寸：<?= $c['length'] ?>*<?= $c['width'] ?><br />重量：<?= $c['weight'] ?>g
                            </p>


                        </div>
                    </div>

                    <div class="col-2 d-flex justify-content-end align-items-end">
                        <p class="m-0">NT.<?= $c['price'] * $c['quantity'] ?></p>
                    </div>
                </div>
                <div class="col-12 d-flex align-items-top mb-2 mt-3 icon-family">
                    <div class="col-8 d-flex justify-content-start number-change align-items-center p-0">
                        <!-- copy count -->
                        <div class="cart_count_wrap d-flex justify-content-start align-items-center">
                            <!-- - -->
                            <div class="minus add_cart_icon ">
                                <img src="./SVG/custom/minus_g_icon.svg" alt="">
                            </div>
                            <!-- 數量 -->
                            <!-- <div class="count">1</div> -->
                            <input id="mat-count" name="mat-count" class="count" type="text" value="<?= $c['quantity'] ?>" readonly="readonly">
                            <!-- + -->
                            <div class="plus add_cart_icon">
                                <img src="./SVG/custom/plus_g_icon.svg" alt="">
                            </div>
                        </div>
                        <!-- copy count -->
                    </div>
                    <div class="col-4 d-flex justify-content-between align-items-center">
                        <a href="#"> <img src="./SVG/icon_favorite.svg" alt=""></a>

                        <a href="#"><img src="./SVG/icon_trash.svg" alt=""></a>
                    </div>
                </div>
                <div class="dividerline-in-table-no2 mx-auto"></div>



            </div>
        <?php endforeach; ?>

        <!-- 總計 -->
        <div class="d-flex justify-content-end col-12 col-sm-12 col-md-10 col-lg-10">
            <div class="text-right pc-need-hide-span">
                <p>共 3 件</br><span> /</span>
                    總重：1500g<br>
                    共計：NT.3600</p>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-leave p-0">繼續購物</button>
            <button class="btn btn-leave p-0 hope-next-step">下ㄧ步</button>
        </div>
    </div>
</div>

<!--  hot products -->
<div class="container hot-products-zone">這裡是熱門商品的位置呦</div>
<!-- foooterrrrrrrr -->
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->

<script>
    // ↓↓ 商品數量↓↓// 
    var t = $('.count'); /*  數量顯示框*/
    $('.plus').click(function() {
        if (t.val() < 10) {
            /* 數量最大不能超過 */
            t.val(parseInt(t.val()) + 1);
        } else {
            t.val(10);
        }
        console.log(t.val());
    })
    $('.minus').click(function() {
        if (t.val() <= 1) {
            /*數量最少爲1  */
            t.val(1);
        } else {
            t.val(parseInt(t.val()) - 1);
        }
        console.log(t.val());
    })
    // ↑↑ 商品數量↑↑ //

    // console.log()
</script>


<!-- <script src="./lib/shopping-cart-count.js"></script> -->
<?php include __DIR__ . '/parts/html-end.php'; ?>