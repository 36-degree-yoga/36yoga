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
//credit card


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