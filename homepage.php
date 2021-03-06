<?php include __DIR__ . '/parts/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36YOGA</title>
    <link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/animate.min.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/slick.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/homepage.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/quick_view.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/nav.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/footer.css" />
    

    <link rel="shortcut icon" href="./SVG/icon_green.svg" type="image/x-icon" />
<!-- css連結 -->

<?php include __DIR__ . '/parts/nav.php'; ?>



<!-- 貼上html -->
<!-- index computer -->

<div id='index_computer' class="index_computer">
        <!-- Hero -->
        <header id='index_home' class="index_header"> 
            
            <div class="hero_wrap">
                <div class="back01_wrap col-4">
                    <img src="./img/index/index_back01.jpg" alt="" class="index_back01">
                </div>
                
                <!-- 上層整區 -->
                <div class="row d-flex hero_inner">
                    <!-- scroll down -->
                    <div class="srolldown_btn col-1 d-flex flex-column justify-content-end align-items-center">
                        <div class="scrollbox animate__animated animate__fadeInDown">
                            <div class="scroll_p">Scroll Down</div>
                            <div class="scrolldown_line"></div> 
                        </div>
                        
                    </div>  
                    
                    <!-- find your soulmat btn -->
                    <a href='<?= WEB_ROOT ?>yoga-test.php' class="hero_btn animate__animated animate__fadeInDown col-1">
                        <svg class='soulmat' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.5 665.92" ><defs>
                            <style>.cls-1,.cls-5{fill:none;}.cls-2{fill:#db5c00;}.cls-3{isolation:isolate;}.cls-4{fill:#004a13;}.cls-5{stroke:#004a13;stroke-width:2px;}</style></defs><g id="圖層_2" data-name="圖層 2"><g id="圖層_1-2" data-name="圖層 1"><g id="Group_1243" data-name="Group 1243"><g id="Group_1242" data-name="Group 1242"><g id="Group_1241" data-name="Group 1241"><g id="Path_360" data-name="Path 360"><path class="cls-1" d="M0,605.92a60,60,0,1,1,60,60A60,60,0,0,1,0,605.92Z"/><path class="cls-2" d="M0,605.92c0-.38,0-.76,0-1.14a59.7,59.7,0,0,1,4.71-22.21c.6-1.43,1.25-2.82,2-4.19.83-1.6,1.73-3.17,2.7-4.69.29-.44.57-.88.87-1.32q1.27-1.89,2.7-3.69a60.69,60.69,0,0,1,9.81-9.81q1.8-1.43,3.69-2.7l1.32-.87c1.52-1,3.09-1.87,4.69-2.7,1.37-.71,2.76-1.36,4.19-2a59.7,59.7,0,0,1,22.21-4.71H60a60.11,60.11,0,0,1,54.68,35.26q.51,1.14,1,2.31A59.72,59.72,0,0,1,120,604.34c0,.52,0,1,0,1.58h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v.07h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v.1h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v.1h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v.15h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0v0h0a1.55,1.55,0,0,1,0,.22h0v0h0v0h0v0h0v0h0v0h0v0h0c0,.12,0,.23,0,.34h0a58.52,58.52,0,0,1-1,7.66,2,2,0,0,1-4-.38,1.64,1.64,0,0,1,0-.38,56.7,56.7,0,0,0,1-10.66,55.65,55.65,0,0,0-4.4-21.8,56.46,56.46,0,0,0-5.16-9.51,56.33,56.33,0,0,0-15.13-15.13,56.46,56.46,0,0,0-9.51-5.16,56.2,56.2,0,0,0-43.6,0,56.46,56.46,0,0,0-9.51,5.16,56.33,56.33,0,0,0-15.13,15.13,56.46,56.46,0,0,0-5.16,9.51A55.65,55.65,0,0,0,4,605.92H4a55.65,55.65,0,0,0,4.4,21.8,56.46,56.46,0,0,0,5.16,9.51,56.33,56.33,0,0,0,15.13,15.13,56.46,56.46,0,0,0,9.51,5.16,55.65,55.65,0,0,0,21.8,4.4,56.47,56.47,0,0,0,11.84-1.25,2,2,0,1,1,.84,3.91c-1,.21-2,.4-3,.56h-.22l-.15,0h-.81l-.23,0h-.1c-1.46.2-2.94.35-4.44.44h0l-.48,0H60l-1.58,0a59.72,59.72,0,0,1-20.85-4.31q-1.17-.48-2.31-1A60,60,0,0,1,0,607.07C0,606.68,0,606.3,0,605.92Z"/></g><g id="Check" class="cls-3"><g class="cls-3"><path class="cls-2" d="M84.94,647.7a6.36,6.36,0,0,1-.89.54,7.73,7.73,0,0,1-3.67.84,8.4,8.4,0,0,1-3.11-.63A6.75,6.75,0,0,1,75,646.84a7.08,7.08,0,0,1-1.45-2.34,8,8,0,0,1-.5-2.82,8.93,8.93,0,0,1,.51-3.08A7.12,7.12,0,0,1,75,636.18a6.49,6.49,0,0,1,2.27-1.58,7.45,7.45,0,0,1,2.92-.56,7.8,7.8,0,0,1,2.62.4,9.06,9.06,0,0,1,1.86.86L83.5,638a8.32,8.32,0,0,0-1.33-.79,4.29,4.29,0,0,0-1.91-.41,3.89,3.89,0,0,0-1.61.35,4.1,4.1,0,0,0-1.36,1,4.94,4.94,0,0,0-.93,1.49,4.87,4.87,0,0,0-.34,1.85,5.72,5.72,0,0,0,.31,1.94,4.29,4.29,0,0,0,.89,1.51,4,4,0,0,0,1.39,1,4.63,4.63,0,0,0,1.83.34,4.92,4.92,0,0,0,2-.38,4.49,4.49,0,0,0,1.28-.8Z"/><path class="cls-2" d="M87.38,648.92V633.14h2.74v8.8l0-.34a3.6,3.6,0,0,1,1.3-1.33,3.91,3.91,0,0,1,2.06-.51,3,3,0,0,1,2.07.73,2.47,2.47,0,0,1,.85,1.89v6.54h-2.8v-5.5a1.48,1.48,0,0,0-.31-.93,1.21,1.21,0,0,0-1-.35,1.64,1.64,0,0,0-1.12.42,2.66,2.66,0,0,0-.74,1.14,4.94,4.94,0,0,0-.26,1.66v3.56Z"/><path class="cls-2" d="M103.56,649.16a5.62,5.62,0,0,1-2.71-.6,4.1,4.1,0,0,1-1.69-1.66,5,5,0,0,1-.58-2.44,4.35,4.35,0,0,1,.68-2.38,4.93,4.93,0,0,1,1.82-1.69,5.17,5.17,0,0,1,2.54-.63,4.44,4.44,0,0,1,3.09,1.09,5.32,5.32,0,0,1,1.57,3.15l-6.8,2.16-.62-1.52,4.92-1.66-.58.26a2.13,2.13,0,0,0-.57-.91,1.71,1.71,0,0,0-1.23-.39,2.06,2.06,0,0,0-1.09.29,1.92,1.92,0,0,0-.72.82,3.26,3.26,0,0,0,0,2.62,2,2,0,0,0,.82.83,2.37,2.37,0,0,0,1.16.28,2.46,2.46,0,0,0,.89-.16,5.16,5.16,0,0,0,.85-.42l1.24,2.08a7,7,0,0,1-1.51.64A5.39,5.39,0,0,1,103.56,649.16Z"/><path class="cls-2" d="M117.74,648.14a4.59,4.59,0,0,1-1.45.74,5.46,5.46,0,0,1-1.71.28,5.77,5.77,0,0,1-2.61-.55,4,4,0,0,1-1.72-1.58,4.79,4.79,0,0,1-.61-2.49,4.53,4.53,0,0,1,.66-2.49,4.35,4.35,0,0,1,1.73-1.57,4.91,4.91,0,0,1,2.25-.54,6,6,0,0,1,2,.32,4.78,4.78,0,0,1,1.49.84l-1.36,1.8a3.73,3.73,0,0,0-.77-.45,2.74,2.74,0,0,0-1.15-.23,2,2,0,0,0-1.06.3,2.15,2.15,0,0,0-.76.82,2.47,2.47,0,0,0-.28,1.2,2.38,2.38,0,0,0,.3,1.18,2.26,2.26,0,0,0,.83.85,2.39,2.39,0,0,0,1.25.31,2.57,2.57,0,0,0,.85-.13,2.07,2.07,0,0,0,.67-.37Z"/><path class="cls-2" d="M119.9,648.92V633.14h2.8v15.78Zm2-2.42-.28-2.66,5.28-3.88,1.7,1.5Zm3.06-3.52,4,5.94h-3.26l-2.54-4.34Z"/></g></g></g></g><g id="Group_1240" data-name="Group 1240"><g id="Group_1238" data-name="Group 1238"><g id="h1"><g id="Find_Your_Soulmat" data-name="Find Your Soulmat" class="cls-3"><g class="cls-3"><path class="cls-4" d="M129.1,1V30.44h-9V10.28H109.46V27.75h-9V10.28H82V1Z"/><path class="cls-4" d="M110,39.21v9H82v-9Zm9.92-.19a4,4,0,0,1,3.26,1.56,5.2,5.2,0,0,1,1.28,3.36,4.94,4.94,0,0,1-1.28,3.3,4.09,4.09,0,0,1-3.26,1.5,4,4,0,0,1-3.23-1.5,5,5,0,0,1-1.25-3.3,5.28,5.28,0,0,1,1.25-3.36A4,4,0,0,1,119.89,39Z"/><path class="cls-4" d="M110,66.79l-5,.71.44-.13a11.55,11.55,0,0,1,4.26,4.16,12.46,12.46,0,0,1,1.63,6.59A9.7,9.7,0,0,1,109,84.74a7.88,7.88,0,0,1-6,2.72H82v-9H99.6a4.77,4.77,0,0,0,3-1,3.84,3.84,0,0,0,1.12-3.1,5.28,5.28,0,0,0-1.35-3.59,8.54,8.54,0,0,0-3.65-2.36,15.41,15.41,0,0,0-5.31-.84H82v-9h28Z"/><path class="cls-4" d="M81.23,109.35a13.39,13.39,0,0,1,1.83-7,12.65,12.65,0,0,1,5.28-4.83,17.86,17.86,0,0,1,8.19-1.76,15.89,15.89,0,0,1,8.06,1.92,12.72,12.72,0,0,1,5.06,5.25,16.18,16.18,0,0,1,1.73,7.55,15.84,15.84,0,0,1-.84,5.15,10,10,0,0,1-2.56,4.13H132.5v8.9H82v-9h5.44l-1.92.7a22.65,22.65,0,0,1-3-4.86A14.62,14.62,0,0,1,81.23,109.35Zm7.55,2.94a9.6,9.6,0,0,0,.48,3.17,7.18,7.18,0,0,0,1.41,2.43A8.35,8.35,0,0,0,93,119.72h6.85a6.26,6.26,0,0,0,2.4-1.57,7.28,7.28,0,0,0,1.53-2.56,9.68,9.68,0,0,0,.55-3.3,7.09,7.09,0,0,0-1-3.68,7.54,7.54,0,0,0-2.72-2.72,7.63,7.63,0,0,0-4-1,8,8,0,0,0-4,1,7.72,7.72,0,0,0-2.81,2.72A7,7,0,0,0,88.78,112.29Z"/><path class="cls-4" d="M96.66,175l32.44-17.34v11.45l-24.44,12.16-.2-2.75,24.64,12v11.45L96.66,184.23H82V175Z"/><path class="cls-4" d="M96.34,199.53a14.82,14.82,0,0,1,7.68,2,14.25,14.25,0,0,1,5.34,5.67,17.48,17.48,0,0,1,2,8.38,16.91,16.91,0,0,1-2,8.32,13.56,13.56,0,0,1-5.34,5.41,15.55,15.55,0,0,1-7.68,1.89,15.74,15.74,0,0,1-7.72-1.89,13.71,13.71,0,0,1-5.4-5.41,16.87,16.87,0,0,1-2-8.45A18.33,18.33,0,0,1,83,207.24a13.55,13.55,0,0,1,5.19-5.67A15.48,15.48,0,0,1,96.34,199.53Zm-.07,9a8.49,8.49,0,0,0-3.93.9,7,7,0,0,0-2.79,2.43,6.08,6.08,0,0,0-1,3.45,6.43,6.43,0,0,0,1,3.65,6.61,6.61,0,0,0,2.79,2.37,9.81,9.81,0,0,0,7.9,0A6.68,6.68,0,0,0,103,219a6.44,6.44,0,0,0,1-3.65,6.09,6.09,0,0,0-1-3.45,7.12,7.12,0,0,0-2.75-2.43A8.48,8.48,0,0,0,96.27,208.55Z"/><path class="cls-4" d="M80.66,248.55A9,9,0,0,1,83,242.21,8.23,8.23,0,0,1,89,239.53H110v9H92.37a5.47,5.47,0,0,0-3,1,3.26,3.26,0,0,0-1.12,2.81,4.85,4.85,0,0,0,1.35,3.43,8.85,8.85,0,0,0,3.68,2.24,16.27,16.27,0,0,0,5.28.8H110v9H82v-8.13l5.12-.71-.58.13a12.19,12.19,0,0,1-3.07-2.43,10.42,10.42,0,0,1-2.08-3.49A13.09,13.09,0,0,1,80.66,248.55Z"/><path class="cls-4" d="M110,286.25l-7.68.83,1.15-.19a12.93,12.93,0,0,1,4.26,3.32,19.27,19.27,0,0,1,2.72,4.2,8.43,8.43,0,0,1,1,3.16l-9-.44a8,8,0,0,0-1-5.38,9.63,9.63,0,0,0-3.71-3.46,10,10,0,0,0-4.74-1.21H82v-8.9h28Z"/><path class="cls-4" d="M117.71,354.4a35.27,35.27,0,0,0,2.43-5.47,16,16,0,0,0,1-5.21,8.11,8.11,0,0,0-1.21-4.74,4.4,4.4,0,0,0-6.63-.42,12.77,12.77,0,0,0-2.33,3.4,46.79,46.79,0,0,0-1.86,4.32,36.38,36.38,0,0,1-1.82,4.06,15.26,15.26,0,0,1-2.63,3.62,11.51,11.51,0,0,1-3.9,2.56,15.12,15.12,0,0,1-5.73,1,12.58,12.58,0,0,1-6.65-1.86,13.47,13.47,0,0,1-5-5.44,18.75,18.75,0,0,1-1.89-8.83,28.64,28.64,0,0,1,.54-5.47,28.08,28.08,0,0,1,1.67-5.48,27.64,27.64,0,0,1,2.84-5.18l7.24,4.1a22.64,22.64,0,0,0-2.15,3.61,21.78,21.78,0,0,0-1.44,3.94,14.73,14.73,0,0,0-.51,3.65,12.29,12.29,0,0,0,.48,3.36,6.12,6.12,0,0,0,1.63,2.81,4.39,4.39,0,0,0,3.2,1.12,4,4,0,0,0,2.56-.93,9.46,9.46,0,0,0,2.11-2.49,20.59,20.59,0,0,0,1.67-3.43q.83-2.18,1.92-4.48a23,23,0,0,1,2.65-4.31,11.49,11.49,0,0,1,9.64-4.52,13.4,13.4,0,0,1,7.1,1.83,13,13,0,0,1,4.77,5.15,18,18,0,0,1,2,7.68,26.74,26.74,0,0,1-1.34,9.25,32.87,32.87,0,0,1-3.2,6.36Z"/><path class="cls-4" d="M96.34,364.2a14.82,14.82,0,0,1,7.68,2,14.25,14.25,0,0,1,5.34,5.67,17.48,17.48,0,0,1,2,8.38,16.91,16.91,0,0,1-2,8.32A13.56,13.56,0,0,1,104,394a15.55,15.55,0,0,1-7.68,1.89A15.74,15.74,0,0,1,88.62,394a13.71,13.71,0,0,1-5.4-5.41,16.87,16.87,0,0,1-2-8.45A18.33,18.33,0,0,1,83,371.91a13.55,13.55,0,0,1,5.19-5.67A15.48,15.48,0,0,1,96.34,364.2Zm-.07,9a8.49,8.49,0,0,0-3.93.9,7,7,0,0,0-2.79,2.43,6.08,6.08,0,0,0-1,3.45,6.43,6.43,0,0,0,1,3.65A6.61,6.61,0,0,0,92.34,386a9.81,9.81,0,0,0,7.9,0,6.68,6.68,0,0,0,2.75-2.37,6.44,6.44,0,0,0,1-3.65,6.09,6.09,0,0,0-1-3.45,7.12,7.12,0,0,0-2.75-2.43A8.48,8.48,0,0,0,96.27,373.22Z"/><path class="cls-4" d="M80.66,413.22A9,9,0,0,1,83,406.88,8.23,8.23,0,0,1,89,404.2H110v9H92.37a5.47,5.47,0,0,0-3,1,3.26,3.26,0,0,0-1.12,2.81,4.85,4.85,0,0,0,1.35,3.43,8.85,8.85,0,0,0,3.68,2.24,16.27,16.27,0,0,0,5.28.8H110v9H82v-8.13l5.12-.71-.58.13a12.19,12.19,0,0,1-3.07-2.43,10.42,10.42,0,0,1-2.08-3.49A13.09,13.09,0,0,1,80.66,413.22Z"/><path class="cls-4" d="M132.5,442.85v9H82v-9Z"/><path class="cls-4" d="M110,470.44l-4.93.7.38-.13a12.74,12.74,0,0,1,4.39,4.16,11.15,11.15,0,0,1,1.57,6,12,12,0,0,1-.64,4.06,7.84,7.84,0,0,1-1.89,3,6.6,6.6,0,0,1-3.23,1.66l-.07-.32a15,15,0,0,1,4.23,4.32,9.81,9.81,0,0,1,1.6,5.28A9.24,9.24,0,0,1,109,505.8a8.16,8.16,0,0,1-6.05,2.52H82v-8.89H99.28a8.42,8.42,0,0,0,3-.58,2.48,2.48,0,0,0,1.31-2.37,5,5,0,0,0-1.5-3.68,9.3,9.3,0,0,0-3.84-2.24,16,16,0,0,0-4.83-.73H82v-9H99.28a7.23,7.23,0,0,0,3-.67,2.73,2.73,0,0,0,1.31-2.47,4.72,4.72,0,0,0-1.5-3.55A9.61,9.61,0,0,0,98.32,472a15.49,15.49,0,0,0-4.74-.73H82v-9h28Z"/><path class="cls-4" d="M81.23,530.6a15.83,15.83,0,0,1,1.57-7.08,11.67,11.67,0,0,1,4.83-5A16.66,16.66,0,0,1,96,516.64a16.58,16.58,0,0,1,8.19,1.92,14,14,0,0,1,5.35,5.06,12.69,12.69,0,0,1,1.89,6.66,11.73,11.73,0,0,1-1.38,6.3,15.79,15.79,0,0,1-3,3.55l-1.09-.38,4.1.83v8.32H82v-9h6.08l-1.92.7c0-.08-.25-.34-.74-.76A15,15,0,0,1,83.7,538,12.09,12.09,0,0,1,82,534.92,11.55,11.55,0,0,1,81.23,530.6Zm7.3,2.56A8.21,8.21,0,0,0,89,536a6.45,6.45,0,0,0,1.41,2.24,8.31,8.31,0,0,0,2.33,1.66H99.6a6.16,6.16,0,0,0,2.4-1.54,7.25,7.25,0,0,0,1.54-2.43,8.68,8.68,0,0,0,.54-3.13,6.76,6.76,0,0,0-1-3.56,7.28,7.28,0,0,0-2.72-2.59,8,8,0,0,0-4-1,7.9,7.9,0,0,0-4,1,7.6,7.6,0,0,0-2.82,2.72A7,7,0,0,0,88.53,533.16Z"/><path class="cls-4" d="M122.26,562v9H110.1v6.78h-7V571H82v-9h21.12v-4.35h7V562Z"/></g><g class="cls-3"><path class="cls-5" d="M129.1,1V30.44h-9V10.28H109.46V27.75h-9V10.28H82V1Z"/><path class="cls-5" d="M110,39.21v9H82v-9Zm9.92-.19a4,4,0,0,1,3.26,1.56,5.2,5.2,0,0,1,1.28,3.36,4.94,4.94,0,0,1-1.28,3.3,4.09,4.09,0,0,1-3.26,1.5,4,4,0,0,1-3.23-1.5,5,5,0,0,1-1.25-3.3,5.28,5.28,0,0,1,1.25-3.36A4,4,0,0,1,119.89,39Z"/><path class="cls-5" d="M110,66.79l-5,.71.44-.13a11.55,11.55,0,0,1,4.26,4.16,12.46,12.46,0,0,1,1.63,6.59A9.7,9.7,0,0,1,109,84.74a7.88,7.88,0,0,1-6,2.72H82v-9H99.6a4.77,4.77,0,0,0,3-1,3.84,3.84,0,0,0,1.12-3.1,5.28,5.28,0,0,0-1.35-3.59,8.54,8.54,0,0,0-3.65-2.36,15.41,15.41,0,0,0-5.31-.84H82v-9h28Z"/><path class="cls-5" d="M81.23,109.35a13.39,13.39,0,0,1,1.83-7,12.65,12.65,0,0,1,5.28-4.83,17.86,17.86,0,0,1,8.19-1.76,15.89,15.89,0,0,1,8.06,1.92,12.72,12.72,0,0,1,5.06,5.25,16.18,16.18,0,0,1,1.73,7.55,15.84,15.84,0,0,1-.84,5.15,10,10,0,0,1-2.56,4.13H132.5v8.9H82v-9h5.44l-1.92.7a22.65,22.65,0,0,1-3-4.86A14.62,14.62,0,0,1,81.23,109.35Zm7.55,2.94a9.6,9.6,0,0,0,.48,3.17,7.18,7.18,0,0,0,1.41,2.43A8.35,8.35,0,0,0,93,119.72h6.85a6.26,6.26,0,0,0,2.4-1.57,7.28,7.28,0,0,0,1.53-2.56,9.68,9.68,0,0,0,.55-3.3,7.09,7.09,0,0,0-1-3.68,7.54,7.54,0,0,0-2.72-2.72,7.63,7.63,0,0,0-4-1,8,8,0,0,0-4,1,7.72,7.72,0,0,0-2.81,2.72A7,7,0,0,0,88.78,112.29Z"/><path class="cls-5" d="M96.66,175l32.44-17.34v11.45l-24.44,12.16-.2-2.75,24.64,12v11.45L96.66,184.23H82V175Z"/><path class="cls-5" d="M96.34,199.53a14.82,14.82,0,0,1,7.68,2,14.25,14.25,0,0,1,5.34,5.67,17.48,17.48,0,0,1,2,8.38,16.91,16.91,0,0,1-2,8.32,13.56,13.56,0,0,1-5.34,5.41,15.55,15.55,0,0,1-7.68,1.89,15.74,15.74,0,0,1-7.72-1.89,13.71,13.71,0,0,1-5.4-5.41,16.87,16.87,0,0,1-2-8.45A18.33,18.33,0,0,1,83,207.24a13.55,13.55,0,0,1,5.19-5.67A15.48,15.48,0,0,1,96.34,199.53Zm-.07,9a8.49,8.49,0,0,0-3.93.9,7,7,0,0,0-2.79,2.43,6.08,6.08,0,0,0-1,3.45,6.43,6.43,0,0,0,1,3.65,6.61,6.61,0,0,0,2.79,2.37,9.81,9.81,0,0,0,7.9,0A6.68,6.68,0,0,0,103,219a6.44,6.44,0,0,0,1-3.65,6.09,6.09,0,0,0-1-3.45,7.12,7.12,0,0,0-2.75-2.43A8.48,8.48,0,0,0,96.27,208.55Z"/><path class="cls-5" d="M80.66,248.55A9,9,0,0,1,83,242.21,8.23,8.23,0,0,1,89,239.53H110v9H92.37a5.47,5.47,0,0,0-3,1,3.26,3.26,0,0,0-1.12,2.81,4.85,4.85,0,0,0,1.35,3.43,8.85,8.85,0,0,0,3.68,2.24,16.27,16.27,0,0,0,5.28.8H110v9H82v-8.13l5.12-.71-.58.13a12.19,12.19,0,0,1-3.07-2.43,10.42,10.42,0,0,1-2.08-3.49A13.09,13.09,0,0,1,80.66,248.55Z"/><path class="cls-5" d="M110,286.25l-7.68.83,1.15-.19a12.93,12.93,0,0,1,4.26,3.32,19.27,19.27,0,0,1,2.72,4.2,8.43,8.43,0,0,1,1,3.16l-9-.44a8,8,0,0,0-1-5.38,9.63,9.63,0,0,0-3.71-3.46,10,10,0,0,0-4.74-1.21H82v-8.9h28Z"/><path class="cls-5" d="M117.71,354.4a35.27,35.27,0,0,0,2.43-5.47,16,16,0,0,0,1-5.21,8.11,8.11,0,0,0-1.21-4.74,4.4,4.4,0,0,0-6.63-.42,12.77,12.77,0,0,0-2.33,3.4,46.79,46.79,0,0,0-1.86,4.32,36.38,36.38,0,0,1-1.82,4.06,15.26,15.26,0,0,1-2.63,3.62,11.51,11.51,0,0,1-3.9,2.56,15.12,15.12,0,0,1-5.73,1,12.58,12.58,0,0,1-6.65-1.86,13.47,13.47,0,0,1-5-5.44,18.75,18.75,0,0,1-1.89-8.83,28.64,28.64,0,0,1,.54-5.47,28.08,28.08,0,0,1,1.67-5.48,27.64,27.64,0,0,1,2.84-5.18l7.24,4.1a22.64,22.64,0,0,0-2.15,3.61,21.78,21.78,0,0,0-1.44,3.94,14.73,14.73,0,0,0-.51,3.65,12.29,12.29,0,0,0,.48,3.36,6.12,6.12,0,0,0,1.63,2.81,4.39,4.39,0,0,0,3.2,1.12,4,4,0,0,0,2.56-.93,9.46,9.46,0,0,0,2.11-2.49,20.59,20.59,0,0,0,1.67-3.43q.83-2.18,1.92-4.48a23,23,0,0,1,2.65-4.31,11.49,11.49,0,0,1,9.64-4.52,13.4,13.4,0,0,1,7.1,1.83,13,13,0,0,1,4.77,5.15,18,18,0,0,1,2,7.68,26.74,26.74,0,0,1-1.34,9.25,32.87,32.87,0,0,1-3.2,6.36Z"/><path class="cls-5" d="M96.34,364.2a14.82,14.82,0,0,1,7.68,2,14.25,14.25,0,0,1,5.34,5.67,17.48,17.48,0,0,1,2,8.38,16.91,16.91,0,0,1-2,8.32A13.56,13.56,0,0,1,104,394a15.55,15.55,0,0,1-7.68,1.89A15.74,15.74,0,0,1,88.62,394a13.71,13.71,0,0,1-5.4-5.41,16.87,16.87,0,0,1-2-8.45A18.33,18.33,0,0,1,83,371.91a13.55,13.55,0,0,1,5.19-5.67A15.48,15.48,0,0,1,96.34,364.2Zm-.07,9a8.49,8.49,0,0,0-3.93.9,7,7,0,0,0-2.79,2.43,6.08,6.08,0,0,0-1,3.45,6.43,6.43,0,0,0,1,3.65A6.61,6.61,0,0,0,92.34,386a9.81,9.81,0,0,0,7.9,0,6.68,6.68,0,0,0,2.75-2.37,6.44,6.44,0,0,0,1-3.65,6.09,6.09,0,0,0-1-3.45,7.12,7.12,0,0,0-2.75-2.43A8.48,8.48,0,0,0,96.27,373.22Z"/><path class="cls-5" d="M80.66,413.22A9,9,0,0,1,83,406.88,8.23,8.23,0,0,1,89,404.2H110v9H92.37a5.47,5.47,0,0,0-3,1,3.26,3.26,0,0,0-1.12,2.81,4.85,4.85,0,0,0,1.35,3.43,8.85,8.85,0,0,0,3.68,2.24,16.27,16.27,0,0,0,5.28.8H110v9H82v-8.13l5.12-.71-.58.13a12.19,12.19,0,0,1-3.07-2.43,10.42,10.42,0,0,1-2.08-3.49A13.09,13.09,0,0,1,80.66,413.22Z"/><path class="cls-5" d="M132.5,442.85v9H82v-9Z"/><path class="cls-5" d="M110,470.44l-4.93.7.38-.13a12.74,12.74,0,0,1,4.39,4.16,11.15,11.15,0,0,1,1.57,6,12,12,0,0,1-.64,4.06,7.84,7.84,0,0,1-1.89,3,6.6,6.6,0,0,1-3.23,1.66l-.07-.32a15,15,0,0,1,4.23,4.32,9.81,9.81,0,0,1,1.6,5.28A9.24,9.24,0,0,1,109,505.8a8.16,8.16,0,0,1-6.05,2.52H82v-8.89H99.28a8.42,8.42,0,0,0,3-.58,2.48,2.48,0,0,0,1.31-2.37,5,5,0,0,0-1.5-3.68,9.3,9.3,0,0,0-3.84-2.24,16,16,0,0,0-4.83-.73H82v-9H99.28a7.23,7.23,0,0,0,3-.67,2.73,2.73,0,0,0,1.31-2.47,4.72,4.72,0,0,0-1.5-3.55A9.61,9.61,0,0,0,98.32,472a15.49,15.49,0,0,0-4.74-.73H82v-9h28Z"/><path class="cls-5" d="M81.23,530.6a15.83,15.83,0,0,1,1.57-7.08,11.67,11.67,0,0,1,4.83-5A16.66,16.66,0,0,1,96,516.64a16.58,16.58,0,0,1,8.19,1.92,14,14,0,0,1,5.35,5.06,12.69,12.69,0,0,1,1.89,6.66,11.73,11.73,0,0,1-1.38,6.3,15.79,15.79,0,0,1-3,3.55l-1.09-.38,4.1.83v8.32H82v-9h6.08l-1.92.7c0-.08-.25-.34-.74-.76A15,15,0,0,1,83.7,538,12.09,12.09,0,0,1,82,534.92,11.55,11.55,0,0,1,81.23,530.6Zm7.3,2.56A8.21,8.21,0,0,0,89,536a6.45,6.45,0,0,0,1.41,2.24,8.31,8.31,0,0,0,2.33,1.66H99.6a6.16,6.16,0,0,0,2.4-1.54,7.25,7.25,0,0,0,1.54-2.43,8.68,8.68,0,0,0,.54-3.13,6.76,6.76,0,0,0-1-3.56,7.28,7.28,0,0,0-2.72-2.59,8,8,0,0,0-4-1,7.9,7.9,0,0,0-4,1,7.6,7.6,0,0,0-2.82,2.72A7,7,0,0,0,88.53,533.16Z"/><path class="cls-5" d="M122.26,562v9H110.1v6.78h-7V571H82v-9h21.12v-4.35h7V562Z"/></g></g></g></g></g></g></g></g>
                        </svg>  
                    </a>

                    <!-- banner 輪播 -->
                    <div class="hero_banner_wrap col-8" >
                        <div class="index_banner col-12">

                            <div class="carousel_wrap col-12">
                                <ul class="caroimg_wrap">
                                    <li class="caro_img01">
                                        <img src="./img/index/index_01.jpg" alt="">
                                    </li>   
                                    <li class="caro_img02">
                                        <img src="./img/index/index_01_02.jpg" alt="">
                                    </li>
                                    <li class="caro_img03">
                                        <img src="./img/index/index_01_03.jpg" alt="">
                                    </li>  
                                    <li class="caro_img00">
                                        <img src="./img/index/index_01.jpg" alt="">
                                    </li> 
                                </ul>
                            </div>

                            <!-- 溫度計 -->
                            <div class="thermometer_area row animate__animated animate__fadeInRight justify-content-end">
                                <div class="thermometer_container">
                                    <div class="thermometer_wrap d-flex align-items-center">
                                        <img class="thermometer d-block position-absolute" src="./img/thermometer/home_thermometer_head.svg" alt="">
                                
                                        <!-- <div class="thermometer_line_wrap"> -->
                                        <div class="thermometer_line">
                                            <div class="thermometer_move"></div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="home_page_number row justify-content-around">
                                        <p id="hpn_1">01</p>
                                        <p id="hpn_2">02</p>
                                        <p id="hpn_3">03</p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
        
                    <!-- social media -->        
                    <div class="index_hero_social animate__animated animate__fadeInRight col-1 d-flex flex-column justify-content-center align-items-end ">
                        <!-- fb -->
                        <img src="./SVG/icon-fb.svg" alt="" class="icon_fb">
                        <!-- line -->
                        <img src="./SVG/icon-line.svg" alt="" class="icon_line">
                        <!-- ig -->
                        <img src="./SVG/icon-ig.svg" alt="" class="icon_ig">
                    </div>
                </div>

            </div>
            
        </header>

        <!-- Section_About -->
        <div id="index_about" class="section_about ">
            <div class="about_wrap">
                <!-- 綠底 -->
                <div class="back02_wrap">
                    <img src="./img/index/index_back02.jpg" alt="" class="index_back02 col-12">
                </div>

                <!-- 圖文 -->
                <div class="index_about row">
                    <div class="about_imgwrap col-8">
                        <img src="./img/index/index_02.jpg" alt="" class="index_02">  
                    </div>
                
                    <div class="col-4 about_area d-flex flex-column justify-content-end">   
                        <div class="logo_01">
                            <img src="./SVG/logo_01.svg" alt="">
                        </div>
                        <div class="about_info">
                            <h5 class="about_h5">更有溫度、更生活化的</h5></br>
                            <h5 class="about_h5">36度瑜珈</h5></br>
                                <h5 class="about_h5">讓每個人都能</h5></br>
                                <h5 class="about_h5">找到最適合自己的產品</h5>
                        </div>
                        <button class="btn_w" onclick="location.href='about.php'">了解更多</button>
                    </div>      
                </div>

            </div>
            
        </div>

        <!-- Section_Identify -->
        <div id="index_identify" class="section_identify">
            <div class="section_container">
                <div class="row justify-content-center">
                    <div class="div identify_wrap col-2 d-flex flex-column align-items-center">
                        <img class="identify_box" src="./SVG/identify_01.svg" alt="">
                        <h5>環保無毒</h5>
                    </div>
                    <div class="div identify_wrap col-2 d-flex flex-column align-items-center">
                        <img class="identify_box" src="./SVG/identify_02.svg" alt="">
                        <h5>台灣製造</h5>
                    </div>
                    <div class="div identify_wrap col-2 d-flex flex-column align-items-center">
                        <img class="identify_box" src="./SVG/identify_03.svg" alt="">
                        <h5>專利防滑</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section_Products -->
        <div id="index_products" class="section_products">
            <div class="section_container">
                <div class="row">
                    <div class="index_prod_top d-flex flex-column col-5">
                        <h2 class="prod_title">找到屬於你的瑜珈墊</h2>
                        <p>大多數人不知道如何挑選好的瑜珈商品，因此對於瑜珈有了距離感，我們希望讓瑜珈更有溫度、更生活化，讓每個人都能夠輕鬆找到適合他們的瑜珈產品！</p>
                    </div>
                </div>

                <div class="fys_wrap_outer p-0">
                    <h1 class="fys_front_outer">Find Your Soulmat</h1>
                </div>
                <!-- 移動區 -->
                <div class="row index_prod_btm d-flex justify-content-center">
                    
                    <!-- 移動區範圍 -->
                    <div class="testline"></div>
                    <div class="prod_line d-flex col-10 justify-content-between align-content-center">

                        <!-- 直的find your soulmat -->
                        <div class="fys_wrap col-2 p-0">
                            <h1 class="fys_back fys_back_f ">Find</h1>
                            <h1 class="fys_back fys_back_y">Your</h1>
                            <h1 class="fys_back">Soulmat</h1>
                        </div>

                        <!-- 移動圖片們 -->
                        <div class="movemove prods_left col-5" data-rellax-speed="4"  >
                            
                                <div class="prods_box">
                                    <a href='<?= WEB_ROOT ?>product_mat.php?sid=1'>
                                        <div class="prods_picwrap ppwrap_01" >
                                            <img class="index_prodspic_h1" src="./img/index/index_04_h.jpg" alt="">
                                            <img class="index_prodspic01" src="./img/index/index_04.jpg" alt="">   
                                        </div>
                                    </a>
                                 
                                    <div>
                                        <div class="d-flex prod_pp_quick">
                                            <a href='<?= WEB_ROOT ?>product_mat.php?sid=1'>
                                                <div class="prod_ppwrap">
                                                    <h6 class="prod">36 pro® 6mm</h6>
                                                    <p class="prod_price">NT.3600</p>
                                                </div>
                                            </a>    
                                            <div class="index_quick" data-toggle="modal" data-target="#exampleModal">
                                                <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(1)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="prods_box ">
                                    <a href='<?= WEB_ROOT ?>product_mat.php?sid=6'>
                                        <div class="prods_picwrap ppwrap_02">
                                            <img class="index_prodspic_h2" src="./img/index/index_04_h_purple.jpg" alt="">
                                            <img class="index_prodspic02" src="./img/index/index_06.jpg" alt="">
                                        </div>
                                    </a> 
                                    <div class="d-flex prod_pp_quick">
                                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=6'>
                                            <div class="prod_ppwrap">
                                                <h6 class="prod">36 pro® 6mm</h6>
                                                <p class="prod_price">NT.3600</p>
                                            </div>
                                        </a> 
                                        <div class="index_quick" data-toggle="modal" data-target="#exampleModal">
                                            <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(6)">
                                        </div>
                                    </div>
                                </div>

                                <div class="prods_box">
                                    <a href='<?= WEB_ROOT ?>product_mat.php?sid=2'>
                                        <div class="prods_picwrap ppwrap_03">
                                            <img class="index_prodspic_h3" src="./img/index/index_04_h_green.jpg" alt="">
                                            <img class="index_prodspic03" src="./img/index/index_05.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="d-flex prod_pp_quick">
                                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=2'>
                                            <div class="prod_ppwrap">
                                                <h6 class="prod">36 pro® 6mm</h6>
                                                <p class="prod_price">NT.3600</p>
                                            </div>  
                                        </a>
                                        <div class="index_quick" data-toggle="modal" data-target="#exampleModal">
                                            <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(2)">
                                        </div>
                                    </div>    
                                </div>   
                        </div>

                        <div class="movemove prods_right col-5  " data-rellax-speed="5">
                            <div class="prods_box ">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=10'>
                                    <div class="prods_picwrap ppwrap_04">
                                        <img class="index_prodspic_h4" src="./img/index/index_04_h_red.jpg" alt="">
                                        <img class="index_prodspic04" src="./img/index/index_03.jpg" alt="">
                                    </div>
                                </a>
                                <div class="d-flex prod_pp_quick">
                                    <div class="prod_ppwrap">
                                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=10'>
                                            <h6 class="prod">36 prolite® 4.7mm</h6>
                                            <p class="prod_price">NT.2760</p>
                                        </a>
                                    </div>
                                    <div href="" class="index_quick quick_right" data-toggle="modal" data-target="#exampleModal">
                                        <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(10)">
                                    </div>
                                </div>    
                            </div>

                            <div class="prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=12'>
                                    <div class="prods_picwrap ppwrap_05">
                                        <img class="index_prodspic_h5" src="./img/index/index_04_h_black.jpg" alt="">
                                        <img class="index_prodspic05" src="./img/index/index_07.jpg" alt="">
                                    </div>
                                </a>
                                <div class="d-flex prod_pp_quick">
                                    <a href='<?= WEB_ROOT ?>product_mat.php?sid=12'>
                                        <div class="prod_ppwrap">
                                            <h6 class="prod">36 prolite® 4.7mm</h6>
                                            <p class="prod_price">NT.2760</p>
                                        </div>
                                    </a>
                                    <div href="" class="index_quick quick_right" data-toggle="modal" data-target="#exampleModal">
                                        <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(12)">
                                    </div>
                                </div>
                            </div>

                            <div class="prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=11'>
                                    <div class="prods_picwrap ppwrap_06">
                                        <img class="index_prodspic_h6" src="./img/index/index_04_h.jpg" alt="">
                                        <img class="index_prodspic06" src="./img/index/index_08.jpg" alt="">
                                    </div>
                                </a>
                                <div class="d-flex prod_pp_quick">
                                    <a href='<?= WEB_ROOT ?>product_mat.php?sid=11'>
                                        <div class="prod_ppwrap">
                                            <h6 class="prod">36 prolite® 4.7mm</h6>
                                            <p class="prod_price">NT.2760</p>
                                        </div>
                                    </a>
                                    <div href="" class="index_quick quick_right" data-toggle="modal" data-target="#exampleModal">
                                        <img src="./SVG/index_quickview.svg" alt="" class="prod_quick" onclick="showProductModal(11)">
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                

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
                    <div class="modal-body ">
                        <iframe src="modal.php?sid=17" frameborder="0"></iframe>
                    </div>
                    <div class="modal-footer">
                        <div class="space_30"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 彈跳視窗↑↑ -->
        

        <!-- Customer Reviews -->
        <div id="index_reviews" class="index_reviews container-fluid p-0">
            <div class="reviews_wrap  d-flex justify-content-center">
                <!-- Customer Reviews 背景 -->
                <div class="back04_wrap">
                    <img src="./img/index/index_back04.jpg" alt="" class="index_back04">
                </div>

                <!-- Customer Reviews 按鈕 左 -->
                <div class="reviews_btn col-1 d-flex justify-content-end">
                    <img src="./SVG/btn_left.svg" alt="" class="btn_left">
                </div>

                <!-- Customer Reviews 內容 -->
                <div class="col-9 reviews_inner d-flex flex-column justify-content-between">
                    <!-- Customer Reviews title -->
                    <h2 class="customer_reviews_title">Customer Reviews</h2>

                    <!-- 評論動態區 -->
                    <div class="reviews_area  ">

                        <div class="reviews_box reviews_ruler">
                            <div class="reviews_innerbox">
                                <h6 class="reviews_title">
                                    互動測驗很棒
                                </h6>
                                <div class="reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="reviews_p">透過小測驗讓我找到適合自己的產品，顏色樣式可以自己搭，選擇性多。</p>
                                <div class="reviews_member row">
                                    <img src="./SVG/icon-indexmember.svg" alt="" class="icon_member">
                                    <p class="reviews_nickname">沙莉</p>
                                </div>
                            </div>   
                        </div>

                        <div class="reviews_box">
                            <div class="reviews_innerbox">
                                <h6 class="reviews_title">
                                    顏值高的瑜珈墊
                                </h6>
                                <div class="reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="reviews_p">有外表又有內容的瑜珈墊，是能背著走的時尚配件，走到哪都能輕鬆做瑜珈。</p>
                                <div class="reviews_member row">
                                    <img src="./SVG/icon-indexmember.svg" alt="" class="icon_member">
                                    <p class="reviews_nickname">俞臻</p>
                                </div>
                            </div>   
                        </div>

                        <div class="reviews_box">
                            <div class="reviews_innerbox">
                                <h6 class="reviews_title">
                                    孕媽咪用得更安心
                                </h6>
                                <div class="reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="reviews_p">環保無毒的材質，讓孕媽媽用得很放心，厚度也能客製，真的太貼心了！</p>
                                <div class="reviews_member row">
                                    <img src="./SVG/icon-indexmember.svg" alt="" class="icon_member">
                                    <p class="reviews_nickname">馬咪</p>
                                </div>
                            </div>
                        </div>

                        <div class="reviews_box">
                            <div class="reviews_innerbox">
                                <h6 class="reviews_title">
                                    尋尋覓覓好久
                                </h6>
                                <div class="reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="reviews_p">適合男生用的瑜珈墊超難找！終於有適合高個兒的，CP值超高，周邊質感也很好。</p>
                                <div class="reviews_member row">
                                    <img src="./SVG/icon-indexmember.svg" alt="" class="icon_member">
                                    <p class="reviews_nickname">小新</p>
                                </div>
                            </div>   
                        </div>

                        <div class="reviews_box  ">
                            <div class="reviews_innerbox ">
                                <h6 class="reviews_title">
                                    初學者容易上手
                                </h6>
                                <div class="reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="reviews_p">讓初學瑜珈的我找到適合的瑜珈墊，分類明確易懂，而且花色真的很美！</p>
                                <div class="reviews_member row">
                                    <img src="./SVG/icon-indexmember.svg" alt="" class="icon_member">
                                    <p class="reviews_nickname">蝴蝶</p>
                                </div>
                            </div>   
                        </div>
                                     
                    </div>

                    <!-- 大頭貼 -->
                    <div class="memberhead_wrap">
                        <img src="./img/index/member_head.jpg" alt="" class="member_head">
                        <img src="./img/index/member_head_02.jpg" alt="" class="member_head">
                        <img src="./img/index/member_head_03.jpg" alt="" class="member_head">
                        <img src="./img/index/member_head_04.jpg" alt="" class="member_head">
                        <img src="./img/index/member_head_05.jpg" alt="" class="member_head">
                    </div>
                </div>

                <!-- Customer Reviews 按鈕 右 -->
                <div class="reviews_btn col-1 d-flex justify-content-start">
                    <img src="./SVG/btn_right.svg" alt="" class="btn_right">
                </div>
            </div>
        </div>
        
        <!-- 人氣商品 -->
        <div id="index_hot" class="index_hot container-fluid p-0">
            <div class="hot_wrap d-flex">
                <!-- 後大圖 -->
                <div class="back05_wrap col-8">    
                    <img src="./img/index/index_11_01.jpg" alt="" class="index_back11">
                </div>

                <div class="index_hot_area col-4 d-flex flex-column align-content-end">
                    <h2 class="index_hot_title">人氣商品</h2>
                    <p class="index_hot_p">
                        更有溫度、更生活化的瑜珈墊！極輕量，方便帶著走，止滑專利，加強運動安全性，台灣製造，品質更有保障
                    </p>
                </div> 
            </div> 
            
            <!-- 前面三張小圖 -->
            <div class="index_hotitem_area d-flex p-0 justify-content-end">
                <div class="d-flex">
                           
                    <div class="index_hotitem_wrap i_hot_w01"> 
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=11'>    
                            <img src="./img/index/index_11_inner01.jpg" alt="" class="index_hotitem hotitem_01">
                            <img src="./img/index/index_11_01.jpg" alt="" class="index_back11">
                        </a>
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=11'>
                            <div class="index_hot_ppwrap hot_ppwrap01 d-flex flex-column text-center">
                                <div class='index_hot_a'>
                                    <h6>36 prolite® 4.7mm</h6>
                                    <p>NT.2760</p>
                                </div>    
                            </div>
                        </a>    
                    </div>
                                  
                    <div class="index_hotitem_wrap i_hot_w02">    
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=25'>     
                            <img src="./img/index/index_11_inner02.jpg" alt="" class="index_hotitem hotitem_02">  
                            <img src="./img/index/index_11_02.jpg" alt="" class="index_back11_02">   
                        </a>
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=25'>  
                            <div class="index_hot_ppwrap hot_ppwrap02 d-flex flex-column text-center">
                                <div class='index_hot_a' >
                                    <h6>重量運動手環</h6>
                                </div>
                                <p>NT.2280</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="index_hotitem_wrap i_hot_w03">  
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=16'>    
                            <img src="./img/index/index_11_inner03.jpg" alt="" class="index_hotitem hotitem_03">  
                            <img src="./img/index/index_11_03.jpg" alt="" class="index_back11_03">  
                        </a>
                        <a href='<?= WEB_ROOT ?>product_mat.php?sid=16'> 
                            <div class="index_hot_ppwrap hot_ppwrap03 d-flex flex-column text-center">
                                <div class='index_hot_a'>
                                    <h6>薄軟木瑜珈磚</h6>
                                </div>
                                <p>NT.780</p>
                            </div>
                        </a>  
                    </div>
                </div>                
            </div>
           
            <!-- fixed botton -->
        <div class="index_fixbtn">
            <div class="fixbtn_wrap">
                <!-- scroll top -->
                <div class="srolltop_btn ">
                    <div class="scrolltopbox d-flex flex-column">
                        <div class="scrolltop_p">Scroll Top</div>
                        <div class="scrolltop_line"></div> 
                    </div>              
                </div> 
                <!-- svg -->
                <div>
                    <svg class='fixbtn' xmlns="http://www.w3.org/2001/svg" viewBox="0 0 645 645"><defs><style>.cls-1{fill:none;}.cls-22{fill:#333;}</style></defs><g id="圖層_2" data-name="圖層 2"><g id="圖層_1-2" data-name="圖層 1"><g id="圖層_2-2" data-name="圖層 2"><g id="圖層_1-2-2" data-name="圖層 1-2"><circle class="cls-1" cx="322.5" cy="322.5" r="322.5"/><g id="Group_1867" data-name="Group 1867"><g id="Path_569" data-name="Path 569"><path class="cls-2" d="M537.7,524.7c-4.3,0-10.2-.3-17.8-.6-10.8-.5-23-1.1-32.7-.7l-.1-2c9.8-.4,22.1.2,32.9.7,11.5.5,22.4,1,24.4,0,.7-.4,2-1.2,2-2.1,0-1.1-2-2.4-3-3-3-.1-30.9-1.1-33.2-1.3a14.84,14.84,0,0,0-2.3-.1c-4.5-.2-12.7-.5-14.5-6.1-2.2-8.6-3.5-23.7-.7-24.6.6-.2,1.4-.1,2,1.4l.1.2v.2c-.1,3.5.8,6,2.5,7.6,2.8,2.7,7.7,2.3,10.5,2,1.6-.1,2.5-.2,3,.2a15.26,15.26,0,0,1,1.5,1.3,10.63,10.63,0,0,0,1.1.9c1.3-4.3,3.3-4.9,5.3-5.5a6.81,6.81,0,0,0,3.6-2.1,12.26,12.26,0,0,0,3.8-8.7,12.79,12.79,0,0,0-4.3-8.9l-.4-.3c-2.8-2.2-4.8-3.8-12-3.9a22.86,22.86,0,0,0-12.3,3.2l-1.4.8-.1-1.6s-.4-4.7-1.1-10.1c-1-7.9-1.9-10.9-2.5-12.1-8.1-13.4-4-19-1.1-23.1l.2-.2c18.8-15.5,19.9-23.5,20.7-28.8a10,10,0,0,0,.2-1.6l.1-.3c3.9-7.7,22-24.3,28.2-24.8h.4l.3.3c16.9,14,33.1,15.5,41.8,16.3,4.1.4,6.3.6,7.3,1.8l.1.1.1.2c1.5,4.6,3.6,7.4,6.1,8.1a5.82,5.82,0,0,0,5-1.3c4.9-3.8,9-3.4,12.7-3.1,1.3.1,2.4.2,3.6.2h.2c6-.4,10.8-.8,11.8-2.1a1.44,1.44,0,0,0,.2-.9c-.8-3.6-1.9-3.8-7.8-4.6l-1.8-.3c-11.4-1.2-26.4-6.9-44.5-17.2-13.4-7.6-23.6-15-23.7-15l1.2-1.6c.4.3,40.6,29.1,67.4,31.8.7.1,1.3.2,1.9.3,5.9.9,8.3,1.2,9.5,6.2a3,3,0,0,1-.5,2.5c-1.6,2-6,2.3-13.2,2.8h-.2a16.44,16.44,0,0,1-3.9-.2c-3.6-.3-7-.6-11.3,2.7a7.6,7.6,0,0,1-6.8,1.7c-2.1-.6-5.1-2.7-7.3-9.2-.7-.5-3.3-.7-5.8-1-8.9-.8-25.3-2.4-42.6-16.5-5.5,1.1-22.2,16.1-26.1,23.5-.1.4-.1.9-.2,1.4-.8,5.6-2,14.1-21.3,30-2.8,3.8-6.1,8.6,1.3,20.9,1,2,1.9,6.1,2.7,12.8.5,3.6.8,6.9.9,8.7a24.94,24.94,0,0,1,12-2.8c7.8.1,10.2,2,13.2,4.4l.4.3a15.08,15.08,0,0,1,5,10.3,13.72,13.72,0,0,1-4.3,10.1,8.52,8.52,0,0,1-4.5,2.6c-1.8.5-3.1.9-4.1,4.8a1.68,1.68,0,0,1-.7,1.1c-.9.4-1.9-.4-3.4-1.8a9,9,0,0,0-1.2-1,13.57,13.57,0,0,0-1.8.1c-3.2.3-8.6.7-12.1-2.6a9.67,9.67,0,0,1-2.8-5.5,71.14,71.14,0,0,0,2.2,18.6c1.3,4.3,8.7,4.5,12.7,4.7a14.73,14.73,0,0,1,2.5.2c1.9.2,22.6,1,33.2,1.3h.2l.2.1c.4.2,4.3,2.1,4.4,4.8,0,1.5-1,2.8-3.1,4C544.2,524.5,541.6,524.7,537.7,524.7Z"/></g><g id="Path_570" data-name="Path 570"><path class="cls-2" d="M542.3,539.2c-1.7,0-4.5-.8-8.9-2.1-5.5-1.6-12.4-3.7-16.1-3l-.8.2c-5.7,1.1-23,4.5-37.2,4.2a12.75,12.75,0,0,0-1.9-.1c-1.7,0-3.7,0-5.1-1.6-1.6-1.8-2.2-5.2-1.9-11-.2-3.3.7-17.1,1.6-30.5.6-9.2,1.2-17.9,1.2-21.1a14.86,14.86,0,0,1,5.5-11c3.2-2.5,7.3-3.1,12-1.9h.1a9.82,9.82,0,0,1,5.8,5.3c2,4.6,1,11.3-2.9,20.1-7,15.9-4.9,36-4.9,36.2l-2,.2c-.1-.8-2.2-20.8,5.1-37.2,3.6-8.3,4.6-14.5,2.9-18.5a7.67,7.67,0,0,0-4.6-4.2c-4.1-1-7.6-.5-10.3,1.6a13,13,0,0,0-4.7,9.5c-.1,3.3-.6,12-1.2,21.2-.8,12.8-1.8,27.2-1.6,30.3v.2c-.3,5.1.1,8.3,1.3,9.6.8.9,1.9.9,3.7.9a13.4,13.4,0,0,1,2,.1c14,.3,31.1-3,36.7-4.1l.9-.2c4.2-.7,11,1.3,17,3.1,3.5,1,7.9,2.3,8.7,2l.2-.1c3.5-1.5,5.4-2.6,5.6-3.2.1-.3-.6-1.1-.8-1.4-3.1-2.2-15.9-5.9-20.6-7.1l.5-1.9c.7.2,17.5,4.6,21.4,7.5l.1.1c.8.9,1.7,2,1.4,3.2-.3,1.5-2,2.6-6.6,4.6C543.4,539.1,542.9,539.2,542.3,539.2Z"/></g><g id="Path_571" data-name="Path 571"><path class="cls-2" d="M473.3,487.8c-.2,0-5.8-.2-11-6.1s-10.7-18.8-7.8-46.2v-.2l.1-.2a118.25,118.25,0,0,0,9.4-23.5c.5-1.4,1-2.6,1.4-3.8,2.5-7.5,4.9-14.5,26.4-34.1l.1-.1c3.1-2.2,6.1-4.5,9-6.8,7.3-5.7,14.9-11.6,24.6-15.8,1.5-.7,2.9-1.5,4.3-2.3,6.6-3.8,13.4-7.7,23.4,3l-1.5,1.4c-8.9-9.5-14.5-6.3-20.9-2.6-1.5.8-3,1.7-4.5,2.4-9.4,4.1-16.9,9.9-24.1,15.5-2.9,2.3-6,4.6-9.1,6.8-21.1,19.2-23.3,25.7-25.8,33.2a35.7,35.7,0,0,1-1.4,3.8,123,123,0,0,1-9.5,23.6c-2.8,26.5,2.4,38.8,7.2,44.4,4.6,5.3,9.5,5.5,9.6,5.5Z"/></g><g id="Path_572" data-name="Path 572"><path class="cls-2" d="M523.4,473.1l-2-.3c.7-5,0-8.6-2.1-10.9-2.7-2.8-6.8-2.6-7.6-2.5-8.5,1.4-7.5,9.4-7.4,9.8l-2,.3c0-.1-1.3-10.3,9.2-12,1.4-.1,6.1-.3,9.3,3.1C523.3,463.3,524.2,467.5,523.4,473.1Z"/></g><g id="Path_573" data-name="Path 573"><rect class="cls-2" x="530.59" y="360.19" width="28.4" height="2" transform="translate(167.8 895.17) rotate(-88.32)"/></g><g id="Path_574" data-name="Path 574"><rect class="cls-2" x="479.15" y="399.68" width="2" height="32.9" transform="translate(-141.92 545.51) rotate(-52.66)"/></g><g id="Path_575" data-name="Path 575"><rect class="cls-2" x="473.97" y="413.36" width="2" height="29.4" transform="translate(-64.14 771.84) rotate(-74.55)"/></g><g id="Path_576" data-name="Path 576"><rect class="cls-2" x="509.52" y="468.25" width="2" height="31.7" transform="translate(-91.26 848.58) rotate(-74.68)"/></g></g><g id="Group_1868" data-name="Group 1868"><g id="Path_577" data-name="Path 577"><path class="cls-2" d="M217.4,445.5a2.2,2.2,0,0,1-.8-.1c-1.4-.5-1.9-2.2-2.4-3.9-.2-.7-.6-2-1-2.2-.6,0-2-.1-6.8-.5-15.5-1.4-51.6-4.6-68.6-2a2.25,2.25,0,0,1-2.1-.4c-1.9-1.3-4.2-5.3-3.7-9.5.4-2.8,2.1-6.5,8.3-8.7h0c14.1-5,66.8,9.3,73.1,11.3.3,0,.7-.1,1.1-.1,3.5-.4,8.9-1,15.8,5.1a14.25,14.25,0,0,0,2.7,2.1c1,.7,1.9,1.2,2,2.3s-1,2.1-2.8,3.5l-.2.1c-2,1-4.3,1-6.5,1-2.5,0-4.9,0-6.6,1.5l-.2.1A2.84,2.84,0,0,1,217.4,445.5Zm-4.1-8.3h0c1.6.2,2.2,1.9,2.7,3.7.3,1,.8,2.4,1.2,2.6a1.09,1.09,0,0,0,.5-.1c2.3-2,5.1-2,7.8-2a12.27,12.27,0,0,0,5.5-.8,8.75,8.75,0,0,0,1.9-1.7,8.65,8.65,0,0,0-1-.7,13.53,13.53,0,0,1-3-2.4c-6.2-5.4-10.8-4.9-14.2-4.5a6.6,6.6,0,0,1-1.4.1h-.2l-.2-.1c-8-2.6-59.1-16-72-11.4-6.3,2.3-7.3,6.2-6.9,9.1.4,3.3,2.4,5.6,3.1,5.8h.3c17.1-2.7,53.6.5,69.2,1.9,3.3.3,6.2.6,6.6.5Z"/></g><g id="Path_578" data-name="Path 578"><path class="cls-2" d="M186.9,424.1c0-.1-3.9-9.1-12.6-10.1-2.6-.5-3.1-1.8-3.3-2.9a4.32,4.32,0,0,1-2.1,1.2,3.58,3.58,0,0,1-2.2-.2c-3.2-.6-9.2-1.9-13.3,6.5l-1.8-.9c4.8-9.7,12.3-8.2,15.5-7.6a9.64,9.64,0,0,0,1.2.2,5.4,5.4,0,0,0,2-1.4c.4-.4.8-.9,1.5-.8.2,0,.6.2.9.8a11.15,11.15,0,0,1,.3,1.3c.2,1.1.2,1.5,1.7,1.7,9.8,1.2,14,10.9,14.1,11.3Z"/></g><g id="Path_579" data-name="Path 579"><path class="cls-2" d="M151.7,582.2c-1,0-2.9-.4-3.8-3.5-4.6-12.6-11.9-24.2-16.8-31.9-1.9-3-3.4-5.4-4.3-7.1-30.3-37.8-43.2-63.2-45-67.9-10-33.7,3.8-48.4,17.1-54.9,26-16.9,46,.2,46.2.4l-1.3,1.5c-.8-.7-19.1-16.3-43.8-.2l-.1.1c-18.1,8.7-23.7,26.9-16.1,52.4,1.7,4.6,14.5,29.8,44.7,67.4l.1.2c.8,1.6,2.3,4,4.2,7,4.9,7.8,12.3,19.5,17,32.3.4,1.5,1.2,2.3,2.1,2.2a1.71,1.71,0,0,0,1.5-1.6c0-.3-.1-.9-.1-2.2-.4-16.6-2.8-25.3-7.2-25.9h-.2l-.1-.1c-4.6-2.3-5.5-8.5-6-11.5-.1-.5-.2-1-.2-1.1s0-.1-.1-.3c-1.7-5.2-8.4-23.3-22.4-38.5-8.4-11-8.8-28.2-8.6-30.1.1-.5.3-1.3.6-2.6a114.42,114.42,0,0,0,3.2-19.7c.3-4.1,1.6-7.1,3.8-8.9,3.2-2.6,7.5-2.1,9.5-1.8.4,0,.6.1.9.1a23.1,23.1,0,0,0,3.2-.4c1.3-.2,2.7-.5,4.4-.7a21.12,21.12,0,0,1,2.6-.2v2a21.05,21.05,0,0,0-2.5.2,35.13,35.13,0,0,0-4.3.7,12.64,12.64,0,0,1-3.7.4c-.3,0-.6-.1-1-.1-1.9-.2-5.5-.7-8,1.4-1.8,1.5-2.8,4-3.1,7.5a117.54,117.54,0,0,1-3.2,20,11.27,11.27,0,0,0-.5,2.4c-.2,1.8.2,18.2,8.1,28.6,14.2,15.4,21,33.9,22.7,39.2l.1.2a7.42,7.42,0,0,1,.3,1.6c.4,2.6,1.2,8,4.8,9.9,7.3,1.2,8.5,16.4,8.8,27.8a9.27,9.27,0,0,0,.1,2v.2a3.75,3.75,0,0,1-3.3,3.6C152,582.2,151.9,582.2,151.7,582.2Z"/></g><g id="Path_580" data-name="Path 580"><path class="cls-2" d="M81.1,467.4c-4.6-.6-16.1-6.4-20-19.2-20.2-35.9-41.6-70.7-45.7-76.9-3.6-2.2-5.5-4.5-5.7-7-.2-3.8,3.5-6.7,6.5-9.1.3-.3.7-.5,1-.8,6-8.1,11-11.3,15.7-10.2l.2.1a3.9,3.9,0,0,1,2.4,2.6c.2,1.5-1.3,2.7-2.9,4a23.77,23.77,0,0,0-3.6,3.5c-2.5,4-2.1,9.5-2,12.2,0,.7.1,1.1.1,1.4,1.1,3.2,13.8,22,23.1,30,13.3,10.4,31.7,35.4,32.5,36.4l-1.6,1.2c-.2-.3-19.1-25.9-32.2-36.1-9.5-8.2-22.9-27.9-23.8-31.2l-.1-.2v-.2a6.82,6.82,0,0,0-.1-1.2c-.2-2.9-.6-8.9,2.3-13.4a16.87,16.87,0,0,1,4-4c.9-.7,2.3-1.8,2.2-2.3,0,0-.1-.4-1.2-.9-3.8-.9-8.3,2.2-13.6,9.5l-.2.2c-.4.3-.7.6-1.1.9-2.6,2.1-5.9,4.7-5.7,7.4.1,1.8,1.8,3.6,4.9,5.5l.2.1.1.2c3.8,5.6,25.5,40.9,45.9,77.3l.1.2c3.9,13.1,15.7,17.5,18.4,17.9Z"/></g><g id="Path_581" data-name="Path 581"><path class="cls-2" d="M168.6,442.7a16.55,16.55,0,0,1-3.2-.3,15.64,15.64,0,0,1-10.2-6.8l1.7-1.1-.8.5.8-.5a14.81,14.81,0,0,0,8.9,5.9c5,1,10.7-.8,16.9-5.2l1.2,1.6C178.5,440.7,173.3,442.7,168.6,442.7Z"/></g><g id="Path_582" data-name="Path 582"><path class="cls-2" d="M174.9,449.8a12.72,12.72,0,0,1-5.6-1.3,9.67,9.67,0,0,1-5.1-7.1l2-.3a7.09,7.09,0,0,0,4.1,5.6c2.6,1.4,5.8,1.3,7,.7a6.43,6.43,0,0,0,3.5-4,7.77,7.77,0,0,0-.9-5l1.7-1.1a9,9,0,0,1,1.2,6.5c-.5,2.2-2.1,3.9-4.6,5.3A6.46,6.46,0,0,1,174.9,449.8Z"/></g><g id="Path_583" data-name="Path 583"><rect class="cls-2" x="37.06" y="402.16" width="14.5" height="2" transform="translate(-199.91 79.34) rotate(-30.75)"/></g><g id="Path_584" data-name="Path 584"><path class="cls-2" d="M116.2,439.6c-11.5-5.7-19.2-20.2-19.6-20.8l1.8-.9c.1.1,7.8,14.5,18.7,19.9Z"/></g><g id="Path_585" data-name="Path 585"><path class="cls-2" d="M113.6,444.1c-11.9-1.7-18.3-6.8-21.5-10.8a19.65,19.65,0,0,1-4.2-8.5l2-.3c.1.6,2.6,14.6,24,17.6Z"/></g><g id="Path_586" data-name="Path 586"><path class="cls-2" d="M176.4,422.2l-1.1-1.7c1.2-.8,6.8-4.4,6.9-4.4l1.1,1.7C183.1,417.9,177.7,421.4,176.4,422.2Z"/></g><g id="Path_587" data-name="Path 587"><rect class="cls-2" x="109.93" y="512.47" width="17.8" height="2" transform="translate(-243.49 130.72) rotate(-30.4)"/></g></g><g id="Group_1869" data-name="Group 1869"><g id="Path_588" data-name="Path 588"><path class="cls-2" d="M337.6,124.2c-7.9,0-17.9-2.8-27.8-8.1-1.6-.4-3.2-.9-4.7-1.3-6.3-1.8-11.7-3.4-20.8-1.6-8.5,1.4-28.3-1.6-56.1-14.9a13.69,13.69,0,0,1-3.5-1.3c-3.1-1.4-7.8-3.5-20-4-9.5-.7-21.1-8.4-26.1-11.7-.6-.4-1.1-.7-1.5-1s-1.1-.6-1.9-.9c-2.5-1.3-6.3-3.3-7.9-1.7-1.4,1.6-5.3,4-8,3.1-1-.3-2.3-1.3-2.4-3.7v-.4c.3-1,.5-1.9.8-2.7a12.61,12.61,0,0,0,.9-5h0a16.72,16.72,0,0,0-.4-2.4c-.7-3.7-1.6-8.8.7-11a4.37,4.37,0,0,1,4.1-.8h.2a31.52,31.52,0,0,1,6.4,4.1c3.6,2.7,6.9,5.3,10.3,4l.2-.1h.2a38.91,38.91,0,0,0,6.8-.6c8.1-1,20.5-2.6,33,2.7,11.5,5.2,24.2,1.6,28.3.5a4.05,4.05,0,0,0,1-.3c.2-.1,25.2-4.5,48.6,7.8,6.5,3.3,16.8,5.8,28.8,7q.9.15,2.1.3c7.2.8,22.1,2.4,26.6,22.4.5,3.7,0,9.1-8.2,18.8l-.1.1-.2.1C344.7,123.6,341.4,124.2,337.6,124.2Zm-45.7-13.7c5.3,0,9.4,1.2,13.8,2.4,1.5.4,3.1.9,4.7,1.3l.2.1c13.8,7.4,28.4,9.9,35.5,6.2,7.5-9,8.1-13.8,7.6-17-4.1-18.6-17.6-20-24.8-20.8-.8-.1-1.6-.2-2.2-.3-12.3-1.2-22.8-3.8-29.5-7.2-20.4-10.7-43.7-8.5-47.2-7.6a9.25,9.25,0,0,0-1,.3c-4.3,1.2-17.6,4.9-29.7-.6-12-5.1-24-3.6-31.9-2.6a40.93,40.93,0,0,1-7,.6c-4.3,1.5-8.2-1.5-12-4.3a25.64,25.64,0,0,0-5.9-3.8c-1.5-.3-2,.1-2.2.3-1.5,1.4-.6,6.5-.1,9.2a17.62,17.62,0,0,1,.4,2.7,14.67,14.67,0,0,1-1,5.6c-.2.7-.5,1.5-.7,2.4.2,1.5.8,1.7,1.1,1.8,1.6.5,4.7-1.2,5.9-2.6,2.7-2.7,7.3-.3,10.3,1.3a15,15,0,0,0,1.8.9l.1.1c.4.2.9.6,1.6,1,4.9,3.2,16.2,10.7,25.1,11.4,12.6.4,17.5,2.7,20.7,4.1a11.63,11.63,0,0,0,3.1,1.1l.3.1c25.7,12.2,46.1,16.2,55,14.8A40.77,40.77,0,0,1,291.9,110.5Z"/></g><g id="Path_589" data-name="Path 589"><path class="cls-2" d="M270.9,90.5c-.5-.1-47.9-8.6-73-13.6a69.81,69.81,0,0,1-13.5-3.4,84.66,84.66,0,0,0-25-4.7l.1-2A90.14,90.14,0,0,1,185,71.6a74.64,74.64,0,0,0,13.2,3.3c25.1,5.1,72.6,13.5,73,13.6Z"/></g><g id="Path_590" data-name="Path 590"><path class="cls-2" d="M216.4,93.6c-.4-3.5,2.5-13.3,2.7-13.8l1.9.6c-.8,2.7-2.9,10.4-2.6,13Z"/></g><g id="Path_591" data-name="Path 591"><path class="cls-2" d="M219.3,79.8l-2-.1c.3-4,2.5-12.8,2.5-13.2l1.9.5C221.8,67.1,219.6,75.9,219.3,79.8Z"/></g><g id="Path_592" data-name="Path 592"><path class="cls-2" d="M284.6,112.2c-2.9-19.3,6.2-39.4,7.3-40.9l1.6,1.1c-1.6,2.2-9.6,21.9-7,39.5Z"/></g><g id="Path_593" data-name="Path 593"><path class="cls-2" d="M299.4,112.3l-2-.1c1-16.8,8.2-34.6,8.2-34.8l1.9.8C307.4,78.3,300.3,95.8,299.4,112.3Z"/></g><g id="Path_594" data-name="Path 594"><path class="cls-2" d="M305.9,198.1a7.91,7.91,0,0,1-3.3-.8l-.2-.1c-.4-.3-1.4-1.2-2.8-2.4-2.5-2.1-6.3-5.3-9-7.5-5.6-4.8-4.4-8.5-3.4-11.4a10.55,10.55,0,0,0,.6-2.4l.1-.2c9.8-25.2,35.9-52.5,36.1-52.8l1.4,1.4c-.3.3-26,27.2-35.7,52a11.07,11.07,0,0,1-.7,2.6c-.9,2.9-1.7,5.3,2.8,9.3,2.7,2.2,6.4,5.4,9,7.5,1.3,1.1,2.3,1.9,2.7,2.3.6.3,2.4.9,3.4.3s1-2.2.9-3.5c-.3-3.6-4.9-7.2-7.7-9.4a16.61,16.61,0,0,1-2.2-1.9c-1.1-1.3-2.2-4.4,2.4-9.6,1-1.2,2.4-3.2,4-5.5,4-5.7,9.4-13.6,16-18.6,4.2-2.6,18.6-16.6,25.8-26.9l1.6,1.1c-7,10.1-21.5,24.5-26.3,27.4-6.2,4.7-11.6,12.4-15.5,18.1a65.84,65.84,0,0,1-4.2,5.7c-2.6,3-3.5,5.5-2.3,7a11.42,11.42,0,0,0,1.8,1.5c3,2.4,8.1,6.3,8.5,10.8.2,2.6-.4,4.4-1.8,5.3A2.72,2.72,0,0,1,305.9,198.1Z"/></g><g id="Path_595" data-name="Path 595"><path class="cls-2" d="M354.5,100.9l-1-1.7c3.5-2.2,13.7-18.3,14.4-20.9.3-3.3,4.8-10.1,6.5-12.1l.2-.2c7.3-4.9,13.6-14.1,17.4-19.7,2.8-4.1,3.5-5.1,4.5-4.9s3.1-.5,5.6-1.4c.9-.3,1.9-.6,2.9-1,3.5-2.2,3.5-3.1,3.5-3.1a2,2,0,0,0-.6-.2h-.1c-1.7-.4-4.8-1.4-5.2-3A1.79,1.79,0,0,1,403,31c4.8-4.7,4.8-6.4,3.1-9.1-7-2.5-10.7,6.5-12,9.5l-.1.2c-1,3.9-6,10.2-8.4,12.2-7,5.2-38.9,43.5-39.2,43.9l-1.5-1.3c1.3-1.6,32.4-38.9,39.5-44.2,2.4-2,7-8.1,7.7-11.2l.1-.2.1-.3c3.9-9.4,8.9-12.9,14.9-10.5l.3.1.2.3c2.6,4.2,2,6.8-3,11.7a12.84,12.84,0,0,0,3.6,1.5c.4.1,1.9.4,2.2,1.8s-1.1,3.1-4.5,5.3l-.2.1c-1.1.3-2.1.7-3,1-2.7.9-4.6,1.6-6.2,1.5-.5.5-1.7,2.3-2.9,4-3.8,5.6-10.3,15-17.8,20.1-2,2.5-5.8,8.6-5.9,11v.2C369.2,81,358.7,98.3,354.5,100.9Zm41.6-57.5Z"/></g><g id="Path_596" data-name="Path 596"><path class="cls-2" d="M350.4,116.9c-5.7-1.6-7-2.9-9-4.8-.4-.4-.9-.9-1.5-1.4a7,7,0,0,1-2.4-5.4c.1-2.7,2.1-4.9,3.7-6.2,5.1-3.5,13.5,1.7,13.9,1.9l-1.1,1.7c-.1,0-7.7-4.7-11.6-2-1,.8-2.8,2.6-2.9,4.7a4.72,4.72,0,0,0,1.8,3.8c.5.5,1,.9,1.5,1.4,1.9,1.8,3,2.8,8.2,4.3Z"/></g><g id="Path_597" data-name="Path 597"><path class="cls-2" d="M371.5,134.1a25.37,25.37,0,0,1-5.4-.7c-.4-.1-.7-.1-1-.2l-.3-.1c-14.8-7.8-13.6-18.9-13.6-19.4l2,.2c0,.4-1,10.2,12.4,17.3.3.1.6.1.9.2,4.4.9,12.5,2.6,19.4-9.4a8.92,8.92,0,0,0,.8-7,14,14,0,0,0-7.3-8.1c-3.8-2.3-5.4-3.9-6.5-5.7-.6,1-1.5,2.3-3,2.1a11.15,11.15,0,0,1-1.3-.3c-2.5-.7-7.2-2-12.7,3.5l-1.4-1.4c6.3-6.3,11.9-4.8,14.6-4a8.11,8.11,0,0,1,1.1.3c.4.1.9-1,1.2-1.4.4-.7.8-1.4,1.5-1.5a1.61,1.61,0,0,1,1.1.5l.1.1c.9,1.8,1.9,3.2,6.4,6,4.2,2.1,7.2,5.4,8.3,9.2a10.64,10.64,0,0,1-1,8.6C382.3,132.2,376.2,134.1,371.5,134.1Z"/></g><g id="Path_598" data-name="Path 598"><path class="cls-2" d="M357.2,127.2l-.3-2c6.9-1.2,29.7-12.4,29.9-12.5l.9,1.8C386.7,115,364.3,125.9,357.2,127.2Z"/></g><g id="Path_599" data-name="Path 599"><path class="cls-2" d="M374.3,142.8a15.11,15.11,0,0,1-3.8-.6l-.2-.1a10.11,10.11,0,0,1-5.9-10l2,.1a8.25,8.25,0,0,0,4.7,8c3.1.8,6.5,1,10.4-3.1.5-.5,2.2-4.6-.4-7.7l1.5-1.3c3.4,3.9,1.5,9.3.3,10.4C379.8,141.9,376.9,142.8,374.3,142.8Z"/></g></g></g></g></g></g></svg>
                
                </div>
            </div>    
        </div>
        </div> 
        
        <!-- footer -->
        <!-- <div class="footer">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-8 d-flex p-0 flex-column flex-sm-column flex-md-row flex-lg-row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="foot-info1">
                            <h6 class="footer_big_title" style="color: #f2a200;">SERVICE</h6>
                            <p class="footer_title_wrap">
                                <a class="text-white" href="#">如何購買│How to Buy</a><br />
                                <a class="text-white" href="#">產品特點│Identify</a><br />
                                <a class="text-white" href="#">會員中心│Member</a><br />
                                <a class="text-white" href="#">如何選擇│Find Your Soulmat</a>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 foot-info2">
                            <h6 class="footer_big_title">INFORMATION</h6>
                            <p class="footer_title_wrap">
                                <a class="text-white" href="#">關於我們│About Us</a><br />
                                <a class="text-white" href="#">產品資訊│Products</a><br />
                                <a class="text-white" href="#">瑜珈提案│Projects</a><br />
                                <a class="text-white" href="#">物流資訊│Delivery</a>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 foot-info3">
                            <h6 class="footer_big_title">CONTACT</h6>
                            <p class="footer_small_title">
                                +886 012 34567<br />
                                36yoga@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-10">
                        <div class="d-flex justify-content-between">
                            <div class="footer-logo">
                                <img src="./SVG/logo.svg" alt="" />
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="#" class="social-icon"><img src="./SVG/fb.svg" alt="" /></a>
                                <a href="#" class="social-icon"><img src="./SVG/line.svg" alt="" /></a>
                                <a href="#" class="social-icon"><img src="./SVG/instagram.svg" alt="" /></a>
                            </div>
                        </div>
                        <div class="dividerline"></div>
                        <p class="text-center my-4 copyright">
                            © 36 YOGA All Right<span class="mobile-display-none">
                                Reserved.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    

    
<!-- index mobile  -->
    <div class="index_mobile">
        <header id="m_index_home" class="m_header">
            <!-- mobile hero 背景 -->
            <div class="m_header_backwrap col-4 p-0">
                <img src="./img/index/index_back01.jpg" alt="" class="m_index_back01">
            </div>
            <!-- mobile hero 上層 -->
            <div class="m_index_headerwrap col-12 p-0">
                <!-- 輪播 -->
                <div class="m_index_bannerwrap row p-0  justify-content-end">
                    <div class="m_index_caropic_wrap animate__animated animate__fadeInLeft col-11">
                        <ul class="m_caroimg_wrap">
                            <li class="m_caro_img01">
                                <img src="./img/index/index_01.jpg" alt="">
                            </li>   
                            <li class="m_caro_img02">
                                <img src="./img/index/index_01_02.jpg" alt="">
                            </li>
                            <li class="m_caro_img03">
                                <img src="./img/index/index_01_03.jpg" alt="">
                            </li>  
                            <li class="m_caro_img00">
                                <img src="./img/index/index_01.jpg" alt="">
                            </li> 
                        </ul>
                    </div>
                    <!-- 溫度計 -->
                    <div class="m_index_thermometer row justify-content-end animate__animated animate__fadeInRight ">
                        <div class="thermometer_container">
                            <div class="thermometer_wrap d-flex align-items-center">
                                <img class="thermometer d-block position-absolute" src="./SVG/new_m_index_thermometer.svg" alt="">
                        
                                <div class="thermometer_line">
                                    <div class="m_thermometer_move"></div>
                                </div>
                                <!-- </div> -->
                            </div>
                            <div class="m_home_page_number row justify-content-around">
                                <p id="m_hpn_1">01</p>
                                <p id="m_hpn_2">02</p>
                                <p id="m_hpn_3">03</p>
                            </div>
                        </div>
                    </div>    
                </div>
                    <!-- mobile hero 上層 -->
                <div class="m_hero_btm d-flex p-0 col-12">
                    <!-- scroll down -->
                    <div class="m_srolldown_btn animate__animated animate__fadeInDown col-2 d-flex flex-column justify-content-end align-items-center">
                        <div class="m_scrollbtn_wrap">
                            <div class="m_scroll_p">Scroll  Down</div>
                            <div class="m_scrolldown_line"></div>
                        </div> 
                    </div>
                    <!-- find your soulmat -->
                    <div class="m_fys_btn animate__animated animate__fadeInUp">
                        <a href='<?= WEB_ROOT ?>yoga-test.php' >
                            <img src="./SVG/checkbtn.svg" alt="" class="m_checkbtn">
                        <h1 class="m_fys_title">Find Your Soulmat</h1> 
                        </a>   
                    </div>
                </div>
            </div>   
        </header> 

    <!-- mobile about -->
        <div id="m_index_about" class="m_section_about d-flex justify-content-center">
            
            <!-- 背景 --> 
            <div class="m_about_imgwrap">
                <img src="./img/index/index_02.jpg" alt="" class="m_index_02">  
            </div>
            
            <!-- 綠底 -->
            <div class="m_back02_wrap">
                <img src="./img/index/index_back02.jpg" alt="" class="m_index_back02">
            </div>

            <!-- logo + 文字 -->
            <div class="m_about_area d-flex flex-column">   
                <div class="m_logo_01">
                    <img src="./SVG/logo_01.svg" alt="">
                </div>
                <div class="m_about_info">
                    <h6 class="m_about_h6">更有溫度、更生活化的</h6></br>
                    <h6 class="m_about_h6">36度瑜珈</h6></br>
                    <h6 class="m_about_h6">讓每個人都能</h6></br>
                    <h6 class="m_about_h6">找到最適合自己的產品</h6>
                </div>
                <button class="m_btn_w" onclick="location.href='about.php'">了解更多</button>
            </div>      

            
            
        </div>

    <!-- mobile identity -->
        <div id="m_index_identify" class="m_section_identify">
            <div class="m_identify_area d-flex flex-column justify-content-center">
                <div class="d-flex justify-content-center flex-column">
                    <div class="m_identify_wrap m_idenwrap_01">
                        <img class="m_identify_box" src="./SVG/identify_01.svg" alt="">
                        <h6 class="m_identify_h6">環保無毒</h6>
                    </div>
                    <div class="m_identify_wrap m_idenwrap_02">
                        <img class="m_identify_box" src="./SVG/identify_02.svg" alt="">
                        <h6 class="m_identify_h6">台灣製造</h6>
                    </div>
                    <div class="m_identify_wrap m_idenwrap_03">
                        <img class="m_identify_box" src="./SVG/identify_03.svg" alt="">
                        <h6 class="m_identify_h6">專利防滑</h6>
                    </div>
                </div>
            </div>
        </div>

    <!-- mobile product -->
        <div id="m_index_products" class="m_section_products">
            <div class="m_section_container">
                <div class="m_index_prod_top d-flex flex-column col-10">
                    <h2 class="m_prod_title">找到屬於你的<br></br>瑜珈墊</h2>
                    <p>大多數的人不知道如何挑選好的瑜珈商品，因此對於瑜珈有了距離感，我們希望讓瑜珈更有溫度、更生活化，讓每個人都能夠輕鬆找到適合他們的瑜珈產品</p>
                </div>
                <!-- 移動區 -->
                <div class="m_index_prod_btm d-flex justify-content-end">
                    <!-- 移動區範圍 -->
                    <!-- 直的find your soulmat 隱藏-->
                    <div class="m_fys_wrap col-12 p-0 d-flex justify-content-end">
                        <h1 class="m_fys_back">Find Your Soulmat</h1>
                    </div>
                    <!-- 直的find your soulmat 顯示-->
                    <div class="m_fys_outer p-0 d-flex">
                        <h1 class="m_fys_front">Find Your Soulmat</h1>
                    </div> 
                    <div class="m_prod_line d-flex col-11  justify-content-end">
                        <!-- 移動圖片們 -->
                        <div class="m_prods_left m_movemove col-5" data-rellax-speed="2">
                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=1'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic01" src="./img/index/index_04.jpg" alt="">
                                    </div>
                                    
                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 pro® 6mm</h6>
                                            <p class="m_prod_price">NT.3600</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=6'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic02" src="./img/index/index_06.jpg" alt="">
                                    </div>

                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 pro® 6mm</h6>
                                            <p class="m_prod_price">NT.3600</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=2'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic03" src="./img/index/index_05.jpg" alt="">
                                    </div>

                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 pro® 6mm</h6>
                                            <p class="m_prod_price">NT.3600</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="m_prods_right m_movemove col-5" data-rellax-speed="2">
                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=10'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic04" src="./img/index/index_03.jpg" alt="">
                                    </div>
                                    
                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 prolite® 4.7mm</h6>
                                            <p class="m_prod_price">NT.2760</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=12'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic05" src="./img/index/index_07.jpg" alt="">
                                    </div>

                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 prolite® 4.7mm</h6>
                                            <p class="m_prod_price">NT.2760</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="m_prods_box">
                                <a href='<?= WEB_ROOT ?>product_mat.php?sid=11'>
                                    <div class="m_prods_picwrap">
                                        <img class="m_index_prodspic06" src="./img/index/index_08.jpg" alt="">
                                    </div>

                                    <div class="m_prod_pp">
                                        <div class="m_prod_ppwrap">
                                            <h6 class="m_prod">36 prolite® 4.7mm</h6>
                                            <p class="m_prod_price">NT.2760</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                  
            </div>
        </div>

    <!-- mobile reviews -->
        <div id="m_index_reviews" class="m_index_reviews container-fluid p-0">
            <div class="m_reviews_wrap  d-flex justify-content-center">
                <!-- Customer Reviews 背景 -->
                <div class="m_back04_wrap">
                    <img src="./img/index/index_back04.jpg" alt="" class="m_index_back04">
                </div>


                <!-- Customer Reviews 內容 -->
                <div class="col-12 m_reviews_inner d-flex flex-column justify-content-between">
                    <!-- Customer Reviews title -->
                    <h2 class="m_customer_reviews_title">Customer Reviews</h2>

                    <!-- 評論動態區 -->
                    <div class="m_reviews_area  ">

                        <div class="m_reviews_box reviews_ruler">
                            <div class="m_memberhead_wrap">
                                <img src="./img/index/member_head.jpg" alt="" class="m_member_head">
                            </div>
                            
                            <div class="m_reviews_innerbox">
                                <h6 class="m_reviews_title">
                                    互動測驗很棒
                                </h6>
                                <div class="m_reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="m_reviews_p">透過小測驗讓我找到適合自己的產品，顏色樣式可以自己搭，選擇性多。</p>
                                <div class="m_reviews_member row">
                                    <img src="./SVG/icon-member.svg" alt="" class="m_icon_member">
                                    <p class="m_reviews_nickname">沙莉</p>
                                </div>
                            </div>   
                        </div>

                        <div class="m_reviews_box">
                            <div class="m_memberhead_wrap">
                                <img src="./img/index/member_head_02.jpg" alt="" class="m_member_head">
                            </div>
                            <div class="m_reviews_innerbox">
                                <h6 class="m_reviews_title">
                                    顏值高的瑜珈墊
                                </h6>
                                <div class="m_reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="m_reviews_p">有外表又有內容的瑜珈墊，是能背著走的時尚配件，走到哪都能輕鬆做瑜珈。</p>
                                <div class="m_reviews_member row">
                                    <img src="./SVG/icon-member.svg" alt="" class="m_icon_member">
                                    <p class="m_reviews_nickname">俞臻</p>
                                </div>
                            </div>   
                        </div>

                        <div class="m_reviews_box">
                            <div class="m_memberhead_wrap">
                                <img src="./img/index/member_head_03.jpg" alt="" class="m_member_head">
                            </div>
                            <div class="m_reviews_innerbox">
                                <h6 class="m_reviews_title">
                                    孕媽咪用得更安心
                                </h6>
                                <div class="m_reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="m_reviews_p">環保無毒的材質，讓孕媽媽用得很放心，厚度也能客製，真的太貼心了！</p>
                                <div class="m_reviews_member row">
                                    <img src="./SVG/icon-member.svg" alt="" class="m_icon_member">
                                    <p class="m_reviews_nickname">馬咪</p>
                                </div>
                            </div>
                        </div>

                        <div class="m_reviews_box">
                            <div class="m_memberhead_wrap">
                                <img src="./img/index/member_head_04.jpg" alt="" class="m_member_head">
                            </div>
                            <div class="m_reviews_innerbox">
                                <h6 class="m_reviews_title">
                                    尋尋覓覓好久
                                </h6>
                                <div class="m_reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="m_reviews_p">適合男生用的瑜珈墊超難找！終於有適合高個兒的，CP值超高，周邊質感也很好。</p>
                                <div class="m_reviews_member row">
                                    <img src="./SVG/icon-member.svg" alt="" class="m_icon_member">
                                    <p class="m_reviews_nickname">小新</p>
                                </div>
                            </div>   
                        </div>

                        <div class="m_reviews_box  ">
                            <div class="m_memberhead_wrap">
                                <img src="./img/index/member_head_05.jpg" alt="" class="m_member_head">
                            </div>
                            <div class="m_reviews_innerbox ">
                                <h6 class="m_reviews_title">
                                    初學者容易上手
                                </h6>
                                <div class="m_reviews_stars d-flex flex-wrap">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                    <img src="./SVG/star.svg" alt="" class="star">
                                </div>
                                <p class="m_reviews_p">讓初學瑜珈的我找到適合的瑜珈墊，分類明確易懂，而且花色真的很美！</p>
                                <div class="m_reviews_member row">
                                    <img src="./SVG/icon-member.svg" alt="" class="m_icon_member">
                                    <p class="m_reviews_nickname">蝴蝶</p>
                                </div>
                            </div>   
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    <!-- mobile 人氣商品 -->
        <div id="m_index_hot" class="m_index_hot d-flex p-0 justify-content-end">

            <!-- 背景 -->
            <div class="m_hot_back col-2"></div>

            <div class="m_hot_front">
                <div class="m_index_hot_area d-flex flex-column">
                    <h2 class="m_index_hot_title">人氣商品</h2>
                    <p class="m_index_hot_p">
                        更有溫度、更生活化的瑜珈墊！極輕量，方便帶著走，止滑專利，加強運動安全性，台灣製造，品質更有保障。
                    </p>
                </div> 
        
                <div class="m_hot_wrap d-flex flex-column">
                    <!-- 大圖 -->
                    <div class="m_back05_wrap">
                        <img src="./img/index/index_11_01.jpg" alt="" class="m_index_back11">
                    </div>
                    <!-- 三張小圖 -->
                    <div class="m_index_hotitem_area  d-flex flex-row justify-content-between p-0">   
                        <div class="m_index_hotitem_wrap m_hotwrap01">
                            <img src="./img/index/index_11_inner01.jpg" alt="" class="m_index_hotitem">
                            <img src="./img/index/index_11_01.jpg" alt="" class="m_index_hotitem">
                        </div>
                        <div class="mindex_hot_ppwrap mhot_ppwrap01 ">
                            <a class='mindex_hot_a' href='<?= WEB_ROOT ?>product_mat.php?sid=11'>
                                <h6 class='m_hot_h6'>36 prolite®</br>4.7mm</h6>
                            </a>
                            <p class='m_hot_p'>NT.2760</p>
                        </div>
                        <div class="m_index_hotitem_wrap m_hotwrap02">
                            <img src="./img/index/index_11_inner02.jpg" alt="" class="m_index_hotitem">
                            <img src="./img/index/index_11_02.jpg" alt="" class="m_index_hotitem">
                        </div>
                        <div class="mindex_hot_ppwrap mhot_ppwrap02 ">
                            <a class='mindex_hot_a' href='<?= WEB_ROOT ?>product_mat.php?sid=25'>
                                <h6 class='m_hot_h6'>重量運動手環</h6>
                            </a>
                            <p class='m_hot_p'>NT.2280</p>
                        </div>
                        <div class="m_index_hotitem_wrap m_hotwrap03">
                            <img src="./img/index/index_11_inner03.jpg" alt="" class="m_index_hotitem">
                            <img src="./img/index/index_11_03.jpg" alt="" class="m_index_hotitem">
                        </div>     
                        <div class="mindex_hot_ppwrap mhot_ppwrap03">
                            <a class='mindex_hot_a' href='<?= WEB_ROOT ?>product_mat.php?sid=16 '>
                                <h6 class='m_hot_h6'>薄軟木瑜珈磚</h6>
                            </a>
                            <p class='m_hot_p'>NT.780</p>
                        </div>
                    </div>
                </div> 
        
                <!-- 按鈕 -->
                <!-- <div class="m_hot_btn">
                    <img src="./SVG/btn_left_g.svg" alt="" class="m_gbtn_left">
                    <img src="./SVG/btn_right_g.svg" alt="" class="m_gbtn_right">
                </div> -->

            </div>
            
        </div>

    
    </div> 

<?php include __DIR__ . '/parts/html-footer.php'; ?>
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script src="./lib/rellax.min.js"></script>
<script src="./lib/slick.min.js"></script>
<script src="./lib/homepage.js"></script>

<script>
    // 跳出視窗↓↓
    function showProductModal(sid) {
    $('iframe')[0].src = "modal.php?sid=" + sid;
    $('#exampleModal').modal('show')
    }
    // 跳出視窗↑↑
</script>

<?php include __DIR__ . '/parts/html-end.php'; ?>