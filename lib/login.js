$('.regist-btn').addClass('color-change-gray-right');
        $('.login-btn').on('click',function(){
            $('.login-floor').removeClass('display-none');
            $('.regist-floor').addClass('display-none');
            $('.regist-btn').removeClass('click-btn').addClass('color-change-gray-right');
            $('.login-btn').removeClass('color-change-gray-left').addClass('click-btn');   
        });

    
        $('.regist-btn').on('click',function(){
            $('.regist-floor').removeClass('display-none');
            $('.login-floor').addClass('display-none');
            $('.login-btn').removeClass('click-btn').addClass('color-change-gray-left');
            $('.regist-btn').removeClass('color-change-gray-right').addClass('click-btn'); 
               
        });