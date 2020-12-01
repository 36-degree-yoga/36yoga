
      
      // 訂單種類按鈕變色↓↓↓
      $('.list_option li').first().addClass('click_green')
      $('.list_option li').on('click',function(){
        $('.list_option li').removeClass('click_green')
        $(this).addClass('click_green')
      })
      // 訂單種類按鈕變色↑↑


        // 訂單明細收合↓↓
      $('.order_history_detail_btn').children()
      .attr('src','svg/custom/plus_o_icon.svg')
      $('.order_details_page').hide()

      $('.openIt').on('click',function(){
        if( $(this).children().attr('src')=='svg/custom/plus_o_icon.svg'){
          $(this).children().attr('src','svg/custom/minus_o_icon.svg')
          $(this).children('p').html('收起訂單明細')
        }else{
          $(this).children().attr('src','svg/custom/plus_o_icon.svg')
          $(this).children('p').html('展開訂單明細')
        }
        
        // console.log($(this).children('p').html())
        
         $(this).next().slideToggle("500")
        
       })
        // 訂單明細收合↑↑

      // 手機訂單明細收合↓↓
      $('.m_order_detail').hide()

      $('.m_openIt').on('click',function(){
        if( $(this).children().attr('src')=='svg/custom/plus_o_icon.svg'){
          $(this).children().attr('src','svg/custom/minus_o_icon.svg')
          $(this).children('p').html('收起訂單明細')
        }else{
          $(this).children().attr('src','svg/custom/plus_o_icon.svg')
          $(this).children('p').html('展開訂單明細')
        }
        
        // console.log($(this).children('p').html())
        
         $(this).parent().prev().slideToggle("500")
        //  console.log( $(this).parent().prev().hasClass('aa'))
        
       })
        // 手機訂單明細收合↑↑



        // 會員中心sidebar hover標題:文字與icon變色↓↓
          $('#bar_order_history a').css('color', '#db5c00');
          $('#bar_order_history').find('.cls-1').css('fill','#db5c00')

          $('.account_sidebar_title  a').on('mouseenter', function () {
            console.log('hi')
            $(this).css('color', '#db5c00');
            $(this).siblings().find('.cls-1').css('fill', '#db5c00');
            $('#bar_order_history a').css('color', '#db5c00');
            $('#bar_order_history').find('.cls-1').css('fill','#db5c00')
          });
          $('.account_sidebar_title  a').on('mouseleave', function () {
            console.log('hi')
            $(this).css('color', '#333333');
            $('.cls-1').css('fill', '#333333');
            $('#bar_order_history a').css('color', '#db5c00');
          $('#bar_order_history').find('.cls-1').css('fill','#db5c00')
          });
          // 會員中心sidebar hover標題:文字與icon變色↑↑

          // 側bar到一個位置fix住↓↓
          $(window).on('scroll',function(){
            let scrollTop = $(this).scrollTop();
            let barFixed = 200;
            let barUnFixd = 500;
            
            // console.log(scrollTop)

            // console.log(scrollTop)
            if(scrollTop < barFixed){
                $('.account_side_bar_wrap').removeClass('bottomFixed');
            }else if(scrollTop < barUnFixd){
                $('.account_side_bar_wrap').removeClass('bottomFixed');
            }else{
                $('.account_side_bar_wrap').addClass('bottomFixed');
                
            } 
          });

          // 不同種類訂單↓↓
           $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')

            $('#done').on('mousedown',function(){
              $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')
              console.log('hi')
              })
            $('#wait_pay').on('mousedown',function(){
              $('.no-list').css('display', 'none')
               $('.order_list_wrap').css('display','block')
              })
            $('#wait_out').on('mousedown',function(){
               $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')
              })
            $('#wait_take').on('mousedown',function(){
               $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')
              })
            $('#cancel').on('mousedown',function(){
              $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')
              })
            $('#order_return').on('mousedown',function(){
              $('.no-list').css('display', 'block')
              $('.order_list_wrap').css('display','none')
              })

              


          // 不同種類訂單↑↑ 



           // 手機不同種類訂單↓↓
           $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')

            $('.m_done p').on('mousedown',function(){
              $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')
              
              })
            $('.m_wair_pay p').on('mousedown',function(){
              $('.m-no-list').css('display', 'none')
              $('.m_order_list').css('display', 'block')
              console.log('hi')
              })
            $('.m_wait_out p').on('mousedown',function(){
               $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')
              })
            $('.m_wait_take p').on('mousedown',function(){
               $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')
              })
            $('.m_cancel p').on('mousedown',function(){
              $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')
              })
            $('.m_order_return p').on('mousedown',function(){
              $('.m-no-list').css('display', 'block')
              $('.m_order_list').css('display','none')
              })

              


          // 不同種類訂單↑↑ 



          // 側bar到一個位置fix住↑↑  




      //   // 變更照片的動畫↓↓
      //   $('.member_account_img_wrap').mouseenter(function(){
      //       $('.mask').css('display','block')
            
      //   });
      //   $('.member_account_img_wrap').mouseleave(function(){
      //       $('.mask').css('display','none');
      //   });
      //   // 變更照片的動畫↑↑



      //   // 會員中心sidebar hover標題:文字與icon變色↓↓
      //   $('.account_sidebar_title  a').on('mouseenter', function () {
      //       // console.log('hi')
      //       $(this).css('color', '#db5c00');
      //       $(this).siblings().find('.cls-1').css('fill','#db5c00');
      //   });
      //   $('.account_sidebar_title  a').on('mouseleave', function () {
      //       // console.log('hi')
      //       $(this).css('color', '#333333');
      //       $('.cls-1').css('fill','#333333');
      //   });
      //   // 會員中心sidebar hover標題:文字與icon變色↑↑


      //   // 手機板side bar動畫↓↓
      //   $('.m_account_option').on('click',function(){
      //       $(this).children().addClass('check_border').parent().siblings().children().removeClass('check_border');

      //   });
      //   // 手機板side bar動畫↑↑

      // 手機板 訂單紀錄 bar動畫↓↓
        $('.m_order_option').on('click',function(){
            $(this).children().addClass('check_border').parent().siblings().children().removeClass('check_border');

        });
        // 手機板 訂單紀錄 bar動畫↑↑





        
