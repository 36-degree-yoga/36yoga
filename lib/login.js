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

// php部分-->登入
const loginemail = $('#loginemail')
const loginpassword = $('#loginpassword')

function checkForm() {
    console.log(loginpassword + loginemail);

    $.post('login-api.php', {

        loginemail: loginemail.val(),
        loginpassword: loginpassword.val()
    }, function(data) {
        if (data.success) {
            // console.log('hi');
            location.href = '<?= $gotoURL ?>';
        } else {
            console.log('error');
        }


    }, 'json');
};

// php部分-->註冊
const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
const regis_email = $('#regis_email');
const regis_pw1 = $('#regis_pw1');
let regis_alert = $('#regis_alert');

function checkForm2() {
    let isPass = true;

    if (regis_email.val()) {
        if (!email_re.test(regis_email.val())) {
            isPass = false;
            regis_alert.text('請填寫正確的 email 格式!');
        }
    }

    if (isPass) {
        $.post('register-api.php', {
            regis_email: regis_email.val(),
            regis_pw1: regis_pw1.val()
        }, function(d) {
            if (d.success) {
                console.log('hi registered');
                location.href = '<?= $gotoURL ?>';
            } else {
                console.log('error fail to register');
            }
        }, 'json');
    }
}