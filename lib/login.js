var hash = window.location.hash;
console.log(hash);



// $('.regist-btn').addClass('color-change-gray-right');

    $('.login-btn').click(function(){
        $('.login-floor').removeClass('display-none');
        $('.regist-floor').addClass('display-none');
        $('.regist-btn').removeClass('click-btn').addClass('color-change-gray-right');
        $('.login-btn').removeClass('color-change-gray-left').addClass('click-btn');  
        // window.location.hash = "login"; 
});

    
$('.regist-btn').click(function(){
    $('.regist-floor').removeClass('display-none');
    $('.login-floor').addClass('display-none');
    $('.login-btn').removeClass('click-btn').addClass('color-change-gray-left');
    $('.regist-btn').removeClass('color-change-gray-right').addClass('click-btn'); 
    // window.location.hash = "regist"; 
        
});

if(hash=="#login"){
    $('.login-btn').trigger('click');
    $('#msg').trigger('click');
    console.log(hash+"uyoyoyo");

}

if(hash=="#regist"){
    $('.regist-btn').trigger('click');
    console.log(hash+"uyoyoyo");

}

//hash change 動不了
$(window).on('hashchange',function() {
    console.log("hashchange");
    if(hash=="#login"){
        $('.login-btn').trigger('click');
        $('#msg').trigger('click');
        console.log(hash+"uyoyoyo");
    
    }
    
    if(hash=="#regist"){
        $('.regist-btn').trigger('click');
        console.log(hash+"uyoyoyo");
    
    }
} );



// var imgnumber = Math.floor(Math.random()*3);
// var imgurl = [
//     './img/index/random01.svg',
//     './img/index/random02.svg',
//     './img/index/random03.svg'
// ];
// document.write('<img src="'+imgurl[imgnumber]+'">');

var rzz_imgs = [
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


// 驗證碼

var randomArr=["./img/index/random01.svg",   
                "./img/index/random02.svg",   
                "./img/index/random03.svg",
                "./img/index/random04.svg",
                "./img/index/random05.svg",
                "./img/index/random06.svg"  
];  
var img =parseInt(Math.random()*(randomArr.length));   
var currentImage=randomArr[img];  
$(".randompic").css("background-image","url("+currentImage+")"); 


// 快捷鍵
$('.randompic').on('click',function(){
    console.log('111')
    $('#loginemail').val('butterfly.liaw@gmail.com');
    $('#loginpassword').val('666');

    $('#regis_email').val('yoga36@gmail.com');
    $('#regis_pw1').val('111');
    $('#regis_pw2').val('111');
})




