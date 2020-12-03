<?php $title = '購物列表' ?>

<?php
include __DIR__ . '/parts/config.php';
// require __DIR__ . '/parts/db-comment.php';

$stmt= $pdo->query("SELECT * FROM `products` ORDER BY `sid` ASC");
// $rows=$stmt->fetchAll();
$rows=$stmt->fetchAll();


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- 將js移至 前面 -->
<?php include __DIR__ . '/parts/html-navbar-shop.php'; ?>
<!-- <p><//?= json_encode($rows, JSON_UNESCAPED_UNICODE) ?></p> 測試-->
<div class="container">
    <div class="row">
        <div class="col-3 ">

        </div>
        <div class="col-9">

            <div class="row">
                <?php foreach ($rows as $r) : ?>
                    <div class="col-md-3 col-sm-6 product-item" data-sid="<?= $r['sid'] ?>">
                        <div class="card">
                          <img src="./img/product_list/<?= explode(",", $r['img'])[1] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">
                                        <?= $r['product_name'] ?>
                                    </h6>
                             
                                <p><i class="fas fa-hand-holding-usd"></i>
                                    <?= $r['price'] ?></p>
                                <select name="" id="" class="form-control quantity">
                                    <?php for ($i = 1; $i < 10; $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>

                                <!-- 購買鍵 -->
                                <a href="#" class="btn btn-primary  buy-btn"><i class="fas fa-poo"></i></a>
                            </div>
                        </div>

                    </div>

                <?php endforeach; ?>
            </div>

            <!-- Button trigger modal -->
            <!-- Modal -->
  
           
        </div>
    </div>
</div>

<script>
    $('.buy-btn').on('click', function(event) {
        const item = $(this).closest('.product-item');
        const sid = item.attr('data-sid');
        const qty = item.find('.quantity').val();
        console.log({
            sid: sid,
            quantity: qty
        });
        $.get('handle-cart-api.php', {
            sid: sid,
            quantity: qty,
            action: 'add'
        }, function(data) {
            console.log(data);
            countCart(data.cart);
        }, 'json');
    });


</script>
<?php include __DIR__ . '/parts/html-footer.php'; ?>