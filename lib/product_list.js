    // 側bar標題變化↓↓
    $('.product_siderbar_title a').on('click', function () {
        $('.product_siderbar_title a').css('color', '#333333');
        $(this).css('color', '#db5c00');
        // let plstTop=$('#plst_top').position().top;
        // let aTop=$(this).position().top;
        // let topMinus=aTop-plstTop; 
        // let len=60+topMinus;
        // $('.thermometer_move').css('height',len+"px");
        
    });
    // 側bar標題變化↑↑

    // 滑動時側bar變化↓↓
 
   function window_scroll(){
        let scroll = $(window).scrollTop();
       
        let stdTop = $('#std').offset().top
        let ctmTop = $('#ctm').offset().top
        let blockTop = $('#block').offset().top
        let padTop = $('#pad').offset().top
        let rollerTop = $('#roller').offset().top
        let sandTop = $('#sand').offset().top
        let strapTop = $('#strap').offset().top
        let bandTop = $('#band').offset().top
        let towelTop = $('#towel').offset().top
        if(scroll <= stdTop){
            $('#a').css('color', '#333333');
            $('#b').css('color', '#333333');
            $('.thermometer_move').css('height','60px');
        }

        if(scroll >= stdTop-10){
            $('#a').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','129.6px');
            
        }
        if(scroll >= ctmTop-100){
            $('#b').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('#c').css('color', '#333333');
            $('.thermometer_move').css('height','158.6px');
            console.log('jjjj')
        }
        if(scroll >= blockTop-100){
            
            $('#c').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('#b').css('color', '#333333');
            $('.thermometer_move').css('height','312.2px');
        }
        if(scroll >= padTop-100){
            $('#d').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','341.2px');
        }
        if(scroll >= rollerTop-100){
            $('#e').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','370.2px');
        }
        if(scroll >= sandTop-100){
            $('#f').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','399.2px');
        }
        if(scroll >= strapTop-100){
            $('#g').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','428.2px');
        }
        if(scroll >= bandTop-100){
            $('#h').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','457.2px');
        }
        if(scroll >= towelTop-100){
            $('#i').css('color', '#db5c00').parent().siblings().children().css('color', '#333333');
            $('.thermometer_move').css('height','486.2px');
            
        }
    };
    
    window_scroll();
    $(window).scroll(window_scroll);
      
    // 滑動時側bar變化↑↑

    //列表滾動效果↓↓
    $('.product_siderbar_title a').on('click', function (event) {
        if (this.hash !== "") {
            console.log('this.hash !==');
            event.preventDefault(); 
            const hash = this.hash;
            $('html,body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {       
                // window.location.hash = hash;
            })
        }
        else{
            console.log('hsa hash', this.hash);
        }
    });
    //列表滾動效果↑↑
    
    // 側bar到一個位置fix住↓↓
    $(window).on('scroll',function(){
        let scrollTop = $(this).scrollTop();
        let barFixed = 550;
        let barUnFixd = 6366;
        console.log(scrollTop)
        
        
        if(scrollTop < barFixed){
            $('.product_siderbar_wrap').removeClass('bottomFixed');
            $('.product_siderbar_wrap').removeClass('fixed');
            
        }else if(scrollTop < barUnFixd){
            $('.product_siderbar_wrap').removeClass('bottomFixed');
            $('.product_siderbar_wrap').addClass('fixed');
            
        }else{
            $('.product_siderbar_wrap').removeClass('fixed');
            $('.product_siderbar_wrap').addClass('bottomFixed');
            
        }  
    });
    // 側bar到一個位置fix住↑↑   


    