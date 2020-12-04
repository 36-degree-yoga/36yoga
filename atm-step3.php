<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/credit-card.css" />

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
    <div class="row justify-content-center flex-sm-column-reverse flex-column-reverse flex-lg-row flex-md-row">
        <!--  -->
        <div class="col-lg-5 col-md-5 title-in-atm">
            <h6>匯款資訊</h6>

            <div class="atm-remit-info mt-4 mobile-need-change-padding-all">
                <p>銀行代號<span>：</span><br />013國泰世華銀行</p>
                <p>銀行帳號<span>：</span><br />5647-9320-3847-5747</p>
                <p>轉帳金額<span>：</span><br />NT.3600</p>
            </div>
            <div class="dividerline-in-table-no2 this-one-pc-none"></div>
            <div class="d-flex justify-content-lg-start justify-content-md-start justify-content-sm-center justify-content-center py-0">
                <small style="color: #f2a200" class="mt-0">小提醒：請於三天內匯款完成，避免取消訂單</small>
            </div>
        </div>
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-4 col-md-4 order-detail1">
            <div class="title-in-table d-flex mb-3">
                <p>購物明細</p>
                <!-- <a href="#" class="close-features"
              ><i class="fas fa-minus-circle"></i>收起訂單明細</a
            > -->
            </div>

            <div class="d-flex justify-content-center flex-column">
                <!-- copy j個 -->
                <div class="m_order_list">
                    <!-- 手機每個訂單 -->
                    <div class="m_order_item">
                        <div class="m_product_detail mb-0">
                            <!-- 商品項目外框 -->
                            <?php foreach ($_SESSION['cart'] as $c) : ?>
                                <div class="m_order_product_wrap d-flex align-items-end justify-content-between">
                                    <div class="product-left d-flex">
                                        <!-- 訂單商品圖 -->
                                        <div class="order_img_wrap">
                                            <img class="p_img" src="./img/product_list/<?= explode(",", $c['img'])[1] ?>.jpg" style="width: 100px;height:100px;" alt="" />
                                        </div>
                                        <!-- 商品尺寸 -->
                                        <div class="product_detail d-flex flex-column align-self-start">
                                            <p class="p_title"><?= $c['product_name'] ?></p>
                                            <p class="p_detail">顏色:<?= $c['color'] ?></p>
                                            <p class="p_detail">尺寸:<?= $c['length'] ?>*<?= $c['width'] ?></p>
                                            <p class="p_detail">
                                                重量：<span class="weight"><?= $c['weight'] ?></span>g
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 件數價錢 -->
                                    <div class="count_price d-flex flex-column m_p justify-content-end align-items-end">
                                        <p class="m-0">共<span class="count"><?= $c['quantity'] ?></span>件</p>
                                        <p class="m-0">NT$ <span class="price"><?= $c['price'] * $c['quantity'] ?></span></p>
                                    </div>
                                </div>
                                <hr />
                            <?php endforeach; ?>
                            <!--商品項目外框↑-->


                        </div>
                        <!-- 細節打開按鈕啦 -->
                        <div class="m_detail_button">
                            <div class="m_openIt order_history_detail_btn d-flex align-items-center justify-content-center">
                                <img src="SVG/custom/minus_o_icon.svg" alt="" />
                                <p class="m-0">收起訂單明細</p>
                            </div>
                        </div>
                    </div>
                    <!--↑↑ 手機每個訂單 ↑↑-->
                </div>
                <!-- copy j個 -->
                <table class="howmuch-you-need-pay mx-auto">
                    <tbody>
                        <tr>
                            <th scope="row">商品數量</th>
                            <td><span id="totalCountNumber"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">商品重量</th>
                            <td><span id="totalWeight"></span>g</td>
                        </tr>
                        <tr>
                            <th scope="row">商品金額</th>
                            <td>NT.<span id="totalMoney"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">運費</th>
                            <td>car-money</td>
                        </tr>
                        <tr>
                            <th scope="row">優惠折抵</th>
                            <td>bouns</td>
                        </tr>
                        <tr>
                            <th scope="row">應付金額</th>
                            <td>total</td>
                        </tr>
                        <!-- <tr>
                  <td colspan="2" class="py-2">
                    <a href="#" class="close-features"
                      ><i class="fas fa-plus-circle"></i> 收起訂單明細</a
                    >
                  </td>
                </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-leave p-0" onclick="location.href='<?= WEB_ROOT ?>fillin-info-step2.php'">回上一步</button>
        <a href="complete-order-step4.php" class="btn btn-leave p-0 hope-next-step">下一步</a>
    </div>
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->

<script src="./lib/checkout-step123.js"></script>
<?php include __DIR__ . '/parts/html-end.php'; ?>