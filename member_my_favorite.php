<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/member-required.php'; ?>
<?php

$member_id = intval($_SESSION['user']['id']);

$mf_sql = "SELECT * FROM ((`favorite` LEFT JOIN `members` ON `favorite`.member_id = `members`.id)  JOIN `products` ON `favorite`.product_sid = `products`.sid ) WHERE `members`.id = $member_id ";

// $sql = "SELECT * FROM ((`favorite` LEFT JOIN `members` ON `favorite`.member_id = `members`.id) LEFT JOIN `products` ON `favorite`.product_sid = `products`.sid )";

// 怎麼加上排序!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$mf_stmt = $pdo->query($mf_sql);
$mf_row = $mf_stmt->fetchAll();

foreach ($mf_row as $k => $r) {
    $mf_row[$k]['my_imgs']  = explode(",", $r['img']);
};
// 照片用
$sql = "SELECT * FROM `members` WHERE `id`=$member_id";
$stmt = $pdo->query($sql);
$member_row = $stmt->fetch();


// echo json_encode($mf_row, JSON_UNESCAPED_UNICODE);
// exit;



?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/member_my_favorite.css">
<link rel="shortcut icon" href="./SVG/icon_green.svg" type="image/x-icon" />

<?php include __DIR__ . '/parts/nav.php'; ?>
<!-- 會員中心選單橫條bar↓↓ -->
<div class="m_account_bar_wrap">
    <div class="m_account_bar_item d-flex align-items-center">
        <div class="m_account_option">
            <p>我的帳號</p>
        </div>
        <div class="m_account_option">
            <p>訂單紀錄</p>
        </div>
        <div class="m_account_option">
            <p class="check_border">我的最愛</p>
        </div>
        <div class="m_account_option">
            <p>我的折價券</p>
        </div>
        <div class="m_account_option">
            <p>我的點數</p>
        </div>
        <div class="m_account_option">
            <p>客製化設計</p>
        </div>
    </div>
</div>
<!-- 會員中心選單橫條bar↑↑ -->

<div class="container">
    <div class="row">
        <div class="space_120"></div>
        <div class="space_60"></div>
        <!-- 左側: 選單 -->
        <div class="account_side_bar d-flex col-3 position-relative ">
            <div class="account_side_bar_wrap d-flex justify-content-center justify-content-between">
                <!-- 登入與選單區 -->
                <div class="d-flex flex-column justify-content-start ">
                    <!-- 照片與登出區 -->
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="member_img_wrap">
                            <img class="member_pic" src="./img/member/<?= $member_row['avatar'] ?>" alt="">

                        </div>
                        <div class="ml-3">
                            <p class="m-0"><?= $member_row['account'] ?></p>
                            <p class="m-0">點數: 500點</p>
                            <button class="log_out mt-2 px-2 py-1" onclick="location.href='<?= WEB_ROOT ?>logout.php'">登出</button>
                        </div>
                    </div>
                    <!-- 選單區 -->
                    <div class="mt-5 ">
                        <ul class="d-flex flex-column justify-content-center p-0">
                            <li id="bar_account" class="account_sidebar_title d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #000333;
                                            }

                                            .cls-2 {
                                                fill: none;
                                            }
                                        </style>
                                    </defs>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <g id="icon_-_member-2" data-name="icon - member-2">
                                                <path class="cls-1" fill="#333" d="M24,24H6V21.21c0-2.74,4-4.89,9-4.89s9,2.15,9,4.89ZM7.48,22.52h15V21.21c0-1.61-3.09-3.39-7.52-3.39S7.48,19.6,7.48,21.21ZM15,15.75a4.88,4.88,0,0,1-4.89-4.89h0A4.89,4.89,0,1,1,15,15.75Zm-3.39-4.89a3.41,3.41,0,0,0,1,2.4,3.36,3.36,0,0,0,2.4,1h0a3.39,3.39,0,1,0-3.39-3.39Z" />
                                            </g>
                                            <rect class="cls-2" width="30" height="30" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="member_my_account.php" class="mb-0 ml-4">我的帳號</a>
                            </li>
                            <li class="account_sidebar_title d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <g id="Page-1">
                                                <g id="_008---Yoga-Mat" data-name="008---Yoga-Mat">
                                                    <g id="Shape">
                                                        <path class="cls-1" fill="#333" d="M26.06,13.88H19.74a4.76,4.76,0,0,0,.58-2.27,4.94,4.94,0,0,0-7.53-4.25,4.86,4.86,0,0,0-.88.67L5,14.92a5,5,0,0,0,3.51,8.46h8.76a.4.4,0,0,0,.27-.11c.61-.62,2.26-2.25,4-4l4.79-4.76a.38.38,0,0,0-.27-.65ZM12.44,8.58A4.06,4.06,0,0,1,13.18,8a4.17,4.17,0,0,1,5.75,5.75,4.44,4.44,0,0,1-.55.74l-5,5a5.09,5.09,0,0,0,.13-1.1,5,5,0,0,0-5-4.95,5.1,5.1,0,0,0-1.11.12ZM4.33,18.43a4.15,4.15,0,0,1,1.22-3h0a4.2,4.2,0,1,1-1.22,3ZM21,18.75l-3.88,3.87h-6a4.89,4.89,0,0,0,.87-.69l6.9-6.9q.18-.19.33-.39h5.89L21,18.75Z" />
                                                        <path class="cls-1" fill="#333" d="M17.28,23.63H8.52a5.21,5.21,0,0,1-3.69-8.88l6.9-6.89a4.5,4.5,0,0,1,.93-.71,5.18,5.18,0,0,1,7.91,4.46,5.05,5.05,0,0,1-.43,2h5.92a.63.63,0,0,1,.58.39.62.62,0,0,1-.14.68l-4.79,4.77-.55.55-3.44,3.42A.61.61,0,0,1,17.28,23.63ZM15.39,6.87a4.76,4.76,0,0,0-2.47.7,4.44,4.44,0,0,0-.84.64L5.19,15.1a4.7,4.7,0,0,0,3.33,8h8.76a.12.12,0,0,0,.09,0l3.44-3.42.55-.55,4.79-4.77a.12.12,0,0,0,0-.14.13.13,0,0,0-.12-.08H19.32l.2-.37a4.49,4.49,0,0,0,.55-2.15,4.67,4.67,0,0,0-4.68-4.74Zm-6.88,16a4.26,4.26,0,0,1-.86-.09,4.44,4.44,0,0,1-3.57-4.35h0a4.4,4.4,0,0,1,1.3-3.14l.07-.08a4.44,4.44,0,1,1,3.06,7.66ZM5.66,15.71a3.93,3.93,0,0,0-1.08,2.72h0a3.94,3.94,0,1,0,1.15-2.79Zm11.56,7.16H10.28l.74-.46a4.39,4.39,0,0,0,.82-.66l6.9-6.9a3.65,3.65,0,0,0,.31-.36l.08-.1h6.61l-.43.43-4.13,4.11c-1.64,1.63-3.2,3.18-3.88,3.87Zm-5.3-.5H17l3.81-3.79h0c1.32-1.33,2.7-2.7,3.7-3.69H19.37a2.61,2.61,0,0,1-.27.31l-6.9,6.91Zm1-2.05.2-.84a4.7,4.7,0,0,0-4.58-5.75,4.57,4.57,0,0,0-1,.12L6.62,14,12.27,8.4a4.15,4.15,0,0,1,.78-.6,4.42,4.42,0,0,1,6.09,6.1,4.71,4.71,0,0,1-.58.77ZM8.51,13.23a5.22,5.22,0,0,1,5.21,5.2c0,.13,0,.26,0,.39l4.5-4.5a4.89,4.89,0,0,0,.52-.68,3.94,3.94,0,0,0-6.1-4.88L8.13,13.24Z" />
                                                    </g>
                                                    <g id="Shape-2" data-name="Shape">
                                                        <path class="cls-1" fill="#333" d="M9.66,18.43a1.15,1.15,0,1,0-1.14,1.14A1.14,1.14,0,0,0,9.66,18.43Zm-1.52,0a.38.38,0,1,1,.38.38A.38.38,0,0,1,8.14,18.43Z" />
                                                        <path class="cls-1" fill="#333" d="M8.52,19.82a1.39,1.39,0,1,1,1.39-1.39A1.4,1.4,0,0,1,8.52,19.82Zm0-2.28a.89.89,0,1,0,.89.89A.89.89,0,0,0,8.52,17.54Zm0,1.52a.63.63,0,0,1,0-1.26.63.63,0,0,1,0,1.26Zm0-.76a.13.13,0,0,0-.13.13c0,.14.26.14.26,0A.13.13,0,0,0,8.52,18.3Z" />
                                                    </g>
                                                    <g id="Shape-3" data-name="Shape">
                                                        <path class="cls-1" fill="#333" d="M8.9,15.76a.38.38,0,0,0-.38-.38,3,3,0,0,0-3,3,.38.38,0,0,0,.76,0,2.29,2.29,0,0,1,2.29-2.29A.38.38,0,0,0,8.9,15.76Z" />
                                                        <path class="cls-1" fill="#333" d="M5.85,19.06a.63.63,0,0,1-.63-.63,3.3,3.3,0,0,1,3.3-3.3.63.63,0,0,1,0,1.26,2,2,0,0,0-2,2A.63.63,0,0,1,5.85,19.06Zm2.67-3.43a2.81,2.81,0,0,0-2.8,2.8c0,.14.26.14.26,0a2.54,2.54,0,0,1,2.54-2.54.13.13,0,1,0,0-.26Z" />
                                                    </g>
                                                    <g id="Shape-4" data-name="Shape">
                                                        <path class="cls-1" fill="#333" d="M11.18,18.05a.38.38,0,0,0-.38.38,2.28,2.28,0,0,1-2.28,2.28.39.39,0,0,0,0,.77,3.05,3.05,0,0,0,3-3.05.38.38,0,0,0-.38-.38Z" />
                                                        <path class="cls-1" fill="#333" d="M8.52,21.73a.64.64,0,0,1,0-1.27,2,2,0,0,0,2-2,.63.63,0,1,1,1.26,0A3.31,3.31,0,0,1,8.52,21.73Zm2.66-3.43a.13.13,0,0,0-.13.13A2.54,2.54,0,0,1,8.52,21a.13.13,0,0,0-.13.13.13.13,0,0,0,.13.14,2.81,2.81,0,0,0,2.79-2.8.12.12,0,0,0,0-.09A.13.13,0,0,0,11.18,18.3Z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <rect class="cls-2" width="30" height="30" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="order_history.php" class="mb-0 ml-4">訂單紀錄</a>
                            </li>
                            <li id="bar_favorite" class="account_sidebar_title d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <g id="Path_324" data-name="Path 324">
                                                <path class="cls-1" fill="#333" d="M15,22.49a34.1,34.1,0,0,0,5.13-4.65,15.35,15.35,0,0,0,2.78-4.36c.75-1.92.73-3.55-.07-4.71A3.85,3.85,0,0,0,19.6,7.19,4.46,4.46,0,0,0,16,8.94l-1,1.34L14,8.94A4.46,4.46,0,0,0,10.4,7.19,3.85,3.85,0,0,0,7.16,8.77c-.8,1.16-.82,2.79-.07,4.71a15.35,15.35,0,0,0,2.78,4.36A34.1,34.1,0,0,0,15,22.49m0,1.62C9.75,20.31,7,16.85,5.87,14,3.86,8.79,7,5.89,10.4,5.89A5.78,5.78,0,0,1,15,8.14a5.78,5.78,0,0,1,4.6-2.25c3.38,0,6.54,2.9,4.53,8.07C23,16.85,20.25,20.31,15,24.11Z" />
                                            </g>
                                            <rect class="cls-2" width="30" height="30" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="member_my_favorite.php" class="mb-0 ml-4">我的最愛</a>
                            </li>
                            <li class="account_sidebar_title d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path class="cls-1" fill="#333" d="M24.85,13.19a.6.6,0,0,0,.61-.6V9.37a.6.6,0,0,0-.61-.6H5.15a.6.6,0,0,0-.61.6v3.22a.6.6,0,0,0,.61.6,1.81,1.81,0,0,1,0,3.62.6.6,0,0,0-.61.6v3.22a.6.6,0,0,0,.61.6h19.7a.6.6,0,0,0,.61-.6V17.41a.6.6,0,0,0-.61-.6,1.81,1.81,0,0,1,0-3.62ZM24.25,18V20H11.58V18.22a.6.6,0,1,0-1.2,0V20H5.75V18a3,3,0,0,0,0-5.92V10h4.63v1.81a.6.6,0,1,0,1.2,0V10H24.25V12a3,3,0,0,0,0,5.92Z" />
                                            <rect class="cls-2" width="30" height="30" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="member_my_coupon.php" class="mb-0 ml-4">我的折價券</a>
                            </li>
                            <li class="account_sidebar_title d-flex align-items-center">
                                <svg id="point" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">

                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path class="cls-1" fill="#333" d="M22.49,17.43l-3.31-6.56V8.52l1.28-4.38H16.89A2.52,2.52,0,0,0,15,5a2.52,2.52,0,0,0-1.89-.85H9.54l1.28,4.38v2.35L7.51,17.43a5.82,5.82,0,0,0,5.19,8.43h4.6a5.82,5.82,0,0,0,5.19-8.43Zm-9.38-12a1.26,1.26,0,0,1,1.25,1.26h1.28a1.26,1.26,0,0,1,1.25-1.26h1.87l-.69,2.38H11.93l-.69-2.38Zm4.8,3.65v1.32H12.09V9.06Zm3.26,13.37a4.52,4.52,0,0,1-3.87,2.16H12.7a4.54,4.54,0,0,1-4-6.59l3.2-6.34h6.3L21.35,18a4.52,4.52,0,0,1-.18,4.43Z" />

                                            <path class="cls-1" fill="#333" d="M15.85,17.21H14.48a.56.56,0,0,1,0-1.11h2.31V14.83H15.64V14H14.36v.86a1.83,1.83,0,0,0,.12,3.66h1.37a.61.61,0,0,1,0,1.21H12.91V21h1.45v.86h1.28V21h.21a1.88,1.88,0,1,0,0-3.76Z" />
                                            <rect class="cls-2" width="30" height="30" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="#" class="mb-0 ml-4">我的點數</a>
                            </li>
                            <li class="account_sidebar_title d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="45" height="45">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path class="cls-1" fill="#333" d="M23.78,7.82H21.86V5.55A.58.58,0,0,0,21.27,5H8.73a.58.58,0,0,0-.59.59V7.82H6.8V7.16a.59.59,0,1,0-1.17,0V10A.59.59,0,1,0,6.8,10V9H8.14v2.24a.58.58,0,0,0,.59.58H21.27a.58.58,0,0,0,.59-.58V9H23.2v3.66l-8.34,2.08a.6.6,0,0,0-.45.57v1.93h-.66a.58.58,0,0,0-.59.55c-.34,5.38-.32,5-.32,5.05a2.18,2.18,0,0,0,.63,1.54,2.1,2.1,0,0,0,3.06,0,2.22,2.22,0,0,0,.63-1.54s0,.33-.32-5.05a.58.58,0,0,0-.59-.55h-.66V15.77l8.34-2.08a.59.59,0,0,0,.44-.57V8.41A.59.59,0,0,0,23.78,7.82Zm-3.09,2.83H9.31V6.14H20.69ZM16,22.86a1,1,0,1,1-2,0l.28-4.45h1.4Z" />
                                            <rect class="cls-2" fill="none" width="30" height="30" />
                                        </g>
                                    </g>
                                </svg>
                                <a href="member_design.php" class="mb-0 ml-4">客製化設計</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- 區隔線 -->
                <div class="ml-5" style="height: 500px; width:1px; background-color: #333333;">
                </div>
            </div>

        </div>


        <!-- 右側 -->


        <div class="product_list col-9 d-flex flex-wrap ">

            <?php foreach ($mf_row as $r) : ?>
                <div class="product mb-5 col-4">
                    <div class="product_img_wrap position-relative" data-toggle="modal" data-target="#exampleModal">

                        <img src="./img/product_list/<?= $r['my_imgs'][1] ?>.jpg" alt="">

                        <div data-toggle="modal" data-target="#delete">

                            <svg id="" class="btn_like position-absolute" style="right:15px;bottom:15px" width="30" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 28">
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


                        <!-- 確定刪除 modal-->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content modal-size">
                                    <div class="modal-header out_header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <img class="" src="svg/delete.svg" alt="">
                                        </button>
                                    </div>
                                    <div class="modal-body out_body">
                                        <p class="mx-auto">確定要移除我的最愛嗎？</p>
                                    </div>
                                    <div class="text-center mb-5">
                                        <a onclick="checkLike(event); return false;" data-sid="<?= $r['product_sid'] ?>"><button class="btn btn_l p-0 del-btn-check" style="margin-right:10px;">
                                                確認</button></a>
                                        <button class="btn btn_f p-0" data-dismiss="modal" aria-label="Close" style="margin-left:10px;">先不要</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete warning -->

                    </div>
                    <div class="space_30"></div>
                    <h6 class="mb-0" style="text-align: center;"><?= $r['product_name'] ?></h6>
                    <p class="p-0" style="text-align: center;">NT.<?= $r['price'] ?></p>
                    <div class="space_30"></div>

                    <button class="addtocart-btn btn_f w-100 " data-sid="<?= $r['sid'] ?>" onclick="javascript: addToCart(event);return false;">加入購物車</button>

                </div>
            <?php endforeach; ?>


        </div>

    </div>
</div>

<div class=" space_120">
</div>
<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<script src="<?= WEB_ROOT ?>lib/member_my_favorite.js"></script>
<script src="<?= WEB_ROOT ?>lib/jquery.fly.min.js"></script>

<script>
    // 點擊愛心 出現是否移除
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

            me.find('.like_fill').addClass('color')
            // if (!data.add) {
            //     me.find('.like_fill').addClass('color');
            // }

            // if (!data.add) {
            //     confirm(`確定要刪除設計嗎?`)   
            // }

            location.reload();
            header('Location: member_my_favorite.php');

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

    //購物車動畫
    $('.addtocart-btn').on('click', addProduct);

    function addProduct(event) {
        var offset = $("#end").offset(),
            img = "./img/product_list/<?= $r['my_imgs'][1] ?>.jpg"
        flyer = $(`<img class="u-flyer" src="${img}" style="width: 100px; height: 100px;"/>`);
        flyer.fly({
            start: {
                left: event.pageX,
                top: event.pageY
            },
            end: {
                left: offset.left,
                top: offset.top,
                width: 0,
                height: 0
            },
            autoPlay: true, //是否直接运动,默认true
            speed: 1.8 //越大越快，默认1.2

        });
    }
</script>
<?php include __DIR__ . '/parts/html-end.php'; ?>