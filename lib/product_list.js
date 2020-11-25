    // 側bar標題變化↓↓
    $('.product_siderbar_title a').on('click', function () {
        $('.product_siderbar_title a').css('color', '#333333');
        $(this).css('color', '#db5c00');
        let plstTop=$('#plst_top').position().top;
        let aTop=$(this).position().top;
        let topMinus=aTop-plstTop; 
        let len=60+topMinus;
        $('.thermometer_move').css('height',len+"px");
        
    });
    // 側bar標題變化↑↑

    // 滑動時側bar變化↓↓
    $(window).on('scroll',function(){
        
    })


    // 滑動時側bar變化↑↑

    //列表滾動效果↓↓
    $('.product_siderbar_title a').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault(); 
            const hash = this.hash;
            $('html,body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {       
                window.location.hash = hash;
            })
        }
    });
    //列表滾動效果↑↑
    
    // 側bar到一個位置fix住↓↓
    $(window).on('scroll',function(){
        let scrollTop = $(this).scrollTop();
        let barFixed = 600;
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


    