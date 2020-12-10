<?php include __DIR__ . '/parts/config.php'; ?>

<?php
// 瑜珈墊
$m_sql = "SELECT * FROM `products` WHERE `list_id` LIKE 'mat0%' GROUP BY `list_id`";
$m_stmt = $pdo->query($m_sql);
$m_rows = $m_stmt->fetchAll();

// 瑜珈墊照片
foreach ($m_rows as $k => $r) {
    $m_rows[$k]['my_imgs']  = explode(",", $r['img']);
};

// 瑜珈磚塊
$block_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'b0%'";
$block_Stmt = $pdo->query($block_sql);
$block_row = $block_Stmt->fetchAll();
foreach ($block_row  as $k => $r) {
    $block_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 支撐墊
$pad_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'p0%'";
$pad_Stmt = $pdo->query($pad_sql);
$pad_row = $pad_Stmt->fetchAll();
foreach ($pad_row  as $k => $r) {
    $pad_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 滾筒
$roller_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'rolle%'";
$roller_Stmt = $pdo->query($roller_sql);
$roller_row = $roller_Stmt->fetchAll();
foreach ($roller_row  as $k => $r) {
    $roller_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 重量手環
$sand_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'sand%'";
$sand_Stmt = $pdo->query($sand_sql);
$sand_row = $sand_Stmt->fetchAll();
foreach ($sand_row  as $k => $r) {
    $sand_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 伸展帶
$strap_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'a%'";
$strap_Stmt = $pdo->query($strap_sql);
$strap_row = $strap_Stmt->fetchAll();
foreach ($strap_row  as $k => $r) {
    $strap_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 彈力帶
$band_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'c0%'";
$band_Stmt = $pdo->query($band_sql);
$band_row = $band_Stmt->fetchAll();
foreach ($band_row  as $k => $r) {
    $band_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// 舖巾
$towel_sql = "SELECT * FROM `products` WHERE `list_id`LIKE 'w%'";
$towel_Stmt = $pdo->query($towel_sql);
$towel_row = $towel_Stmt->fetchAll();
foreach ($towel_row  as $k => $r) {
    $towel_row[$k]['my_imgs'] = explode(",", $r['img']);
};

// echo json_encode($roller_row, JSON_UNESCAPED_UNICODE);
// exit;
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_list.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/product_sidebar.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/quick_view.css">
<style>
    .product h6 {
        cursor: pointer;
    }
</style>
<?php include __DIR__ . '/parts/nav.php'; ?>


<div class="container-fluid">
    <!-- banner照片 -->
    <div style="height: 100px; width:100%;"></div>
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

                    <div class="product_siderbar_title mat_bar">

                        <div class="title">
                            <div id="plst_top">瑜珈墊</div>
                        </div>

                        <div class="subtitle">
                            <a href="#std" id="a">一般</a>
                        </div>
                        <div class="subtitle">
                            <a href="#ctm" id="b">客製化</a>
                        </div>
                    </div>
                    <div class="product_siderbar_title prop_bar">

                        <div class="title">
                            <div>輔具</div>
                        </div>
                        <div class="subtitle"><a href="#block" id="c">瑜珈磚</a></div>
                        <div class="subtitle"><a href="#pad" id="d">支撐墊</a></div>
                        <div class="subtitle"><a href="#roller" id="e">滾筒</a></div>
                        <div class="subtitle"><a href="#sand" id="f">重量手環</a></div>
                        <div class="subtitle"><a href="#strap" id="g">伸展帶</a></div>
                        <div class="subtitle"><a href="#band" id="h">彈力帶</a></div>
                        <div class="subtitle"><a href="#towel" id="i">舖巾</a></div>
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
                <?php foreach ($m_rows as $m) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $m['sid'] ?>)">

                            <img src="./img/product_list/<?= $m['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $m['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $m['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $m['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <div class="space_30"></div>
                        <h6 class="mb-0" style="text-align: center;" onclick="toDetail(<?= $m['sid'] ?>)"><?= $m['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $m['price'] ?></p>
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
                        <button class="btn_l" onclick="location.href='product_custom_mat.php'">了解更多</button>

                        <?php if (!isset($_SESSION['user'])) : ?>
                            <button class="btn_f" data-toggle="modal" data-target="#custom-login">開始製作</button>
                        <?php else : ?>
                            <button class="btn_f" onclick="location.href='custom.php'">開始製作</button>
                        <?php endif ?>

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
                        <img src="<?= WEB_ROOT ?>img/product_list/product_list_block.jpg" alt="">
                    </div>
                </div>
                <!-- 瑜珈磚列表 -->
                <div class="product_list col-6 p-0 d-flex flex-wrap justify-content-around">
                    <?php foreach ($block_row as $b) : ?>
                        <div class="product mb-5 col-6">

                            <div class="product_img_wrap" onclick="showProductModal(<?= $b['sid'] ?>)">

                                <img src="./img/product_list/<?= $b['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $b['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $b['my_imgs'][0] ?>.jpg">
                                <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                                <img src="./img/product_list/<?= $b['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                            </div>
                            <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $b['sid'] ?>)"><?= $b['product_name'] ?></h6>
                            <p style="text-align: center;">NT.<?= $b['price'] ?></p>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- 支撐墊 -->
            <div class="space_120" id="pad"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php foreach ($pad_row as $p) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $p['sid'] ?>)">
                            <img src="./img/product_list/<?= $p['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $p['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $p['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $p['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <h6 class="mt-4 mb-0 w-100 justify-content-center" style="text-align: center;" onclick="toDetail(<?= $p['sid'] ?>)"><?= $p['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $p['price'] ?></p>
                    </div>
                <?php endforeach; ?>
                <div class="prop_space col-6"></div>
            </div>
            <!-- 滾筒 -->
            <div class="space_120" id="roller"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php foreach ($roller_row as $r) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $r['sid'] ?>)">
                            <img src="./img/product_list/<?= $r['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $r['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $r['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $r['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $r['sid'] ?>)"><?= $r['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $r['price'] ?></p>
                    </div>
                <?php endforeach; ?>

                <div class="product mb-5 col-3">

                </div>
            </div>
            <!-- 沙包 -->
            <div class="space_120" id="sand"></div>
            <div class="d-flex flex-wrap justify-content-between ">
                <!-- 沙包列表 -->
                <div class="product_list col-6 p-0 d-flex flex-wrap justify-content-around">
                    <?php foreach ($sand_row as $s) : ?>
                        <div class="product mb-5 col-6">
                            <div class="product_img_wrap" onclick="showProductModal(<?= $s['sid'] ?>)">
                                <img src="./img/product_list/<?= $s['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $s['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $s['my_imgs'][0] ?>.jpg">
                                <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                                <img src="./img/product_list/<?= $s['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                            </div>
                            <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $s['sid'] ?>)"><?= $s['product_name'] ?></h6>
                            <p style="text-align: center;"><?= $s['price'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- 沙包大圖 -->
                <div class="prop_list_pic_wrap col-6 d-flex p-0 justify-content-end">
                    <div class="prop_list_pic">
                        <img src="<?= WEB_ROOT ?>img/product_list/product_list_sand.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- 伸展帶 -->
            <div class="space_120" id="strap"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php foreach ($strap_row as $a) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $a['sid'] ?>)">
                            <img src="./img/product_list/<?= $a['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $a['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $a['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $a['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $a['sid'] ?>)"><?= $a['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $a['price'] ?></p>

                    </div>
                <?php endforeach; ?>
            </div>
            <!-- 彈力帶 -->
            <div class="space_120" id="band"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php foreach ($band_row as $b) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $b['sid'] ?>)">
                            <img src="./img/product_list/<?= $b['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $b['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $b['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $b['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $b['sid'] ?>)"><?= $b['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $b['price'] ?></p>

                    </div>
                <?php endforeach; ?>
                <div class="prop_space col-6"></div>
            </div>
            <!-- 鋪巾 -->
            <div class="space_120" id="towel"></div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php foreach ($towel_row as $w) : ?>
                    <div class="product mb-5 col-3">
                        <div class="product_img_wrap" onclick="showProductModal(<?= $w['sid'] ?>)">
                            <img src="./img/product_list/<?= $w['my_imgs'][1] ?>.jpg" alt="" data-src1="./img/product_list/<?= $w['my_imgs'][1] ?>.jpg" data-src2="./img/product_list/<?= $w['my_imgs'][0] ?>.jpg">
                            <!-- 先把圖片存到瀏覽器，hover速度比較快 -->
                            <img src="./img/product_list/<?= $w['my_imgs'][0] ?>.jpg" alt="" style="display: none;">
                        </div>
                        <h6 class="mt-4 mb-0" style="text-align: center;" onclick="toDetail(<?= $w['sid'] ?>)"><?= $w['product_name'] ?></h6>
                        <p class="p-0" style="text-align: center;">NT.<?= $w['price'] ?></p>

                    </div>
                <?php endforeach; ?>
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
                        <button class="btn_l" onclick="location.href='product_custom_mat.php'">了解更多</button>
                        <button class="btn_f" onclick="location.href='custom.php'">開始製作</button>
                    </div>
                </div>


            </div>
            <div class="space_60"></div>
        </div>
    </div>
</div>

<!-- 彈跳視窗↓↓ -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="./SVG/delete.svg" alt="">
                    </span>
                </button>
            </div>
            <div class="modal-body ">
                <iframe src="modal.php?sid=17" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <div class="space_30"></div>
            </div>
        </div>
    </div>
</div>



<!-- Modal 客製需登入 -->
<div class="modal fade" id="custom-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-size" style="width:600px;height:400px;margin-left:200px">
            <div class="modal-header out_header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="" src="svg/delete.svg" alt="">
                </button>
            </div>
            <div class="modal-body out_body" style="text-align:center;">
                <p class="mt-4" style="font-size:24px;padding-top:50px;">請先 <a href="login_regist.php" style="color:#db5c00;"> 登入會員 </a></p>
            </div>

        </div>
    </div>
</div>
<!-- delete warning -->
<!-- 彈跳視窗↑↑ -->





<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>

<script src="<?= WEB_ROOT ?>lib/product_list.js"></script>


<script>
    // 圖片hover↓↓

    $('.product_img_wrap img').hover(
        function() {
            console.log(this);
            $(this).attr('src', $(this).attr('data-src2'));

        },
        function() {
            $(this).attr('src', $(this).attr('data-src1'));

        }
    )
    // 圖片hover↑↑


    // 跳出視窗↓↓
    function showProductModal(sid) {
        if ($(window).width() < 768) {
            location.href = 'product_mat.php?sid=' + sid;
            return;
        }
        $('iframe')[0].src = "modal.php?sid=" + sid;
        $('#exampleModal').modal('show')
    }
    // 跳出視窗↑↑

    // 按文字進入詳細頁↓↓
    function toDetail(sid) {
        location.href = 'product_mat.php?sid=' + sid;
        return;
    };
    // 按文字進入詳細頁↑↑
</script>

<?php include __DIR__ . '/parts/html-end.php'; ?>