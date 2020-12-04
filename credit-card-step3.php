<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/credit-card.css" />
<link rel="stylesheet" href="./CSS/share.css" />


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
        <div class="col-lg-5 col-md-5 title-in-credit-card">
            <h6>信用卡資訊</h6>

            <div class="credit-card-img text-monospace text-white">
                <div class="flip-card mx-auto position-relative">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./img/step123needpic/creditfront.png" alt="Avatar" style="width: 350px; height: 210px" />
                            <p id="demotext" class="position-absolute text-monospace">
                                <span class="card-num1-text text-monospace"></span>
                                <span class="card-num2-text text-monospace"></span>
                                <span class="card-num3-text text-monospace"></span>
                                <span class="card-num4-text text-monospace"></span>
                            </p>
                            <p id="demotextdate" class="position-absolute">
                                <span class="card-date1-text"></span>
                                <span class="there-need-hidden">/</span>
                                <span class="card-date2-text"></span>
                            </p>
                        </div>
                        <div class="flip-card-back">
                            <img src="./img/step123needpic/creditback.png" alt="" style="width: 350px; height: 210px" />
                            <p id="demotextcvv" class="position-absolute">
                                <span class="cvv-code-text text-black-50"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-need-change-padding-all">
                <div class="form-group row">
                    <label for="card-num1" class="col-sm-3 col-form-label pl-3">信用卡卡號</label>
                    <div class="col-sm-9 py-1 pr-2 mobile-need-change-padding" id="auto-change-input">
                        <input type="text" class="form-control3 credit-card-front-info" id="card-num1" maxlength="4" /><span class=""> -</span>
                        <input type="text" class="form-control3 credit-card-front-info" id="card-num2" maxlength="4" /><span class=""> -</span>
                        <input type="text" class="form-control3 credit-card-front-info" id="card-num3" maxlength="4" /><span class=""> -</span>
                        <input type="text" class="form-control3 credit-card-front-info" id="card-num4" maxlength="4" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="card-date1" class="col-sm-3 col-form-label pl-3">到期年限</label>
                    <div class="col-sm-9 py-1 mobile-need-change-padding pr-2 d-flex" id="auto-change-input-two">
                        <div class="col-6 p-0">
                            <input type="text" class="form-control4 px-2 credit-card-front-info" maxlength="2" id="card-date1" />
                            <span class="px-2">月</span>
                        </div>
                        <div class="col-6 p-0">
                            <input type="text" class="form-control4 px-2 credit-card-front-info demo-hidden-trigger" maxlength="2" id="card-date2" />
                            <span class="px-2">年</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cvv-code" class="col-sm-3 col-form-label pl-3">CVV碼</label>
                    <div class="col-sm-9 py-1 mobile-need-change-padding pr-2">
                        <input type="text" class="form-control5" id="cvv-code" maxlength="3" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-4 col-md-4 order-detail1">
            <div class="title-in-table d-flex mb-3">
                <p>購物明細</p>
            </div>

            <div class="d-flex justify-content-center flex-column">
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
                                            <p class="p_detail">顏色：<?= $c['color'] ?></p>
                                            <p class="p_detail">尺寸：<?= $c['length'] ?>*<?= $c['width'] ?></p>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-leave p-0" onclick="location.href='<?= WEB_ROOT ?>fillin-info-step2.php'">回上一步</button>
        <a href="complete-order-step4.php" class="btn btn-leave p-0 hope-next-step">確認付款</a>
    </div>
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script>



    //credit card
    let credit = document.querySelector(".flip-card-inner");
    let cvv = document.querySelector("#cvv-code");
    let demotext = document.querySelector("#demotext");
    let demotextdate = document.querySelector("#demotextdate");
    let number = document.querySelectorAll(".credit-card-front-info");
    // 背面
    cvv.addEventListener("click", function() {
        credit.classList.add("turn-around");
        demotext.classList.add("there-need-hidden");
        demotextdate.classList.add("there-need-hidden");
    });
    //前面
    number.forEach(function(element) {
        element.addEventListener("click", function() {
            credit.classList.remove("turn-around");
            demotext.classList.remove("there-need-hidden");
            demotextdate.classList.remove("there-need-hidden");
        });
    });

    //鍵盤輸入
    let allInput = document.getElementById("auto-change-input");
    input = allInput.getElementsByTagName("input");
    let iNow = 0;
    (type = !-[1] ? "onpropertychange" : "oninput"), (limit = 4); //滿足自動切換焦點的字元數
    for (let i = 0; i < input.length - 1; i++) {
        input[i].index = i;
        input[i][type] = function() {
            iNow = this.index;
            let that = this;
            setTimeout(function() {
                that.value.length > limit - 1 && input[iNow + 1].focus();
            }, 0);
        };
    }

    //鍵盤輸入練習
</script>
<script src="./lib/checkout-step123.js"></script>
<!-- <script src="./lib/credit-card.js"></script> -->
<?php include __DIR__ . '/parts/html-end.php'; ?>