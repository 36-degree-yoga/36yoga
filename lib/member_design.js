// 會員中心sidebar hover標題:文字與icon變色↓↓
$('#bar_order a').css('color', '#db5c00');
$('#bar_order').find('.cls-1').css('fill','#db5c00')

$('.account_sidebar_title  a').on('mouseenter', function () {
  console.log('hi')
  $(this).css('color', '#db5c00');
  $(this).siblings().find('.cls-1').css('fill', '#db5c00');
  $('#bar_order a').css('color', '#db5c00');
  $('#bar_order').find('.cls-1').css('fill','#db5c00')
});
$('.account_sidebar_title  a').on('mouseleave', function () {
  console.log('hi')
  $(this).css('color', '#333333');
  $('.cls-1').css('fill', '#333333');
  $('#bar_order a').css('color', '#db5c00');
$('#bar_order').find('.cls-1').css('fill','#db5c00')
});
// 會員中心sidebar hover標題:文字與icon變色↑↑

// 側bar到一個位置fix住↓↓
// $(window).on('scroll',function(){
//     let scrollTop = $(this).scrollTop();
//     let barFixed = 200;
//     let barUnFixd = 500;
    
//     console.log(scrollTop)

//     console.log(scrollTop)
//     if(scrollTop < barFixed){
//         $('.account_side_bar_wrap').removeClass('bottomFixed');
//     }else if(scrollTop < barUnFixd){
//         $('.account_side_bar_wrap').removeClass('bottomFixed');
//     }else{
//         $('.account_side_bar_wrap').addClass('bottomFixed');
        
//     } 
// });
// 側bar到一個位置fix住↑↑  



// like的hover↓↓ 
// $('.btn_like').on('click', function() {
//     $(this).find('.like_fill').toggleClass('color');
// });
// $('.btn_like').hover(
//     function() {
//         $(this).find('.like_stroke').addClass('hover')
//     },
//     function() {
//         if ($(this).find('.like_stroke').hasClass('hover')) {
//             $(this).find('.like_stroke').removeClass('hover')
//         } else {

//             $(this).find('.like_fill').css("fill", "none");
//         }
//     }
// );

// like的hover↑↑



// 手機板side bar動畫↓↓
$('.m_account_option').on('click',function(){
    $(this).children().addClass('check_border').parent().siblings().children().removeClass('check_border');

});
// 手機板side bar動畫↑↑


  // 繼續編輯 hover

      $(".product_img_wrap").on("mouseenter", function () {
        $(this).find("#edit-btn").css("display", "initial");
      });
      $(".product_img_wrap").on("mouseleave", function () {
        $(this).find("#edit-btn").css("display", "none");
      });