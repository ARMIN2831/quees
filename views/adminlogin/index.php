<style>
    * {
        font-family: 'poppies', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        gap: 30px;
        background: #222;
    }


    .inputBox {
        position: relative;
        width: 250px;
        margin: 20px 15px;
        display: flex;
    }
    .inputBox.error::before{
        content: '\21';
        font-family: fontAWESOME;
        position: absolute;
        color: #9c1f1f;
        font-size: 1.4em;
        top: 7px;
        left: -8px;
    }


    .inputBox input {
        width: 100%;
        background: transparent;
        color: #fff;
        border: none;
        outline: none;
        box-shadow: none;
        font-size: 1em;
        letter-spacing: 0.1em;
        padding: 10px 0 5px;
        direction: ltr;
    }

    .inputBox .span {
        position: absolute;
        left: 0;
        padding: 10px 0 5px;
        color: rgba(255, 255, 255, 0.5);
        text-transform: uppercase;
        pointer-events: none;
        letter-spacing: 0.1em;
        transition: 0.5s;
    }

    .inputBox input:valid ~ .span,
    .inputBox input:focus ~ .span {
        color: #2196f3;
        transform: translateY(-16px);
        font-size: 0.65em;
    }

    .inputBox i {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #fff;
        overflow: hidden;
    }

    .inputBox i::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, #ff1b69, #ff0, #2196f3, #9c27b0, #ff1b69);
        animation: animatIN 2s linear infinite;
        transition: 0.5s;
    }


    .inputBox input:valid ~ i::before,
    .inputBox input:focus ~ i::before {
        left: 0;
    }

    @keyframes animatIN {
        0% {
            background-position: 0;
        }
        100% {
            background-position: 250px;
        }
    }


    .login {
        position: absolute;
        background: #444;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 1.5em;
        letter-spacing: 0.1em;
        padding: 10px 30px;
        transition: 0.5s;
        cursor: pointer;
    }

    .login:hover {
        letter-spacing: 0.25em;
        background: var(--clr);
        color: var(--clr);
        box-shadow: 0 0 35px var(--clr);
    }

    .login::before {
        content: '';
        position: absolute;
        inset: 2px;
        background: #27282c;
    }

    .login span {
        position: relative;
        z-index: 1;
    }

    .login i {
        position: absolute;
        inset: 0;
        display: block;
    }

    .login i::before {
        content: '';
        position: absolute;
        top: -3.5px;
        left: 80%;
        width: 10px;
        height: 5px;
        border: 2px solid var(--clr);
        background: #27282c;
        transform: translateX(-50%);
        transition: 0.5s;
    }

    .login:hover i::before {
        width: 20px;
        left: 20%;
    }

    .login i::after {
        content: '';
        position: absolute;
        bottom: -3.5px;
        left: 20%;
        width: 10px;
        height: 5px;
        border: 2px solid var(--clr);
        background: #27282c;
        transform: translateX(-50%);
        transition: 0.5s;
    }

    .login:hover i::after {
        width: 20px;
        left: 80%;
    }

    .main_login {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 45px 0;
    }

    .top {
        width: 280px;
        height: 50px;
        border: 1px solid #1e9bff;
        box-shadow: 0 0 10px 1px #1e9bff;
        position: relative;
    }

    .top span {
        position: absolute;
        display: flex;
        top: 0;
        width: 50%;
        height: 100%;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .top span.active {
        background: #444;
    }

    .top span:hover {
        font-size: 1.03em;
        color: #e2d7d7;
    }

    .top .login_span {
        right: 0;
    }

    .top .csrf_span {
        left: 0;
    }

    .main_input, .main_secret {
        width: 280px;
        height: 360px;
        border: 1px solid #1e9bff;
        box-shadow: 0 0 8px 3px #1e9bff;
        margin: 25px;
    }

    .main_input {
        float: right;
    }

    .main_secret {
        float: left;
        position: relative;
    }

    .main_set {
        width: 660px;
        height: 397px;
        position: absolute;
    }
    .main_ok{
        width: 330px;
        height: 397px;
        overflow: hidden;
        position: relative;
    }

    .toggle{
        position: absolute;
        width: 34px;
        height: 34px;
        color: #b1a596;
        display: flex;
        border-radius: 50%;
        cursor: pointer;
        justify-content: center;
        align-items: center;
        bottom: 1px;
    }
    .toggle::before{
        content: '\f06e';
        font-family: fontAWESOME;
    }
    .toggle.hide::before{
        content: '\f070';
        font-family: fontAWESOME;
    }
    .main_input span.error{
        color: #bc4343;
        font-family: yekan;
        display: flex;
        justify-content: center;
    }
    div.error.csrf_e{
        width: 220px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 50px;
        left: 30px;
        font-size: 0.7em;
        border: 1px solid #1e9bff;
        color: #c6bbbb;
        cursor: pointer;
        opacity: 0;
    }
    .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .csrf_e .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .csrf_e:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="main">
    <div class="top">
        <span onclick="doclick(this,'login')" class="login_span active">login</span>
        <span onclick="doclick(this,'csrf')" class="csrf_span">csrf</span>
    </div>
    <div class="main_ok">
        <div class="main_set">
            <div class="main_input">
                <div onchange="doremove(this)" class="inputBox emailbox">
                    <input class="email" type="text" required="required">
                    <span class="span">email</span>
                    <i></i>
                </div>
                <div onchange="doremove(this)" class="inputBox passbox">
                    <input id="pass" class="password pass" type="password" required="required">
                    <span class="span">password</span>
                    <span class="toggle" id="toggleBtn"></span>
                    <i></i>
                </div>
                <div onchange="doremove(this)" class="inputBox secretbox">
                    <input style="font-size: 8pt" id="pass1" class="secret pass" type="password" required="required">
                    <span class="span">secret password</span>
                    <span class="toggle" id="toggleBtn1"></span>
                    <i style="bottom: -5px"></i>
                </div>
                <div onchange="doremove(this)" class="inputBox csrfbox">
                    <input style="font-size: 8pt" class="csrf" type="text" required="required">
                    <span class="span">csrf code</span>
                    <i style="bottom: -5px"></i>
                </div>
                <span class="error"></span>
                <div class="main_login">
                    <a onclick="dologin()" class="login" style="--clr:#1e9bff"><span>login</span><i></i></a>
                </div>
            </div>
            <div class="main_secret">
                <div onchange="doremove(this)" class="inputBox csrf_secretbox">
                    <input style="font-size: 8pt" id="pass2" class="csrf_secret pass" type="password" required="required">
                    <span class="span">secret password</span>
                    <span class="toggle" id="toggleBtn2"></span>
                    <i style="bottom: -5px"></i>
                </div>
                <div class="error csrf_e">
                    <span class="csrf_p"></span>
                    <span class="tooltiptext" id="myTooltip">Click to copy</span>
                </div>
                <div class="main_login">
                    <a onclick="docsrf()" class="login" style="--clr:#1e9bff"><span>get csrf</span><i></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function doclick(tag, cls) {
        if (cls == 'login') {
            if (!$(tag).hasClass('active')) {
                $('.login_span').addClass('active');
                $('.csrf_span').removeClass('active');
                $('.main_set').animate({right: '-350px'}, '300');
                $('.main_set').animate({right: '20px'}, '100');
                $('.main_set').animate({right: '0px'}, '300');
            }
        } else if (cls == 'csrf') {
            if (!$(tag).hasClass('active')) {
                $('.csrf_span').addClass('active');
                $('.login_span').removeClass('active');
                $('.main_set').animate({right: '20px'}, '300');
                $('.main_set').animate({right: '-360px'}, '100');
                $('.main_set').animate({right: '-330px'}, '300');
            }
        }
    }

    let pass=document.getElementById('pass');
    let togglebtn=document.getElementById('toggleBtn');

    let pass1=document.getElementById('pass1');
    let togglebtn1=document.getElementById('toggleBtn1');

    let pass2=document.getElementById('pass2');
    let togglebtn2=document.getElementById('toggleBtn2');

    togglebtn.onclick=function (){
        if (pass.type==='password'){
            pass.setAttribute('type','text');
            togglebtn.classList.add('hide');
        }else {
            pass.setAttribute('type','password');
            togglebtn.classList.remove('hide');
        }
    }
    togglebtn1.onclick=function (){
        if (pass1.type==='password'){
            pass1.setAttribute('type','text');
            togglebtn1.classList.add('hide');
        }else {
            pass1.setAttribute('type','password');
            togglebtn1.classList.remove('hide');
        }
    }
    togglebtn2.onclick=function (){
        if (pass2.type==='password'){
            pass2.setAttribute('type','text');
            togglebtn2.classList.add('hide');
        }else {
            pass2.setAttribute('type','password');
            togglebtn2.classList.remove('hide');
        }
    }

    function dologin(){
        var email=$('.email').val();
        var password=$('.password').val();
        var secret=$('.secret').val();
        var csrf=$('.csrf').val();
        var error=0;
        if (email===''){
            $('.emailbox').addClass('error');
            error=1;
        }
        if (password===''){
            $('.passbox').addClass('error');
            error=1;
        }
        if (secret===''){
            $('.secretbox').addClass('error');
            error=1;
        }
        if (csrf===''){
            $('.csrfbox').addClass('error');
            error=1;
        }
        if (error===0) {
            var url = 'adminlogin/login/' + email + '/' + password + '/' + secret + '/' + csrf;
            var data = {};
            $.post(url, data, function (msg) {
                error=msg;
                $('span.error').html(error);
            }, 'json');
            //window.location='lobby';
        }
    }
    function doremove(tag){
        var ok=$(tag).find('input').val();
        if (ok===''){
            $(tag).addClass('error');
        }else {
            $(tag).removeClass('error');
        }
    }
    $('.csrf_e').click(function (){
        $('div.error.csrf_e').css('background','#444');
        var copyText= $('.csrf_e .csrf_p').text();
        navigator.clipboard.writeText(copyText);
        var tooltip = $('.tooltiptext');
        tooltip.html("!Copied");
    });
    function docsrf(){
        var secret=$('.csrf_secret').val();
        var error=0;
        if (secret===''){
            $('.csrf_secretbox').addClass('error');
            error=1;
        }
        if (error===0) {
            var url = 'adminlogin/docsrf/'+secret;
            var data = {};
            $.post(url, data, function (msg) {
                error=msg;
                $('div.error.csrf_e .csrf_p').html(error);
                $('div.error.csrf_e').css('opacity','1');
                $('div.error.csrf_e').css('background','#222');
            }, 'json');
            //window.location='lobby';
        }
    }
</script>