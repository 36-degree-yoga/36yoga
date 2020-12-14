<?php include __DIR__ . '/parts/config.php';
unset($_SESSION['cart']);
unset($_SESSION['custom']);
unset($_SESSION['custom_cart']);

$member_id = $_SESSION['user']['id'];
$ooo_sql = "SELECT * FROM `orders`  WHERE 1 ORDER BY `order_date` DESC LIMIT 1 ";
$ooo_stmt = $pdo->QUERY($ooo_sql)->fetchAll();

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/complete-order.css" />
<link rel="shortcut icon" href="./SVG/icon_green.svg" type="image/x-icon" />

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

<div class="container-fluid need-bck-img">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-11 col-11 order-background d-flex justify-content-center">
      <div class="finish-order-info">
        <!-- animation -->
        <div class="mb-3 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
            <!-- 圈圈 -->
            <circle class="circle" cx="25" cy="25" r="24" fill="none" stroke="#004a13" stroke-width="2" stroke-linecap="round" transform="rotate(-90 25 25)"></circle>

            <g id="Group_1902" data-name="Group 1902" transform="translate(-696 -424)">
              <!-- 勾勾 -->
              <path id="Path_578" data-name="Path 578" d="M16052.7,19118l9.3,10.564,14.209-17.424" transform="translate(-15343.196 -18669)" fill="none" stroke="#004a18" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
            </g>
          </svg>
        </div>
        <h5>已完成訂單</h5>
        <div>
          <p>訂單編號：YA-<span class="order-number"><?= $ooo_stmt[0]['sid'] ?></span></p>
          <!-- <p>選擇貨到付款</p> -->
          <p class="m-0 important-info-order">
            可至會員中心查詢<span class="order-history" style="cursor:pointer;color:#db5c00">訂單資訊</span>
            <span class="m-0">謝謝</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 text-center">
      <button class="btn btn-leave p-0" onclick="location.href='<?= WEB_ROOT ?>homepage.php'">回到首頁</button>
      <button class="btn btn-leave p-0 hope-next-step" onclick="location.href='<?= WEB_ROOT ?>product_list.php'">繼續購物</button>
    </div>
  </div>
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script>
  $('.order-history').on('click', function() {
    $(window).attr('location', 'order_history.php');
  });
</script>
<script src="./lib/complete-order-step4.js"></script>
<?php include __DIR__ . '/parts/html-end.php'; ?>