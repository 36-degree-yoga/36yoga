<?php include __DIR__ . '/parts/config.php';
if (isset($_SESSION['admin'])) {
    header('Location: login.php');
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入註冊</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.css" />-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/login_registered.css" />

</head>

<body>

    <nav class="nav-place-zone">
    </nav>
    <div class="container">
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
                                <input type="email" class="form-control1" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="帳號 Email">

                                <input type="password" class="form-control1" id="loginPassword" name="loginPassword" placeholder="密碼 Password">
                            </div>
                            <!-- 驗證碼 -->
                            <div class="form-group d-flex justify-content-between space-b36">
                                <input type="text" class="open-sesame" name="checkword" size="10" maxlength="10" placeholder="驗證碼" />
                                <img id="imgcode" src="#" onclick="refresh_code()" />
                            </div>
                            <div class="form-group form-check d-flex space-b60">
                                <input type="checkbox" class="form-check-input" id="logincheck">
                                <label class="form-check-label" for="logincheck">記住帳密</label>
                                <a href="#" class=" ml-auto">忘記密碼？</a>
                            </div>
                            <div class="w-100 d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary" value="登入"></div>
                        </form>
                    </div>

                    <!-- 註冊 -->
                    <div class="regist-floor position-absolute display-none">
                        <form class="col-md-8 mx-auto">
                            <div class="form-group ">
                                <input type="email" class="form-control2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="帳號 Email">
                                <input type="password" class="form-control2 " id="#" placeholder="密碼 Password">
                                <input type="password" class="form-control2" id="#" placeholder="二次輸入密碼 Password">
                            </div>
                            <!-- 驗證碼 -->
                            <!-- <div class="form-group d-flex justify-content-between space-b20">
                                <input type="text" name="checkword" class="open-sesame" size="10" maxlength="10" placeholder="驗證碼" />
                                <img id="imgcode" src="#" onclick="refresh_code()" />
                            </div> -->

                            <div class="form-group form-check space-b36 d-flex">
                                <input type="checkbox" class="form-check-input" id="registcheck">
                                <label class="form-check-label" for="registcheck">記住帳密</label>
                                <a href="#" class=" ml-auto">已有帳號？</a>
                            </div>
                            <div class="w-100 d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary" value="註冊"></div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- <script src="lib/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $('.login-btn').on('click', function() {
            $('.login-floor').removeClass('display-none');
            $('.regist-floor').addClass('display-none');
            $('.regist-btn').removeClass('click-btn').addClass('color-change-gray-right');
            $('.login-btn').removeClass('color-change-gray-left').addClass('click-btn');
        });


        $('.regist-btn').on('click', function() {
            $('.regist-floor').removeClass('display-none');
            $('.login-floor').addClass('display-none');
            $('.login-btn').removeClass('click-btn').addClass('color-change-gray-left');
            $('.regist-btn').removeClass('color-change-gray-right').addClass('click-btn');

        });




        // php部分
        const loginEmail = $('#loginEmail')
        const loginPassword = $('#loginPassword')


        function checkForm() {
            $.post('login-api.php', {
                loginEmail: loginEmail.val(),
                loginPassword: loginPassword.val()
            }, function(data) {
                if (data.success) {
                    console.log('hi');
                } else {
                    console.log('error');
                }
            }, 'json');
        }
    </script>
</body>

</html>