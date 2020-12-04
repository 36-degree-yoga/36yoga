<?php include __DIR__ . '/parts/config.php'; ?>
<?php

if (!isset($_SESSION['yoga_test'])) {
    $_SESSION['yoga_test'] = [];
};

// if ($_SERVER['HTTP_REFERER'] = "= WEB_ROOT yoga-test-result.php") {
//     //如果是重新測驗來ㄉ 
//     unset($_SESSION['yoga_test']);
//     if (!isset($_SESSION['yoga_test'])) {
//         $_SESSION['yoga_test'] = [];
//     };
//     // echo 'hi referer';
// };


if (count($_SESSION['yoga_test']) == 4) {
    // unset($_SESSION['yoga_test']);
    //再轉向到結果頁面
    header('Location: yoga-test-result.php');
    // echo 'oh';
};

$resultErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['test'])) {
        echo "請選擇";
    } else {
        //存入session
        $_SESSION['yoga_test'][] = $_POST['test'];
    }
};

$showQ = count($_SESSION['yoga_test']) + 1;
// $where = " WHERE 1 ";
// $where .= " AND `question_id`=$showQ ";
// echo 'name::' . $showQ;

$c_sql = "SELECT * FROM yoga_test WHERE `question_id`=$showQ";
$c_rows = $pdo->query($c_sql)->fetch();
$t = $c_rows['question'];
$q = $c_rows['ans'];
$v = $c_rows['value'];
$pieces = explode(",", $q);
$value = explode(",", $v);
$qqq = intval(count($_SESSION['yoga_test']) + 1);

// echo json_encode($qqq);
//表單已被提交，並且應該對其進行驗證。如果未提交，則跳過驗證並顯示一個空白表單。

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/animate.min.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/test-01.css">

<!-- include __DIR__ . '/parts/nav.php'; -->
<!-- 貼上html -->
<div class="container-fluid hero position-relative">
    <!-- <div class="bg position-absolute">
        </div> -->

    <!-- 飛躍的彩色石頭 -->

    <svg class="position-absolute green-rock" xmlns="http://www.w3.org/2000/svg" width="1218.765" height="1124.635" viewBox="0 0 1218.765 1124.635">
        <path id="Path_497" data-name="Path 497" d="M3065.932,796.8s289.165-36.809,169.6-430.369c-46.626-72.864-78.97-52.932-140.728-167.04-42.191-64.665-253.649-242.858-478.167-338.941-58.487-28.374-196.947-71.7-259.8-94.854-36.749-14.772-177.878,3.375-250.177,135.408-34.83,81.736-105.186,217.363-21.6,464.762,26.577,75.663,102.185,334.884,427,496.739,69.6,22.356,172.882,43.479,363.374-11.115C2951.239,797.385,3033.653,804.788,3065.932,796.8Z" transform="translate(-2045.738 238.715)" fill="#004a13" />
    </svg>
    <svg class="position-absolute yellow-rock" xmlns="http://www.w3.org/2000/svg" width="1113.47" height="1339.771" viewBox="0 0 1113.47 1339.771">
        <path id="Path_527" data-name="Path 527" d="M2282.99-363.548s-14.382-128.173-309.193-41.889c-79.1,21.572-404.271,151.405-564.481,532.5-48.532,107.528-61.1,200.933,3.619,308.793,7.19,86.284,14.383,287.622,115.051,352.334,64.712,50.333,71.9,172.572,488.956,86.288,64.712-28.761,186.951,21.572,316.383-100.667,57.523-64.716,86.284-93.477,86.284-287.622,21.572-64.716,81.985-166.484,56.134-387.977-44.253-155.983-20-24.252-81.046-211.612C2401.89-156.543,2405.2-292.088,2282.99-363.548Z" transform="translate(-1368.592 435.295)" fill="#f2a200" />
    </svg>
    <svg class="position-absolute orange-rock" xmlns="http://www.w3.org/2000/svg" width="1391.512" height="1510.477" viewBox="0 0 1391.512 1510.477">
        <path id="Path_498" data-name="Path 498" d="M2195.53-369.841s-13.007-116.931-279.62-38.215c-71.53,19.68-365.6,138.125-510.489,485.8-43.89,98.1-55.254,183.309,3.273,281.709,6.5,78.716,13.007,262.395,104.045,321.431,58.522,45.919,65.028,157.436,442.188,78.72,58.522-26.239,169.07,19.68,286.121-91.837,52.021-59.04,78.031-85.279,78.031-262.395,19.509-59.04,74.143-151.882,50.765-353.948-40.021-142.3-18.088-22.125-73.294-193.051C2303.056-180.992,2306.051-304.649,2195.53-369.841Z" transform="translate(2365.646 1619.562) rotate(-158)" fill="#cd6327" />
    </svg>

    <!-- 內文 -->
    <div class="content-wrapper position-absolute d-flex">
        <!-- 進度條 -->
        <div class="pro-bar d-flex justify-content-end">
            <div class="pro-number">
                <div class="number d-flex justify-content-center align-items-center"><span>01</span></div>
                <div class="number d-flex justify-content-center align-items-center"><span>02</span></div>
                <div class="number d-flex justify-content-center align-items-center"><span>03</span></div>
                <div class="number d-flex justify-content-center align-items-center"><span>04</span></div>
                <div class="number d-flex justify-content-center align-items-center"><span>05</span></div>
            </div>
            <div class="thermometer_container">
                <div class="thermometer_wrap d-flex  justify-content-center position-relative">
                    <img class="thermometer ther-desktop d-block position-absolute" src="img/thermometer/sidebar_thermometer_head.svg" alt="">
                    <img class="thermometer ther-mobile d-block" src="img/thermometer/order_thermometer.svg" alt="">
                    <!-- <div class="thermometer_line_wrap"> -->
                    <div class="thermometer_line">
                        <div class="thermometer_move"></div>
                    </div>
                    <!-- </div> -->
                </div>

            </div>


        </div>

        <div class="content d-flex align-items-start flex-column">

            <div class="content-title text-center w-100 animate__animated animate__fadeInUp">
                <h2>
                    <? echo $t ?>
                </h2>
            </div>
            <!-- 送出 -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-100" style="padding-top:40px;">
                <input type="hidden" id="test" name="test" value="">
                <div class="btn-wrapper d-flex flex-wrap align-content-start w-100">
                    <?php foreach (array_combine($pieces, $value) as $course => $value) : ?>
                        <div class="btn-wrap col-6 d-flex justify-content-center animate__animated animate__fadeInUp">

                            <!-- <button type="button" class="btn_l choice" onclick="$('#test').val(?= $value ?>)">?= $course ?></button> -->
                            <button type="button" class="btn_l choice" onclick="$('#test').val('<?= $value ?>')"><?= $course ?></button>

                        </div>
                    <?php endforeach ?>
                    <!-- <button class="btn_f choice mx-5" name="form" value="nextStep">下一步</button> -->
                </div>
                <div class="choice-next d-flex w-100 justify-content-center animate__animated animate__fadeInUp">
                    <button class="btn_f choice mx-5" name="" value="">上一步</button>
                    <button class="btn_f choice mx-5" name="" value="">下一步</button>

                </div>
            </form>
        </div>
        <!-- <pre>
                php print_r($_POST) ?>
            </pre> -->

    </div>


    <!-- 叉叉和logo -->
    <div class="delete position-absolute d-flex justify-content-between">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="197.259" height="46.146" viewBox="0 0 197.259 46.146">
                <g id="Group_1593" data-name="Group 1593" transform="translate(-158.223 198.311) rotate(-90)">
                    <path id="Path_286" data-name="Path 286" d="M32.945,2.315A23.289,23.289,0,0,0,25.476.447a22.509,22.509,0,0,0-3.846.031,21.889,21.889,0,0,0-3.775.666,22.456,22.456,0,0,0-12.393,8.4,23.079,23.079,0,0,0-3.395,6.74,22.357,22.357,0,0,0-.943,7.467A22.288,22.288,0,0,0,19.585,44.741a22.458,22.458,0,0,0,24.642-13.61,22.833,22.833,0,0,0,.806-15.075,22.845,22.845,0,0,1,.934,3.762,22.215,22.215,0,0,1,.254,3.88,23.652,23.652,0,0,1-.393,3.88,22.951,22.951,0,0,1-1.064,3.765,22.649,22.649,0,0,1-4.005,6.719A23.173,23.173,0,0,1,.014,23.791a23.428,23.428,0,0,1,1.072-7.814A23,23,0,0,1,4.742,9a23.562,23.562,0,0,1,5.773-5.328,22.714,22.714,0,0,1,22.43-1.36Z" transform="translate(198.312 163.902) rotate(90)" fill="#004a13" />
                    <path id="Path_287" data-name="Path 287" d="M1.642,2.959a1.158,1.158,0,0,0,.926-.487,1.8,1.8,0,0,0,.343-.926,1.26,1.26,0,0,0-.3-.968A1.163,1.163,0,0,0,1.642.221,1.435,1.435,0,0,0,.759.664a1.332,1.332,0,0,0-.341.883,1.551,1.551,0,0,0,.3.922A1.156,1.156,0,0,0,1.642,2.959Zm0,.039a1.8,1.8,0,0,1-1.1-.348A1.4,1.4,0,0,1,0,1.547,1.553,1.553,0,0,1,.5.4a1.46,1.46,0,0,1,1.143-.4A1.784,1.784,0,0,1,2.7.489a1.609,1.609,0,0,1,.538,1.058,1.3,1.3,0,0,1-.5,1.1A1.8,1.8,0,0,1,1.642,3Z" transform="translate(191.479 202.648) rotate(90)" fill="#004a13" />
                    <path id="Path_288" data-name="Path 288" d="M.047,17.266v-.011h0l.21-.08h0l0,0,.011.013.019.025a.4.4,0,0,1,.034.069.848.848,0,0,1,0,.517c-.014.035-.027.03-.045-.037A1.052,1.052,0,0,0,.142,17.4a.245.245,0,0,0-.028-.031A.123.123,0,0,0,.1,17.356l-.009-.007h0l.209-.08h0v.011c.011.226.013.451.043.673a3.222,3.222,0,0,0,.044.332c.021.109.033.22.061.327l.08.321.1.312c.031.1.083.2.123.3a2.513,2.513,0,0,0,.144.289,3.372,3.372,0,0,0,1.086,1.219,3.862,3.862,0,0,0,1.51.586,6.886,6.886,0,0,0,3.32-.3,19.714,19.714,0,0,0,6.045-3.389c.456-.369.9-.733,1.33-1.142s.876-.789,1.276-1.207a15.131,15.131,0,0,0,1.131-1.286,6.34,6.34,0,0,0,.837-1.353A1.022,1.022,0,0,0,17.484,12c-.039-.045-.089-.091-.272-.1a1.936,1.936,0,0,0-.645.109,7.928,7.928,0,0,0-2.757,1.788,7.7,7.7,0,0,0-1.087,1.281,2.967,2.967,0,0,0-.55,1.429,1.133,1.133,0,0,0,.683,1.087,4.259,4.259,0,0,0,1.6.417,12.438,12.438,0,0,0,6.813-1.5,32.6,32.6,0,0,0,3.112-1.77c.506-.32,1.008-.648,1.509-.98s1-.658,1.478-1.014a51.738,51.738,0,0,0,5.585-4.445,18.991,18.991,0,0,0,2.306-2.6,6.866,6.866,0,0,0,1.375-2.857,1.1,1.1,0,0,0,0-.306c-.007-.046-.008-.1-.016-.14s-.03-.078-.042-.118a.223.223,0,0,0-.049-.109.977.977,0,0,1-.056-.1c-.067-.047-.091-.123-.173-.163a1.964,1.964,0,0,0-1.206-.3,5.417,5.417,0,0,0-2.9,1.071,13.607,13.607,0,0,0-2.5,2.267,24.6,24.6,0,0,0-2.09,2.769,30.219,30.219,0,0,0-1.743,3.031c-.26.517-.5,1.057-.736,1.586s-.424,1.066-.6,1.61a10.442,10.442,0,0,0-.543,3.279A3.34,3.34,0,0,0,25.1,19.867a4.094,4.094,0,0,0,2.931.843,11.219,11.219,0,0,0,3.327-.794l.409-.163.294-.123.091-.04.182-.079.363-.164c.243-.109.481-.228.72-.345,0,0,.57-.255,1.325-.644s1.691-.913,2.45-1.372a16.558,16.558,0,0,1,1.536-.934l-1.467,1.14c.08-.055-.8.625-1.735,1.3-.465.336-.945.662-1.309.907l-.617.4c-.231.138-.466.272-.7.4-.117.067-.238.128-.358.192l-.09.047-.237.122-.407.2a15.52,15.52,0,0,1-1.7.688,7.771,7.771,0,0,1-3.779.41,4.877,4.877,0,0,1-1.886-.753,4.426,4.426,0,0,1-1.414-1.563,5.91,5.91,0,0,1-.561-1.965,9.486,9.486,0,0,1,.031-1.939,15.424,15.424,0,0,1,.919-3.623A28.23,28.23,0,0,1,26.893,5.6a20.254,20.254,0,0,1,2.416-2.8,11.942,11.942,0,0,1,3.107-2.2c.3-.133.625-.252.94-.368a7.664,7.664,0,0,1,1-.2,4.574,4.574,0,0,1,2.13.2,3.786,3.786,0,0,1,.541.267,2.637,2.637,0,0,1,.489.415c.073.083.144.166.212.252s.11.191.162.288a2.534,2.534,0,0,1,.214.607,3.745,3.745,0,0,1-.314,2.171A10.378,10.378,0,0,1,36.835,5.9c-.178.257-.359.51-.558.748s-.39.48-.6.7a21.672,21.672,0,0,1-2.683,2.467c-1.9,1.491-3.924,2.726-5.926,4a62.3,62.3,0,0,1-6.243,3.447A17.109,17.109,0,0,1,17.411,18.4a10.543,10.543,0,0,1-1.8.228,9.909,9.909,0,0,1-1.829-.039,3.446,3.446,0,0,1-1.833-.705,1.834,1.834,0,0,1-.585-.95,2.4,2.4,0,0,1-.007-1.074,5.242,5.242,0,0,1,.792-1.783,9.536,9.536,0,0,1,1.193-1.455,9.988,9.988,0,0,1,1.449-1.209,5.718,5.718,0,0,1,1.813-.854,2.317,2.317,0,0,1,1.253.022,1.6,1.6,0,0,1,.657.409,1.779,1.779,0,0,1,.389.616,2.334,2.334,0,0,1,.092,1.278,4.225,4.225,0,0,1-.364,1.015,11.863,11.863,0,0,1-2.342,2.961c-.22.214-.446.421-.677.625-.22.186-.444.391-.666.59-.46.4-.938.781-1.428,1.14a23,23,0,0,1-3.1,1.925,15.462,15.462,0,0,1-3.438,1.309c-.3.086-.614.117-.919.175s-.628.059-.941.082a7.223,7.223,0,0,1-1.889-.226,4.537,4.537,0,0,1-1.724-.866A4,4,0,0,1,.382,20.078a2.737,2.737,0,0,1-.127-.343c-.033-.117-.078-.23-.1-.349l-.076-.353-.046-.355c-.017-.118-.016-.238-.025-.356a3.131,3.131,0,0,1,0-.354C0,17.732.026,17.5.047,17.266Z" transform="translate(182.894 158.223) rotate(90)" fill="#004a13" />
                    <path id="Path_289" data-name="Path 289" d="M7.066,10.321a6.341,6.341,0,0,1,3.022,2.293,6.384,6.384,0,0,1-.682,8.2A6.146,6.146,0,0,1,4.9,22.686,6.077,6.077,0,0,1,0,20.362l.636-.527A5.3,5.3,0,0,0,4.9,21.85a5.347,5.347,0,0,0,3.921-1.627A5.345,5.345,0,0,0,10.445,16.3,5.3,5.3,0,0,0,8.818,12.4,5.346,5.346,0,0,0,4.9,10.77V9.949A4.389,4.389,0,0,0,8.12,8.616,4.364,4.364,0,0,0,9.468,5.393,4.367,4.367,0,0,0,8.12,2.169,4.392,4.392,0,0,0,4.9.837a4.315,4.315,0,0,0-3.89,2.17l-.7-.434A5.329,5.329,0,0,1,4.9,0,5.2,5.2,0,0,1,8.709,1.581a5.17,5.17,0,0,1,1.6,3.812,5.189,5.189,0,0,1-.914,2.975A5.233,5.233,0,0,1,7.066,10.321Z" transform="translate(182.831 224.89) rotate(90)" fill="#004a13" />
                    <path id="Path_290" data-name="Path 290" d="M5.172,23.079a6.29,6.29,0,0,1-5.048-2.4L0,20.532l.937-.777.126.151a5.132,5.132,0,0,0,4.11,1.944,5.178,5.178,0,0,0,3.782-1.57,5.322,5.322,0,0,0,0-7.548,5.178,5.178,0,0,0-3.783-1.571h-.2V9.949h.2A4.22,4.22,0,0,0,8.257,8.673,4.2,4.2,0,0,0,9.548,5.589,4.2,4.2,0,0,0,8.258,2.5,4.222,4.222,0,0,0,5.172,1.229,4.1,4.1,0,0,0,1.449,3.305l-.1.167-1.03-.64.1-.166A5.524,5.524,0,0,1,5.172,0,5.407,5.407,0,0,1,9.123,1.638a5.382,5.382,0,0,1,1.654,3.951,5.4,5.4,0,0,1-.948,3.085,5.417,5.417,0,0,1-2,1.827,6.55,6.55,0,0,1,2.7,2.194,6.58,6.58,0,0,1-.7,8.451A6.363,6.363,0,0,1,5.172,23.079Zm-4.619-2.5a5.891,5.891,0,0,0,4.619,2.1,5.985,5.985,0,0,0,4.371-1.818,6.188,6.188,0,0,0,.661-7.945A6.175,6.175,0,0,0,7.274,10.7l-.458-.169.447-.2A5.066,5.066,0,0,0,9.5,8.456a5.02,5.02,0,0,0,.882-2.867A5,5,0,0,0,8.847,1.916,5.027,5.027,0,0,0,5.172.392,5.126,5.126,0,0,0,.857,2.707l.365.227a4.5,4.5,0,0,1,3.95-2.1,4.6,4.6,0,0,1,3.362,1.39A4.575,4.575,0,0,1,9.94,5.589,4.575,4.575,0,0,1,8.533,8.951a4.584,4.584,0,0,1-3.165,1.386v.436a5.543,5.543,0,0,1,3.863,1.682,5.715,5.715,0,0,1,0,8.1,5.556,5.556,0,0,1-4.059,1.685A5.487,5.487,0,0,1,.888,20.306Z" transform="translate(183.028 224.615) rotate(90)" fill="#004a13" />
                    <path id="Path_291" data-name="Path 291" d="M6.446,9.871a6.167,6.167,0,0,1,4.525,1.875,6.167,6.167,0,0,1,1.875,4.525,6.217,6.217,0,0,1-1.875,4.54,6.166,6.166,0,0,1-4.525,1.875,6.148,6.148,0,0,1-4.51-1.875A6.166,6.166,0,0,1,.061,16.287,18.587,18.587,0,0,1,.774,9.608Q2.773,2.4,9.25.14l.4-.14L9.529.93Q3.47,3.053,1.58,9.825a20.193,20.193,0,0,0-.6,3.146,6.369,6.369,0,0,1,2.294-2.247A6.233,6.233,0,0,1,6.446,9.871Zm0,11.979a5.369,5.369,0,0,0,3.936-1.642,5.361,5.361,0,0,0,1.627-3.936,5.394,5.394,0,0,0-1.627-3.936,5.393,5.393,0,0,0-3.936-1.627,5.341,5.341,0,0,0-3.921,1.627A5.342,5.342,0,0,0,.9,16.256l.015.388a5.367,5.367,0,0,0,1.736,3.688A5.352,5.352,0,0,0,6.446,21.85Z" transform="translate(182.848 240.4) rotate(90)" fill="#004a13" />
                    <path id="Path_292" data-name="Path 292" d="M6.641,23.172a6.362,6.362,0,0,1-4.648-1.933A6.38,6.38,0,0,1,.061,16.576a18.825,18.825,0,0,1,.72-6.731C2.125,5,5.019,1.767,9.382.243l.7-.243L9.9,1.364,9.79,1.4C5.833,2.79,3.2,5.739,1.964,10.167a19.766,19.766,0,0,0-.493,2.315,6.566,6.566,0,0,1,1.9-1.639,6.451,6.451,0,0,1,3.275-.879A6.384,6.384,0,0,1,11.3,11.9a6.382,6.382,0,0,1,1.932,4.663,6.434,6.434,0,0,1-1.932,4.678A6.383,6.383,0,0,1,6.641,23.172ZM9.613.578l-.1.036C5.277,2.092,2.467,5.234,1.159,9.949a18.472,18.472,0,0,0-.707,6.609,6.015,6.015,0,0,0,1.818,4.4A5.985,5.985,0,0,0,6.641,22.78a6,6,0,0,0,4.386-1.818,6.22,6.22,0,0,0,0-8.788,6,6,0,0,0-4.386-1.818,6.063,6.063,0,0,0-3.078.826,6.21,6.21,0,0,0-2.225,2.179l-.462.76.1-.884a20.488,20.488,0,0,1,.61-3.176c1.261-4.516,3.938-7.539,7.96-8.987ZM6.641,22.335a5.566,5.566,0,0,1-3.931-1.572,5.574,5.574,0,0,1-1.8-3.818L.9,16.553a5.56,5.56,0,0,1,1.684-4.067A5.555,5.555,0,0,1,6.641,10.8a5.607,5.607,0,0,1,4.074,1.684,5.77,5.77,0,0,1,0,8.15A5.58,5.58,0,0,1,6.641,22.335Zm0-11.142a5.177,5.177,0,0,0-3.782,1.57A5.175,5.175,0,0,0,1.29,16.545l.016.38a5.193,5.193,0,0,0,1.674,3.554,5.186,5.186,0,0,0,3.662,1.465,5.2,5.2,0,0,0,3.8-1.585,5.378,5.378,0,0,0,0-7.6A5.225,5.225,0,0,0,6.641,11.193Z" transform="translate(183.136 240.204) rotate(90)" fill="#004a13" />
                    <path id="Path_293" data-name="Path 293" d="M.687,3.926A2.163,2.163,0,0,1,0,2.306,2.163,2.163,0,0,1,.687.687,2.164,2.164,0,0,1,2.306,0,2.165,2.165,0,0,1,3.926.687a2.165,2.165,0,0,1,.687,1.62,2.165,2.165,0,0,1-.687,1.62,2.163,2.163,0,0,1-1.619.687A2.163,2.163,0,0,1,.687,3.926Zm.932-2.307a.892.892,0,0,0-.295.687.941.941,0,0,0,.295.687.891.891,0,0,0,.687.295.941.941,0,0,0,.687-.295.941.941,0,0,0,.294-.687.892.892,0,0,0-.294-.687.942.942,0,0,0-.687-.294A.891.891,0,0,0,1.619,1.619Z" transform="translate(182.584 257.457) rotate(90)" fill="#004a13" />
                    <path id="Path_294" data-name="Path 294" d="M14.334,0,7.593,11.467V22.253H6.756V11.467L0,0H.961L7.02,10.29h.295L13.373,0Z" transform="translate(182.615 275.69) rotate(90)" fill="#004a13" />
                    <path id="Path_295" data-name="Path 295" d="M8.132,22.645H6.9V11.717L0,0H1.416l6.06,10.289h.07L13.6,0H15.02L8.132,11.717ZM7.3,22.253H7.74V11.611l.027-.046L14.335.392h-.506L7.77,10.681H7.251L1.192.392H.686L7.3,11.61Z" transform="translate(182.811 275.347) rotate(90)" fill="#004a13" />
                    <path id="Path_296" data-name="Path 296" d="M3.332,19.355A10.891,10.891,0,0,1,0,11.343,10.891,10.891,0,0,1,3.332,3.332,10.892,10.892,0,0,1,11.343,0a10.892,10.892,0,0,1,8.012,3.332,10.892,10.892,0,0,1,3.332,8.012,10.892,10.892,0,0,1-3.332,8.012,10.89,10.89,0,0,1-8.012,3.332A10.89,10.89,0,0,1,3.332,19.355ZM3.921,3.92A10.086,10.086,0,0,0,.837,11.343a10.118,10.118,0,0,0,3.084,7.423,10.084,10.084,0,0,0,7.423,3.084,10.083,10.083,0,0,0,7.423-3.084,10.117,10.117,0,0,0,3.084-7.423A10.086,10.086,0,0,0,18.766,3.92,10.086,10.086,0,0,0,11.343.837,10.087,10.087,0,0,0,3.921,3.92Z" transform="translate(182.831 291.525) rotate(90)" fill="#004a13" />
                    <path id="Path_297" data-name="Path 297" d="M11.54,23.079a11.126,11.126,0,0,1-8.15-3.389h0A11.129,11.129,0,0,1,0,11.539a11.127,11.127,0,0,1,3.389-8.15A11.126,11.126,0,0,1,11.54,0,11.127,11.127,0,0,1,19.69,3.39a11.127,11.127,0,0,1,3.389,8.15,11.128,11.128,0,0,1-3.39,8.151A11.126,11.126,0,0,1,11.54,23.079Zm0-22.686A10.747,10.747,0,0,0,3.667,3.666,10.749,10.749,0,0,0,.392,11.539a10.748,10.748,0,0,0,3.274,7.873h0a10.749,10.749,0,0,0,7.873,3.274,10.748,10.748,0,0,0,7.873-3.274,10.75,10.75,0,0,0,3.275-7.874,10.75,10.75,0,0,0-3.274-7.872A10.747,10.747,0,0,0,11.54.392Zm0,21.85A10.317,10.317,0,0,1,3.978,19.1,10.351,10.351,0,0,1,.837,11.539,10.319,10.319,0,0,1,3.979,3.977,10.32,10.32,0,0,1,11.54.837,10.321,10.321,0,0,1,19.1,3.978a10.318,10.318,0,0,1,3.141,7.561A10.352,10.352,0,0,1,19.1,19.1,10.318,10.318,0,0,1,11.54,22.242Zm0-21.013A9.94,9.94,0,0,0,4.256,4.255h0a9.939,9.939,0,0,0-3.026,7.284,9.973,9.973,0,0,0,3.026,7.284A9.938,9.938,0,0,0,11.54,21.85a9.939,9.939,0,0,0,7.284-3.026,9.974,9.974,0,0,0,3.027-7.285,9.939,9.939,0,0,0-3.026-7.284A9.94,9.94,0,0,0,11.54,1.229Z" transform="translate(183.028 291.329) rotate(90)" fill="#004a13" />
                    <path id="Path_298" data-name="Path 298" d="M3.332,19.355A10.889,10.889,0,0,1,0,11.343,10.889,10.889,0,0,1,3.332,3.332,10.89,10.89,0,0,1,11.343,0,11.153,11.153,0,0,1,15.76.9l-.326.759A10.449,10.449,0,0,0,11.343.837,10.086,10.086,0,0,0,3.921,3.92,10.086,10.086,0,0,0,.837,11.343a10.117,10.117,0,0,0,3.084,7.423,10.083,10.083,0,0,0,7.423,3.084,10.409,10.409,0,0,0,3.859-.728V11.684H9.623v-.837h6.416V21.679l-.264.109a11.181,11.181,0,0,1-4.432.9A10.888,10.888,0,0,1,3.332,19.355Z" transform="translate(182.831 318.469) rotate(90)" fill="#004a13" />
                    <path id="Path_299" data-name="Path 299" d="M11.54,23.079a11.125,11.125,0,0,1-8.15-3.389A11.127,11.127,0,0,1,0,11.539a11.127,11.127,0,0,1,3.39-8.15A11.125,11.125,0,0,1,11.54,0a11.393,11.393,0,0,1,4.493.915l.181.077-.48,1.119-.179-.075a10.3,10.3,0,0,0-4.015-.806A9.941,9.941,0,0,0,4.256,4.255a9.942,9.942,0,0,0-3.026,7.285,9.973,9.973,0,0,0,3.026,7.284A9.941,9.941,0,0,0,11.54,21.85a10.277,10.277,0,0,0,3.663-.666V12.076H9.623V10.847h6.808V22.007l-.385.158A11.419,11.419,0,0,1,11.54,23.079Zm0-22.686A10.746,10.746,0,0,0,3.667,3.666,10.748,10.748,0,0,0,.392,11.539a10.748,10.748,0,0,0,3.274,7.873h0a10.747,10.747,0,0,0,7.873,3.274,11.039,11.039,0,0,0,4.355-.883l.144-.059V11.239H10.015v.445h5.579v9.766l-.124.049a10.653,10.653,0,0,1-3.93.742A10.318,10.318,0,0,1,3.978,19.1,10.35,10.35,0,0,1,.837,11.539,10.318,10.318,0,0,1,3.979,3.977,10.32,10.32,0,0,1,11.54.837a10.694,10.694,0,0,1,3.987.763l.172-.4A11.005,11.005,0,0,0,11.54.392Z" transform="translate(183.028 318.273) rotate(90)" fill="#004a13" />
                    <path id="Path_300" data-name="Path 300" d="M15.62,0V22.253H14.8V16.364H4.711L.991,22.253H0l4.168-6.586v-.139h.078L14.071,0ZM5.238,15.528H14.8V.419Z" transform="translate(182.615 339.666) rotate(90)" fill="#004a13" />
                    <path id="Path_301" data-name="Path 301" d="M16.172,22.707H14.959V16.818H5.175l-3.72,5.889H0l4.328-6.839V15.59h.165L14.319.062h.993L15.351,0V.062h.822Zm-.822-.392h.43V.454h-.43V15.982H5.238L15.063.454h-.529L4.721,15.965v.016l-.031.048L.712,22.315H1.24l3.719-5.889H15.351Zm-9.4-6.725h9.01V1.353Z" transform="translate(182.873 339.31) rotate(90)" fill="#004a13" />
                </g>
            </svg>


        </div>
        <button type="button" class="close close-desktop" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50">
                    <defs>
                        <style>
                            .cls-1,
                            .cls-2 {
                                fill: none;
                            }

                            .cls-2 {
                                stroke: #004a13;
                                stroke-width: 2px;
                            }

                            .cls-3 {
                                fill: #004a13;
                            }
                        </style>
                    </defs>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <g id="Ellipse_219" data-name="Ellipse 219">
                                <circle class="cls-1" cx="25" cy="25" r="25" />
                                <circle class="cls-2" cx="25" cy="25" r="24" />
                            </g>
                            <g id="Group_1139" data-name="Group 1139">
                                <rect id="Rectangle_1104" data-name="Rectangle 1104" class="cls-3" x="23" y="13" width="4" height="24" transform="translate(-10.36 25) rotate(-45)" />
                                <rect id="Rectangle_1106" data-name="Rectangle 1106" class="cls-3" x="13" y="23" width="24" height="4" transform="translate(-10.36 25) rotate(-45)" />
                            </g>
                        </g>
                    </g>
                </svg>

            </span>

        </button>
        <button type="button" class="close close-mobile" data-dismiss="modal" aria-label="Close">
            <svg id="button_-_exit_-_big" data-name="button - exit - big" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                <g id="Ellipse_219" data-name="Ellipse 219" fill="none" stroke="#fff" stroke-width="2">
                    <circle cx="20" cy="20" r="20" stroke="none" />
                    <circle cx="20" cy="20" r="19" fill="none" />
                </g>
                <g id="Group_1139" data-name="Group 1139" transform="translate(3.029 20) rotate(-45)">
                    <rect id="Rectangle_1104" data-name="Rectangle 1104" width="24" height="4" transform="translate(14) rotate(90)" fill="#fffefc" />
                    <rect id="Rectangle_1106" data-name="Rectangle 1106" width="24" height="4" transform="translate(0 10)" fill="#fffefc" />
                </g>
            </svg>
        </button>
    </div>

</div>


<!-- include __DIR__ . '/parts/html-footer.php';  -->
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->

<script>
    $('.choice').on('click', function() {
        $(this).css('color', 'white').css('background', 'darkgreen').parent().siblings().find('.choice').css('background', 'white').css('color', 'green');

    });

    let hhh = ($('.thermometer_line').height() - 18) / 5;
    console.log(hhh);


    var qqq = <?php echo json_encode($qqq); ?>;
    var move = hhh * qqq;
    console.log(qqq);
    $('.pro-number .number').eq(qqq - 1).css('color', '#db5c00');
    $('.thermometer_move').css('height', move + "24");


    console.log(' move:' + move);
</script>

<?php include __DIR__ . '/parts/html-end.php'; ?>