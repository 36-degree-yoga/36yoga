<?php include __DIR__ . '/parts/config.php';
if (isset($_SESSION['user'])) {
    header('Location: product_list.php');
};

$gotoURL = 'product_list.php';

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/login_registered.css" />
<link rel="stylesheet" href="./CSS/share.css" />

<?php include __DIR__ . '/parts/nav.php'; ?>
<!-- 貼上html -->

<div class="nav-place-zone"></div>
<div class="container ">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="tag-page d-flex">
                <p class="login-btn text-center click-btn">登入</p>

                <div class="just-a-vertcal-dividerline"></div>

                <p class="regist-btn text-center color-change-gray-right'">註冊</p>
            </div>
            <div class="daddy-floor position-relative">

                <!-- 登入 -->
                <div class="login-floor position-absolute">
                    <form class="col-md-8 mx-auto my-0" method="post" name="loginForm" onsubmit="checkForm(); return false;" novalidate>
                        <div class="form-group ">
                            <label for="email">
                                <input type="email" class="form-control1" id="loginemail" name="loginemail" aria-describedby="emailHelp" placeholder="&nbsp;帳號 Email">
                            </label>
                            <label for="password">
                                <input type="password" class="form-control1" id="loginpassword" name="loginpassword" placeholder="&nbsp;密碼 Password">
                            </label>
                            <div style="height:55px">

                            </div>
                        </div>
                        <!-- 驗證碼 -->
                        <div class="form-group d-flex justify-content-between space-b36">
                            <input type="text" class="open-sesame" name="checkword" size="10" maxlength="10" id="login_code" placeholder="&nbsp;驗證碼" />
                            <div id="imgcode" src="" onclick="refresh_code()">
                                <div class="randompic"></div>
                                <!-- <img src="./img/index/random02.svg" alt="" class="randompic">
                                <img src="./img/index/random03.svg" alt="" class="randompic"> -->

                            </div>
                        </div>
                        <div class="form-group form-check d-flex space-b60">
                            <input type="checkbox" class="form-check-input" id="logincheck" value="">
                            <div class="form-check-label" for="logincheck">記住帳密</div>
                            <a href="#" class=" ml-auto">忘記密碼？</a>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <input type="submit" class="btn btn_f" value="登入" data-toggle="modal" data-target="#exampleModal">
                            <span id="warn_login" style="color:red;"></span>
                        </div>
                    </form>
                </div>

                <!-- 註冊 -->
                <div class="regist-floor position-absolute display-none">
                    <form class="col-md-8 mx-auto" method="post" name="regisForm" onsubmit="checkForm2(); return false;" novalidate>
                        <div class="form-group ">
                            <label for="email">
                                <input type="email" class="form-control2" id="regis_email" name="regis_email" aria-describedby="emailHelp" placeholder="&nbsp;帳號 Email" required>
                            </label>

                            <label for="password"><input type="password" class="form-control2 " id="regis_pw1" name="regis_pw1" placeholder="&nbsp;密碼 Password" required></label>
                            <label for="password"><input type="password" class="form-control2" id="regis_pw2" placeholder="&nbsp;二次輸入密碼 Password" required></label>
                        </div>
                        <!-- 驗證碼 -->
                        <div class="form-group d-flex justify-content-between space-b20">
                            <input type="text" name="checkword" id="regiscod2" class="open-sesame" size="10" maxlength="10" placeholder="&nbsp;驗證碼" />
                            <div class="randompic"></div>
                        </div>

                        <div class="form-group form-check form-regis space-b36 d-flex">
                            <input type="checkbox" class="form-check-input" id="registcheck">
                            <div class="form-check-label" for="registcheck">記住帳密</div>
                            <a href="#" class=" ml-auto">已有帳號？</a>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary btn_f" value="註冊" data-toggle="modal" data-target="#exampleModal">

                        </div>
                        <!-- <p id="regis_alert" style="color:red;"></p> -->
                    </form>

                </div>

            </div>
        </div>

    </div>

</div>

<!-- 彈跳視窗登入↓↓ -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="./SVG/delete.svg" alt="" class="btn_delete">
                    </span>
                </button>
            </div>
            <form action="">
                <div class="modal-body d-flex justify-content-center flex-column">

                    <div class="edit_info d-flex align-items-center justify-content-center">


                        <h6 id="login-alert-f" href="#" style="color: #db5c00;"></h6>
                        <h5 id="login-alert-s" href="#" style="color: #135F39;"></h5>


                    </div>



                </div>
            </form>
            <div class="modal-footer">
                <div class="space_30"></div>
            </div>
        </div>
    </div>
</div>
<!-- 彈跳視窗↑↑ -->

<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script src="<?= WEB_ROOT ?>lib/login.js"></script>

<script>
    // php部分-->登入
    const loginemail = $('#loginemail')
    const loginpassword = $('#loginpassword')
    const logincode = $('#login_code')


    function checkForm() {
        $('#login-alert-f').text('');
        $('#login-alert-s').text('');

        let isPass = true;
        let error = ''

        if (loginemail.val()) {
            if (!email_re.test(loginemail.val())) {
                isPass = false;
                error += '正確信箱格式';
                // $('#login-alert').text('請填寫正確信箱格式  ');
            }
        }

        if (!loginemail.val()) {
            isPass = false;
            error += '註冊信箱  ';

        }

        if (!loginpassword.val()) {
            isPass = false;
            error += '密碼  ';

        }

        if (!logincode.val()) {
            isPass = false;
            error += '驗證碼  ';

        }

        if (error) {
            isPass = false;
            $('#login-alert-f').html("請填寫" + error);
        }



        if (isPass) {
            $.post('login-api.php', {


                loginemail: loginemail.val(),
                loginpassword: loginpassword.val()
            }, function(data) {
                if (data.success) {
                    console.log('hi');
                    $('#login-alert-s').text('登入成功');
                    setTimeout(function() {
                        location.href = '<?= $_SERVER['HTTP_REFERER'] ?>';
                    }, 2000);
                } else {
                    console.log('error');
                    $('#login-alert-f').text('登入失敗');
                }


            }, 'json');
        }
    };


    // php部分-->註冊
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const regis_email = $('#regis_email');
    const regis_pw1 = $('#regis_pw1');
    const regis_pw2 = $('#regis_pw2');
    const regiscod2 = $('#regiscod2');
    let regis_alert = $('#regis_alert');


    function checkForm2() {
        $('#login-alert-f').text('');
        $('#login-alert-s').text('');
        let isPass = true;
        let error = ''


        if (regis_email.val()) {
            if (!email_re.test(regis_email.val())) {
                isPass = false;
                error += '正確 Email 格式  ';

            }
        }
        if (!regis_email.val()) {

            error += ' Email  ';

        }
        if (regis_pw1.val()) {
            if (!regis_pw1.val() == regis_pw2.val()) {
                isPass = false;
                error += '相同密碼  ';
            }
        }

        if (!regis_pw1.val()) {

            error += '密碼  ';

        }

        if (!regiscod2.val()) {
            isPass = false;
            error += '驗證碼  ';

        }

        if (error) {
            isPass = false;
            $('#login-alert-f').html("請填寫" + error);
        }


        if (isPass) {
            $.post('register-api.php', {
                regis_email: regis_email.val(),
                regis_pw1: regis_pw1.val()
            }, function(d) {
                if (d.success) {
                    console.log('hi');
                    $('#login-alert-s').text('註冊成功！');
                    setTimeout(function() {
                        location.href = '<?= WEB_ROOT ?>/member_my_account.php';
                    }, 2000);
                } else {
<<<<<<< HEAD
                    $('#regist-alert').modal('show');
                    $('#regist-alert-s').text('');
                    $('#regist-alert-f').text('註冊失敗！ ');
=======
                    $('#login-alert-f').text('註冊失敗！');
>>>>>>> c7fd09dc4f2e837ee9b759ba738ff6a601c634b3
                    console.log('error fail to register');
                }
            }, 'json');
        }
    }
</script>
<?php include __DIR__ . '/parts/html-end.php'; ?>