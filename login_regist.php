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
                        </div>
                        <!-- 驗證碼 -->
                        <div class="form-group d-flex justify-content-between space-b36">
                            <input type="text" class="open-sesame" name="checkword" size="10" maxlength="10" placeholder="&nbsp;驗證碼" />
                            <div id="imgcode" src="" onclick="refresh_code()">
                                <img src="./img/index/random01.svg" alt="" class="randompic">
                                <!-- <img src="./img/index/random02.svg" alt="" class="randompic">
                                <img src="./img/index/random03.svg" alt="" class="randompic"> -->
                            </div> 
                        </div>
                        <div class="form-group form-check d-flex space-b60">
                            <input type="checkbox" class="form-check-input" id="logincheck">
                            <div class="form-check-label" for="logincheck">記住帳密</div>
                            <a href="#" class=" ml-auto">忘記密碼？</a>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <input type="submit" class="btn btn_f" value="登入"></div>
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
                            <label for="password"><input type="password" class="form-control2" placeholder="&nbsp;二次輸入密碼 Password" required></label>
                        </div>
                        <!-- 驗證碼 -->
                        <!-- <div class="form-group d-flex justify-content-between space-b20">
                                <input type="text" name="checkword" class="open-sesame" size="10" maxlength="10" placeholder="驗證碼" />
                                <img id="imgcode" src="#" onclick="refresh_code()" />
                            </div> -->

                        <div class="form-group form-check form-regis space-b36 d-flex">
                            <input type="checkbox" class="form-check-input" id="registcheck">
                            <div class="form-check-label" for="registcheck">記住帳密</div>
                            <a href="#" class=" ml-auto">已有帳號？</a>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary btn_f" value="註冊">

                        </div>
                        <p id="regis_alert"></p>
                    </form>

                </div>

            </div>
        </div>

    </div>

</div>

<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script src="<?= WEB_ROOT ?>lib/login.js"></script>

<script>
     // php部分-->登入
     const loginemail = $('#loginemail')
    const loginpassword = $('#loginpassword')


    function checkForm() {
        console.log(loginpassword + loginemail);

        $.post('login-api.php', {

            loginemail: loginemail.val(),
            loginpassword: loginpassword.val()
        }, function(data) {
            if (data.success) {
                console.log('hi');
                location.href = '<?= $gotoURL ?>';
            } else {
                console.log('error');
            }


        }, 'json');
    };


    // php部分-->註冊
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const regis_email = $('#regis_email');
    const regis_pw1 = $('#regis_pw1');
    let regis_alert = $('#regis_alert');


    function checkForm2() {
        let isPass = true;

        if (regis_email.val()) {
            if (!email_re.test(regis_email.val())) {
                isPass = false;
                regis_alert.text('請填寫正確的 email 格式!');
            }
        }

        if (isPass) {
            $.post('register-api.php', {
                regis_email: regis_email.val(),
                regis_pw1: regis_pw1.val()
            }, function(d) {
                if (d.success) {
                    console.log('hi registered');
                    location.href = '<?= $gotoURL ?>';
                } else {
                    console.log('error fail to register');
                }
            }, 'json');
        }
    }
</script>
<?php include __DIR__ . '/parts/html-end.php'; ?>