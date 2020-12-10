   // 手機訂單明細收合↓↓
   $(".m_order_detail").hide();

   $(".m_openIt").on("click", function () {
     if ($(this).children().attr("src") == "svg/custom/plus_o_icon.svg") {
       $(this).children().attr("src", "svg/custom/minus_o_icon.svg");
       $(this).children("p").html("收起訂單明細");
     } else {
       $(this).children().attr("src", "svg/custom/plus_o_icon.svg");
       $(this).children("p").html("展開訂單明細");
     }
     $(this).parent().prev().slideToggle("500");
   });
   // 手機訂單明細收合↑↑


   $('.m_detail_button').on('click', function () {
    $('.order_history_detail_btn').toggleClass('change-margin-top');})

// fill-in-infomation

$(window).on("scroll", function () {
  let scrolltop = $(window).scrollTop();
  let isＭobile = $(this).width() < 576;
  let inPc = $(this).width() < 576;

  if (isＭobile || scrolltop < 205) {
    console.log(scrolltop);
    $(".i-need-w-and-fix").removeClass(
      "position-fixed  i-need-w-and-fix-w-part"
    );
  } else {
    $(".i-need-w-and-fix").addClass(
      "position-fixed i-need-w-and-fix-w-part"
    );
    $(".i-need-w-and-fix").css("top", "4rem");
  }
});
// 用途fixed



//鍵盤輸入練習

const $allInput = $(".mobile-need-change-padding-all input");
$allInput.on("keyup", function () {
  $allInput.each(function () {
    $("." + this.id + "-text").text($(this).val());
  });
});

$("#auto-change-input-two input")
  .eq(0)
  .on("keyup", function () {
    if ($(this).val().length == 2) {
      $("#auto-change-input-two input").eq(1).focus();
    }
  });



  function calcTotal() {

    let totalMoney = 0;
    let totalWeight = 0;
    let totalCountNumber = 0;
    $('.m_order_product_wrap').each(function() {
        const df = $(this);
        const totalcount = parseInt(df.find('.count').text());
        const weight = parseInt(df.find('.weight').text());
        const hismoney = parseInt(df.find('.price').text());

        totalMoney += hismoney;
        totalWeight += weight * totalcount;
        totalCountNumber += totalcount;
    });
    console.log({
        totalMoney,
        totalWeight,
        totalCountNumber
    })
    $('#totalMoney').text(totalMoney);
    $('#totalWeight').text(totalWeight);
    $('#totalCountNumber').text(totalCountNumber);
    totalAmount(totalMoney);
}
calcTotal();

function totalAmount(tt) {
  let lastPay = 0;
  const transFee = parseInt($('#trans_fee').text());
  const bouns = parseInt($('#deduction').text());
  lastPay = tt + transFee - bouns;
  $('#amount').text(lastPay);
}



//table-info