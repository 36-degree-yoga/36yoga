// -------偵測top add animation----//
        //第1區動畫
        $('.text-wrap-ani-1').css('opacity','0');
        $('.sec1-img-ani-1').css('opacity','0');
        $('.rec-ani-1').css('opacity','0');
            //第2區動畫
    
        $('.text-wrap-ani-2').css('opacity','0');
        $('.sec2-img-ani-2').css('opacity','0');
        $('.rec-ani-2').css('opacity','0');
    
            //第3區動畫
        $('.last-sec-img-ani').css('opacity','0');
        $('.last-sec-text-ani').css('opacity','0');
        $('.last-sec-thermo').css('opacity','0');
        
    
        $(window).on('scroll',function(){
    
            let a = $(window).height()/5*4;
            // console.log('5分之4:'+a);
            
            let w = $(this).scrollTop();
            // console.log(w);
            
            
            //sec1
            let top = $('.text-wrap-ani-1').offset().top-a;
            let top2 = $('.sec1-img-ani-1').offset().top-a;
            let top3 = $('.rec-ani-1').offset().top-a;
    
            //sec2
            let top4 = $('.text-wrap-ani-2').offset().top-a;
            let top5 = $('.sec2-img-ani-2').offset().top-a;
            let top6 = $('.rec-ani-2').offset().top-a;
    
    
            //sec3
            let top7 = $('.last-sec-img-ani').offset().top-a*1.5;
            let top8 = $('.last-sec-text-ani').offset().top-a;
    
    
            
    
            //第一區
           
            $('.sec1-img-ani-1').css('opacity','1').addClass('animate__animated animate__fadeInLeft');
            $('.text-wrap-ani-1').css('opacity','1').addClass('animate__animated animate__fadeInRight');
    
    
            if(w >= top3){
            $('.rec-ani-1').css('opacity','1').addClass('animate__animated animate__fadeInDown');
            }
    
            // //第2區
    
    
            if(w >= top5){
            $('.sec2-img-ani-2').css('opacity','1').addClass('animate__animated animate__fadeInRight');
            $('.text-wrap-ani-2').css('opacity','1').addClass('animate__animated animate__fadeInLeft');
            }
    
            if(w >= top6){
            $('.rec-ani-2').css('opacity','1').addClass('animate__animated animate__fadeInDown');
            
            }
    
    
            // //第3區
    
            if(w >= top7){
    
            $('.last-sec-img-ani').css('opacity','1').addClass('animate__animated animate__fadeInRight');
            $('.last-sec-text-ani').css('opacity','1').addClass('animate__animated animate__fadeInLeft');
            $('.last-sec-thermo').css('opacity','1').addClass('animate__animated animate__fadeInLeft').css('animation-delay','.5s');
            
            }
    
    
            
    
    
    
        })
            
    
    // -------------熱門商品區-------------------------
            $(document).ready(function() {
                $(window).trigger('resize');
            });
    
    //熱門商品移動
    
            $(window).on('resize',function(){  
                let w = $(window).width(); 
                let img_wrap = 226;
                // $('.img-wrap').width()
                let margin = (w - img_wrap)/2;
                let move = $(window).width();
                let width = move*3;
    
              if(w < 992){
                  //先設定
                //   console.log('margin:'+margin);
                //   console.log('img-wrap:'+img_wrap);
                    $('.product-zone').css('margin-left',margin).css('margin-right',margin);
                    $('.guessyoullike').css('width',width);
                    $('.guessyoullike').css('left',-move);
                    $('.guessyoullike').addClass('position-absolute');
                    $('.guessyoullike').removeClass('position-relative');;
                    $('.guessyoullike').removeClass('justify-content-center');
                    $('.icon-right').css('opacity','1');
    
                 
                    /////// click movement
                    $('.icon-left').on('click',function(e){
                
                    // let p = $('.guessyoullike').position().left;
                    let p = $('.guessyoullike').offset().left;
                    
    
                            // console.log('------');
                            // console.log('positionleft:'+p);
                           
                            // console.log('move:'+move);
                    
    
                    if(p==0){
                        $('.icon-left').css('opacity','.2').css('transition','.5s');
                        $('.icon-right').css('opacity','1').css('transition','.5s');
                        // console.log('new position:'+p);
    
                    }
    
                    else if(p==-move){
                        //p>=move || p>-move*2
                        $('.icon-left').css('opacity','.2').css('transition','.5s');
                        $('.icon-right').css('opacity','1').css('transition','.5s');
                        $('.guessyoullike').css('left','+='+ move);
                        // console.log('new position:'+p);
    
    
                    }
    
                    else if(p==-move*2){
                        //p>=move || p>-move*2
                        $('.icon-left').css('opacity','1').css('transition','.5s');
                        $('.icon-right').css('opacity','1').css('transition','.5s');
                        $('.guessyoullike').css('left','+='+ move);
                        // console.log('new position:'+p);
    
    
                    }
                    
                    
                     })
                    
    
                     $('.icon-right').on('click',function(e){
                
                        let p = $('.guessyoullike').offset().left;
                        
    
                            // console.log('------');
                            // console.log('positionleft:'+p);
                            // console.log('move:'+move);
    
                            if(p==-move*2){
                                $('.icon-right').css('opacity','.2').css('transition','.3s');
                                $('.icon-left').css('opacity','1').css('transition','.3s');
                                // console.log('new position:'+p);
    
                            }
    
                            else if(p==-move){
                                $('.icon-right').css('opacity','.2').css('transition','.3s');
                                $('.icon-left').css('opacity','1').css('transition','.3s');
                                $('.guessyoullike').css('left','-='+ move);
                                // console.log('new position:'+p);
    
    
                            }else if(p==0){
                                $('.icon-right').css('opacity','1').css('transition','.3s');
                                $('.icon-left').css('opacity','1').css('transition','.3s');
                                $('.guessyoullike').css('left','-='+ move);
                                // console.log('new position:'+p);
    
                            }
                            
                        })
    
                }else{
                  
                     $('.guessyoullike').css('width','').css('left','');
                     $('.guessyoullike').removeClass('position-absolute');
                     $('.guessyoullike').addClass('position-relative');;
                     $('.guessyoullike').addClass('justify-content-center');
                     $('.product-zone').eq(0).css('margin-right','75px').css('margin-left','0px');
                     $('.product-zone').eq(1).css('margin-right','75px').css('margin-left','0px');;
                     $('.product-zone').eq(2).css('margin-right','0px').css('margin-left','0px');;
                     $('.product-zone').eq(3).css('margin-right','75px').css('margin-left','0px');;
                     $('.product-zone').eq(4).css('margin-right','75px').css('margin-left','0px');;
                     $('.product-zone').eq(5).css('margin-right','0px').css('margin-left','0px');;
                }
                           
            })

// 首頁 scrolldown
// 點擊 移動頁面
$('.scrollbox').on('click',function(){
    // console.log('hi');
    $('html,body').animate( { scrollTop:$('#content_part1').offset().top } ,600);
});

// 首頁 scrolldown
// 下滑移動 
$(window).scroll(function(){
    // console.log($(this).scrollTop()); 

    let w = $(window).width(); 
    if(w>992){
        if ($(window).scrollTop()>=450){
            $('.scrollbox').css('height','80px').css('transition-duration','.5s');
    
            $('.sec1-img').css('z-index','1');
        }    
        else {
            $('.scrollbox').css('height','170px').css('transition-duration','.5s');
            $('.sec1-img').css('z-index','1');
        } 

    }

    else{
       
        if ($(window).scrollTop()>=210){
            $('.srolldown_btn_mobile').addClass('srolldown_btn_mobile_h').css('transition-duration','.5s');
    
            $('.sec1-img').css('z-index','1');
        }    
        else {
            $('.srolldown_btn_mobile').removeClass('srolldown_btn_mobile_h').css('transition-duration','.5s');
            $('.sec1-img').css('z-index','1');
        } 

    }
    
    

    
});  


// 首頁 scrolldown
// hover
$('.scrollbox').on('mouseenter', function () {
    $(this).css('height','80px').css('transition-duration','.5s');
    $('.sec1-img').css('z-index','1');
});
$('.scrollbox').on('mouseleave', function () {
    $(this).css('height','170px').css('transition-duration','.5s');
    $('.sec1-img').css('z-index','1');
});
    
           
    