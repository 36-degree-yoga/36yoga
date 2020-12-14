<?php include __DIR__ . '/parts/config.php';



if (!isset($_SESSION['user'])) {
    header('Location: login_regist.php');
    exit;
}
if (empty($_SESSION['cart']) && empty($_SESSION['custom'])) {
    header('Location: product_list.php');
    exit;
}

$member_id = $_SESSION['user']['id'];

$m_sql = "SELECT `id`, `account`, `email`,  `mobile`, `city`, `address`, `nickname` FROM `members`  WHERE `id` = $member_id ";
$m_row = $pdo->query($m_sql)->fetch();

// echo json_encode($m_row, JSON_UNESCAPED_UNICODE);
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
        <form name="my_form" class="col-lg-6 col-md-6 col-sm-12 col-12 i-need-padding">
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
                            <select class="form-control6 option-1 px-2 text-center logistic">
                                <option value="null" selected hidden>
                                    --請選擇--
                                </option>
                                <option value="宅配">宅配到府</option>
                                <option value="超商">超商取貨</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">付款方式</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 pr-2 d-flex">
                            <select class="form-control6 option-1 px-2 text-center how-to-pay">
                                <option value="null" selected hidden>
                                    --請選擇--
                                </option>
                                <option value="貨到付款">貨到付款</option>
                                <option value="信用卡">信用卡支付</option>
                                <option value="ATM">ATM匯款</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">送達時間</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 pr-2 d-flex">
                            <select class="form-control6 option-1 px-2 text-center">
                                <option disabled selected hidden>
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
                            <input type="text" class="form-control6 px-2" id="email" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="name">收件人姓名</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6 px-2" id="name" value="" name="name" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label" for="phonr-number">手機號碼</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6 px-2" id="phone-number" value="" required />
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
                                    <option value="臺北市">臺北市</option>
                                    <option value="新北市">新北市</option>
                                    <option value="桃園市">桃園市</option>
                                    <option value="臺中市">臺中市</option>
                                    <option value="臺南市">臺南市</option>
                                    <option value="高雄市">高雄市</option>
                                    <option value="新竹縣">新竹縣</option>
                                    <option value="苗栗縣">苗栗縣</option>
                                    <option value="彰化縣">彰化縣</option>
                                    <option value="南投縣">南投縣</option>
                                    <option value="雲林縣">雲林縣</option>
                                    <option value="嘉義縣">嘉義縣</option>
                                    <option value="屏東縣">屏東縣</option>
                                    <option value="宜蘭縣">宜蘭縣</option>
                                    <option value="基隆市">基隆市</option>
                                    <option value="新竹市">新竹市</option>
                                    <option value="嘉義市">嘉義市</option>
                                    <option value="花蓮縣">花蓮縣</option>
                                    <option value="臺東縣">臺東縣</option>
                                </select>
                            </div>
                            <input type="text" class="form-control6 px-2 my-3" id="city-detail" value="" required />
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">備註</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2">
                            <textarea name="" cols="30" rows="3" class="form-control9 px-2"></textarea>
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
                            <input type="radio" name="invoice" class="form-check-input" checked />
                            <label class="form-check-label" for="">電子發票</label>
                        </div>
                        <div class="ml-4 this-one-mobile-none">
                            <input type="radio" name="invoice" class="form-check-input" />
                            <label class="form-check-label" for="">發票證明聯</label>
                        </div>
                    </div>
                </div>

                <div class="px-2">
                    <!-- rwd-change -->
                    <div class="this-one-pc-none mb-3">
                        <label class="col-12 pl-0">發票種類</label>

                        <select name="" class="form-control6 option-1 px-2">
                            <option value="">電子發票</option>
                            <option value="">發票證明聯</option>
                        </select>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="d-flex justify-content-start px-4">
                            <div class="mx-3">
                                <input type="radio" name="vehicle" class="form-check-input" checked />
                                <label class="form-check-label" for="">隨包裹</label>
                            </div>
                            <div class="mx-3">
                                <input type="radio" name="vehicle" class="form-check-input" />
                                <label class="form-check-label" for="">電子條碼載具</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col-12 col-sm-12 col-md-3 col-lg-3 col-form-label">載具編號</label>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 py-1 mobile-need-change-padding pr-2 d-flex">
                            <input type="text" class="form-control6 px-2" aria-describedby="" placeholder="（發票隨包裹不必填寫）" />
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
                            <input type="text" class="form-control4 px-2" id="bouns" value="" />
                            <div class="text-center control-his-position ml-3"><u>確認</u></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
                                <!-- 客製商品項目外框 -->
                                <?php foreach ($_SESSION['custom'] as $b) : ?>
                                    <div class="m_order_product_wrap d-flex align-items-end justify-content-between">
                                        <div class="product-left d-flex">
                                            <!-- 訂單商品圖 -->
                                            <div class="order_img_wrap" style="width:100px;height:100px;overflow:hidden;background-color: <?= $b['pick_color'] ?>;">
                                                <img class="p_img" src="./img/customize/design/<?= $b['design_img'] ?>.png" style="width: 100%;" alt="" />
                                            </div>
                                            <!-- 商品尺寸 -->
                                            <div class="product_detail d-flex flex-column align-self-start">
                                                <p class="p_title">客製瑜珈墊</p>
                                                <p class="p_detail">尺寸：<?= $b['mat-h'] ?>*<?= $b['matw'] ?></p>
                                                <p class="p_detail">
                                                    重量：<span class="weight"><?= $b['weight'] ?></span>g
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 件數價錢 -->
                                        <div class="count_price d-flex flex-column m_p justify-content-end align-items-end">
                                            <p class="m-0">共<span class="count"><?= $b['mat-count'] ?></span>件</p>
                                            <p class="m-0">NT$ <span class="price"><?= $b['mat-total-price'] * $b['mat-count'] ?></span></p>
                                        </div>
                                    </div>
                                    <hr />
                                <?php endforeach; ?>
                                <!--客製商品項目外框↑-->

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
                                <td><span id="trans_fee">60</span></td>
                            </tr>
                            <tr>
                                <th scope="row">優惠折抵</th>
                                <td><span id="deduction">0</span></td>
                            </tr>
                            <tr>
                                <th scope="row">應付金額</th>
                                <td>NT.<span id="amount"></span></td>
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
                    <label class="form-check-label change-color-yel" for="">我同意<span data-toggle="modal" data-target="#know-Privacy">隱私權協定</span></label>
                </div>
                <div class="text-center">
                    <button class="btn btn-leave p-0">回到購物車</button>
                    <input class="btn btn-leave p-0 hope-next-step" value="下一步" type="submit">
                </div>
            </div>
        </div>

        <!--  modal-->
        <div class="modal fade" id="know-Privacy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content modal-size">
                    <div class="modal-header out_header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="" src="svg/delete.svg" alt="">
                        </button>
                    </div>
                    <div class="modal-body out_body">
                        <p class="mx-auto">為了讓您能夠安心的使用本網站的各項服務與資訊，特此向您說明本網站的隱私權保護政策，以保障您的權益，請您詳閱下列內容：</br>
                            一、隱私權保護政策的適用範圍</br>
                            隱私權保護政策內容，包括本網站如何處理在您使用網站服務時蒐集到的個人識別資料。隱私權保護政策不適用於本網站以外的相關連結網站，也不適用於非本網站所委託或參與管理的人員。</br>
                            二、個人資料的蒐集、處理及利用方式<br>
                            （一）當您洽辦本網站業務或參與本網站活動時，我們將視業務或活動性質請您提供必要的個人資料，且原則上於蒐集個人資料之特定目的必要範圍內處理或利用您的個人資料。<br>
                            （二）本網站在您使用意見回饋、電子報、問卷調查等互動性功能時，會保留您所提供的姓名、電子郵件地址、聯絡方式及使用時間等。<br>
                            （三）於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的 IP 位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，絕不對外公布。<br>
                            （四）為提供精確的服務，我們會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研究外，我們會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。<br>
                            三、 資料之保護<br>
                            （一）本網站主機均設有防火牆、防毒系統等相關的各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，相關處理人員皆簽有保密合約，如有違反保密義務者，將會受到相關的法律處分。<br>
                            （二）如因業務需要有必要委託本網站相關單位提供服務時，本網站亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其將確實遵守。<br>
                            四、 網站對外的相關連結<br>
                            本網站的網頁提供其他網站的網路連結，您也可經由本網站所提供的連結，點選進入其他網站。但該連結網站不適用本網站的隱私權保護政策，您必須參考該連結網站中的隱私權保護政策。<br>
                            五、 與第三人共用個人資料之政策<br>
                            （一）本網站絕不會提供、交換、出租或出售任何您 的個人資料給其他個人、團體、私人企業或公務機關，但有法律依據者，不在此限。<br>
                            （二）前項但書之情形包括但不限於下列各款：<br>
                            經由您同意。<br>
                            法律明文規定。<br>
                            為維護國家安全或增進公共利益所必要。<br> 為免除您生命、身體、自由或財產上之危險。<br>
                            公務機關或學術研究機構基於公共利益為統計或學術研究而有必要，且資料經過提供者處理後或經蒐集者依其揭露方式無從識別特定之當事人。<br>
                            當您在本網站的行為，違反本網站的服務條款或可能損害或妨礙本網站權益或導致任何人遭受損害時，經本網站研析揭露您的個人資料是為了辨識、聯絡或採取法律行動所必要者。<br>
                            有利於您的權益。<br>
                            （三）本網站委託廠商協助蒐集、處理或利用您的個人資料時，將對委外廠商或個人善盡監督管理之責。
                            <br>
                            六、 Cookie 之使用
                            <br>
                            為了提供您最佳的服務，本網站會在您的電腦中放置並取用我們的Cookie，若您不願接受 Cookie 的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕 Cookie 的寫入，但可能會導至網站某些功能無法正常執行 。
                            <br>
                            七、 隱私權保護政策之修正
                            <br>
                            本網站隱私權保護政策將因應需求隨時進行修正，修正後的條款將刊登於網站上。</p>
                    </div>
                    <div class="text-center my-2">

                        <button class="btn btn-privacy p-0 del-btn-check " data-dismiss="modal">確認</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal--------->

    </div>
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script>
    // 除錯

    // 除錯


    // 優惠
    $('u').on('click', function() {
        if (!$("#bouns").val() === '') {
            $('#deduction').text('0');

        } else {
            $('#deduction').text('100');
        }
        calcTotal();
    });
    // 優惠


    function calcTotal() {

        let totalMoney = 0;
        let totalWeight = 0;
        let totalCountNumber = 0;
        $('.m_order_product_wrap').each(function() {
            const df = $(this);
            const totalcount = parseInt(df.find('.count').text());
            const weight = parseInt(df.find('.weight').text());
            const hismoney = parseInt(df.find('.price').text());

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

        totalAmount(totalMoney);
    }
    calcTotal();
    //table-info
    function totalAmount(tt) {
        let lastPay = 0;
        const transFee = parseInt($('#trans_fee').text());
        const bouns = parseInt($('#deduction').text());
        lastPay = tt + transFee - bouns;
        $('#amount').text(lastPay);
    }

    $('#member-info').click(() => {
        $("#email").val("<?= $m_row['email'] ?>");
        $("#name").val("<?= $m_row['account'] ?>");
        $("#phone-number").val("<?= $m_row['mobile'] ?>");
        $("#city").val("<?= $m_row['city'] ?>");
        $("#city-detail").val("<?= $m_row['address'] ?>");
    });



    $('.hope-next-step').on('click', function(event) {
        const transFee = parseInt($('#trans_fee').text());
        const bouns = parseInt($('#deduction').text());
        const email = $("#email").val();
        const name = $("#name").val();
        const mobile = $("#phone-number").val();
        const address = $("#city").val() + $("#city-detail").val();
        const amount = parseInt($('#amount').text());
        const payment = $(".how-to-pay").val();
        const logistic = $(".logistic").val();

        let payment_status = '';
        if (payment === "信用卡") {
            payment_status = '已付款';
        } else {
            payment_status = '未付款';
        }
        console.log(transFee, bouns, email, name, mobile, address, amount, payment, logistic, payment_status);
        $.post('order-info-api.php', {

            amount: amount,
            logistic: logistic,
            trans_fee: transFee,
            payment: payment,
            deduction: bouns,
            buyer: name,
            address: address,
            mobile: mobile,
            email: email,
            points: 10,
            payment_status: payment_status,
            logistic_status: "待出貨",
            order_status: "待出貨",
        }, function(data) {
            console.log(data);

        }, 'json');
    });

    $(".how-to-pay").click(function() {
        $(".how-to-pay").removeClass("error-border");
    })
    $(".logistic").click(function() {
        $(".logistic").removeClass("error-border");
    })

    $('.hope-next-step').on('click', function() {
        console.log($(".how-to-pay").val())
        console.log($(".logistic").val())

        if ($(".how-to-pay").val() == "null" || $(".logistic").val() == "null") {
            if ($(".how-to-pay").val() == "null") {
                $(".how-to-pay").addClass("error-border");
                
            }
            if ($(".logistic").val() == "null") {
                $(".logistic").addClass("error-border");
            }

        } else {
            if ($(".how-to-pay").val() === '信用卡') {
                console.log($(".how-to-pay").val())
                $(window).attr('location', 'credit-card-step3.php');

            } else {
                console.log($(".how-to-pay").val())
                $(window).attr('location', 'atm-step3.php');

            }
        };



    });
</script>
<script src="./lib/checkout-step123.js"></script>
<?php include __DIR__ . '/parts/html-end.php'; ?>