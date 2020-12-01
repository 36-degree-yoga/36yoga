// index script
// computer
// 首頁 banner find your soulmat btn
        if ($(window).width()=='1920'){
            $('.soulmat').css('width','155');
        } 

// 首頁 hero banner 
// 輪播-點擊  
        $('.home_page_number p').first().css('color', '#db5c00');
        $('.caro_img02').css('opacity', '0');
        $('.caro_img03').css('opacity', '0');
        $('.caro_img00').css('opacity', '0');
        $('.caro_img01').first().css('opacity', '1');
        
        $('.home_page_number p').on('click', function () {
            $(this)
            .css('color', '#db5c00')
            .siblings()
            .css('color', '#848484');
            $('.caroimg_wrap li').css('opacity', '0').eq($(this).index()).css('opacity', '1');
        });

        // 溫度計
        $('.home_page_number p').on('click', function () {
            $(this).css('color', '#db5c00');
            $(this).siblings().css('color', '#848484');
        });

        $('#hpn_1').on('click', function () {
            $('.thermometer_move').css('width', '33%')
        });

        $('#hpn_2').on('click', function () {
            $('.thermometer_move').css('width', '66%')
        });

        $('#hpn_3').on('click', function () {
            $('.thermometer_move').css('width', '100%')
        });

// 首頁 hero banner 
// 輪播-自動播放
        let caroIndex = 0;
        setInterval(function(){
            if(caroIndex>2){
                caroIndex=0
            }
            // 點點動畫
            $('.caroimg_wrap li').eq(caroIndex).css('opacity', '1').siblings().css('opacity', '0');

            $('.home_page_number p').eq(caroIndex).css('color', '#db5c00').siblings().css('color', '#848484');

            // 自動輪播 樣板Template String 
            $('.thermometer_move').css('width', `calc(33.4% * ${caroIndex+1})`).css('transition-duration', '.3s');
            caroIndex+=1;
        },2000)



// 首頁 scrolldown
// 點擊 移動頁面
        $('.scrollbox').on('click',function(){
            // console.log('hi');
            $('html,body').animate( { scrollTop:$('#index_about').offset().top } ,600);
        });

// 首頁 scrolldown
// 下滑移動 
        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 
            
            if ($(window).scrollTop()>=450){
                $('.scrollbox').addClass('scrollbox_a').css('transition-duration','.5s');
            }    
            else {
                $('.scrollbox').removeClass('scrollbox_a').css('transition-duration','.5s');
            } 
        });  

// 首頁 scrolldown
// hover
        $('.scrollbox').on('mouseover', function () {
            $(this).addClass('scrollbox_a');
        });
        $('.scrollbox').on('mouseleave', function () {
            $(this).removeClass('scrollbox_a');
        });

// 首頁 about 
// 進場
        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 

            let scrollTop = $(this).scrollTop();
            let aboutTop = $('.section_about').offset().top+200;

            if(aboutTop = scrollTop){
                $('.about_imgwrap').addClass('animate__animated animate__fadeInLeft').css('transition-duration','.8s');

                $('.about_area').addClass('animate__animated animate__fadeInRight').css('transition-duration','.8s');
            }else{
                $('.about_imgwrap').removeClass('animate__animated animate__fadeInLeft').css('transition-duration','.8s');

                $('.about_area').removeClass('animate__animated animate__fadeInRight').css('transition-duration','.8s');
            }

        });

// 首頁 identify 
// 進場
        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 

            let scrollTop = $(this).scrollTop();
            let idenMove = 950;

            if(scrollTop >= idenMove){
                $('.identify_wrap').addClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','1s');

            }else{
                $('.identify_wrap').removeClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','1s');
            }
        });

// 首頁 商品展示區
        var rellax = new Rellax('.movemove');

// 首頁 商品展示區
// hover 換圖
        $('.ppwrap_01').on('mouseenter',function(){
            $('.index_prodspic01').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_01').on('mouseleave',function(){
            $('.index_prodspic01').css('opacity','1').css('transition-duration','.5s');
        });

        $('.ppwrap_02').on('mouseenter',function(){
            $('.index_prodspic02').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_02').on('mouseleave',function(){
            $('.index_prodspic02').css('opacity','1').css('transition-duration','.5s');
        });

        $('.ppwrap_03').on('mouseenter',function(){
            $('.index_prodspic03').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_03').on('mouseleave',function(){
            $('.index_prodspic03').css('opacity','1').css('transition-duration','.5s');
        });

        $('.ppwrap_04').on('mouseenter',function(){
            $('.index_prodspic04').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_04').on('mouseleave',function(){
            $('.index_prodspic04').css('opacity','1').css('transition-duration','.5s');
        });

        $('.ppwrap_05').on('mouseenter',function(){
            $('.index_prodspic05').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_05').on('mouseleave',function(){
            $('.index_prodspic05').css('opacity','1').css('transition-duration','.5s');
        });

        $('.ppwrap_06').on('mouseenter',function(){
            $('.index_prodspic06').css('opacity','0').css('transition-duration','.5s');
        });
        $('.ppwrap_06').on('mouseleave',function(){
            $('.index_prodspic06').css('opacity','1').css('transition-duration','.5s');
        });

// quick view hover
        $('.prod_quick').on('mouseenter',function(){
            $(this).css('fill','red').css('transition-duration','.5s');
        });
        $('.prod_quick').on('mouseleave',function(){
            $(this).css('fill','#004A13').css('transition-duration','.5s');
        });
// 首頁 Reviews
// 換大頭貼
       
        // $('.reviews_btn').on('click',function(){
        //     // console.log('ya')
        //     index=0;

        //     let memberHead = $('.memberhead_wrap img').index().attr('src');
        //     $('.memberhead_wrap img').attr('src',memberHead);  

        // });

        
            // console.log('ya')
            var imgs = [
                './img/index/member_head.jpg',
                './img/index/member_head_02.jpg',
                './img/index/member_head_03.jpg',
                './img/index/member_head_04.jpg',
                './img/index/member_head_05.jpg'
            ]
        
            $('.reviews_btn').on('click',function(){　　　　
                let root = $('.memberhead_wrap img').attr('src');
                let n = imgs.indexOf(root);
                if(n==4){
                    let n=0;
                    $('.memberhead_wrap img').attr('src', imgs[n+1]);
                    
                }else{
                // console.log('root:'+n);
                    $('.memberhead_wrap img').attr('src', imgs[n+1]);}
            });
                

// 首頁 Reviews
// 頁面移動
        $('.reviews_area').slick({
            centerMode: true,
            centerPadding: '20px',
            slidesToShow: 3,
            nextArrow: '.btn_left',
            prevArrow: '.btn_right',

        responsive: [
            {
                breakpoint: 350,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '20px',
                slidesToShow: 1
                    
                }
            },      
        ]
        });


// 首頁 人氣商品 index hot
// hover 換大圖
        // $('.index_hotitem_wrap img').on('mouseover',function(){
        //     let bigPic = $(this).next().attr('src');
        //     $('.back05_wrap img').attr('src',bigPic).hide().delay(150).fadeIn('8000,ease-in');
        // });
        $('.index_hotitem_wrap img').on('mouseover',function(){
            let bigPic = $(this).next().attr('src');
            $('.back05_wrap img').attr('src',bigPic).fadeIn('3000,ease-in');
        });

        
// 首頁 人氣商品
// 頁面移動
        $('.hotitem_01').on('mouseover',function(){ 
            let bigPic01 = $(this).attr('src');
            $('index_back11').attr('src',bigPic01);
            $('index_back11_02').css('opacity',0);
            $('index_back11_03').css('opacity',0);
        });
        $('.hotitem_02').on('mouseover',function(){ 
            let bigPic02 = $(this).attr('src');
            $('index_back11_02').attr('src',bigPic02);
            $('index_back11').css('opacity',0);
            $('index_back11_03').css('opacity',0);
        });
        $('.hotitem_03').on('mouseover',function(){ 
            let bigPic03 = $(this).attr('src');
            $('index_back11_03').attr('src',bigPic03);
            $('index_back11').css('opacity',0);
            $('index_back11_02').css('opacity',0);
        });

// 首頁 人氣商品
// hover 有商品名跟價格
        $('.i_hot_w01').on('mouseenter',function(){ 
            $('.hot_ppwrap01').css('bottom','0').css('opacity','.7');
        });
        $('.i_hot_w01').on('mouseleave',function(){ 
            $('.hot_ppwrap01').css('bottom','-100px').css('opacity','0');
        });

        $('.i_hot_w02').on('mouseenter',function(){ 
            $('.hot_ppwrap02').css('bottom','0').css('opacity','.7');
        });
        $('.i_hot_w02').on('mouseleave',function(){ 
            $('.hot_ppwrap02').css('bottom','-100px').css('opacity','0');
        });

        $('.i_hot_w03').on('mouseenter',function(){ 
            $('.hot_ppwrap03').css('bottom','0').css('opacity','.7');
        });
        $('.i_hot_w03').on('mouseleave',function(){ 
            $('.hot_ppwrap03').css('bottom','-100px').css('opacity','0');
        });

// mobile
// mobile首頁 hero banner 
// 輪播-點擊  
        $('.m_home_page_number p').first().css('color', '#db5c00');
        $('.m_caro_img02').css('opacity', '0');
        $('.m_caro_img03').css('opacity', '0');
        $('.m_caro_img00').css('opacity', '0');
        $('.m_caro_img01').first().css('opacity', '1');
        
        $('.m_home_page_number p').on('click', function () {
            $(this)
            .css('color', '#db5c00')
            .siblings()
            .css('color', '#848484');
            $('.m_caroimg_wrap li').css('opacity', '0').eq($(this).index()).css('opacity', '1');
        });


// mobile首頁 hero banner 
// 輪播-自動播放
        let m_caroIndex = 0;
        setInterval(function(){
            if(m_caroIndex>2){
                m_caroIndex=0
            }
            // 點點動畫
            $('.m_caroimg_wrap li').eq(m_caroIndex).css('opacity', '1').siblings().css('opacity', '0');

            $('.m_home_page_number p').eq(m_caroIndex).css('color', '#db5c00').siblings().css('color', '#848484');

            // 自動輪播 樣板Template String 
            $('.m_thermometer_move').css('width', `calc(33.4% * ${m_caroIndex+1})`).css('transition-duration', '.3s');
            m_caroIndex+=1;
        },1300)

// mobile 首頁 scrolldown
// 頁面移動
        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 
            
            if ($(window).scrollTop()>=200){
                $('.m_scrollbtn_wrap').addClass('ma_scrollbtn_wrap');
            }    
            else {
                $('.m_scrollbtn_wrap').removeClass('ma_scrollbtn_wrap');
            } 
        });         
    
// mobile 首頁 find your soulmat
// check animate
        function shine(){
            // 一開始設定值
            $('.m_checkbtn').css('opacity','1'); 
            // 第一次閃 
            setTimeout(" $('.m_checkbtn').css('opacity','.7').css('transition-duration','.5s')",400); 
            // 第二次閃
            setTimeout( "$('.m_checkbtn').css('opacity','1').css('transition-duration','.5s')",800);
        };
        // 多久循環一次 
        window.setInterval(shine, 800); 

// mobile about
// 進場動畫

        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 

            let scrollTop = $(this).scrollTop();
            let m_idenMove = 240;

            if(scrollTop >= m_idenMove){
                $('.m_index_back02').addClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','1s');

                $('.m_about_area').addClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','2s');

            }else{
                $('.m_index_back02').removeClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','1s');

                $('.m_about_area').removeClass('animate__animated animate__fadeInUp').css('transition-duration','.5s').css('transition-delay','2s');
            }
        });

// mobile about
// 小東西們進場動畫

        $(window).scroll(function(){
            // console.log($(this).scrollTop()); 

            let scrollTop = $(this).scrollTop();
            let m_idenwrapMove = 550;

            if(scrollTop >= m_idenwrapMove){
                $('.m_idenwrap_01').addClass('animate__animated animate__fadeInLeft').css('transition-duration','.5s').css('transition-delay','2s');

                $('.m_idenwrap_02').addClass('animate__animated animate__fadeInRight').css('transition-duration','.5s').css('transition-delay','4s');

                $('.m_idenwrap_03').addClass('animate__animated animate__fadeInLeft').css('transition-duration','.5s').css('transition-delay','6s');

            }else{
                $('.m_idenwrap_01').removeClass('animate__animated animate__fadeInLeft').css('transition-duration','.5s').css('transition-delay','2s');

                $('.m_idenwrap_02').removeClass('animate__animated animate__fadeInRight').css('transition-duration','.5s').css('transition-delay','4s');

                $('.m_idenwrap_03').removeClass('animate__animated animate__fadeInLeft').css('transition-duration','.5s').css('transition-delay','6s');
            }
        });

// mobile 商品展示區
        var rellax = new Rellax('.m_movemove');

// mobile Reviews
// 換大頭貼
        // console.log('ya')
        var m_imgs = [
            '/img/index/member_head.jpg',
            '/img/index/member_head_02.jpg',
            '/img/index/member_head_03.jpg',
            '/img/index/member_head_04.jpg',
            '/img/index/member_head_05.jpg'
        ]
    
        $('.m_reviews_btn').on('click',function(){　　　　
            var m_num = Math.floor(Math.random() * 5);
            $('.m_memberhead_wrap img').attr('src', m_imgs[m_num] + '');
        });
             

// mobile Reviews
// 頁面移動
        $('.m_reviews_area').slick({        
            centerMode: true,
            centerPadding: '5px',
            slidesToShow: 1,
            nextArrow: '.m_gbtn_left',
            prevArrow: '.m_gbtn_right',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1      
                }
            },      
        ]
        });


// mobile 人氣商品
// 點擊 換大圖
        
        $('.m_index_hotitem_wrap img').on('click',function(){
            let mbigPic = $(this).next().attr('src');
            $('.m_back05_wrap img').attr('src',mbigPic).fadeIn('3000,ease-in');
        }); 

// mobile 人氣商品
// 點擊 出現價格
        $('.m_hotwrap01').on('click',function(){
            $('.mhot_ppwrap01').css('opacity','1').css('transition-duration','.5s');
            $('.mhot_ppwrap02').css('opacity','0').css('transition-duration','.5s');
            $('.mhot_ppwrap03').css('opacity','0').css('transition-duration','.5s');
        }); 
        $('.m_hotwrap02').on('click',function(){
            $('.mhot_ppwrap02').css('opacity','1').css('transition-duration','.5s');
            $('.mhot_ppwrap01').css('opacity','0').css('transition-duration','.5s');
            $('.mhot_ppwrap03').css('opacity','0').css('transition-duration','.5s');
        }); 
        $('.m_hotwrap03').on('click',function(){
            $('.mhot_ppwrap03').css('opacity','1').css('transition-duration','.5s');
            $('.mhot_ppwrap01').css('opacity','0').css('transition-duration','.5s');
            $('.mhot_ppwrap02').css('opacity','0').css('transition-duration','.5s');
        }); 
