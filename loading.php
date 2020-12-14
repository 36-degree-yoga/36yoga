<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style>

  html{
    font-family: 'Josefin Sans', sans-serif;
  }

  .loading-screen {
    /* background-color: #d9d9d9; */
    background-image: url('./img/index/index_back_white.jpg');
    /* display: block; */
    height: 100vh;
    margin-top: 0 !important;
    position: fixed;
    width: 100%;
    z-index: 2000000000;
    padding-top: 300px;
    position: relative;
  }

  .loading-screen .loader {
    margin: 120px auto 0 auto;
    padding:  0;
    text-align: center;
    width: 600px;
    position: absolute;
  }

  .loading-screen .loader .loading-graphic img {
    display: inline-block;
    margin: 50px;
    width: 100px;
    opacity: 0;
  }

  #number36{
    padding-top: 70vh;
  }

  .logo_green{
    width: 250px;
    height: 250px;
  }

  /*loading*/
          #number36 {
          font-family: 'Josefin Sans', sans-serif;
          font-size: 60px;
          padding: 0;
          font-weight: 300!important;
          color: #333333;
          }
  </style>
</head>

<body>


<div id="loading_screen" class="loading-screen text-center d-flex justify-content-center">
      <div>
        <div id="number36" class="number">36</div>
      </div>
     
    <div class="loader">
        <div class="loading-graphic d-flex flex-row">
            <img src="./SVG/SVG/yoga_pose01.svg" alt="logo"/>
            <img src="./SVG/SVG/yoga_pose02.svg" alt="logo"/>
            <img src="./SVG/SVG/yoga_pose03.svg" alt="logo"/>
        </div>
    </div>

    <img class='logo_green' src="./SVG/about_logo.svg" alt="">
    
</div>

<script src="./lib/jquery-3.5.1.js"></script>
<!-- js連結 -->

<!-- <script src="./lib/rellax.min.js"></script>
<script src="./lib/slick.min.js"></script>
<script src="./lib/homepage.js"></script> -->
<script>
 $(document).ready(function(){
// loading girls

  setTimeout(fadeImages,1);
    setInterval(fadeImages, 1000);
    
    function fadeImages(){
      setTimeout(fadeIn, 500);
      function fadeIn() {
        $(".loader .loading-graphic img").each(function (i) {
          $(this)
            .delay(i++ * 100)
            .fadeTo(500, 1); //設秒跟透明度
        });
        setTimeout(fadeOut, 1000);
      }

      function fadeOut() {
        $(".loader .loading-graphic img").each(function (i) {
          $(this)
            .delay(i++ * 100)
            .fadeTo(500, 0);
        });
      }    
    }



// number counter
    $.fn.jQuerySimpleCounter = function( options ) {
        var settings = $.extend({
            start: 0,
            end: 100,
            easing: 'swing',
            duration: 400,
            complete: ''
        }, options );

        var thisElement = $(this);

        $({count: settings.start}).animate({count: settings.end}, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
          var mathCount = Math.ceil(this.count);
          thisElement.text(mathCount);
        },
        complete: settings.complete
      });
    
    };

// loading counter number and girls fadeout
    $('.number').jQuerySimpleCounter({end: 36,duration: 4000});

    setTimeout(function(){
      $('.loading-graphic').fadeOut(6000);
    });

    setTimeout(function(){
      $('.number').fadeOut(6000);
    });

    
// loading logo fadein
    $('.logo_green').hide();

        setTimeout(function(){
        
          $('.logo_green').delay(4500).fadeIn(1000);
          setTimeout(() => {
            $('.loading-graphic').html('');
            $('#number36').html('');
          }, 4000);
          
        });

        setTimeout(() => {
          location.href='homepage.php';
        }, 6000);
    })


</script>

</body>
</html>