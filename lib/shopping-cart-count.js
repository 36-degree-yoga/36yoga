     
    // ↓↓ 商品數量↓↓// 
    var t = $('.count');/*  數量顯示框*/
    $('.plus').click(function () {
      if (t.val() < 10) {/* 數量最大不能超過 */
        t.val(parseInt(t.val()) + 1);
      } else {
        t.val(10);
      }
    })
    $('.minus').click(function () {
      if (t.val() <= 1) {	/*數量最少爲1  */
        t.val(1);
      } else {
        t.val(parseInt(t.val()) - 1);
      }
    })
    // ↑↑ 商品數量↑↑ //