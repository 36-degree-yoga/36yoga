// 變更照片的動畫↓↓
$('.member_account_img_wrap').mouseenter(function(){
    $('.mask').css('display','block')
    
});
$('.member_account_img_wrap').mouseleave(function(){
    $('.mask').css('display','none');
});
// 變更照片的動畫↑↑



// 會員中心sidebar hover標題:文字與icon變色↓↓
$('#bar_account a').css('color', '#db5c00');
$('#bar_account').find('.cls-1').css('fill','#db5c00')

$('.account_sidebar_title  a').on('mouseenter', function () {
  console.log('hi')
  $(this).css('color', '#db5c00');
  $(this).siblings().find('.cls-1').css('fill', '#db5c00');
  $('#bar_account a').css('color', '#db5c00');
  $('#bar_account').find('.cls-1').css('fill','#db5c00')
});
$('.account_sidebar_title  a').on('mouseleave', function () {
  console.log('hi')
  $(this).css('color', '#333333');
  $('.cls-1').css('fill', '#333333');
  $('#bar_account a').css('color', '#db5c00');
$('#bar_account').find('.cls-1').css('fill','#db5c00')
});
// 會員中心sidebar hover標題:文字與icon變色↑↑

// 手機板side bar動畫↓↓
$('.m_account_option').on('click',function(){
    $(this).children().addClass('check_border').parent().siblings().children().removeClass('check_border');

});
// 手機板side bar動畫↑↑