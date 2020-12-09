<?php include __DIR__ . '/parts/config.php';
//熱門商品
$rec1_sql = "SELECT * FROM `products` WHERE `sid` IN (1 , 2 ,14)";
$rec1_Stmt = $pdo->query($rec1_sql);
$rec1_row = $rec1_Stmt->fetchAll();
foreach ($rec1_row  as $k => $r) {
    $rec1_row[$k]['my_imgs'] = explode(",", $r['img']);
};

$rec2_sql = "SELECT * FROM `products` WHERE `sid` IN (9 , 18 , 22)";
$rec2_Stmt = $pdo->query($rec2_sql);
$rec2_row = $rec2_Stmt->fetchAll();
foreach ($rec2_row  as $k2 => $r2) {
    $rec2_row[$k2]['my_imgs'] = explode(",", $r2['img']);
};

?>

<?php if (!isset($_SESSION['custom'])) {
    $_SESSION['custom'] = [];
};

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
                        <tr class="mt-3 product-edit" id="product_<?= $c['sid'] ?>" data-sid="<?= $c['sid'] ?>">
                            <td>
                                <div class="product-img-pc mx-auto ">
                                    <img src="./img/product_list/<?= explode(",", $c['img'])[1] ?>.jpg" alt="">
                                </div>

                            </td>
                            <td class="pl-4 need-weight" data-weight="<?= $c['weight'] ?>">
                                <div class="product-info text-left">
                                    <p><?= $c['product_name'] ?></p>
                                    <p class="product-info-detail" style="font-size: 0.8rem;line-height:20px">尺寸：<?= $c['length'] ?>*<?= $c['width'] ?><br />重量：<?= $c['weight'] ?>g
                                    </p>
                                </div>
                            </td>
                            <td class="number-change w-25" data-count="<?= $c['quantity'] ?>">

                                <!-- copy count -->
                                <div class="cart_count_wrap d-flex justify-content-center col align-items-lg-center">
                                    <!-- - -->
                                    <div class="minus p_minus add_cart_icon ">
                                        <img src="./SVG/custom/minus_g_icon.svg" alt="">
                                    </div>
                                    <!-- 數量 -->
                                    <!-- <div class="count">1</div> -->
                                    <input name="mat-count" class="count" type="text" data-quantity="<?= $c['quantity'] ?>" value="<?= $c['quantity'] ?>" readonly="readonly">
                                    <!-- + -->
                                    <div class="plus p_plus add_cart_icon">
                                        <img src="./SVG/custom/plus_g_icon.svg" alt="">
                                    </div>
                                </div>
                                <!-- copy count -->
                            </td>
                            <td class="price" data-money="<?= $c['price'] * $c['quantity'] ?>">NT.<?= $c['price'] * $c['quantity'] ?></td>
                            <td class="favorite-icon">
                                <a href="#"><img src="./SVG/icon_favorite.svg" alt=""></a>

                            </td>
                            <td class="delete-icon">
                                <!--  href="javascript:delItem(<//?= $c['sid'] ?>)"  -->
                                <a data-toggle="modal" data-target="#del_prod_warn"><img src="./SVG/icon_trash.svg" alt=""></a>
                            </td>
                        </tr>
                        <!-- delete warning modal-->
                        <div class="modal fade" id="del_prod_warn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content modal-size">
                                    <div class="modal-header out_header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <img class="" src="svg/delete.svg" alt="">
                                        </button>
                                    </div>
                                    <div class="modal-body out_body">
                                        <p class="mx-auto">確定要刪除商品嗎？</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <button class="btn btn-leave p-0" data-dismiss="modal">先不要</button>
                                        <button class="btn btn-leave p-0 del-btn-check" onclick="delItem(<?= $c['sid'] ?>)" data-dismiss="modal">確認</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete warning -->
                    <?php endforeach; ?>

                    <!------------ 客製項目----*-------- -->
                    <?php foreach ($_SESSION['custom'] as $b) : ?>
                        <tr class="mt-3 product-edit" id="product_<?= $b['sid'] ?>" data-sid="<?= $b['sid'] ?>">
                            <td>
                                <div class="product-img-pc mx-auto " style="background-color: <?= $b['pick_color'] ?>;">
                                    <img src="./img/customize/design/<?= $b['design_img'] ?>.png" alt="">
                                </div>

                            </td>
                            <td class="pl-4 need-weight" data-weight="<?= $b['weight'] ?>">
                                <div class="product-info text-left">
                                    <p>客製瑜珈墊</p>
                                    <p class="product-info-detail" style="font-size: 0.8rem;line-height:20px">尺寸：<?= $b['mat-h'] ?>*<?= $b['matw'] ?><br />重量：<?= $b['weight'] ?>g
                                    </p>
                                </div>
                            </td>
                            <td class="number-change w-25" data-count="<?= $b['mat-count'] ?>">

                                <!-- copy count -->
                                <div class="cart_count_wrap d-flex justify-content-center col align-items-lg-center">
                                    <!-- - -->
                                    <div class="minus c_minus add_cart_icon ">
                                        <img src="./SVG/custom/minus_g_icon.svg" alt="">
                                    </div>
                                    <!-- 數量 -->
                                    <!-- <div class="count">1</div> -->
                                    <input name="mat-count" class="count" type="text" data-quantity="<?= $b['mat-count'] ?>" value="<?= $b['mat-count'] ?>" readonly="readonly">
                                    <!-- + -->
                                    <div class="plus add_cart_icon c_plus">
                                        <img src="./SVG/custom/plus_g_icon.svg" alt="">
                                    </div>
                                </div>
                                <!-- copy count -->
                            </td>
                            <td class="price" data_price="<?= $b['mat-total-price'] ?>" data-money="<?= $b['mat-total-price'] * $b['mat-count'] ?>">NT.<?= $b['mat-total-price'] * $b['mat-count'] ?></td>
                            <td class="favorite-icon">
                                <a href="#"><img src="./SVG/icon_favorite.svg" alt=""></a>

                            </td>
                            <td class="delete-icon">
                                <a data-toggle="modal" data-target="#del_Cprod_warn"><img src="./SVG/icon_trash.svg" alt=""></a>
                            </td>

                        </tr>

                        <!-- delete warning modal-->
                        <div class="modal fade" id="del_Cprod_warn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content modal-size">
                                    <div class="modal-header out_header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <img class="" src="svg/delete.svg" alt="">
                                        </button>
                                    </div>
                                    <div class="modal-body out_body">
                                        <p class="mx-auto">確定要刪除商品嗎？</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <button class="btn btn-leave p-0" data-dismiss="modal">先不要</button>
                                        <button class="btn btn-leave p-0 del-btn-check" onclick="delCItem(<?= $b['sid'] ?>)" data-dismiss="modal">確認</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete warning -->
                    <?php endforeach; ?>


                </tbody>
            </table>


        </div>



        <!-- 手機版 -->
        <?php foreach ($_SESSION['cart'] as $c) : ?>
            <div class="this-one-pc-none w-100 m-product-edit" data-sid="<?= $c['sid'] ?>" id="product_<?= $c['sid'] ?>">
                <div class="d-flex col-12">
                    <div class=" col-10 d-flex justify-content-start p-0">
                        <div class="product-img mr-3">
                            <img src="./img/product_list/<?= explode(",", $c['img'])[1] ?>.jpg" alt="" style="width: 100%;height:100px;">
                        </div>
                        <div class="product-info  d-flex flex-column">
                            <p><?= $c['product_name'] ?></p>
                            <p class="product-info-detail m-0">
                                尺寸：<?= $c['length'] ?>*<?= $c['width'] ?><br />重量：<?= $c['weight'] ?>g
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
                            <input name="mat-count" class="count" type="text" value="<?= $c['quantity'] ?>" readonly="readonly">
                            <!-- + -->
                            <div class="plus add_cart_icon">
                                <img src="./SVG/custom/plus_g_icon.svg" alt="">
                            </div>
                        </div>
                        <!-- copy count -->
                    </div>
                    <div class="col-4 d-flex justify-content-between align-items-center">
                        <a href="#"> <img src="./SVG/icon_favorite.svg" alt=""></a>

                        <a href="javascript:delItem(<?= $c['sid'] ?>)"><img src="./SVG/icon_trash.svg" alt=""></a>
                    </div>
                </div>
                <div class="dividerline-in-table-no2 mx-auto"></div>



            </div>
        <?php endforeach; ?>
        <!-- 手機客製 -->
        <?php foreach ($_SESSION['custom'] as $b) : ?>
            <div class="this-one-pc-none w-100 m-product-edit" data-sid="<?= $b['sid'] ?>" id="product_<?= $b['sid'] ?>">
                <div class="d-flex col-12">
                    <div class=" col-10 d-flex justify-content-start p-0">
                        <div class="product-img mr-3" style="width:115px;height:100px;overflow:hidden;background-color: <?= $b['pick_color'] ?>;">
                            <img src="./img/customize/design/<?= $b['design_img'] ?>.png" alt="">
                        </div>
                        <div class="product-info  d-flex flex-column">
                            <p>客製瑜珈墊</p>
                            <p class="product-info-detail m-0">
                                尺寸：<?= $b['mat-h'] ?>*<?= $b['matw'] ?><br />重量：<?= $b['weight'] ?>g
                            </p>


                        </div>
                    </div>

                    <div class="col-2 d-flex justify-content-end align-items-end">
                        <p class="m-0">NT.<?= $b['mat-total-price'] * $b['mat-count'] ?></p>
                    </div>
                </div>
                <div class="col-12 d-flex align-items-top mb-2 mt-3 icon-family">
                    <div class="col-8 d-flex justify-content-start number-change align-items-center p-0">
                        <!-- copy count -->
                        <div class="cart_count_wrap d-flex justify-content-start align-items-center">
                            <!-- - -->
                            <div class="minus c_plus add_cart_icon ">
                                <img src="./SVG/custom/minus_g_icon.svg" alt="">
                            </div>
                            <!-- 數量 -->
                            <!-- <div class="count">1</div> -->
                            <input name="mat-count" class="count" type="text" value="<?= $b['mat-count'] ?>" readonly="readonly">
                            <!-- + -->
                            <div class="plus c_plus add_cart_icon">
                                <img src="./SVG/custom/plus_g_icon.svg" alt="">
                            </div>
                        </div>
                        <!-- copy count -->
                    </div>
                    <div class="col-4 d-flex justify-content-between align-items-center">
                        <a href="#"> <img src="./SVG/icon_favorite.svg" alt=""></a>

                        <a href="javascript:delItem(<?= $b['sid'] ?>)"><img src="./SVG/icon_trash.svg" alt=""></a>
                    </div>
                </div>
                <div class="dividerline-in-table-no2 mx-auto"></div>



            </div>
        <?php endforeach; ?>

        <!-- 總計 -->
        <div class="d-flex justify-content-end col-12 col-sm-12 col-md-10 col-lg-10">
            <div class="text-right">
                <p>共 <span id="totalCountNumber"></span> 件</br class="m-display-none"><span class=" pc-need-hide-span"> /</span>
                    總重：<span id="totalWeight"></span>g<br>
                    共計：NT.<span id="totalMoney"></span></p>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-leave p-0" onclick="location.href='<?= WEB_ROOT ?>product_list.php'">繼續購物</button>
            <button class="btn btn-leave p-0 hope-next-step">下ㄧ步</button>
        </div>
    </div>
</div>

<!--  hot products -->
<div class="container hot-products-zone content-product position-relative">

    <div class="row justify-content-center">

        <div class="col-12 px-0 mobile-hidden">

            <h3 class="text-center rec-ani-2" style="color:#004a13;">商品推薦</h3>

            <div class="guessyoullike d-flex justify-content-center position-relative">

                <?php foreach ($rec2_row as $b2) : ?>
                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=<?= $b2['sid'] ?>">
                        <div class="product-zone px-0 rec-ani-1">
                            <div class="product-wrap">
                                <div class="img-wrap">
                                    <img src="./img/product_list/<?= $b2['my_imgs'][1] ?>.jpg" alt="" style="height: 100%;width: 100%; object-fit: cover;">
                                </div>

                                <div class="hot-product-info text-center">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=<?= $b2['sid'] ?>">
                                        <h6 class="mb-0"><?= $b2['product_name'] ?></h6>
                                    </a>
                                    <p>NT.<?= $b2['price'] ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>


            </div>



        </div>


    </div>
</div>
<!-- foooterrrrrrrr -->
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->

<script>
    // ↓↓ 商品數量↓↓// 

    $('.plus').click(function() {
        let value = $(this).prev()
        console.log(value)
        if (value.val() < 10) {
            /* 數量最大不能超過 */
            value.val(parseInt(value.val()) + 1);
        } else {
            value.val(10);
        }
        calcTotal();
    })
    $('.minus').click(function() {
        let value = $(this).next()
        if (value.val() <= 1) {
            /*數量最少爲1  */
            value.val(1);
        } else {
            value.val(parseInt(value.val()) - 1);
        }
        calcTotal();
    })
    // ↑↑ 商品數量↑↑ //


    // delete
    function delItem(sid) {
        $.get('handle-cart-product.php', {
            sid: sid,
            action: 'remove'
        }, function(data) {
            console.log(data);
            $('#product_' + sid).remove();
            $('#product_m' + sid).remove();
            //刪除商品後重新計算
            calcTotal();
        }, 'json');
    }
    // 客製delete
    function delCItem(sid) {
        $.get('handle-custom-remove.php', {
            sid: sid,
            action: 'remove'
        }, function(data) {
            console.log(data);
            $('#product_' + sid).remove();
            $('#product_m' + sid).remove();
            //刪除商品後重新計算
            calcTotal();
        }, 'json');
        $.get('handle-custom.php', {
            sid: 34,
            action: 'remove'
        }, function(data) {
            console.log(data);
            // $('#product_' + sid).remove();
            // $('#product_m' + sid).remove();
            // //刪除商品後重新計算
            // calcTotal();
        }, 'json');
    }
    // 連動quantity
    $('.p_minus').on('click', function() {
        const tr = $(this).closest(".product-edit");
        const number = tr.find('td.number-change').attr('data-count');
        const sid = tr.attr('data-sid');
        const input = $(this).next();
        const quantity = input.val();
        $.get('handle-cart-product.php', {
            sid,
            action: 'add',
            quantity
        }, function(data) {
            const cart = data.cart
            // console.log(data);
            // console.log(sid);
            input.attr('data-quantity', quantity);
            input.val(quantity);
            updateData(tr, sid, cart)
            calcTotal();
        }, 'json')
    });

    $('.p_plus').on('click', function() {
        const tr = $(this).closest(".product-edit");
        const number = tr.find('td.number-change').attr('data-count');
        const sid = tr.attr('data-sid');
        const input = $(this).prev();
        const quantity = input.val();

        $.get('handle-cart-product.php', {
            sid,
            action: 'add',
            quantity
        }, function(data) {
            const cart = data.cart
            input.attr('data-quantity', quantity);
            updateData(tr, sid, cart)
            calcTotal();
        }, 'json')


    });
    // 連動客製化quantity
    $('.c_minus').on('click', function() {
        const tr = $(this).closest(".product-edit");
        const number = tr.find('td.number-change').attr('data-count');
        const sid = tr.attr('data-sid');
        const input = $(this).next();
        const quantity = input.val();
        console.log(quantity)
        console.log('看我')
        $.get('handle-custom-remove.php', {
            sid,
            quantity,
            action: 'add',
        }, function(data) {
            const custom = data.custom
            // console.log(data);
            // console.log(sid);
            input.attr('data-quantity', quantity);
            input.val(quantity);
            updateCData(tr, sid, custom)
            calcTotal();
        }, 'json')

    });

    $('.c_plus').on('click', function() {
        const tr = $(this).closest(".product-edit");
        const number = tr.find('td.number-change').attr('data-count');
        const sid = tr.attr('data-sid');
        const input = $(this).prev();
        const quantity = input.val();
        const cprice = $(this).closest(".price");
        console.log(quantity)
        console.log(cprice)
        $.get('handle-custom-remove.php', {
            sid,
            action: 'add',
            quantity
        }, function(data) {
            const custom = data.custom
            input.attr('data-quantity', quantity);
            updateData(tr, sid, custom)
            calcTotal();
        }, 'json')
        // let count = intval(quantity);
        // let total = count *
        // $('.price').html('NT.'+ intval(quantity))


    });




    // 連動
    //    product-edit" id="product_<//?= $c['sid'] ?>
    function calcTotal() {

        console.log('created ')
        let totalMoney = 0;
        let totalWeight = 0;
        let totalCountNumber = 0;
        $('.product-edit').each(function() {
            const tr = $(this);
            const totalcount = parseInt(tr.find('td.number-change').attr('data-count'));
            const weight = parseInt(tr.find('td.need-weight').attr('data-weight'));
            const hismoney = parseInt(tr.find('td.price').attr('data-money'));

            totalMoney += hismoney;
            totalWeight += weight * totalcount;
            totalCountNumber += totalcount;
        });
        console.log({
            totalMoney,
            totalWeight,
            totalCountNumber
        })
        $('#totalMoney').text(totalMoney);
        $('#totalWeight').text(totalWeight);
        $('#totalCountNumber').text(totalCountNumber);

    }
    calcTotal();




    function updateData(tr, sid, cart) {
        tr.each(function() {
            if (this.dataset.sid !== 34) {
                const {
                    quantity,
                    price
                } = cart[sid]

                // 更新 資料
                tr.find('td.number-change').attr('data-count', quantity)
                tr.find('td.price').attr('data-money', quantity * price)

                // 更新 價格 欄位
                const priceTd = $(this).find('.price')
                priceTd.html(`NT.${quantity * price}`)
            }
        })
    }

    function updateCData(tr, sid, custom) {
        tr.each(function() {
            if (this.dataset.sid === sid) {
                const {
                    quantity,
                    price
                } = custom[sid]

                // 更新 資料
                tr.find('td.number-change').attr('data-count', quantity)
                tr.find('td.price').attr('data-money', quantity * price)

                // 更新 價格 欄位
                const priceTd = $(this).find('.price')
                priceTd.html(`NT.${quantity * price}`)
            }
        })
    }





    $('.hope-next-step').on('click', function() {

        $(window).attr('location', 'fillin-info-step2.php');
    });
</script>


<!-- <script src="./lib/shopping-cart-count.js"></script> -->
<?php include __DIR__ . '/parts/html-end.php'; ?>