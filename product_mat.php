<?php include __DIR__ . '/parts/config.php'; ?>

<?php

// if (!isset($_GET['sid'])) {
//     // header('Location: product_list.php');
//     // exit;
//     $sid = intval($_GET['sid'] ?? 1);
// }

$sid = intval($_GET['sid'] ?? 1);

// echo json_encode($sid, JSON_UNESCAPED_UNICODE);



// 產品名稱
$p_sql = "SELECT `sid`, `product_name`, `price`, `introduction`, `color`, `length`, `img` FROM `products` WHERE `sid`=$sid";
$p_rows = $pdo->query($p_sql)->fetchAll();

foreach ($p_rows as $k => $r) {
    // $pic_rows[] = explode(",", $r['img']);
    $p_rows[$k]['my_imgs']  = explode(",", $r['img']);
};

// echo  json_encode($p_rows, JSON_UNESCAPED_UNICODE);
// exit;
$n = $p_rows[0]['product_name'];
$c = $p_rows[0]['color'];
// echo "n:" . $n;
// echo "c:" . $c;
// exit;

// 篩選器
$l_sql = "SELECT `sid`, `product_name`, `list_id`, `product_num`, `publish_date`, `price`, `on_sale`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `introduction`, `color`, `length`, `width`, `thickness`, `weight`, `img` FROM `products` WHERE `product_name` LIKE '" . $p_rows[0]['product_name'] . "' AND `color` LIKE '" . $p_rows[0]['color'] . "'";

$l_rows = $pdo->query($l_sql)->fetchAll();

foreach ($l_rows as $l => $v) {
    $a[] = [
        'sid' => $v['sid'],
        'len' => $v['length']
    ];
};

// echo  json_encode($l_rows, JSON_UNESCAPED_UNICODE);
// exit;

// 顏色
$modal_sql = "SELECT `sid`, `product_name`, `list_id`, `product_num`, `price`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `color`, `img` FROM `products` WHERE sid=$sid";
$modal_stmt = $pdo->query($modal_sql);

$modal_rows = $modal_stmt->fetch();

$product_name = $pdo->quote($modal_rows['product_name']);

$others_sql = "SELECT `sid`, `product_name`, `list_id`, `product_num`, `price`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `color`, `img` FROM `products` WHERE product_name=$product_name  GROUP BY `color` ORDER BY sid";

$others_stmt = $pdo->query($others_sql);
$others_rows = $others_stmt->fetchAll();

// echo  json_encode($others_rows, JSON_UNESCAPED_UNICODE);
// exit;


?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_sidebar.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_mat.css">


<?php include __DIR__ . '/parts/nav.php'; ?>
<!-- 貼上html -->
<div class="space_120"></div>
<div class=" container-fluid">

    <div class="row">
        <!-- 左側:側邊選單 -->

        <div class="col-2">
            <!-- 商品列sidebar↓-->
            <div class="product_siderbar_wrap d-flex">

                <!-- 溫度計 -->
                <div class="thermometer_container">
                    <div class="thermometer_wrap d-flex  justify-content-center position-relative">
                        <img class="thermometer d-block position-absolute" src="img/thermometer/sidebar_thermometer_head.svg" alt="">

                        <!-- <div class="thermometer_line_wrap"> -->
                        <div class="thermometer_line">
                            <div class="thermometer_move"></div>
                        </div>
                        <!-- </div> -->
                    </div>

                </div>

                <!-- 側bar標題 -->
                <div class="product_sidebar_content">
                    <div class="product_siderbar_title">
                        <div class="title"><a id="plst_top" href="<?= WEB_ROOT ?>product_list.php">瑜珈墊</a></div>
                        <div class="subtitle" id="std"><a href="<?= WEB_ROOT ?>product_list.php#std">一般</a></div>
                        <div class="subtitle" id="ctm"><a href="<?= WEB_ROOT ?>product_list.php#ctm">客製化</a></div>
                    </div>
                    <div class="product_siderbar_title">
                        <div class="title"><a href="<?= WEB_ROOT ?>product_list.php#block">輔具</a></div>
                        <div class="subtitle" id="block"><a href="<?= WEB_ROOT ?>product_list.php#block">瑜珈磚</a></div>
                        <div class="subtitle" id="pad"><a href="<?= WEB_ROOT ?>product_list.php#pad">支撐墊</a></div>
                        <div class="subtitle" id="roller"><a href="<?= WEB_ROOT ?>product_list.php#roller">滾筒</a></div>
                        <div class="subtitle" id="sand"><a href="<?= WEB_ROOT ?>product_list.php#sand">沙包</a></div>
                        <div class="subtitle" id="strap"><a href="<?= WEB_ROOT ?>product_list.php#strap">伸展帶</a></div>
                        <div class="subtitle" id="band"><a href="<?= WEB_ROOT ?>product_list.php#band">彈力帶</a></div>
                        <div class="subtitle" id="towel"><a href="<?= WEB_ROOT ?>product_list.php#towel">舖巾</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 右側：商品詳細內容 -->
        <!-- <?php foreach ($p_rows as $p) : ?> -->
        <div class="col-10 mx-auto product-detail">

            <div class="col-10 first-zone mx-auto d-flex justify-content-between px-0">

                <!-- 商品 banner 展示 -->
                <div class="banner-area col-8 px-0 d-flex justify-content-start">

                    <div class="sm-banner-area flex-column align-self-end">

                        <div class="sm-banner-wrap">
                            <img class="sm-banner w-100 h-100" src="./img/product_list/<?= $p['my_imgs'][0] ?>.jpg" alt="">
                        </div>
                        <div class="sm-banner-wrap">
                            <img class="sm-banner w-100  h-100" src="./img/product_list/<?= $p['my_imgs'][1] ?>.jpg" alt="">
                        </div>
                        <div class="sm-banner-wrap">
                            <img class="sm-banner w-100  h-100" src="./img/product_list/<?= $p['my_imgs'][2] ?>.jpg" alt="">
                        </div>
                    </div>

                    <div class="banner-wrap ">
                        <img class="big-banner w-100" src="./img/product_list/<?= $p['my_imgs'][0] ?>.jpg" alt="">
                    </div>

                </div>

                <!-- 商品詳細內容 -->

                <!-- 區塊1：商品標題 -->
                <div class="product-detail-1 col-4 px-0">

                    <!-- 區塊1 : 商品標題-左測 -->
                    <div class="product-detail-1-left px-0">

                        <h3 class="line-height"><?= $p['product_name'] ?></h3>

                        <div class="d-flex justify-content-between align-items-center line-height">

                            <div class="star-icon flex-column">

                                <img src="./SVG/stars_5.svg" alt="">

                                <div class="review-link">
                                    <a class="pl-2" href="#write-review">
                                        (1051）評論
                                    </a>
                                    <span>｜</span>
                                    <a href="#write-review">
                                        寫評論
                                    </a>
                                </div>

                            </div>
                            <h6 style="color: #DB5C00;">NT$<?= $p['price'] ?></h6>
                        </div>

                        <p class="line-height"><?= $p['introduction'] ?></p>

                        <div class="d-flex justify-content-between">

                            <div class="item-tag d-flex">
                                <p class="text-justify" style="color: #F2A200; font-size: 20px;">止滑</p>
                                <p class="text-justify" style="color: #F2A200;font-size: 20px;">防水</p>
                            </div>

                            <div class="icon-favorite">
                                <!-- <img src="./SVG/icon_favorite.svg" alt=""> -->

                                <svg id="" class="btn_like" onclick="checkLike(event); return false;" data-sid="<?= $p['sid'] ?>" width="30" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 28">
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g id="Path_324" data-name="Path 324">
                                                <path class="like_fill" d="M15,28C6.93,22.16,2.7,16.84,1,12.39-3.68.47,9.6-3.58,15,3.46c5.4-7,18.68-3,14,8.93C27.3,16.84,23.06,22.16,15,28Z" />
                                                <path class="like_stroke" d="M15,25.51a51.66,51.66,0,0,0,7.88-7.15,23.48,23.48,0,0,0,4.29-6.69c1.15-3,1.11-5.46-.11-7.25a5.94,5.94,0,0,0-5-2.42,6.85,6.85,0,0,0-5.49,2.68L15,6.74,13.41,4.68A6.85,6.85,0,0,0,7.92,2a5.94,5.94,0,0,0-5,2.42c-1.22,1.79-1.26,4.29-.11,7.25a23.48,23.48,0,0,0,4.29,6.69A51.66,51.66,0,0,0,15,25.51M15,28C6.93,22.16,2.7,16.84,1,12.39-2.13,4.45,2.74,0,7.92,0A8.86,8.86,0,0,1,15,3.46,8.86,8.86,0,0,1,22.08,0c5.18,0,10.05,4.45,7,12.39C27.3,16.84,23.07,22.16,15,28Z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>


                            </div>

                        </div>




                    </div>

                    <div class="vertical-line"></div>

                    <!-- 區塊1 : 商品標題-右測 -->
                    <div class="product-detail-1-right px-0 ">
                        <!-- 選擇顏色 -->

                        <div class="d-flex line-height">
                            <?php foreach ($others_rows as $i) : ?>
                                <a class="color-selector pl-0 d-flex " href="?sid=<?= $i['sid'] ?>">

                                    <div class="color-element border list-unstyled mr-2" style="background-color:<?= $i['color'] ?>">
                                        <?php if (!empty($i['color'])) : ?>
                                            <div class="<?= $i['sid'] == $_GET['sid'] ? 'color-element-wrap' : ''; ?>"></div>
                                        <?php endif; ?>
                                    </div>


                                </a>
                            <?php endforeach; ?>
                        </div>
                        <!-- 選擇尺寸 -->

                        <div class="size-list-dropdown dropdown line-height">

                            <button class="size-list-btn btn size-list-dropdown-toggle dropdown-toggle rounded-0 px-5 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php foreach ($a as $k1 => $l1) : ?>
                                    <?= intval($l1['sid']) == $_GET['sid'] ? htmlentities($l1['len']) . '公分'  : '' ?>
                                <?php endforeach; ?>
                            </button>


                            <div class="size-list-dropdown-menu dropdown-menu  rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                <?php foreach ($l_rows as $k => $l) : ?>
                                    <a class="size-list-item dropdown-item text-center" href="?sid=<?= $l['sid'] ?>"><?= $l['length'] ?> 公分</a>
                                    <!-- <a class="size-list-item dropdown-item text-center" href="#">215 公分</a> -->

                                <?php endforeach; ?>
                            </div>

                        </div>

                        <!-- 選擇數量 -->
                        <div class="amount-btn-wrap d-flex justify-content-between line-height">

                            <img class="button-minus" src="./SVG/button_minus.svg" alt="">

                            <!-- <h4 class="amount-number text-center mb-0">1</h4> -->

                            <input id="amount-number" name="amount" class="amount-number border-0 text-center w-100" type="text" value="1" readonly="readonly" style="font-size: 24px;">

                            <img class="button-add" src="./SVG/button_add.svg" alt="">
                        </div>
                        <!-- CTA 按鈕 -->
                        <div class="cta-btn-wrap d-flex justify-content-between">

                            <!-- 按鈕：立即購買 -->
                            <button class="buy-btn btn btn-l w-50 mr-3" data-sid="<?= $p['sid'] ?>" onclick="javascript: toBuy(event);return false;">
                                立即購買
                            </button>

                            <!-- 按鈕：加入購物車 -->
                            <button class="addtocart-btn btn btn-f w-50 " data-sid="<?= $p['sid'] ?>" onclick="javascript: addToCart(event);return false; ">
                                加入購物車
                            </button>

                        </div>

                    </div>



                </div>

            </div>

            <div class="col-10 px-0 mx-auto overflow-hidden px-0">

                <!-- 餅乾屑 -->
                <!-- <nav class="breadcrumb-wrap" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">瑜珈墊</li>
                        </ol>
                    </nav> -->



                <!-- 區塊2：產品資訊 -->

                <div class="space_60"></div>
                <h3>產品資訊</h3>
                <div class="space_60"></div>

                <!-- 區塊2:折疊 -->

                <div class="accordion" id="accordionExample">

                    <!-- 產品特色 -->
                    <div class="card border-0">

                        <div class="card-header" id="headingOne">

                            <div class="mb-0">

                                <button class="product-info-btn btn btn-link rounded-0 text-left w-100 d-flex justify-content-between" id="info-btn-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    <p>產品特色 </p>

                                    <div class="press-icon">
                                        <img src="./SVG/minus.svg" alt="">
                                    </div>
                                </button>

                            </div>

                        </div>

                        <!-- 產品特色 下拉內容 -->
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                            <div class="space_30"></div>

                            <div class="card-body py-0 ">

                                <!-- 產品特色:上 -->
                                <h5 class="text-center line-height">漸進提升肌耐力與柔軟度</h5>

                                <div class="feature-img-area position-relative border-bottom pb-5 line-height">

                                    <div class="feature-img-wrap  mx-auto">
                                        <img class="w-100" src="./img/product_list/b01_0.jpg" alt="">
                                    </div>

                                    <div class="img-info">
                                        <p class="img-info-1 position-absolute font-weight-bold">＃ 完美邊角</p>
                                        <p class="img-info-2 position-absolute font-weight-bold text-right">＃ 輕巧好攜帶
                                        </p>
                                        <p class="img-info-3 position-absolute font-weight-bold">＃ 可滴精油</p>
                                    </div>

                                </div>

                                <!-- 產品特色:下 -->

                                <!-- 產品特色:USP 1-->
                                <div class="feature-info-area-1  d-flex justify-content-between line-height">

                                    <div class="feature-info-text my-auto">

                                        <h6 class="line-height">1.精湛工藝，完美裁切</h6>
                                        <p class="text-muted">
                                            圓弧立體切割工藝，符合手部抓握習慣，使用過程觸感舒適不傷手。
                                        </p>
                                    </div>

                                    <div class="feature-info-img-wrap ">
                                        <img class="w-100" src="./img/product/product_info_block_02.jpg" alt="">
                                    </div>
                                </div>

                                <!-- 產品特色:USP 2-->

                                <div class="feature-info-area-2  d-flex justify-content-between line-height">

                                    <div class="feature-info-img-wrap">
                                        <img class="w-100" src="./img/product/product_info_block_03.jpg" alt="">
                                    </div>

                                    <div class="feature-info-text my-auto">

                                        <h6 class="line-height ">2.穩固支撐</h6>
                                        <p class="text-muted">
                                            硬度60度，擠壓不變形，無論哪個角度都能提供穩固支撐，抗壓防滑不易位。
                                        </p>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- 產品詳細敘述 -->
                    <div class="card border-0">

                        <div class="card-header" id="headingTwo">

                            <div class="mb-0">

                                <button class="product-info-btn btn btn-link rounded-0 text-left w-100 d-flex justify-content-between collapsed" id="info-btn-2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                    <p>產品詳細敘述</p>

                                    <div class="press-icon">
                                        <img src="./SVG/plus.svg" alt="">
                                    </div>
                                </button>

                            </div>
                        </div>

                        <!-- 產品詳細敘述 下拉內容 -->

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                            <div class="card-body py-0 details-info">

                                <div class="space_30"></div>

                                <p class="font-weight-bold line-height">
                                    【設計重點】
                                </p>
                                <p class="text-muted line-height">
                                    。一次性發泡技術，穩固性升級 <br>
                                    。環境友善，兼顧外形與功能 <br>
                                    。使用再回收的竹粉及稻粉，減少汙染 <br>
                                    。高密度，質感佳，耐磨、耐用，輕巧易攜帶 <br>
                                </p>

                                <p class="font-weight-bold line-height">
                                    【材質規格】
                                </p>
                                <p class="text-muted line-height">
                                    尺寸：14cm (W) x 22.8cm (L) x 8.5cm (H) (±0.3) <br>
                                    材質：70%EVA foam+30%BIOBASED CARBON <br>
                                    重量：0.45kg <br>
                                </p>

                                <p class="font-weight-bold line-height">
                                    【保養方式】
                                </p>
                                <p class="text-muted ">
                                    1.）&nbsp;新品請使用濕布（建議調製酒精：水=1：3的比例）擦拭後置放於通風處陰乾3-7天，即可減少新品氣味。 <br>


                                    2.）&nbsp;PU材質較柔軟易受損。使用時請避免穿戴高硬度、尖銳物品或是久壓存放，否則容易有刮傷或破損情形發生，降低使用壽命。<br>


                                    3.）&nbsp;使用的過程中以及儲存收納時盡量避免陽光照射，也請勿放置於高溫、任何強光可能直射的地方。以防止加速瑜伽墊老化、脆化或變異的可能性。<br>


                                    <div class="space_30"></div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 產品購買流程 -->
                    <div class="card border-0">
                        <div class="card-header" id="headingThree">

                            <div class="mb-0">

                                <button class="product-info-btn btn btn-link rounded-0 text-left w-100 d-flex justify-content-between collapsed" id="info-btn-3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                    <p>產品購買流程</p>

                                    <div class="press-icon">
                                        <img src="./SVG/plus.svg" alt="">
                                    </div>

                                </button>

                            </div>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">


                            <div class="card-body py-0 shopping-procedure">
                                <div class="space_30"></div>
                                <p class="text-muted ">
                                    1.) 為了提供便捷購物服務，第一次購物完成結帳後，36度 yoga 將自動將您註冊為會員，無須額外註冊。 <br>
                                    <br>
                                    2.) 首次購物流程:
                                    商品加入購物車 → 前往結帳 → 選取運送國家 → 填寫購買人(即會員資料) & 收件人資訊 → 結帳 → 完成<br>
                                    <br>
                                    3.) 請注意：未結帳前，加入購物車的商品並無保留庫存功能，商品庫存分配將以結帳的優先順序為依據。

                                    <div class="space_30"></div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- 區塊3：猜你喜歡 -->

                <div class="space_60"></div>
                <h3 class="mb-0">猜你喜歡</h3>
                <div class="space_60"></div>

                <div class="guessyoullike position-relative ">

                    <div class="product-zone-wrap d-flex justify-content-between position-absolute">

                        <div class="product-zone px-0">

                            <div class="product-wrap">

                                <div class="img-wrap  overflow-hidden">
                                    <a href="  <?= WEB_ROOT ?>product_mat.php?sid=13">
                                        <!-- product 的 border 之後取消 -->
                                        <img class="product-pic w-100 h-100" src="./img/product_list/p01_1.jpg" alt="瑜珈支撐墊">
                                    </a>
                                </div>

                                <div class="product-info text-center">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=13">
                                        <h6 class="p-name mb-0">瑜珈支撐墊</h6>
                                    </a>
                                    <p>NT$. 179</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-zone px-0">

                            <div class="product-wrap">

                                <div class="img-wrap overflow-hidden">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=22">
                                        <!-- product 的 border 之後取消 -->
                                        <img class="product-pic w-100  h-100" src="./img/product_list/s01_1.jpg" alt="重量運動手環">
                                    </a>
                                </div>

                                <div class="product-info text-center">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=22">
                                        <h6 class="p-name mb-0">重量運動手環</h6>
                                    </a>
                                    <p>NT$. 2280</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-zone px-0 mr-0">

                            <div class="product-wrap">

                                <div class="img-wrap overflow-hidden">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=19">
                                        <!-- product 的 border 之後取消 -->
                                        <img class="product-pic w-100 h-100" src="./img/product_list/r01_1.jpg" alt="顆粒按摩滾筒">
                                    </a>
                                </div>

                                <div class="product-info text-center">
                                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=19">
                                        <h6 class="p-name mb-0">Relex 顆粒按摩滾筒</h6>
                                    </a>
                                    <p>NT$. 1288</p>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- 手機版按鈕 桌機版隱藏 -->
                    <div class="icon-wrap d-flex">
                        <div class="icon-left"><img src="./SVG/icon_left.svg" alt=""></div>
                        <div class="icon-right"><img src="./SVG/icon_right.svg" alt=""></div>
                    </div>

                </div>


                <!-- 區塊4-1：客戶評論 -->

                <div class="space_60" id="write-review"></div>
                <h3 class="mb-0">CUSTOMER REVIEWS</h3>
                <div class="space_60"></div>

                <!-- 兩個 按鈕 -->
                <div class="star-score d-flex">

                    <h6 class=" pr-4">Overall Rating 4.43</h6>
                    <img class="icon-score" src="./SVG/stars_5.svg" alt="">

                </div>

                <div class="customer-reviews-cta d-flex justify-content-end">

                    <!-- 按鈕：撰寫商品評論 -->
                    <button class="write-reviews-btn btn btn-f" type="button" data-toggle="collapse" data-target="#collapseReviews" aria-expanded="false" aria-controls="collapseReviews">
                        撰寫商品評論
                    </button>

                    <!-- 按鈕：產品問題詢問 -->
                    <button class="ask-questions-btn btn btn-f" type="button" data-toggle="collapse" data-target="#collapseQuestions" aria-expanded="false" aria-controls="collapseQuestions">
                        產品問題詢問
                    </button>

                </div>

                <!-- 撰寫商品評論 下拉內容 -->

                <div class="collapsereviews collapse" id="collapseReviews">
                    <div class="card card-body border-0">
                        <div class="py-0">

                            <h6 class="line-height">撰寫商品評論 </h6>
                            <p class="line-height"> <span class="pr-1" style="color:#EB6E6E;">*</span>Indicates a
                                required field
                            </p>

                            <form action="" class="reviews-form-content line-height">
                                <!-- 分數 -->
                                <div class="form-group">

                                    <label for="question ">
                                        <span class="pr-1" style="color:#EB6E6E;">
                                            *
                                        </span>
                                        分數
                                    </label>
                                    <ul class="star-click d-flex list-unstyled">
                                        <li class="px-1"><img class="star-outline " src="./SVG/star_outline_1.svg" alt="">
                                        </li>
                                        <li class="px-1"><img class="star-outline " src="./SVG/star_outline_1.svg" alt="">
                                        </li>
                                        <li class="px-1"><img class="star-outline " src="./SVG/star_outline_1.svg" alt="">
                                        </li>
                                        <li class="px-1"><img class="star-outline " src="./SVG/star_outline_1.svg" alt="">
                                        </li>
                                        <li class="px-1"><img class="star-outline " src="./SVG/star_outline_1.svg" alt="">
                                        </li>
                                    </ul>

                                </div>

                                <!-- 標題 -->
                                <div class="form-group">
                                    <label for="title">
                                        <span class="pr-1" style="color:#EB6E6E;">
                                            *
                                        </span>
                                        標題
                                    </label>

                                    <input type="text" class="form-control rounded-0" id="title">
                                </div>

                                <!-- 評論 -->
                                <div class="form-group line-height">
                                    <label for="comment">
                                        <span class="pr-1" style="color:#EB6E6E;">
                                            *
                                        </span>
                                        評論
                                    </label>

                                    <textarea class="form-control rounded-0" id="comment" rows="3"></textarea>
                                </div>

                                <!-- 非必填 -->
                                <!-- 1 -->
                                <fieldset class="form-group line-height">


                                    <legend class="col-form-label">你的瑜珈經驗之程度？ (非必填)
                                    </legend>

                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1-1" value="option1-1">
                                            <label class="form-check-label" for="gridRadios1-1">
                                                一週不到 1 次
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1-2" value="option1-2">
                                            <label class="form-check-label" for="gridRadios1-2">
                                                一週 1 次
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1-3" value="option1-3">
                                            <label class="form-check-label" for="gridRadios1-3">
                                                一週 2-4 次
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1-4" value="option1-4">
                                            <label class="form-check-label" for="gridRadios1-4">
                                                一週超過 5 次
                                            </label>
                                        </div>


                                    </div>

                                </fieldset>
                                <!-- 2 -->
                                <fieldset class="form-group line-height">


                                    <legend class="col-form-label">你的瑜珈經驗之程度？ (非必填)
                                    </legend>

                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2-1" value="option2-1">
                                            <label class="form-check-label" for="gridRadios2-1">
                                                初學者
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2-2" value="option2-2">
                                            <label class="form-check-label" for="gridRadios2-2">
                                                中段班
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2-3" value="option2-3">
                                            <label class="form-check-label" for="gridRadios2-3">
                                                進階班
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2-4" value="option2-4">
                                            <label class="form-check-label" for="gridRadios2-4">
                                                瑜珈老師
                                            </label>
                                        </div>


                                    </div>

                                </fieldset>
                                <!-- 3 -->
                                <fieldset class="form-group line-height">

                                    <legend class="col-form-label">你最喜歡的瑜珈墊功能？(非必填)
                                    </legend>

                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3-1" value="option3-1">
                                            <label class="form-check-label" for="gridRadios3-1">
                                                環保
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3-2" value="option3-2">
                                            <label class="form-check-label" for="gridRadios3-2">
                                                無毒
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3-3" value="option3-3">
                                            <label class="form-check-label" for="gridRadios3-3">
                                                專利防滑
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3-4" value="option3-4">
                                            <label class="form-check-label" for="gridRadios3-4">
                                                客製化選擇
                                            </label>
                                        </div>


                                    </div>

                                </fieldset>



                                <!-- 個人資訊 -->
                                <div class="form-row justify-content-end line-height">

                                    <!-- 填入您的姓名 -->
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="name">
                                            <span class="pr-1" style="color:#EB6E6E;">
                                                *
                                            </span>
                                            填入您的姓名
                                        </label>
                                        <input type="text" class="form-control rounded-0" id="name">
                                    </div>
                                    <!-- 填入您的信箱 -->
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="email">
                                            <span class="pr-1" style="color:#EB6E6E;">
                                                *
                                            </span>
                                            填入您的信箱
                                        </label>
                                        <input type="email" class="form-control rounded-0" id="email">
                                    </div>
                                </div>
                                <!-- 送出 -->
                                <div class="d-flex justify-content-end line-height">
                                    <button type="submit" class="submit-btn btn ">送出</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

                <!-- 產品問題詢問 下拉內容 -->

                <div class="collapsequestions collapse" id="collapseQuestions">
                    <div class="card card-body border-0">
                        <div class=" py-0 ">

                            <h6 class="line-height">產品問題詢問 </h6>
                            <p class="line-height"> <span class="pr-1" style="color:#EB6E6E;">*</span>Indicates a
                                required field
                            </p>


                            <form action="" class="questions-form-content line-height">

                                <!-- 問題 -->
                                <div class="form-group">

                                    <label for="question">
                                        <span class="pr-1" style="color:#EB6E6E;">
                                            *
                                        </span>
                                        問題
                                    </label>

                                    <textarea class="form-control rounded-0" id="question" rows="3"></textarea>
                                </div>
                                <!-- 個人資訊 -->
                                <div class="form-row justify-content-end line-height">

                                    <!-- 填入您的姓名 -->
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="name">
                                            <span class="pr-1" style="color:#EB6E6E;">
                                                *
                                            </span>
                                            填入您的姓名
                                        </label>
                                        <input type="text" class="form-control rounded-0" id="name">
                                    </div>
                                    <!-- 填入您的信箱 -->
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="email">
                                            <span class="pr-1" style="color:#EB6E6E;">
                                                *
                                            </span>
                                            填入您的信箱
                                        </label>
                                        <input type="email" class="form-control rounded-0" id="email">
                                    </div>
                                </div>
                                <!-- 送出 -->
                                <div class="d-flex justify-content-end line-height">
                                    <button type="submit" class="submit-btn btn ">送出</button>
                                </div>


                            </form>


                        </div>
                    </div>
                </div>

                <!-- 區塊4-2：客戶評論 -->

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="true">評論</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="pills-questions-tab" data-toggle="pill" href="#pills-questions" role="tab" aria-controls="pills-questions" aria-selected="false">產品問答</a>
                    </li>

                </ul>

                <div class="tab-content" id="pills-tabContent">

                    <!-- REVIEWS -->
                    <div class="tab-pane fade show active" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">

                        <!-- 篩選評論 -->

                        <div class="filter-area border-bottom">
                            <div class="space_30 border-top"></div>

                            <div class="d-flex justify-content-between align-items-baseline line-height">

                                <h6 class="text-center line-height">
                                    篩選評論
                                </h6>

                                <button type="submit" class="submit-btn btn ">
                                    清除設定
                                </button>
                            </div>

                            <!-- search-bar -->


                            <div class="input-group line-height ">

                                <div class="input-group-prepend">

                                    <button class="search-bar-btn btn btn-link rounded-0 " type="button" id="button-addon1">
                                        <img src="./SVG/search-icon.svg" alt="">
                                    </button>

                                </div>

                                <input class="search-bar pl-3 w-50" type="text" placeholder="Search Reviews" aria-label="Search" aria-describedby="button-addon1">

                            </div>




                            <!-- 評論篩選器 桌機版-->
                            <div class="reviews-filter d-flex flex-wrap">

                                <!-- Rating -->
                                <div class="col-4 pl-0">
                                    <div class="reviews-dropdown dropdown line-height ">

                                        <button class="reviews-btn btn reviews-dropdown-toggle dropdown-toggle rounded-0 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            分數
                                        </button>

                                        <div class="reviews-dropdown-menu dropdown-menu rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                All 全部
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                <img src="./SVG/stars_5.svg" alt="">
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                <img src="./SVG/stars_4.svg" alt="">
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                <img src="./SVG/stars_3.svg" alt="">
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                <img src="./SVG/stars_2.svg" alt="">
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                <img src="./SVG/stars_1.svg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                </div>

                                <!-- Images & Videos-->
                                <div class="col-4 pl-0">
                                    <div class="reviews-dropdown dropdown line-height">

                                        <button class="reviews-btn btn reviews-dropdown-toggle dropdown-toggle rounded-0 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Images & Videos
                                        </button>

                                        <div class="reviews-dropdown-menu dropdown-menu rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                All 全部
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                With Images & Videos
                                            </a>

                                        </div>
                                    </div>

                                </div>

                                <!-- Practice Frequency-->
                                <div class="col-4 pl-0">
                                    <div class="reviews-dropdown dropdown line-height">

                                        <button class="reviews-btn btn reviews-dropdown-toggle dropdown-toggle rounded-0 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            練習頻率
                                        </button>

                                        <div class="reviews-dropdown-menu dropdown-menu rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                一週不到 1 次
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                一週 1 次
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                一週 2-4 次
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                一週超過 5 次
                                            </a>


                                        </div>
                                    </div>

                                </div>

                                <!-- Yogi Experience-->
                                <div class="col-4 pl-0">
                                    <div class="reviews-dropdown dropdown line-height">

                                        <button class="reviews-btn btn reviews-dropdown-toggle dropdown-toggle rounded-0 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            瑜珈經驗的程度
                                        </button>

                                        <div class="reviews-dropdown-menu dropdown-menu rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                初學者
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                中段班
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                進階班
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                瑜珈老師
                                            </a>


                                        </div>
                                    </div>
                                </div>

                                <!-- My Favourite Feature -->
                                <div class="col-4 pl-0">
                                    <div class="reviews-dropdown dropdown line-height">

                                        <button class="reviews-btn btn reviews-dropdown-toggle dropdown-toggle rounded-0 w-100" type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            喜愛的產品功能
                                        </button>

                                        <div class="reviews-dropdown-menu dropdown-menu rounded-0 w-100" aria-labelledby="dropdownMenuButton">

                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                環保
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                無毒
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                專利防滑
                                            </a>
                                            <a class="reviews-item dropdown-item text-center" href="#">
                                                客製化選擇
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- 評論篩選器 手機版-->
                            <!-- Button trigger modal -->
                            <button type="button" class="reviews-filter-btn btn btn-link w-100 " data-toggle="modal" data-target="#reviewsFilterModal">
                                篩選更多
                            </button>

                            <!-- Modal -->
                            <div class="reviews-filter-modal modal fade" id="reviewsFilterModal" tabindex="-1" role="dialog" aria-labelledby="reviewsFilterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">

                                        <!-- modal-header-->
                                        <div class="reviews-filter-header modal-header d-flex align-items-center">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span class="delete-btn" aria-hidden="true"><img class="delete-btn-img" src="./SVG/delete.svg" alt=""></span>
                                            </button>

                                            <h5 class="reviews-filter-title modal-title mx-auto" id="reviewsFilterTitle">
                                                篩選評論
                                            </h5>

                                        </div>
                                        <!-- modal-body-->
                                        <div class="modal-body">
                                            <!-- 分數-->
                                            <fieldset class="reviewsFilter-form-group line-height">

                                                <legend class="reviewsFilter-label col-form-label p-3 border">分數
                                                </legend>

                                                <div class="col-sm-10 pt-3">

                                                    <div class="form-check  pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-1" value="review-filter-option1-1">
                                                        <label class="form-check-label" for="reviewsFilter1-1">
                                                            All 全部
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-2" value="review-filter-option1-2">
                                                        <label class="form-check-label" for="reviewsFilter1-2">
                                                            <img src="./SVG/stars_5.svg" alt="">
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-3" value="review-filter-option1-3">
                                                        <label class="form-check-label" for="reviewsFilter1-3">
                                                            <img src="./SVG/stars_4.svg" alt="">
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-4" value="review-filter-option1-4">
                                                        <label class="form-check-label" for="reviewsFilter1-4">
                                                            <img src="./SVG/stars_3.svg" alt="">
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-5" value="review-filter-option1-5">
                                                        <label class="form-check-label" for="reviewsFilter1-5">
                                                            <img src="./SVG/stars_2.svg" alt="">
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter1" id="reviewsFilter1-6" value="review-filter-option1-6">
                                                        <label class="form-check-label" for="reviewsFilter1-6">
                                                            <img src="./SVG/stars_1.svg" alt="">
                                                        </label>
                                                    </div>

                                                </div>

                                            </fieldset>

                                            <!-- Images & Videos-->
                                            <fieldset class="reviewsFilter-form-group line-height">

                                                <legend class="reviewsFilter-label col-form-label p-3 border">Images
                                                    &
                                                    Videos
                                                </legend>

                                                <div class="col-sm-10 pt-3">

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter2" id="reviewsFilter2-1" value="review-filter-option1-1">
                                                        <label class="form-check-label" for="reviewsFilter2-1">
                                                            All 全部
                                                        </label>
                                                    </div>

                                                    <div class="form-check  pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter2" id="reviewsFilter2-2" value="review-filter-option1-2">
                                                        <label class="form-check-label" for="reviewsFilter2-2">
                                                            With Images & Videos
                                                        </label>
                                                    </div>


                                                </div>

                                            </fieldset>

                                            <!-- Practice Frequency-->
                                            <fieldset class="reviewsFilter-form-group line-height">

                                                <legend class="reviewsFilter-label col-form-label p-3 border">練習頻率
                                                </legend>

                                                <div class="col-sm-10 pt-3">

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter4" id="reviewsFilter3-1" value="review-filter-option1-1">
                                                        <label class="form-check-label" for="reviewsFilter3-1">
                                                            一週不到 1 次
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter3" id="reviewsFilter3-2" value="review-filter-option1-2">
                                                        <label class="form-check-label" for="reviewsFilter3-2">
                                                            一週 1 次
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter3" id="reviewsFilter3-3" value="review-filter-option1-3">
                                                        <label class="form-check-label" for="reviewsFilter3-3">
                                                            一週 2~4 次
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter3" id="reviewsFilter3-4" value="review-filter-option1-4">
                                                        <label class="form-check-label" for="reviewsFilter3-4">
                                                            一週超過 5 次
                                                        </label>
                                                    </div>



                                                </div>

                                            </fieldset>

                                            <!-- Yogi Experience-->
                                            <fieldset class="reviewsFilter-form-group line-height">

                                                <legend class="reviewsFilter-label col-form-label p-3 border">
                                                    瑜珈經驗的程度
                                                </legend>

                                                <div class="col-sm-10 pt-3">

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter4" id="reviewsFilter4-1" value="review-filter-option1-1">
                                                        <label class="form-check-label" for="reviewsFilter4-1">
                                                            初學者
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter4" id="reviewsFilter4-2" value="review-filter-option1-2">
                                                        <label class="form-check-label" for="reviewsFilter4-2">
                                                            中段班
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter4" id="reviewsFilter4-3" value="review-filter-option1-3">
                                                        <label class="form-check-label" for="reviewsFilter4-3">
                                                            進階班
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter4" id="reviewsFilter4-4" value="review-filter-option1-4">
                                                        <label class="form-check-label" for="reviewsFilter4-4">
                                                            瑜珈老師
                                                        </label>
                                                    </div>



                                                </div>

                                            </fieldset>

                                            <!-- My Favourite Feature -->
                                            <fieldset class="reviewsFilter-form-group line-height">

                                                <legend class="reviewsFilter-label col-form-label p-3 border">
                                                    喜愛的產品功能
                                                </legend>

                                                <div class="col-sm-10 pt-3">

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter5" id="reviewsFilter5-1" value="review-filter-option1-1">
                                                        <label class="form-check-label" for="reviewsFilter5-1">
                                                            環保
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter5" id="reviewsFilter5-2" value="review-filter-option1-2">
                                                        <label class="form-check-label" for="reviewsFilter5-2">
                                                            無毒
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter5" id="reviewsFilter5-3" value="review-filter-option1-3">
                                                        <label class="form-check-label" for="reviewsFilter5-3">
                                                            專利防滑
                                                        </label>
                                                    </div>

                                                    <div class="form-check pb-2">
                                                        <input class="form-check-input" type="radio" name="reviewsFilter5" id="reviewsFilter5-4" value="review-filter-option1-4">
                                                        <label class="form-check-label" for="reviewsFilter5-4">
                                                            客製化選擇
                                                        </label>
                                                    </div>



                                                </div>

                                            </fieldset>



                                        </div>

                                        <!-- modal-body-->
                                        <div class="reviews-filter-footer modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button> -->
                                            <button type="button" class="reviews-filter-btn btn btn-link w-100 mb-0">篩選評論</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- 評論內容 -->
                        <div class="space_30"></div>

                        <div class="sort-by-wrap d-flex justify-content-between line-height">
                            <a class="pl-2" href="">
                                (1051）評論
                            </a>

                            <!-- 分類選擇：篩選器 -->

                            <div class="size-list-dropdown dropdown ">
                                <button class="size-list-btn btn size-list-dropdown-toggle dropdown-toggle border-0  p-0" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    進階篩選
                                </button>

                                <div class="sort-by size-list-dropdown-menu dropdown-menu rounded-0 " aria-labelledby="dropdownMenuButton">
                                    <a class="size-list-item dropdown-item text-center" href="#">最新</a>
                                    <a class="size-list-item dropdown-item text-center" href="#">最高分</a>
                                    <a class="size-list-item dropdown-item text-center" href="#">最低分</a>
                                    <a class="size-list-item dropdown-item text-center" href="#">最高投票數</a>
                                    <a class="size-list-item dropdown-item text-center" href="#">最少投票數</a>

                                </div>
                            </div>
                        </div>

                        <!-- 評論 -->
                        <div class="comment-message">
                            <!-- 人名 -->
                            <div class="d-flex justify-content-between ">
                                <!-- 人像-->
                                <div class="d-flex ">
                                    <div class="avatar border ">
                                        <img class="avatar-img w-100" src="./img/index/member_head_02.jpg" alt="">
                                    </div>

                                    <div class="avatar-name pl-3">
                                        <p class="nickname">Sunny</p>
                                    </div>
                                </div>

                                <div class="avatar-date">
                                    <p>11/02/20</p>
                                </div>
                            </div>
                            <!-- 留言 -->
                            <div class="comment-content line-height">
                                <img class="line-height pl-3" src="./SVG/stars_5.svg" alt="">

                                <div class="content-area">
                                    <p class="filter-info line-height">
                                        練習頻率：每週5次以上 <br>
                                        瑜伽經驗：高級 <br>
                                        我最喜歡的功能：防滑 <br>
                                    </p>

                                    <p>
                                        跪著時，我可以做瑜伽姿勢而左膝不再疼痛。善待自己，充實自己的生活並享受練習。
                                    </p>
                                </div>
                            </div>
                            <!-- 分享 -->
                            <div class="d-flex justify-content-between line-height pb-4 border-bottom">

                                <div class="d-flex">
                                    <div class="icon-share">
                                        <img src="./SVG/icon_share.svg" alt="">
                                    </div>

                                    <a class="pl-3" href="">分享 &nbsp;| </a>

                                </div>

                                <div class="d-flex">
                                    <p class="text-note">這則評論對你有幫助嗎？</p>

                                    <div class="dumb-wrap d-flex">
                                        <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                        </div>
                                        <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-message">
                            <!-- 人名 -->
                            <div class="d-flex justify-content-between ">
                                <!-- 人像-->
                                <div class="d-flex ">
                                    <div class="avatar border ">
                                        <img class="avatar-img w-100" src="./img/index/member_head_03.jpg" alt="">
                                    </div>

                                    <div class="avatar-name pl-3">
                                        <p class="nickname">Rachel</p>
                                    </div>
                                </div>

                                <div class="avatar-date">
                                    <p>11/02/20</p>
                                </div>
                            </div>
                            <!-- 留言 -->
                            <div class="comment-content line-height">
                                <img class="line-height pl-3" src="./SVG/stars_5.svg" alt="">

                                <div class="content-area">
                                    <p class="filter-info line-height">
                                        練習頻率：每週5次以上 <br>
                                        瑜伽經驗：高級 <br>
                                        我最喜歡的功能：防滑 <br>
                                    </p>

                                    <p>
                                        跪著時，我可以做瑜伽姿勢而左膝不再疼痛。善待自己，充實自己的生活並享受練習。
                                    </p>
                                </div>
                            </div>
                            <!-- 分享 -->
                            <div class="d-flex justify-content-between line-height pb-4 border-bottom">

                                <div class="d-flex">
                                    <div class="icon-share">
                                        <img src="./SVG/icon_share.svg" alt="">
                                    </div>

                                    <a class="pl-3" href="">分享 &nbsp;| </a>

                                </div>

                                <div class="d-flex">
                                    <p class="text-note">這則評論對你有幫助嗎？</p>

                                    <div class="dumb-wrap d-flex">
                                        <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                        </div>
                                        <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-message">
                            <!-- 人名 -->
                            <div class="d-flex justify-content-between ">
                                <!-- 人像-->
                                <div class="d-flex ">
                                    <div class="avatar border ">
                                        <img class="avatar-img w-100" src="./img/index/member_head_04.jpg" alt="">
                                    </div>

                                    <div class="avatar-name pl-3">
                                        <p class="nickname">John</p>
                                    </div>
                                </div>

                                <div class="avatar-date">
                                    <p>11/02/20</p>
                                </div>
                            </div>
                            <!-- 留言 -->
                            <div class="comment-content line-height">
                                <img class="line-height pl-3" src="./SVG/stars_5.svg" alt="">

                                <div class="content-area">
                                    <p class="filter-info line-height">
                                        練習頻率：每週5次以上 <br>
                                        瑜伽經驗：高級 <br>
                                        我最喜歡的功能：防滑 <br>
                                    </p>

                                    <p>
                                        跪著時，我可以做瑜伽姿勢而左膝不再疼痛。善待自己，充實自己的生活並享受練習。
                                    </p>
                                </div>
                            </div>
                            <!-- 分享 -->
                            <div class="d-flex justify-content-between line-height pb-4 border-bottom">

                                <div class="d-flex">
                                    <div class="icon-share">
                                        <img src="./SVG/icon_share.svg" alt="">
                                    </div>

                                    <a class="pl-3" href="">分享 &nbsp;| </a>

                                </div>

                                <div class="d-flex">
                                    <p class="text-note">這則評論對你有幫助嗎？</p>

                                    <div class="dumb-wrap d-flex">
                                        <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                        </div>
                                        <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment-message">
                            <!-- 人名 -->
                            <div class="d-flex justify-content-between ">
                                <!-- 人像-->
                                <div class="d-flex ">
                                    <div class="avatar border ">
                                        <img class="avatar-img w-100" src="./img/index/member_head_05.jpg" alt="">
                                    </div>

                                    <div class="avatar-name pl-3">
                                        <p class="nickname">Sally</p>
                                    </div>
                                </div>

                                <div class="avatar-date">
                                    <p>11/02/20</p>
                                </div>
                            </div>
                            <!-- 留言 -->
                            <div class="comment-content line-height">
                                <img class="line-height pl-3" src="./SVG/stars_5.svg" alt="">

                                <div class="content-area">
                                    <p class="filter-info line-height">
                                        練習頻率：每週5次以上 <br>
                                        瑜伽經驗：高級 <br>
                                        我最喜歡的功能：防滑 <br>
                                    </p>

                                    <p>
                                        跪著時，我可以做瑜伽姿勢而左膝不再疼痛。善待自己，充實自己的生活並享受練習。
                                    </p>
                                </div>
                            </div>
                            <!-- 分享 -->
                            <div class="d-flex justify-content-between line-height pb-4 border-bottom">

                                <div class="d-flex">
                                    <div class="icon-share">
                                        <img src="./SVG/icon_share.svg" alt="">
                                    </div>

                                    <a class="pl-3" href="">分享 &nbsp;| </a>

                                </div>

                                <div class="d-flex">
                                    <p class="text-note">這則評論對你有幫助嗎？</p>

                                    <div class="dumb-wrap d-flex">
                                        <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                        </div>
                                        <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- 分頁 -->
                        <div aria-label="Page navigation example ">
                            <ul class="pagination d-flex justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>


                    <!-- QUESTIONS -->

                    <div class="tab-pane fade" id="pills-questions" role="tabpanel" aria-labelledby="pills-questions-tab">

                        <div class="border-bottom"></div>

                        <!-- 問題內容 -->
                        <div class="space_30"></div>

                        <!-- 問答 -->
                        <div class="media-qa media border-bottom line-height">

                            <!-- 人像-->
                            <div class="avatar border">
                                <img class="avatar-img w-100" src="./img/index/member_head_02.jpg" class="mr-3" alt="">
                            </div>

                            <div class="media-body pl-3">
                                <!-- 人名-->
                                <div class="avatar-name line-height d-flex justify-content-between">
                                    <p class="nickname">Sunny</p>
                                    <p>12/02/19</p>
                                </div>

                                <!-- Q:問題 -->
                                <div class="quenstion line-height">
                                    <p style="font-weight: 500;">
                                        問題：
                                    </p>

                                    <p style="font-weight: 500;">
                                        我重68公斤，想要在瓷磚地面上使用墊子。這足夠緩衝嗎？我是初學者。
                                    </p>
                                </div>
                                <!-- A:回覆 -->
                                <div class="media-yoga media mt-3">
                                    <!-- 人像-->
                                    <a href="#">
                                        <div class="avatar border">
                                            <img class="avatar-img w-100" src="" class="mr-3" alt="">
                                        </div>
                                    </a>
                                    <div class="media-body pl-3">
                                        <!-- 人名-->
                                        <div class="avatar-name line-height d-flex justify-content-between">
                                            <p class="nickname">36度 瑜珈</p>
                                            <p>12/02/19</p>
                                        </div>

                                        <!-- 解答 -->
                                        <div class="quenstion line-height">
                                            <p>
                                                回覆：
                                            </p>

                                            <p>
                                                謝謝您的留言！<br>

                                                我們的墊子經過精心設計，可為膝蓋和肘部提供出色的緩衝性，並具有出色的穩定性和抓地力。它們主要設計用於硬地板，因為這些往往是瑜伽工作室中的地板。我們將底層設計為由天然且可持續資源的天然橡膠製成，該橡膠非常緻密，因此可以在地面上很好地跟踪:)這意味著該墊子將在大多數表面上保持穩定。<br>

                                                希望對您有所幫助，如果還有其他問題，請告訴我們，並給我們發送電子郵件至info@yoga36.com。<br>
                                            </p>
                                        </div>

                                        <!-- 分享 -->
                                        <div class="d-flex justify-content-between line-height pb-4 ">

                                            <div class="d-flex">
                                                <p class="text-note">這個答案有幫助嗎？</p>

                                                <div class="dumb-wrap d-flex">
                                                    <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                                    </div>
                                                    <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-qa media border-bottom line-height">

                            <!-- 人像-->
                            <div class="avatar border">
                                <img class="avatar-img w-100" src="./img/index/member_head_03.jpg" class="mr-3" alt="">
                            </div>

                            <div class="media-body pl-3">
                                <!-- 人名-->
                                <div class="avatar-name line-height d-flex justify-content-between">
                                    <p class="nickname">Rachel</p>
                                    <p>12/02/19</p>
                                </div>

                                <!-- Q:問題 -->
                                <div class="quenstion line-height">
                                    <p style="font-weight: 500;">
                                        問題：
                                    </p>

                                    <p style="font-weight: 500;">
                                        我重68公斤，想要在瓷磚地面上使用墊子。這足夠緩衝嗎？我是初學者。
                                    </p>
                                </div>
                                <!-- A:回覆 -->
                                <div class="media-yoga media mt-3">
                                    <!-- 人像-->
                                    <a href="#">
                                        <div class="avatar border">
                                            <img class="avatar-img w-100" src="" class="mr-3" alt="">
                                        </div>
                                    </a>
                                    <div class="media-body pl-3">
                                        <!-- 人名-->
                                        <div class="avatar-name line-height d-flex justify-content-between">
                                            <p class="nickname">36度 瑜珈</p>
                                            <p>12/02/19</p>
                                        </div>

                                        <!-- 解答 -->
                                        <div class="quenstion line-height">
                                            <p>
                                                回覆：
                                            </p>

                                            <p>
                                                謝謝您的留言！<br>

                                                我們的墊子經過精心設計，可為膝蓋和肘部提供出色的緩衝性，並具有出色的穩定性和抓地力。它們主要設計用於硬地板，因為這些往往是瑜伽工作室中的地板。我們將底層設計為由天然且可持續資源的天然橡膠製成，該橡膠非常緻密，因此可以在地面上很好地跟踪:)這意味著該墊子將在大多數表面上保持穩定。<br>

                                                希望對您有所幫助，如果還有其他問題，請告訴我們，並給我們發送電子郵件至info@yoga36.com。<br>
                                            </p>
                                        </div>

                                        <!-- 分享 -->
                                        <div class="d-flex justify-content-between line-height pb-4 ">

                                            <div class="d-flex">
                                                <p class="text-note">這個答案有幫助嗎？</p>

                                                <div class="dumb-wrap d-flex">
                                                    <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                                    </div>
                                                    <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-qa media border-bottom line-height">

                            <!-- 人像-->
                            <div class="avatar border">
                                <img class="avatar-img w-100" src="./img/index/member_head_04.jpg" class="mr-3" alt="">
                            </div>

                            <div class="media-body pl-3">
                                <!-- 人名-->
                                <div class="avatar-name line-height d-flex justify-content-between">
                                    <p class="nickname">John</p>
                                    <p>12/02/19</p>
                                </div>

                                <!-- Q:問題 -->
                                <div class="quenstion line-height">
                                    <p style="font-weight: 500;">
                                        問題：
                                    </p>

                                    <p style="font-weight: 500;">
                                        我重68公斤，想要在瓷磚地面上使用墊子。這足夠緩衝嗎？我是初學者。
                                    </p>
                                </div>
                                <!-- A:回覆 -->
                                <div class="media-yoga media mt-3">
                                    <!-- 人像-->
                                    <a href="#">
                                        <div class="avatar border">
                                            <img class="avatar-img w-100" src="" class="mr-3" alt="">
                                        </div>
                                    </a>
                                    <div class="media-body pl-3">
                                        <!-- 人名-->
                                        <div class="avatar-name line-height d-flex justify-content-between">
                                            <p class="nickname">36度 瑜珈</p>
                                            <p>12/02/19</p>
                                        </div>

                                        <!-- 解答 -->
                                        <div class="quenstion line-height">
                                            <p>
                                                回覆：
                                            </p>

                                            <p>
                                                謝謝您的留言！<br>

                                                我們的墊子經過精心設計，可為膝蓋和肘部提供出色的緩衝性，並具有出色的穩定性和抓地力。它們主要設計用於硬地板，因為這些往往是瑜伽工作室中的地板。我們將底層設計為由天然且可持續資源的天然橡膠製成，該橡膠非常緻密，因此可以在地面上很好地跟踪:)這意味著該墊子將在大多數表面上保持穩定。<br>

                                                希望對您有所幫助，如果還有其他問題，請告訴我們，並給我們發送電子郵件至info@yoga36.com。<br>
                                            </p>
                                        </div>

                                        <!-- 分享 -->
                                        <div class="d-flex justify-content-between line-height pb-4 ">

                                            <div class="d-flex">
                                                <p class="text-note">這個答案有幫助嗎？</p>

                                                <div class="dumb-wrap d-flex">
                                                    <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                                    </div>
                                                    <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-qa media border-bottom line-height">

                            <!-- 人像-->
                            <div class="avatar border">
                                <img class="avatar-img w-100" src="./img/index/member_head_05.jpg" class="mr-3" alt="">
                            </div>

                            <div class="media-body pl-3">
                                <!-- 人名-->
                                <div class="avatar-name line-height d-flex justify-content-between">
                                    <p class="nickname">Sally</p>
                                    <p>12/02/19</p>
                                </div>

                                <!-- Q:問題 -->
                                <div class="quenstion line-height">
                                    <p style="font-weight: 500;">
                                        問題：
                                    </p>

                                    <p style="font-weight: 500;">
                                        我重68公斤，想要在瓷磚地面上使用墊子。這足夠緩衝嗎？我是初學者。
                                    </p>
                                </div>
                                <!-- A:回覆 -->
                                <div class="media-yoga media mt-3">
                                    <!-- 人像-->
                                    <a href="#">
                                        <div class="avatar border">
                                            <img class="avatar-img w-100" src="" class="mr-3" alt="">
                                        </div>
                                    </a>
                                    <div class="media-body pl-3">
                                        <!-- 人名-->
                                        <div class="avatar-name line-height d-flex justify-content-between">
                                            <p class="nickname">36度 瑜珈</p>
                                            <p>12/02/19</p>
                                        </div>

                                        <!-- 解答 -->
                                        <div class="quenstion line-height">
                                            <p>
                                                回覆：
                                            </p>

                                            <p>
                                                謝謝您的留言！<br>

                                                我們的墊子經過精心設計，可為膝蓋和肘部提供出色的緩衝性，並具有出色的穩定性和抓地力。它們主要設計用於硬地板，因為這些往往是瑜伽工作室中的地板。我們將底層設計為由天然且可持續資源的天然橡膠製成，該橡膠非常緻密，因此可以在地面上很好地跟踪:)這意味著該墊子將在大多數表面上保持穩定。<br>

                                                希望對您有所幫助，如果還有其他問題，請告訴我們，並給我們發送電子郵件至info@yoga36.com。<br>
                                            </p>
                                        </div>

                                        <!-- 分享 -->
                                        <div class="d-flex justify-content-between line-height pb-4 ">

                                            <div class="d-flex">
                                                <p class="text-note">這個答案有幫助嗎？</p>

                                                <div class="dumb-wrap d-flex">
                                                    <div class="thumbs-up px-3"><i class="far fa-thumbs-up"></i> 0
                                                    </div>
                                                    <div><i class="thumbs-down far fa-thumbs-down"></i> 0 </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 分頁 -->
                        <div aria-label="Page navigation example ">
                            <ul class="pagination d-flex justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!-- <?php endforeach ?> -->
    </div>
    <div class="space_120"></div>


</div>


<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script src="<?= WEB_ROOT ?>lib/product_mat.js"></script>

<script>
    // 左側欄互動 

    // sid 對照各分類的顏色變化 & 溫度計變化

    $sid = <?php echo $sid ?>;
    console.log($sid, "hoho");

    $std = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $ctm = [34];
    $block = [13, 14, 15, 16];
    $pad = [17, 18];
    $roller = [19, 20, 21];
    $sand = [22, 23, 24, 25];
    $strap = [26, 27, 28, 29];
    $band = [30, 31];
    $towel = [32, 33];


    if ($std.includes($sid)) {
        $('#std a').css('color', '#db5c00');
        // $(this).css('color', '#db5c00');
        console.log($std.includes($sid), "ho");

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#std').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }
    if ($block.includes($sid)) {
        $('#block a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#block').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }
    if ($pad.includes($sid)) {
        $('#pad a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#pad').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }
    if ($roller.includes($sid)) {
        $('#roller a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#roller').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");

    }
    if ($sand.includes($sid)) {
        console.log($sand.includes($sid), "ho");
        $('#sand a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#sand').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");

    }
    if ($strap.includes($sid)) {
        $('#strap a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#strap').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }
    if ($band.includes($sid)) {
        $('#band a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#band').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }
    if ($towel.includes($sid)) {
        $('#towel a').css('color', '#db5c00');

        let plstTop = $('#plst_top').position().top;
        let aTop = $('#towel').position().top;
        console.log(aTop)
        let topMinus = aTop - plstTop;
        let len = 60 + topMinus;
        $('.thermometer_move').css('height', len + "px");
    }

    // 側bar到一個位置fix住↓↓
    $(window).on('scroll', function() {
        let scrollTop = $(this).scrollTop();
        console.log(scrollTop)
        let barFixed = 205;
        let barUnFixd = 4780;


        if (scrollTop < barFixed) {
            $('.product_siderbar_wrap').removeClass('bottomFixed');
            $('.product_siderbar_wrap').removeClass('fixed');

        } else if (scrollTop < barUnFixd) {
            $('.product_siderbar_wrap').removeClass('bottomFixed');
            $('.product_siderbar_wrap').addClass('fixed');

        } else {
            $('.product_siderbar_wrap').removeClass('fixed');
            $('.product_siderbar_wrap').addClass('bottomFixed');

        }
    });
    // 側bar到一個位置fix住↑↑   




    // 左側欄互動

    // 當 .btn_like 的 .like_fill.color 時，checkLike()會傳送資料到 my-favorite_api.php

    // const colorFill = $('.like_fill').hasClass('color');
    // console.log(colorFill)

    function checkLike() {
        const me = $(event.currentTarget);
        const product_sid = me.attr('data-sid');
        console.log('product_sid:', {
            product_sid
        });
        $.post('my_favorite_api.php', {
            product_sid,

        }, function(data) {
            console.log(data);
            if (data.add) {
                me.find('.like_fill').addClass('color');
            } else {
                me.find('.like_fill').removeClass('color');
            }
        }, 'json');

    };

    //加入購物車
    function addToCart(event) {

        const sid = $('.addtocart-btn').attr('data-sid');
        const qty = $('.amount-number').val();

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
    };

    //完成購買
    function toBuy(event) {

        const sid = $('.buy-btn').attr('data-sid');
        const qty = $('.amount-number').val();

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
            document.location.href = "cart-step1.php";
        }, 'json');
    };
</script>


<?php include __DIR__ . '/parts/html-end.php'; ?>