//nav icon hover 效果/

$('.nav-icon').hover(function(){
    $(this).find('.nav-icon-line').css('fill','#DB5C00').css('transition','.5s');
    $(this).find('.nav-icon-stroke').css('stroke','#DB5C00').css('transition','.5s');
    
  })

  $('.nav-icon').click(function(){
    $(this).find('.nav-icon-line').css('fill','#DB5C00').css('transition','.5s');
    $(this).find('.nav-icon-stroke').css('stroke','#DB5C00').css('transition','.5s');
    
  })

$('.nav-icon').mouseleave(function(){
      $('.nav-icon-line').css('fill','#004a13').css('transition','.5s');
      $('.nav-icon-stroke').css('stroke','#004a13').css('transition','.5s');
  })

  $('.nav-logo').hover(function(){
    $(this).find('path').css('fill','#DB5C00').css('transition','.5s');

  })

  $('.nav-logo').click(function(){
    $(this).find('path').css('fill','#DB5C00').css('transition','.5s');

  })


$('.nav-logo').mouseleave(function(){
      $('.nav-logo').find('path').css('fill','#004a13').css('transition','.5s');
   
  })

     
// navbar捲動消失//
let scrollLast = 0;

  $(document).ready(function(){
      let device=$(window).width();
        if (device < 992){
          $('.nav-desktop').removeClass('d-flex').css('display','none');
          $('.nav-mobile').addClass('d-flex').css('display','inline-block');
        

        }else{
          $('.nav-desktop').css('display','inline-block').addClass('d-flex');
          $('.nav-mobile').removeClass('d-flex').css('display','none');
          
          $(window).scroll(function () {

          let scrollNow = $(this).scrollTop();

          if (scrollLast < scrollNow) {
              $('.nav-desktop').addClass('hide');
          }
          else {
              $('.nav-desktop').removeClass('hide');
          }

          scrollLast = scrollNow;

          })

        }
  });
///判斷手機版顯示Navbar
  $(window).resize(function(){
    
      let device=$(window).width();
        if (device < 992){
          $('.nav-desktop').removeClass('d-flex').css('display','none');
          $('.nav-mobile').addClass('d-flex').css('display','none');
          //inline-block
          

        }else{
          $('.nav-desktop').css('display','inline-block').addClass('d-flex');
          $('.nav-mobile').removeClass('d-flex').css('display','none');
          $('.nav-search-area').removeClass('show');
          $(window).scroll(function () {
              
              let scrollNow = $(this).scrollTop();

              if (scrollLast < scrollNow) {
                  $('nav').addClass('hide');
              }
              else {
                  $('nav').removeClass('hide');
              }

              scrollLast = scrollNow;

              })

        }
     
  });

///手機版搜尋點擊顯示   切換其他地方會隱藏
$('.nav-search').on('click',function(e){
  e.stopPropagation();
  $('.nav-search-area').toggleClass('show');
  $('.nav-icon-mobile').toggleClass('hide');
  $('.nav-logo').toggleClass('hide');
})



$(document).click(function(e){
  var target = $(e.target);
  if(target.closest("nav").length != 0) return;
  $('.nav-search-area.show').removeClass('show');
  $('.nav-icon-mobile.hide').removeClass('hide');
  $('.nav-logo.hide').removeClass('hide');
})

//https://www.jianshu.com/p/42d9bc59e25a


//
$('.menu-icon').on('click',function(){
$('.nav-mobile-side').css('right','0%').css('display','flex').css('opacity','1');
$('.side-top').css('display','block');

})
$('.close-btn').on('click',function(){
$('.nav-mobile-side').css('right','100%').css('display','none').css('opacity','0');
$('.side-top').css('display','none');

})
