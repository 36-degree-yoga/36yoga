<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$rec1_sql = "SELECT * FROM `products` WHERE `sid` IN (1 , 2 , 13)";
$rec1_Stmt = $pdo->query($rec1_sql);
$rec1_row = $rec1_Stmt->fetchAll();
foreach ($rec1_row  as $k => $r) {
    $rec1_row[$k]['my_imgs'] = explode(",", $r['img']);
};

$rec2_sql = "SELECT * FROM `products` WHERE `sid` IN (9 , 18 , 21)";
$rec2_Stmt = $pdo->query($rec2_sql);
$rec2_row = $rec2_Stmt->fetchAll();
foreach ($rec2_row  as $k2 => $r2) {
    $rec2_row[$k2]['my_imgs'] = explode(",", $r2['img']);
};

// echo json_encode($rec2_row, JSON_UNESCAPED_UNICODE);

?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>36YOGA</title>
<link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>fontawesome/css/all.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/nav.css">
<!-- <link rel="stylesheet" href="<= WEB_ROOT ?>CSS/footer.css" /> -->


<!-- <php include __DIR__ . '/parts/html-head.php'; ?> -->
<!-- css連結 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/animate.min.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/content.css">

<?php include __DIR__ . '/parts/nav.php'; ?>
<!-- 貼上html -->
<div class="w-100 for-nav"></div>
<div class="container-fluid hero d-flex flex-wrap">

    <!-- scroll down -->
    <div class="srolldown_btn col-1 d-flex flex-column justify-content-end align-items-center">
        <div class="scrollbox animate__animated animate__fadeInDown">
            <div class="scroll_p">Scroll Down</div>
            <div class="scrolldown_line"></div>
        </div>

    </div>

    <div class="col-lg-3 col-9 d-flex flex-column hero-text position-relative align-items-start">
        <div class="hero-text-h1 hero-text-h1-desktop mt-0 animate__animated animate__fadeInLeft">
            <h1>瑜珈墊挑選指南</h1>
        </div>
        <div class="hero-text-h1 hero-text-h1-mobile mt-0 animate__animated animate__fadeInLeft">
            <h1>瑜珈墊<br>挑選指南</h1>
        </div>
        <span class="hero-text-span-desktop animate__animated animate__fadeInLeft">一張適合的瑜珈墊，可以幫助你更快速地進入體式，同時確保安全與舒適度。閱讀我們的挑選指南，找到專屬你的瑜珈墊！
        </span>
        <span class="hero-text-span-mobile">一張適合的瑜珈墊，可以幫助你更快速地進入體式，同時確保安全與舒適度。
            閱讀我們的挑選指南，找到專屬你的瑜珈墊！
        </span>
    </div>
    <div class="col-lg-8 col-12">
        <div class="hero-img w-100 animate__animated animate__fadeInRight"></div>
    </div>

    <!-- 手機版scrolldown -->


    <div class="srolldown_btn_mobile col-3 d-flex align-items-end">
        <div class="scroll_p_mobile">Scroll&ensp;Down</div>
    </div>




</div>
<!-- content區塊1 -->

<div id='content_part1' class="container-fluid d-flex content-sec flex-wrap position-relative">

    <div class="col-lg-6 col-12 sec1-img sec1-img-ani-1">


    </div>
    <div class="col-lg-6 col-12 sec1-text d-flex justify-content-center align-items-center position-relative">
        <div class="text-wrap text-wrap-ani-1 position-relative">
            <h2 class="">動態瑜珈</h2>

            <div class="tag-wrapper d-flex">
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">防滑</h6>
                </div>
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">穩定</h6>

                </div>
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">3-5cm</h6>

                </div>
            </div>

            <p class="">如果常做的瑜珈種類是動作多變、體式變化較頻繁或含有彈跳的瑜珈類型，你需要一張防滑性好，與穩定性更高的的薄墊，
                讓你的身體穩定在正確的位置上，動作穩定一些，減少運動傷害。</p>
        </div>

    </div>

</div>
<!-- 熱門商品 -->
<div class="container-fluid content-product position-relative">
    <div class="row">
        <div class="col-lg-2 px-0 icon-wrapper">
            <div class="icon-wrap d-flex">
                <a class="icon-left"><img src="<?= WEB_ROOT ?>SVG/icon_left.svg" alt=""></a>
                <a class="icon-right"><img src="<?= WEB_ROOT ?>SVG/icon_right.svg" alt=""></a>
            </div>
        </div>
        <div class="col-lg-8 coi-sm-12 px-0">

            <h2 class="text-center rec-ani-1" style="animation-delay: .8s;">商品推薦</h2>

            <div class="guessyoullike d-flex justify-content-center position-relative">

                <?php foreach ($rec1_row as $b) : ?>
                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=<?= $b['sid'] ?>">
                        <div class="product-zone px-0 rec-ani-1">
                            <div class="product-wrap">
                                <div class="img-wrap">
                                    <img src="./img/product_list/<?= $b['my_imgs'][1] ?>.jpg" alt="" style="height: 100%;width: 100%; object-fit: cover;">
                                </div>
                    </a>

                    <div class="product-info text-center">
                        <a href="<?= WEB_ROOT ?>product_mat.php?sid=<?= $b['sid'] ?>">
                            <h6 class="mb-0"><?= $b['product_name'] ?></h6>
                        </a>
                        <p>NT.<?= $b['price'] ?></p>
                    </div>
            </div>
        </div>

    <?php endforeach; ?>


    </div>

    <div class="mobile" style="height: 418px;"></div>

</div>

<div class="col-2 px-0"></div>
</div>
<div class="w-100 d-flex justify-content-center rec-ani-1"><a href="<?= WEB_ROOT ?>product_list.php"><button class="btn_f btn_more">看更多商品</button></a>
</div>
</div>

<!-- content區塊2 -->
<div class="container-fluid d-flex content-sec flex-wrap position-relative">

    <div class="col-lg-6 col-12 sec2-text d-flex justify-content-center align-items-center position-relative">
        <div class="text-wrap text-wrap-ani-2">
            <h2>靜態瑜珈</h2>

            <div class="tag-wrapper d-flex">
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">舒適</h6>
                </div>
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">觸感</h6>

                </div>
                <div class="d-flex align-items-center tag mr-3">
                    <div class="tag-line"></div>
                    <h6 class="mt-2">5-8cm</h6>

                </div>
            </div>

            <p>靜態瑜珈強調呼吸和冥想，主要坐在墊子上的動作，適合帶點厚度、緩衝性較高的瑜珈墊，以避免身體接觸地面而感到冰冷或過硬不適，厚而柔軟的瑜伽墊會讓你更舒適。</p>
        </div>

    </div>

    <div class="col-lg-6 col-12 sec2-img sec2-img-ani-2">


    </div>

</div>

<!-- 熱門商品 -->
<div class="container-fluid content-product position-relative">
    <div class="row">
        <div class="col-lg-2 px-0 icon-wrapper">
            <div class="icon-wrap d-flex">
                <a class="icon-left"><img src="<?= WEB_ROOT ?>SVG/icon_left.svg" alt=""></a>
                <a class="icon-right"><img src="<?= WEB_ROOT ?>SVG/icon_right.svg" alt=""></a>
            </div>
        </div>
        <div class="col-lg-8 coi-sm-12 px-0">

            <h2 class="text-center rec-ani-2" style="animation-delay: .8s;">商品推薦</h2>

            <div class="guessyoullike d-flex justify-content-center position-relative">

                <?php foreach ($rec2_row as $b2) : ?>
                    <a href="<?= WEB_ROOT ?>product_mat.php?sid=<?= $b2['sid'] ?>">
                        <div class="product-zone px-0 rec-ani-1">
                            <div class="product-wrap">
                                <div class="img-wrap">
                                    <img src="./img/product_list/<?= $b2['my_imgs'][1] ?>.jpg" alt="" style="height: 100%;width: 100%; object-fit: cover;">
                                </div>

                                <div class="product-info text-center">
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

            <div class="mobile" style="height: 418px;"></div>

        </div>

        <div class="col-2 px-0"></div>
    </div>
    <div class="w-100 d-flex justify-content-center rec-ani-2"><a href="<?= WEB_ROOT ?>product_list.php"><button class="btn_f btn-product btn_more">看更多商品</button></a>
    </div>

</div>
<!---------------------------------  最後區塊  -->

<div class="container-fluid last-sec d-flex flex-wrap">

    <div class="col-lg-1 col-0"></div>
    <div class="col-lg-4 col-12 d-flex flex-column last-sec last-sec-content flex-wrap">
        <div class="last-sec-text-wrap">
            <div class="last-sec-thermo position-relative ml-2 last-sec-img-ani">
            </div>
            <div class="last-sec-text desktop last-sec-text-ani">
                <h1 class="">Find</h1>
                <h1 class="">Your</h1>
                <h1>Soulmat</h1>
            </div>
            <div class="last-sec-text mobile last-sec-text-ani">
                <h1 class="">Find</h1>
                <h1> Your</h1>
                <h1>Soulmat</h1>
            </div>

            <div class="desktop last-sec-text-ani">
                <h3>36度，與人類共感的溫度</h3>
            </div>
            <div class="mobile last-sec-text-ani">
                <h3>36度，<br>與人類共感的溫度</h3>
            </div>
            <a href="<?= WEB_ROOT ?>yoga-test.php">
                <div class="last-sec-btn last-sec-text-ani"><button class="btn_l">進入測驗</button></div>
            </a>
        </div>
    </div>

    <div class="col-lg-7 col-12 last-sec-img last-sec-img-ani"></div>


</div>



</div>


<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<script src="<?= WEB_ROOT ?>lib/content.js"></script>
<!-- js連結 -->

<?php include __DIR__ . '/parts/html-end.php'; ?>