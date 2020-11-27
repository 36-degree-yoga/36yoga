<?php include __DIR__ . '/parts/config.php'; ?>

<?php
// 瑜珈墊
$m_sql = "SELECT * FROM `products` WHERE `list_id` LIKE 'mat0%' GROUP BY `list_id`";
$m_stmt = $pdo->query($m_sql);

$m_rows = $m_stmt->fetchAll();

// 瑜珈墊照片

$pic_rows = [];
foreach ($m_rows as $r) {
    $pic_rows[] = explode(",", $r['img']);
};

// $a = $pic_rows[1][1];
$first = [];
foreach ($pic_rows as $p) {
    $first[] = $p[0];
};

// echo json_encode($a, JSON_UNESCAPED_UNICODE);
// exit;
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_list.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_sidebar.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/quick_view.css">
<?php include __DIR__ . '/parts/nav.php'; ?>


<div class="container-fluid">
    <!-- banner照片 -->
    <div class="space_120"></div>
    <div class="row">
        <div class="banner">
            <img src="<?= WEB_ROOT ?>img/product_list/product_list_mat_01.jpg" alt="">
        </div>
    </div>

    <div class="row">
        <!-- 左側:側邊選單 -->
        <div class="product_side_bar col-3 position-relative">
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

                        <div class="title">
                            <a id="plst_top" href="#">瑜珈墊</a>
                        </div>

                        <div class="subtitle">
                            <a href="#std">一般</a>
                        </div>
                        <div class="subtitle"><a href="#ctm">客製化</a></div>
                    </div>
                    <div class="product_siderbar_title">

                        <div class="title"><a href="#">輔具</a></div>
                        <div class="subtitle"><a href="#block">瑜珈磚</a></div>
                        <div class="subtitle"><a href="#pad">支撐墊</a></div>
                        <div class="subtitle"><a href="#roller">滾筒</a></div>
                        <div class="subtitle"><a href="#sand">沙包</a></div>
                        <div class="subtitle"><a href="#strap">伸展帶</a></div>
                        <div class="subtitle"><a href="#band">彈力帶</a></div>
                        <div class="subtitle"><a href="#towel">舖巾</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 右側 -->
        <div class="col-8 right_area">
            <!--篩選器 -->
            <div class="d-flex justify-content-end align-items-center" id="std" style="height: 120px;">
                <!-- 篩選器 -->
                <div class="dropdown ">
                    <button class="btn dropdown-toggle rounded-0 px-4 " type="button" id="dropdownListButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        進階篩選
                    </button>
                    <div class="dropdown-menu border-top-0 rounded-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">價格由低到高</a>
                        <a class="dropdown-item" href="#">價格由高到低</a>
                        <a class="dropdown-item" href="#">熱銷排行</a>
                        <a class="dropdown-item" href="#">上架時間由新到舊</a>
                        <a class="dropdown-item" href="#">上架時間由舊到新</a>
                    </div>
                </div>

            </div>
            <!-- 產品列表 -->

            <!-- 一般產品列表 -->

            <div class="product_list d-flex justify-content-between flex-wrap" name="std">
                <?php foreach ($m_rows as $r) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" data-toggle="modal" data-target="#exampleModal">

                            <img src="./img/product_list/<?= $first[2] ?>.jpg" alt="">

                        </div>
                        <div class="space_30"></div>
                        <h6 class="mb-0" style="text-align: center;"><?= $r['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $r['price'] ?></p>
                    </div>

                <?php endforeach; ?>
                <div class="mat_list_pic col-6">
                    <img src="<?= WEB_ROOT ?>img/product_list/product_list_mat_02.jpg" alt="">
                </div>
            </div>
            <!-- 客製化產品區(網頁) -->
            <div class="space_120" id="ctm"></div>
            <div class="customize_area d-flex align-items-center justify-content-center">
                <div class="content_wrap d-flex flex-column w-100 p-5">
                    <div class="word_pic_wrap d-flex align-items-center justify-content-between">
                        <h1 class="mb-0 d-flex justify-content-end" style="color: #FFFEFC; line-height: 70px;font-family:Josefin Sans, sans-serif;">
                            Make
                            <br>
                            Your
                            <br>
                            Soulmat
                        </h1>
                        <div class="customize_area_img_wrap ">
                            <img src="<?= WEB_ROOT ?>img/product_list/product_list_mat_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="btn_wrap d-flex justify-content-end mt-4">
                        <button class="btn_l">了解更多</button>
                        <button class="btn_f">開始製作</button>
                    </div>
                </div>


            </div>
            <div class="space_60"></div>

            <!-- 瑜珈磚 -->
            <div class="space_120" id="block"></div>
            <div class="d-flex justify-content-between ">
                <!-- 瑜珈磚大圖 -->
                <div class="prop_list_pic_wrap col-6 d-flex p-0 justify-content-start">
                    <div class="prop_list_pic">
                        <img src="" alt="">
                    </div>
                </div>
                <!-- 瑜珈磚列表 -->
                <div class="product_list col-6 p-0 d-flex flex-wrap justify-content-around">
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap" data-toggle="modal" data-target="#exampleModal">
                            <img src="./img/02_product_list_mat/EkoLite-133013080-Mats-FW18-Acai-01_cb404050-614a-4311-a5c9-80bafc3bbedc_500x500.jpg" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                </div>
            </div>
            <!-- 支撐墊 -->
            <div class="space_120" id="pad"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0 w-100 justify-content-center" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
            </div>
            <!-- 滾筒 -->
            <div class="space_120" id="roller"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
            </div>
            <!-- 沙包 -->
            <div class="space_120" id="sand"></div>
            <div class="d-flex flex-wrap justify-content-between ">
                <!-- 沙包列表 -->
                <div class="product_list col-6 p-0 d-flex flex-wrap justify-content-around">
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                    <div class="product mb-5 col-6">
                        <div class="product_img_wrap">
                            <img src="" alt="">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                        <p style="text-align: center;">NT.1,000</p>
                    </div>
                </div>
                <!-- 沙包大圖 -->
                <div class="prop_list_pic_wrap col-6 d-flex p-0 justify-content-end">
                    <div class="prop_list_pic">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <!-- 伸展帶 -->
            <div class="space_120" id="strap"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
            </div>
            <!-- 彈力帶 -->
            <div class="space_120" id="band"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
                <div class="prop_space col-6"></div>
            </div>
            <!-- 鋪巾 -->
            <div class="space_120" id="towel"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p class="p-0" style="text-align: center;">NT.1,000</p>
                </div>
                <div class="product mb-5 col-3">
                    <div class="product_img_wrap">
                        <img src="" alt="">
                    </div>
                    <h6 class="mt-4 mb-0" style="text-align: center;">好瘦瑜珈墊</h6>
                    <p style="text-align: center;">NT.1,000</p>
                </div>
                <div class="prop_space col-6"></div>

            </div>

            <!-- 客製化產品區(手機板) -->
            <div class="customize_area_mobile align-items-center justify-content-center">
                <div class="content_wrap_mobile d-flex flex-column w-100 p-5">
                    <div class="word_pic_wrap_mobile d-flex align-items-center justify-content-between">
                        <h1 class="mb-0 d-flex justify-content-end" style="color: #FFFEFC; line-height: 70px;font-family:Josefin Sans, sans-serif;">
                            Make
                            <br>
                            Your
                            <br>
                            Soulmat
                        </h1>
                        <div class="customize_area_mobile_img_wrap ">
                            <img src="<?= WEB_ROOT ?>img/product_list/product_list_mat_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="btn_wrap d-flex justify-content-end mt-4">
                        <button class="btn_l">了解更多</button>
                        <button class="btn_f">開始製作</button>
                    </div>
                </div>


            </div>
            <div class="space_60"></div>
        </div>
    </div>
</div>

<!-- 彈跳視窗↓↓ -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="./SVG/delete.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">

                <div class="quick_view_img_wrap">
                    <img src="" alt="">
                </div>
                <div class="ml-5">
                    <h3>瑜珈墊</h3>
                    <div class="space_30"></div>
                    <div class="item-tag d-flex">
                        <h6 class="text-justify" style="color: #F2A200;">止滑</h6>
                        <h6 class="text-justify" style="color: #F2A200;">防水</h6>
                    </div>
                    <div class="space_30"></div>
                    <p style="line-height: 30px;">
                        1. 全新結構，提供手腕與腳踝最佳緩衝及保護。
                        <br>
                        2. 天然橡膠材質，乾濕止滑效果優異。
                        <br>
                        3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。

                    </p>
                    <div class="space_30"></div>
                    <div class="d-flex align-items-center">
                        <div style="width: 10px;height: 20px;background-color: #db5c00;"></div>
                        <h6 class="ml-2">NT. 1,000</h6>
                    </div>
                    <div class="space_60"></div>
                    <div class="d-flex">
                        <div class="color_circle"></div>
                        <div class="color_circle"></div>
                        <div class="color_circle"></div>
                    </div>
                    <div class="space_60"></div>
                    <div>
                        <button class="btn_l" style="margin-right: 40px;">了解更多</button>
                        <button class="btn_f">加入購物車</button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="space_30"></div>
            </div>
        </div>
    </div>
</div>
<!-- 彈跳視窗↑↑ -->





<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>

<script src="<?= WEB_ROOT ?>lib/product_list.js"></script>


<script>
    // 圖片hover↓↓

    // $('.product_img_wrap img').hover(
    //     function() {
    //         $('.product_img_wrap img').attr('src', '')
    //     },
    //     function() {

    //     }
    // )
    // 圖片hover↑↑
</script>

<?php include __DIR__ . '/parts/html-end.php'; ?>