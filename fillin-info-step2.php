<?php include __DIR__ . '/parts/config.php';

// $stmt = $pdo->query("SELECT * FROM `members` ORDER BY `id` ASC");
// $rows = $stmt->fetch();

if (!isset($_SESSION['user'])) {
    header('Location: login_regist.php');
    exit;
}

$member_id = $_SESSION['user']['id'];

$m_sql = "SELECT `id`, `account`, `email`,  `mobile`, `city`, `address`, `nickname` FROM `members`  WHERE `id` = $member_id ";
$m_row = $pdo->query($m_sql)->fetch();
// $stmt = $pdo->query("SELECT * FROM `members` ORDER BY `id` ASC");
// $rows = $stmt->fetch?();

// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/fill-in-infomation.css" />

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
    <div class="row justify-content-center flex-sm-column flex-sm-column flex-md-row flex-lg-row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 i-need-padding">
            <!-- part1 -->
            <div>
                <div class="d-flex justify-content-between which-need-border-bottom">
                    <h6>運送資訊</h6>
                    <div class="d-flex justify-content-between this-one-mobile-none">
                        <div class="mx-3 this-one-mobile-none">
                            <input type="radio" class="form-check-input" id="inside" name="area" checked />
                            <label class="form-check-label" for="inside">台灣本島</label>
                        </div>
                        <div class="ml-3 this-one-mobile-none">
                            <input type="radio" name="area" class="form-check-input" id="outside" />
                            <label class="form-check-label" for="outside">離島/海外地區</label>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">運送方式</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 pr-2 d-flex">
                            <select class="form-control6 option-1 px-2 text-center">
                                <option value="" disabled selected hidden>
                                    --請選擇--
                                </option>
                                <option value="home">宅配到府</option>
                                <option value="store">超商取貨</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">付款方式</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 pr-2 d-flex">
                            <select class="form-control6 option-1 px-2 text-center how-to-pay">
                                <option value="" disabled selected hidden>
                                    --請選擇--
                                </option>
                                <option value="yoo">貨到付款</option>
                                <option value="cerdit">信用卡支付</option>
                                <option value="atm">ATM匯款</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">送達時間</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 pr-2 d-flex">
                            <select class="form-control6 option-1 px-2 text-center">
                                <option value="" disabled selected hidden>
                                    --請選擇(非必填)--
                                </option>
                                <option>上午</option>
                                <option>下午</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part2 -->

            <div class="mt-4">
                <div class="d-flex justify-content-between which-need-border-bottom">
                    <h6>收件資訊</h6>

                    <div>
                        <input type="checkbox" class="form-check-input" id="member-info" />
                        <label class="form-check-label" for="member-info">填入會員資料</label>
                    </div>
                </div>

                <div class="px-2">
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="email">Email信箱</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6" id="email" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="name">收件人姓名</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6" id="name" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="phonr-number">手機號碼</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6" id="phone-number" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">收件地址</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2">
                            <div class="d-flex">
                                <select class="form-control7 option-1 px-2 text-center" id="city">
                                    <option value="" disabled selected hidden>
                                        --請選擇--
                                    </option>
                                    <option value="1">臺北市</option>
                                    <option>新北市</option>
                                    <option>桃園市</option>
                                    <option>臺中市</option>
                                    <option>臺南市</option>
                                    <option>高雄市</option>
                                    <option>新竹縣</option>
                                    <option>苗栗縣</option>
                                    <option>彰化縣</option>
                                    <option>南投縣</option>
                                    <option>雲林縣</option>
                                    <option>嘉義縣</option>
                                    <option>屏東縣</option>
                                    <option>宜蘭縣</option>
                                    <option>基隆市</option>
                                    <option>新竹市</option>
                                    <option>嘉義市</option>
                                    <option>花蓮縣</option>
                                    <option>臺東縣</option>
                                </select>
                            </div>
                            <input type="text" class="form-control6 my-3" id="city-detail" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">備註</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2">
                            <textarea name="" id="" cols="30" rows="3" class="form-control9"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part3 -->
            <div class="mt-4">
                <div class="d-flex justify-content-between which-need-border-bottom">
                    <h6>發票明細</h6>
                    <div class="d-flex justify-content-between">
                        <div class="this-one-mobile-none mr-1">
                            <input type="radio" name="invoice" class="form-check-input" id="" checked />
                            <label class="form-check-label" for="">電子發票</label>
                        </div>
                        <div class="ml-4 this-one-mobile-none">
                            <input type="radio" name="invoice" class="form-check-input" id="" />
                            <label class="form-check-label" for="">發票證明聯</label>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <!-- rwd-change -->
                    <div class="this-one-pc-none mb-3">
                        <label class="col-12 pl-0">發票種類</label>

                        <select name="" id="" class="form-control6 option-1 px-2">
                            <option value="">電子發票</option>
                            <option value="">發票證明聯</option>
                        </select>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="d-flex justify-content-start px-4">
                            <div class="mx-3">
                                <input type="radio" name="vehicle" class="form-check-input" id="" checked />
                                <label class="form-check-label" for="">隨包裹</label>
                            </div>
                            <div class="mx-3">
                                <input type="radio" name="vehicle" class="form-check-input" id="" />
                                <label class="form-check-label" for="">電子條碼載具</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">載據編號</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6" aria-describedby="" placeholder="（發票隨包裹不必填寫）" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- part4 -->
            <div class="mt-4">
                <div class="d-flex justify-content-between which-need-border-bottom">
                    <h6>優惠選擇</h6>
                </div>

                <div class="px-2">
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="">優惠代碼</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control4" id="" />
                            <a href="#" class="text-center control-his-position ml-3"><u>確認</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 明細完成 -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 order-detail1">
            <div class="i-need-w-and-fix">
                <div class="title-in-table d-flex which-need-border-bottom">
                    <h6>購物明細</h6>
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
                                                    重量:<?= $c['weight'] ?>g
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 件數價錢 -->
                                        <div class="count_price d-flex flex-column m_p justify-content-end align-items-end">
                                            <p class="m-0">共<span class="count"><?= $c['quantity'] ?></span>件</p>
                                            <p class="m-0">NT$ <?= $c['price'] * $c['quantity'] ?><span class="price"></span></p>
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
                                <td>n</td>
                            </tr>
                            <tr>
                                <th scope="row">商品重量</th>
                                <td>total-weight</td>
                            </tr>
                            <tr>
                                <th scope="row">商品金額</th>
                                <td>money-sum</td>
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
                            <tr>
                                <td colspan="2" class="py-2">
                                    <a href="#" class="close-features"><i class="fas fa-plus-circle"></i> 收起訂單明細</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-lg-10 col-sm-12 col-12">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 d-flex align-items-center flex-column">
                <!-- ennnnnnddddd -->
                <div class="my-5 text-center">
                    <input type="checkbox" class="form-check-input" id="" />
                    <label class="form-check-label change-color-yel" for="">我同意<span>隱私權協定</span></label>
                </div>
                <div class="text-center">
                    <button class="btn btn-leave p-0">回到購物車</button>
                    <input class="btn btn-leave p-0 hope-next-step" value="下一步" type="submit">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script>
    $('#member-info').click(() => {
        $("#email").val("<?= $m_row['email'] ?>");
        $("#name").val("<?= $m_row['account'] ?>");
        $("#phone-number").val("<?= $m_row['mobile'] ?>");
        $("#city").val("1");
        $("#city-detail").val("<?= $m_row['address'] ?>");

    });

    $('.hope-next-step').on('click', function() {
        if ($(".how-to-pay").val() === "cerdit") {
            console.log($(".how-to-pay").val())
            $(window).attr('location', 'credit-card-step3.php');

        } else {
            console.log($(".how-to-pay").val())
            $(window).attr('location', 'atm-step3.php');

        }

    });
</script>
<script src="./lib/checkout-step123.js"></script>
<?php include __DIR__ . '/parts/html-end.php'; ?>