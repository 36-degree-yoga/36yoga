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



var randomImgs = [
    '../img/index/random01.svg',
    '../img/index/random02.svg',
    '../img/index/random03.svg'
]

num=math.round(math.random()*2)+1;
$('.randompic').attr('src', src='./img/index/random0'+ 1+'.svg'); //顯示圖片 

<a href="javascript:window.location.reload()">重新整理</a>
