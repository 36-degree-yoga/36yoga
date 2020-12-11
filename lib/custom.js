
    // ↓↓放大縮小
    $('.zoom_icon img').first().on('click',function(){
      $('.mat_canvas').css('transform','scale(1.4)')
    })
    $('.zoom_icon img').last().on('click',function(){
      $('.mat_canvas').css('transform','scale(1)')
    })

    $('.m_zoom_icon img').first().on('click',function(){
      $('.mat_show_wrap').css('transform','scale(1.4)')
    })
    $('.m_zoom_icon img').last().on('click',function(){
      $('.mat_show_wrap').css('transform','scale(1)')
    })

    // ↑↑放大縮小

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

    // ↓↓ 總價計算↓↓// 
    $('.a-w').hide()  //寬
    $('.a-t').hide()  //材質
    $('.a-p').hide()  //鋼印

    // 顯示加錢尺寸幹我成功了!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $('.add-200').on('click', function () {
      let add = parseInt($(this).val())
      let now = parseInt($('.mtp').val())
      let count = parseInt($('#mat-count').val())
      if (add == '200') {
        $('.a-w').show()
        $('#matw-pay').val(add)
        $('.mat_space').removeClass('justify-content-center');
        $('.mat_space').addClass('justify-content-start')
      } else {
        $('.a-w').hide()
        $('#matw-pay').val(add)
        $('.mat_space').removeClass('justify-content-start');
        $('.mat_space').addClass('justify-content-center')
      }
      let texturePay = parseInt($('#mat-texture-pay').val())
      let wPay = parseInt($('#matw-pay').val())
      let printPay = parseInt($('#mat-print-pay').val())
      if (isNaN(texturePay)) {
        texturePay = 0
      }
      if (isNaN(wPay)) {
        wPay = 0
      }
      if (isNaN(printPay)) {
        printPay = 0
      }
      // console.log(wPay)

      now = 3600 + parseInt(texturePay + wPay + printPay)
      final = now * count
      $('.mtp').val(final)
      $('.nooo').val(now)
      console.log($('.nooo').val())
    })


    // 顯示加錢材質幹我成功了!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $('.add-150').on('click', function () {
      let add = parseInt($(this).val())
      let now = parseInt($('.mtp').val())
      let count = parseInt($('#mat-count').val())
      if (add == '150') {
        $('.a-t').show()
        $('#mat-texture-pay').val(add)
      } else {
        $('.a-t').hide()
        $('#mat-texture-pay').val(add)
      }
      let texturePay = parseInt($('#mat-texture-pay').val())
      let wPay = parseInt($('#matw-pay').val())
      let printPay = parseInt($('#mat-print-pay').val())
      if (isNaN(texturePay)) {
        texturePay = 0
      }
      if (isNaN(wPay)) {
        wPay = 0
      }
      if (isNaN(printPay)) {
        printPay = 0
      }
      // console.log(wPay)

      now = 3600 + parseInt(texturePay + wPay + printPay)
      final = now * count
      $('.mtp').val(final)
      $('.nooo').val(now)

    })

    // 顯示加錢文字幹我成功了!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    $('.add-80').on('click', function () {
      let add = parseInt($(this).val())
      let now = parseInt($('.mtp').val())
      let count = parseInt($('#mat-count').val())
      if (add == '80') {
        $('.a-p').show()
        $('#mat-print-pay').val(add)
        $('#color_input').hide()
        
      } else {
        $('.a-p').hide()
        $('#mat-print-pay').val(add)
        $('#color_input').show()
      }
      let texturePay = parseInt($('#mat-texture-pay').val())
      let wPay = parseInt($('#matw-pay').val())
      let printPay = parseInt($('#mat-print-pay').val())
      if (isNaN(texturePay)) {
        texturePay = 0
      }
      if (isNaN(wPay)) {
        wPay = 0
      }
      if (isNaN(printPay)) {
        printPay = 0
      }
      // console.log(wPay)

      now = 3600 + parseInt(texturePay + wPay + printPay)
      final = now * count
      $('.mtp').val(final)
      $('.nooo').val(now)
    })

    // 加減數量
    $('.plus').click(function () {
      let now = parseInt($('.mtp').val())
      let count = parseInt($('#mat-count').val())
      let texturePay = parseInt($('#mat-texture-pay').val())
      let wPay = parseInt($('#matw-pay').val())
      let printPay = parseInt($('#mat-print-pay').val())
      if (isNaN(texturePay)) {
        texturePay = 0
      }
      if (isNaN(wPay)) {
        wPay = 0
      }
      if (isNaN(printPay)) {
        printPay = 0
      }
      now = 3600 + parseInt(texturePay + wPay + printPay)
      final = now * count
      $('.mtp').val(final)
    })



    $('.minus').click(function () {
      let now = parseInt($('.mtp').val())
      let count = parseInt($('#mat-count').val())
      let texturePay = parseInt($('#mat-texture-pay').val())
      let wPay = parseInt($('#matw-pay').val())
      let printPay = parseInt($('#mat-print-pay').val())
      if (isNaN(texturePay)) {
        texturePay = 0
      }
      if (isNaN(wPay)) {
        wPay = 0
      }
      if (isNaN(printPay)) {
        printPay = 0
      }
      now = 3600 + parseInt(texturePay + wPay + printPay)
      final = now * count
      $('.mtp').val(final)
    })

    // ↑↑ 總價計算↑↑ // 

    // ↓↓ 尺寸選項↓↓// 
    $('.long_btn button').first().removeClass('btn_l').addClass('btn_f')
    $('.width_btn button').first().removeClass('btn_l').addClass('btn_f')
    $('.long_btn button').on('click', function () {
      $('.long_btn button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-h').val($(this).html())
    })
    $('.width_btn button').on('click', function () {
      $('.width_btn button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#matw').val($(this).html())
    })

    $('.m_long_btn button').first().removeClass('btn_l').addClass('btn_f')
    $('.m_width_btn button').first().removeClass('btn_l').addClass('btn_f')
    $('.m_long_btn button').on('click', function () {
      $('.m_long_btn button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-h').val($(this).html())
    })
    $('.m_width_btn button').on('click', function () {
      $('.m_width_btn button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#matw').val($(this).html())
    })

    // ↑↑ 尺寸選項↑↑ // 

    // ↓↓ 厚度選項↓↓// 
    $('.thickness button').first().removeClass('btn_l').addClass('btn_f')

    $('.thickness button').on('click', function () {
      $('.thickness button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-thickness').val($(this).html())
    })

    $('.m_thickness button').first().removeClass('btn_l').addClass('btn_f')

    $('.m_thickness button').on('click', function () {
      $('.m_thickness button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-thickness').val($(this).html())
    })
    // ↑↑ 厚度選項↑↑ // 

    // ↓↓ 材質選項↓↓// 
    $('.texture button').first().removeClass('btn_l').addClass('btn_f')

    $('.texture button').on('click', function () {
      $('.texture button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-texture').val($(this).html())
    })
    
    $('.m_texture button').first().removeClass('btn_l').addClass('btn_f')

    $('.m_texture button').on('click', function () {
      $('.m_texture button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-texture').val($(this).html())
    })
    // ↑↑ 材質選項↑↑ // 

    // ↓↓ 文字印刷選項↓↓// 

    $('.print button').on('click', function () {
      $('.print button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-print').val($(this).html())
    })
    $('.m_print button').on('click', function () {
      $('.m_print button').removeClass('btn_f').addClass('btn_l')
      $(this).addClass('btn_f').removeClass('btn_l')
      $('#mat-print').val($(this).html())
    })
    // ↑↑ 材質選項↑↑ // 


    // ↓↓ 選項展開↓↓//
    let foldFrist = $('.fold').first();
    $('.fold').parent().next().removeClass('d-flex').hide()
    // foldFrist.parent().next().toggleClass('d-flex')
    foldFrist.children().attr('src', 'svg/custom/minus_nowrap.svg');
    foldFrist.parent().next().show();


    $('.fold').on('click', function () {
      let show = $(this).parent().next();
      // show.addClass('d-flex');
      if ($(this).children().attr('src') == 'svg/custom/minus_nowrap.svg') {
        $(this).children().attr('src', 'svg/custom/plus_nowrap.svg')
        $(this).parent().next().slideToggle(300);
        $(this).parent().next().hide;
      } else {
        $(this).children().attr('src', 'svg/custom/minus_nowrap.svg')
        $(this).parent().next().slideToggle(300);

      }

      // let hide = $(this).parent().next();
      // hide.removeClass('d-flex');
      // hide.slideToggle()
      // show.toggleClass('d-flex')
      // show.toggleClass('option_hide');
      // let foldIcon= $(this).children();

    });

    // ↑↑ 選項展開↑↑//


    // 變化畫布大小↓↓
    $('.long_btn button').on('click', function () {
      if ($(this).html() == '193') {
        $('.mat_show_wrap').css('height', '579px')
      }
      if ($(this).html() == '183') {
        $('.mat_show_wrap').css('height', '549px')
      }
      if ($(this).html() == '173') {
        $('.mat_show_wrap').css('height', '519px')
      }
    })

    $('.width_btn button').on('click', function () {
      if ($(this).html() == '61') {
        $('.mat_show_wrap').css('width', '183px')
      }
      if ($(this).html() == '68') {
        $('.mat_show_wrap').css('width', '204px')
      }
      if ($(this).html() == '80') {
        $('.mat_show_wrap').css('width', '240px')
      }
      if ($(this).html() == '180') {
        $('.mat_show_wrap').css('width', '540px')
      }

    })


    $('.m_long_btn button').on('click', function () {
      if ($(this).html() == '193') {
        $('.mat_show_wrap').css('height', '386px')
      }
      if ($(this).html() == '183') {
        $('.mat_show_wrap').css('height', '366px')
      }
      if ($(this).html() == '173') {
        $('.mat_show_wrap').css('height', '346px')
      }
    })

    $('.m_width_btn button').on('click', function () {
      if ($(this).html() == '61') {
        $('.mat_show_wrap').css('width', '122px')
      }
      if ($(this).html() == '68') {
        $('.mat_show_wrap').css('width', '136px')
      }
      if ($(this).html() == '80') {
        $('.mat_show_wrap').css('width', '160px')
      }
      if ($(this).html() == '180') {
        $('.mat_show_wrap').css('width', '360px')
      }

    })
    // 變化畫布大小↑↑

    // 變色↓↓

    $('.color_wrap button').on('click', function () {
      let colorBg = $(this).css
        ('background-color')

      $(this).val(colorBg)
      let colorVal = $(this).val(colorBg)
      $('.mat_show_wrap').css('background-color', colorBg)
      $('#pick_color').val(colorBg)
      $('.choose.color').css('background-color', colorBg)
      $('#pick_color').val(colorBg)

    })

    // 變色↑↑

    // 自定義顏色↓↓
    $('.self_color').on('click', function () {
      let colorBg = $(this).css
        ('background-color')

      $('.mat_show_wrap').css('background-color', colorBg)
      $('#pick_color').val(colorBg)
      // $('#m_pick_color').val(colorBg)
      $('.choose.color').css('background-color', colorBg)
    })

    function changeBackground(cl) {
      $('.self_color').css('background-color', cl)
      $('.choose.color').css('background-color', cl)
      $('.mat_show_wrap').css('background-color', cl)
      $('#pick_color').attr('value', cl)
      // $('#m_pick_color').attr('value', cl)
    }


    $('#picker_btn').bind('click', tg);
    function tg() {
      $('#picker').trigger('click');
    }
    // $('#m_picker_btn').bind('click', tg);
    // function tg() {
    //   $('#m_picker').trigger('click');
    // }
    // // $('#m_picker_btn').bind('click', tg);
    // function tg() {
    //   $('#m_picker').trigger('click');
    // }
    // 自定義顏色↑↑







    // 手機板移動↓
    $('.m_item_title').on('click', function () {
      $('.m_item_title').removeClass('m_title_check')
      $(this).addClass('m_title_check')
    })

    $('.move1').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(0)')
    })
    $('.move2').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-100vw)')
    })
    $('.move3').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-200vw)')
    })
    $('.move4').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-300vw)')
    })
    $('.move5').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-400vw)')
    })
    $('.move6').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-500vw)')
    })

    $('.move7').on('click', function () {
      $('.m_option_button_wrap').css('transform', 'translateX(-500vw)')
    })



    // 手機板選像移動↑↑


    // 訂單明細收合↓↓

    // 訂單明細收合↑↑


    //手機板下一步選項顯示 ↓↓
    $('.m_save_content').hide()
    $('.m_cart_content').hide()
    $(".out_cart").on('click', function () {
      $('.m_out_btn').hide()
      $('.m_cart_content').show()
    })
    $(".out_save").on('click', function () {
      $('.m_out_btn').hide()
      $('.m_save_content').show()
    })
    $('.m_out_header img').on('click', function () {
      setTimeout(() => {
        $('.m_out_btn').show()
        $('.m_save_content').hide()
        $('.m_cart_content').hide()
      }, 800);
    })


    //手機板下一步選項顯示 ↑↑



    //↓↓如何挑選尺寸跳窗↓↓
    function channel() {
      window.open("howto.html", "如何挑選尺寸", "height=800,width=800,location=no,menubar=no,status=no", "channelmode,scrollbars")
    }
    //↑↑如何挑選尺寸跳窗↑↑

    // <!-- canvas我覺得害怕 !!!!!!!!!!!!!!!!!!!!-->

    const card = new fabric.Canvas("my_mat");
      // ...這裡可以寫canvas對象的一些配置，後面將會介紹
      // 如果<canvas>標籤沒設置寬高，可以通過js動態設置
      card.setWidth(183);
      card.setHeight(519);

      card.on("object:modified", (e) => {
        console.log(e.target);
      });

      // 新增圖片 超長

      // 第一張
      $("#img01").on("click", function () {
        console.log("e94");
        const imgElement1 = document.getElementById("img01");
        const imgInstance1 = new fabric.Image(imgElement1, {
          left: 0, // 圖片相對畫布的左側距離
          top: 50, // 圖片相對畫布的頂部距離
          angle: 0, // 圖片旋轉角度
          opacity: 1, // 圖片透明度
          // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
          scaleX: 0.1,
          scaleY: 0.1,
        });
        // 添加對象後, 如下圖
        console.log("e94");
        card.add(imgInstance1);
      });

      // 第二張
      $("#img02").on("click", function () {
        console.log("e94");
        const imgElement2 = document.getElementById("img02");
        const imgInstance2 = new fabric.Image(imgElement2, {
          left: 0, // 圖片相對畫布的左側距離
          top: 50, // 圖片相對畫布的頂部距離
          angle: 0, // 圖片旋轉角度
          opacity: 1, // 圖片透明度
          // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
          scaleX: 0.2,
          scaleY: 0.2,
        });
        // 添加對象後, 如下圖
        console.log("e94");
        card.add(imgInstance2);
      });

      // 第三張
      $("#img03").on("click", function () {
        console.log("e94");
        const imgElement3 = document.getElementById("img03");
        const imgInstance3 = new fabric.Image(imgElement3, {
          left: 0, // 圖片相對畫布的左側距離
          top: 50, // 圖片相對畫布的頂部距離
          angle: 0, // 圖片旋轉角度
          opacity: 1, // 圖片透明度
          // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
          scaleX: 0.1,
          scaleY: 0.1,
        });
        // 添加對象後, 如下圖
        console.log("e94");
        card.add(imgInstance3);
      });

      // 第四張
      $("#img04").on("click", function () {
        console.log("e94");
        const imgElement4 = document.getElementById("img04");
        const imgInstance4 = new fabric.Image(imgElement4, {
          left: 0, // 圖片相對畫布的左側距離
          top: 0, // 圖片相對畫布的頂部距離
          angle: 0, // 圖片旋轉角度
          opacity: 1, // 圖片透明度
          // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
          scaleX: 0.2,
          scaleY: 0.2,
        });
        // 添加對象後, 如下圖
        console.log("e94");
        card.add(imgInstance4);
      });

      // 第五張
      $("#img05").on("click", function () {
        console.log("e94");
        const imgElement5 = document.getElementById("img05");
        const imgInstance5 = new fabric.Image(imgElement5, {
          left: 0, // 圖片相對畫布的左側距離
          top: 0, // 圖片相對畫布的頂部距離
          angle: 0, // 圖片旋轉角度
          opacity: 1, // 圖片透明度
          // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
          scaleX: 0.4,
          scaleY: 0.4,
        });
        // 添加對象後, 如下圖
        console.log("e94");
        card.add(imgInstance5);
      });



      
      
      $("#add_text_btn").on("click", function () {
        let text = $("#text_input").val();
        let colorInput = $("#color_input").val();
        const textbox = new fabric.Textbox(text, {
          left: 50,
          top: 50,
          width: 100,
          fontSize: 20, // 字體大小
          fontWeight: 800, // 字體粗細
          fill: colorInput, // 字體顏色
          // fontStyle: 'italic',  // 斜體
          fontFamily: 'Noto Sans TC', // 設置字體
          // stroke: 'green', // 描邊顏色
          // strokeWidth: 3, // 描邊寬度
          hasControls: true,
          borderColor: "orange",
          editingBorderColor: "blue", // 點擊文字進入編輯狀態時的邊框顏色
        });
        // 添加文字後，如下圖
        card.add(textbox);
      });

      //   function textColor(a) {
      //     return a;
      //   }

      // 存session//存session//
        function canvasSession() {
        console.log("hi");
        const currState = card.toJSON(); // 導出的Json如下圖
        var sessionStorage = window.sessionStorage;
        sessionStorage.setItem("currState", JSON.stringify(currState));
        console.log(currState);
        
      }
      // $("#savebtn").on("click", function () {
      //   console.log("hi");
      //   const currState = card.toJSON(); // 導出的Json如下圖
      //   var sessionStorage = window.sessionStorage;
      //   sessionStorage.setItem("currState", JSON.stringify(currState));
      //   console.log(currState);
      // });

      // 回傳session//
      function returnCanvas() {
        console.log("hi");
        var sessionStorage = window.sessionStorage;
        var lastState = JSON.parse(sessionStorage.getItem("currState"));
        card.loadFromJSON(lastState, () => {
          card.renderAll();
        });
      }

      // $("#gopay_btn").on("click", function () {
      //   console.log("hi");
      //   var sessionStorage = window.sessionStorage;
      //   var lastState = JSON.parse(sessionStorage.getItem("currState"));
      //   card.loadFromJSON(lastState, () => {
      //     card.renderAll();
      //   });

      // });

      // function downloadCanvas() {
      //  var data = card.toDataURL( 'image/png', 1 );  
 
	    // img.src = data;
      //   console.log(card.toDataURL( 'image/png' ));

      // }

      
      // $("#download").on("click", function (card) {
      //   console.log("load");
      //   function convertCanvasToImage(card) {
      //     var image = new Image();
      //     image.src = card.toDataURL("image/png");
      //     return image;
      //   }
      //   console.log(image.src);
      // });

      var deleteIcon =
        "data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E%3Csvg version='1.1' id='Ebene_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='595.275px' height='595.275px' viewBox='200 215 230 470' xml:space='preserve'%3E%3Ccircle style='fill:%23F44336;' cx='299.76' cy='439.067' r='218.516'/%3E%3Cg%3E%3Crect x='267.162' y='307.978' transform='matrix(0.7071 -0.7071 0.7071 0.7071 -222.6202 340.6915)' style='fill:white;' width='65.545' height='262.18'/%3E%3Crect x='266.988' y='308.153' transform='matrix(0.7071 0.7071 -0.7071 0.7071 398.3889 -83.3116)' style='fill:white;' width='65.544' height='262.179'/%3E%3C/g%3E%3C/svg%3E";

      var cloneIcon =
        "data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 55.699 55.699' width='100px' height='100px' xml:space='preserve'%3E%3Cpath style='fill:%23010002;' d='M51.51,18.001c-0.006-0.085-0.022-0.167-0.05-0.248c-0.012-0.034-0.02-0.067-0.035-0.1 c-0.049-0.106-0.109-0.206-0.194-0.291v-0.001l0,0c0,0-0.001-0.001-0.001-0.002L34.161,0.293c-0.086-0.087-0.188-0.148-0.295-0.197 c-0.027-0.013-0.057-0.02-0.086-0.03c-0.086-0.029-0.174-0.048-0.265-0.053C33.494,0.011,33.475,0,33.453,0H22.177 c-3.678,0-6.669,2.992-6.669,6.67v1.674h-4.663c-3.678,0-6.67,2.992-6.67,6.67V49.03c0,3.678,2.992,6.669,6.67,6.669h22.677 c3.677,0,6.669-2.991,6.669-6.669v-1.675h4.664c3.678,0,6.669-2.991,6.669-6.669V18.069C51.524,18.045,51.512,18.025,51.51,18.001z M34.454,3.414l13.655,13.655h-8.985c-2.575,0-4.67-2.095-4.67-4.67V3.414z M38.191,49.029c0,2.574-2.095,4.669-4.669,4.669H10.845 c-2.575,0-4.67-2.095-4.67-4.669V15.014c0-2.575,2.095-4.67,4.67-4.67h5.663h4.614v10.399c0,3.678,2.991,6.669,6.668,6.669h10.4 v18.942L38.191,49.029L38.191,49.029z M36.777,25.412h-8.986c-2.574,0-4.668-2.094-4.668-4.669v-8.985L36.777,25.412z M44.855,45.355h-4.664V26.412c0-0.023-0.012-0.044-0.014-0.067c-0.006-0.085-0.021-0.167-0.049-0.249 c-0.012-0.033-0.021-0.066-0.036-0.1c-0.048-0.105-0.109-0.205-0.194-0.29l0,0l0,0c0-0.001-0.001-0.002-0.001-0.002L22.829,8.637 c-0.087-0.086-0.188-0.147-0.295-0.196c-0.029-0.013-0.058-0.021-0.088-0.031c-0.086-0.03-0.172-0.048-0.263-0.053 c-0.021-0.002-0.04-0.013-0.062-0.013h-4.614V6.67c0-2.575,2.095-4.67,4.669-4.67h10.277v10.4c0,3.678,2.992,6.67,6.67,6.67h10.399 v21.616C49.524,43.26,47.429,45.355,44.855,45.355z'/%3E%3C/svg%3E%0A";

      var deleteImg = document.createElement("img");
      deleteImg.src = deleteIcon;

      var cloneImg = document.createElement("img");
      cloneImg.src = cloneIcon;

      fabric.Object.prototype.transparentCorners = true;
      fabric.Object.prototype.cornerColor = "#848484";
      // fabric.Object.prototype.cornerStyle = "circle";

      // function Add() {
      //     var rect = new fabric.Rect({
      //         left: 100,
      //         top: 50,
      //         fill: 'yellow',
      //         width: 200,
      //         height: 100,
      //         objectCaching: false,
      //         stroke: 'lightgreen',
      //         strokeWidth: 4,
      //     });

      //     card.add(rect);
      //     card.setActiveObject(rect);
      // }

      function renderIcon(icon) {
        return function renderIcon(
          ctx,
          left,
          top,
          styleOverride,
          fabricObject
        ) {
          var size = this.cornerSize;
          ctx.save();
          ctx.translate(left, top);
          ctx.rotate(fabric.util.degreesToRadians(fabricObject.angle));
          ctx.drawImage(icon, -size / 2, -size / 2, size, size);
          ctx.restore();
        };
      }

      fabric.Object.prototype.controls.deleteControl = new fabric.Control({
        x: 0.5,
        y: -0.5,
        offsetY: -16,
        offsetX: 16,
        cursorStyle: "pointer",
        mouseUpHandler: deleteObject,
        render: renderIcon(deleteImg),
        cornerSize: 24,
      });

      fabric.Object.prototype.controls.clone = new fabric.Control({
        x: -0.5,
        y: -0.5,
        offsetY: -16,
        offsetX: -16,
        cursorStyle: "pointer",
        mouseUpHandler: cloneObject,
        render: renderIcon(cloneImg),
        cornerSize: 24,
      });

      // Add();

      function deleteObject(eventData, target) {
        var canvas = target.canvas;
        canvas.remove(target);
        canvas.requestRenderAll();
      }

      function cloneObject(eventData, target) {
        var canvas = target.canvas;
        target.clone(function (cloned) {
          cloned.left += 10;
          cloned.top += 10;
          canvas.add(cloned);
        });
      }




            // 建立 file
     function downloadCanvas(){
      const randCanvas = Math.floor(Math.random() * 1000000000 + 2 )
      $('#design_img').val(randCanvas)
      console.log(randCanvas)
      const dataURL = card.toDataURL('image/png')
            const blobBin = atob(dataURL.split(',')[1])
            const array = []
            for (let i = 0; i < blobBin.length; i++) {
                array.push(blobBin.charCodeAt(i))
            }
            const file = new Blob([new Uint8Array(array)], { type: 'image/png' })
      
            // 將file 加至 formData
            
            const formData = new FormData()  
            formData.append('file', file, `${randCanvas}.png`)
            
            
      
      
            // send ajax request 
            fetch('custom_canvas_save.php', {
                method: 'POST',
                body: formData
            }).then(res => res.text())
                .then(resText => console.log(resText))
           } 
            

    

          //  手機




           //上傳圖片到canvas↓↓
      const field = document.querySelector("input[name=inputpic]");

    field.addEventListener("change", function () {
      const fd = new FormData(document.form1);

      fetch("custom_upload.php", {
        method: "POST",
        body: fd,
      })
        //.them(function(r){ return r.json()}) 無縮寫版
        .then((r) => r.json())
        .then((obj) => {
          // console.log(obj);
          // document.querySelector("#myimg").src = obj.img;

          fabric.Image.fromURL(obj.img, (z) => {
            z.set({
              left: 0, // 圖片相對畫布的左側距離
              top: 0, // 圖片相對畫布的頂部距離
              angle: 0, // 圖片旋轉角度
              opacity: 1, // 圖片透明度
              // 這裡可以通過scaleX和scaleY來設置圖片繪製後的大小，這裡為原來大小的一半
              scaleX: 0.3,
              scaleY: 0.3,
              hasControls: true, // 是否開啟圖層的控件
              borderColor: 'orange', // 圖層控件邊框的顏色
            });
            // 添加對象後, 如下圖
            card.add(z);
          });
        });
    });
        // 上傳圖片到canvas↑↑



        //是否儲存設計↓↓
        function saveData() {
          console.log('儲存');
          $('#save_data').val('save');
};
        function noSaveData() {
          console.log('儲存');
          $('#save_data').val('no');
};


        // 是否儲存設計↑↑


        //重量↓↓
        // $('.add_cart_icon').on('click',function(){
        //         let count = $('#mat-count').val() ;
        //         $('#weight').val(340*count);
        //         console.log($('#weight').val())
        //     })

        // 重量↑↑
