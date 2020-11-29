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

//credit card
let credit = document.querySelector(".flip-card-inner");
let cvv = document.querySelector("#cvv-code");
let demotext = document.querySelector("#demotext");
let demotextdate = document.querySelector("#demotextdate");
let number = document.querySelectorAll(".credit-card-front-info");
// 背面
cvv.addEventListener("click", function () {
  credit.classList.add("turn-around");
  demotext.classList.add("there-need-hidden");
  demotextdate.classList.add("there-need-hidden");
});
//前面
number.forEach(function (element) {
  element.addEventListener("click", function () {
    credit.classList.remove("turn-around");
    demotext.classList.remove("there-need-hidden");
    demotextdate.classList.remove("there-need-hidden");
  });
});

// "/"出現
$(".demo-hidden-trigger").focus(function () {
  $(".there-need-hidden").css("opacity", "1");
});

let allInput = document.getElementById("auto-change-input");
input = allInput.getElementsByTagName("input");
let iNow = 0;
(type = !-[1] ? "onpropertychange" : "oninput"), (limit = 4); //滿足自動切換焦點的字元數
for (let i = 0; i < input.length - 1; i++) {
  input[i].index = i;
  input[i][type] = function () {
    iNow = this.index;
    let that = this;
    setTimeout(function () {
      that.value.length > limit - 1 && input[iNow + 1].focus();
    }, 0);
  };
}

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



     