<style>
    #main {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    body {
        background-image: url(public/images/back.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: yekan;
    }

    .about {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        border-radius: .5rem;
        background: #e4f5f4;
    }

    .button {
        width: 140px;
        height: 40px;
        border: 2px double #57c8da;
        border-radius: 0.25rem;
        background: #7af1f7;
        margin: 6px;
        cursor: pointer;
        float: right;
        box-shadow: 2px 2px 2px #57c8da;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .button:hover {
        background: #8ce4e0;
        border: 2px double #9cfbef;
        box-shadow: inset 4px 4px 2px #6aafac;
    }

    .button p {
        margin: 0;
        text-align: center;
        line-height: 40px;
        font-weight: 900;
        font-size: 18pt;
        color: #7b7676;
        transition: color 200ms ease;
    }

    .buttom:hover p {
        color: #615c5c;
    }

    .game {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .game .top {
        width: 100%;
        height: 100px;
        border: 4px double #ccc;
        background: #efefef;
        position: relative;
    }

    .game .bottom {
        width: 100%;
        height: 380px;
        margin-top: 5px;
        border: 4px double #ccc;
        background: #efefef;
    }


    .base-timer {
        position: relative;
        width: 100px;
        height: 100px;
    }

    .base-timer__svg {
        transform: scaleX(-1);
    }

    .base-timer__circle {
        fill: none;
        stroke: none;
    }

    .base-timer__path-elapsed {
        stroke-width: 7px;
        stroke: grey;
    }

    .base-timer__path-remaining {
        stroke-width: 7px;
        stroke-linecap: round;
        transform: rotate(90deg);
        transform-origin: center;
        transition: 1s linear all;
        fill-rule: nonzero;
        stroke: currentColor;
    }

    .base-timer__path-remaining.green {
        color: rgb(65, 184, 131);
    }

    .base-timer__path-remaining.orange {
        color: orange;
    }

    .base-timer__path-remaining.red {
        color: red;
    }

    .base-timer__label {
        position: absolute;
        width: 100px;
        height: 100px;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .point {
        float: right;
        padding: 2px;
        position: absolute;
        top: 30px;
        right: 10px;
        text-align: center;
        font-family: yekan;
        margin: 0;
        color: #888484e0;
        border-radius: 1.25rem;
    }

    .btn {
        width: 300px;
        height: 50px;
        border: 1px solid #e60b0ba6;
        color: #ea0a0abf;
        background: #f5eded;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        font-size: 13pt;
        border-radius: 0.5rem;
        position: absolute;
        box-shadow: 4px 4px 2px #c31d1d61;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .btn:hover {
        color: #fff;
        border: 2px outset #e20a0abd;
        background: #c717177a;
        box-shadow: inset 5px 5px 3px #bb262694;
    }

    .number {
        width: 450px;
        height: 80px;
        margin: 10px auto;
        position: relative;
    }

    .number h3 {
        font-size: 12pt;
        text-align: center;
        margin: 0;
    }

    .lines {
        height: 40px;
        width: 100%;
        position: relative;
        padding-top: 10px;
        padding-right: 35px;
    }

    .lines .lines_circle {
        position: absolute;
        top: 0;
        right: 0;
        display: block;
        width: 24px;
        height: 24px;
        border-radius: 100%;
        background: #78ffff;
        z-index: 10;
    }

    .lines .lines_circle i {
        position: absolute;
        display: block;
        width: 20px;
        height: 20px;
        top: 1px;
        color: #5f5f5f;
        right: 9px;
    }

    .lines .lines_line {
        display: block;
        width: 100px;
        height: 6px;
        margin-top: 9px;
        background: #78ffff;
        margin-right: 1px;
        z-index: 1;
    }

    .lines .lines_line.active {
        background: #73daf9;
    }

    .lines .lines_circle.active {
        background: #73daf9;
    }

    .lines_gp {
        width: 90px;
        height: 24px;
        position: relative;
        float: right;
    }

    .ques {
        min-height: 100px;
        padding: 0 10px;
    }

    .ques .text {
        COLOR: #9e9898;
    }

    .answers {
        float: right;
        width: 100%;
    }

    .answers .ans {
        width: 20%;
        float: right;
        margin-right: 25px;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 3px;
        height: 55px;
        cursor: pointer;
        background: #dddedd;
        transition: background-color 200ms ease;
        box-shadow: 4px 4px 2px #94888861;
    }

    .answers .ans.dorost {
        background: #55f755c7;
        box-shadow: 4px 4px 2px #3eff6e61;
        border: 1px solid #5cde70;
    }

    .answers .ans.ghalat {
        border: 1px solid #d43a3a;
        background: #cc0505e3;
        box-shadow: 4px 4px 2px #d8141461;
    }

    .answers .ans.dorost:hover {
        color: #000 !important;
        background: #55f755c7;
        box-shadow: 4px 4px 2px #3eff6e61;
        border: 1px solid #5cde70;
    }

    .answers .ans.ghalat:hover {
        color: #000 !important;
        border: 1px solid #d43a3a;
        background: #cc0505e3;
        box-shadow: 4px 4px 2px #d8141461;
    }

    .answers .ans p {
        margin: 0;
        text-align: center;
        line-height: 55px;
        transition: color 200ms ease;
    }

    .answers .ans:hover {
        color: #fff;
        border: 2px outset #b1a8a836;
        background: #4841419e;
        box-shadow: inset 5px 5px 3px #6d6b6b94;
    }

    .answers .ans:hover p {
        color: #ccc;
    }

    .answers .ans.nazade {
        background: #72ff1ac7;
        box-shadow: 4px 4px 2px #3eff6e61;
        border: 1px solid #5cde70;
    }

    .answers .ans.nazade:hover {
        background: #72ff1ac7;
        box-shadow: 4px 4px 2px #3eff6e61;
        border: 1px solid #5cde70;
    }

    .loader {
        border: 10px solid #1fc554;
        position: absolute;
        top: 26%;
        right: 48%;
        border-radius: 50%;
        border-top: 10px solid #00ff3e;
        width: 20px;
        height: 20px;
        z-index: 5001;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }


    div, a, p, ul, li, span {
        direction: rtl;
        text-align: right;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    #dark {
        width: 100%;
        height: 500px;
        padding-left: 10px;
        position: absolute;
        background: rgba(0, 0, 0, .2);
        top: 0;
        left: -9px;
        z-index: 5000;
        display: none;
    }

    #end {
        border-radius: 0.5rem;
        background: #eefeff;
        box-shadow: 2px 2px 3px #7ed2cb;
        border: 2px solid #befaff;
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    #end .ques_status {
        width: 500px;
        height: 75px;
        margin: 17px auto;
        border-radius: 0.5rem;
        background: #eefeff;
        box-shadow: 2px 2px 3px #7ed2cb;
        border: 2px solid #befaff;
    }
    #end .ques_set{
        width: 300px;
        margin: 46px auto;
        border-radius: 0.5rem;
        background: #c9fcff;
        box-shadow: 2px 2px 3px #7ed2cb;
        border: 2px solid #befaff;
    }
    #end .ques_status span {
        display: inline-block;
        width: 32px;
        height: 32px;
        border: 1px solid #986d6d;
        box-shadow: 2px 2px 2px #6b5f5f;
        border-radius: 50%;
        color: #797373;
        margin: 19px 31px;
    }

    #end .ques_status span i {
        display: inline-block;
        width: 32px;
        height: 32px;
        text-align: center;
        line-height: 32px;
    }

    .ques_true, .ques_true, .ques_false, .ques_null, .total_point {
        margin: 10px auto;
        width: 300px;
        text-align: center;
        font-size: 15pt;
        color: #928484;
    }

    .back {
        bottom: 70px !important;
        right: 0 !important;
        left: 0 !important;
        margin: 0 auto !important;
        line-height: 49px;
    }
    .btn_set{
        width: 100px;
        height: 30px;
        font-size: 11pt;
        line-height: 30px;
        position: absolute;
        bottom: 5px;
        right: 5px;
    }


    .alertShow {
        display: none;
        position: absolute;
        z-index: 10;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0 auto;
        animation: animatebottom 0.4s;
        width: 320px;
    }

    @keyframes animatebottom {
        from {
            bottom: -300px;
            opacity: 0
        }
        to {
            bottom: 0;
            opacity: 1
        }
    }
    .close {

        position: relative;
        top: 0;
        right: -11px;
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }

    .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: .5;
    }
    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        box-shadow: 1px 1px 8px;
    }
    .page_Active{
        display: block;
    }
    .page_deActive{
        display: none;
    }
    .about_set{
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    .about_set .pager{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 48px;
    }
    .about_set .page_left{
        display: block;
        background-image: url(public/images/left.png);
        width: 48px;
        height: 48px;
        position: absolute;
        left: 43%;
        top: 0;
        border-radius: 100%;
        cursor: pointer;
    }
    .about_set .page_right{
        display: block;
        background-image: url(public/images/left.png);
        transform: rotate(180deg);
        width: 48px;
        height: 48px;
        position: absolute;
        right: 43%;
        top: 0;
        border-radius: 100%;
        cursor: pointer;
    }
    .about_set .page_left:hover{
        background-color: #e7e7e794;
        box-shadow: 2px 2px 1px #cfcfcf;
    }
    .about_set .page_right:hover{
        background-color: #e7e7e794;
        box-shadow: 2px 2px 1px #cfcfcf;
    }
    .about_set .page_num{
        display: block;
        width: 16px;
        height: 34px;
        font-size: 16pt;
        position: absolute;
        top: 7px;
        left: 48.6%;
    }
    .asker{
        background: #000;
        border-radius: 7px;
        width: 290px;
        padding: 8px;
        display: none;
        position: absolute;
        z-index: 10;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0 auto;
        box-shadow: 2px 2px 5px 0 #898484;
    }
    .asker .top{
        background: #666;
        font-size: 19px;
        padding: 10px;
        color: #CCC;
    }
    .asker .bottom{
        background: #666;
        padding: 10px;
        text-align: right;
        border-top: 1px solid #000;
        height: 30px;
    }
    .asker .bottom .click{
        width: 80px;
        height: 30px;
        border: 1px solid #898484;
        border-radius: 3px;
        box-shadow: 2px 2px 5px 0 #898484;
        padding: 0;
        position: absolute;
        background: #84dedb;
        text-align: center;
        font-size: 14pt;
        cursor: pointer;
    }
    .asker .bottom .click:hover{
        box-shadow: inset 2px 2px 5px 0 #898484;
    }
</style>

<div id="main">
    <div class="alertShow"></div>
    <div class="asker"></div>
    <div class="about_set">
    <?php
    $about = $data['about'];
    $ch=array_chunk($about,40);
    $i=0;
    foreach ($ch as $key=> $row2){

    ?>


    <div data-page="<?= $i ?>" class="about <?php if($i==0){echo 'page_Active';}else{echo 'page_deActive';} ?>">
        <?php
        foreach ($row2 as $row) {
            ?>
            <div data-clicker="<?= $row['id'] ?>" class="button clicker">
                <p>
                    <?= $row['title'] ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <?php
        $i++; }
    if (count($ch)==1) {}else{
    ?>
    <div class="pager">
        <span onclick="pager('left');" class="page_left"></span>
        <span class="page_num">1</span>
        <span style="opacity: 0.5" onclick="pager('right');" class="page_right"></span>
    </div>
        <?php } ?>
</div>
    <div style="display: none" class="game">
        <div class="top">
            <div class="point">
                امتیاز این سوال:
                <p style="margin: 0;float: left">
                    10
                </p>
            </div>
            <div class="number">

                <h3>ریاضیات</h3>
                <div class="lines">
                    <div data-next="0" class="lines_gp">
                        <span class="lines_circle active"><i>1</i></span>
                        <span class="lines_line active"></span>
                    </div>
                    <div data-next="1" class="lines_gp">
                        <span class="lines_circle"><i>2</i></span>
                        <span class="lines_line"></span>
                    </div>
                    <div data-next="2" class="lines_gp">
                        <span class="lines_circle"><i>3</i></span>
                        <span class="lines_line"></span>
                    </div>
                    <div data-next="3" class="lines_gp">
                        <span class="lines_circle"><i>4</i></span>
                        <span class="lines_line"></span>
                    </div>
                    <div data-next="4" class="lines_gp">
                        <span class="lines_circle"><i>5</i></span>
                    </div>
                </div>
            </div>
            <div class="time">
                <div style="position: absolute;top: 0;left: 0;" id="app"></div>
            </div>
            <div class="report btn btn_set">
                گزارش این سوال
            </div>
        </div>


        <div class="bottom">
            <div class="ques">
                <p class="text">سوال تستی</p>
            </div>
            <div class="answers">
            </div>


        </div>


        <div class="loading"></div>
        <div id="dark"></div>
    </div>

    <div style="display: none" id="end"></div>

</div>


<script>
    $('.clicker').click(function (){
        var attr=$(this).attr('data-clicker');
        var tag='<div class="top">10 شارژ کسر شود؟</div><div class="bottom"><div style="left: 30px;" onclick="doCharge('+attr+'),delAsk()" class="yes click">بله</div><div style="right: 30px" onclick="delAsk()" class="no click">خیر</div></div>';
        $('.asker').html(tag);
        $('.asker').css('display','block');
    });
    function delAlert(tag) {
        $(tag).parent('.alert-dismissible').remove();
        $('.alertShow').css('display', 'none');
    }
    function delAsk(){
        $('.asker').html('');
        $('.asker').css('display','none');
    }





    var timer = null;

    function time() {

        var first = 60;
        var past = 0;
        var WARNING_THRESHOLD = 30;
        var ALERT_THRESHOLD = 10;

        var COLOR_CODES = {
            info: {
                color: "green"
            },
            warning: {
                color: "orange",
                threshold: WARNING_THRESHOLD
            },
            alert: {
                color: "red",
                threshold: ALERT_THRESHOLD
            }
        };
        var remainingPathColor = COLOR_CODES.info.color;
        document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
            first
        )}</span>
</div>
`;
        timer = setInterval(function () {
            past = past + 1;
            var ok = first - past;


            var rawTimeFraction = ok / first;
            var set = rawTimeFraction - (1 / first) * (1 - rawTimeFraction);


            var circleDasharray = `${(
                set * 283
            ).toFixed(0)} 283`;
            document
                .getElementById("base-timer-path-remaining")
                .setAttribute("stroke-dasharray", circleDasharray);


            var {alert, warning, info} = COLOR_CODES;
            if (ok <= alert.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(warning.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(alert.color);
            } else if (ok <= warning.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(info.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(warning.color);
            }
            document.getElementById("base-timer-label").innerHTML = formatTime(
                ok
            );

            if (past == first) {
                timesup2();
            }
        }, 1000)
    }

    function timesup() {
        clearInterval(timer);
        $('.loading').addClass('loader');
        $('#dark').fadeIn();
        setTimeout(function () {
            $('.loading').removeClass('loader');
            $('#dark').fadeOut();
            next();
        }, 500);
    }
    function timesup2() {
        clearInterval(timer);
        find();
        $('.loading').addClass('loader');
        $('#dark').fadeIn();
        setTimeout(function () {
            $('.loading').removeClass('loader');
            $('#dark').fadeOut();
            next();
        }, 500);
    }

    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

        return `${minutes}:${seconds}`;
    }


</script>
<script>
    function doAbout(id) {
        var url = 'game/doAbout/' + id;
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);
            if (msg['set']==='false'){
                //var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تعداد سوال کافی برای این موضوع موجود نمیباشد!</div>';
                //$('.alertShow').html(tag);
                //$('.alertShow').css('display', 'block');
            }else {
                getQues();
                $('.about').remove();
                $('.game').css('display', 'block');
                $('.number h3').html(msg[0]['game']);
                time();
            }

        }, 'json');
    }




    function doCharge(id) {

        var url = 'game/doCharge/'+id;
        var data = {};
        $.post(url, data, function (msg) {
            $('.alertShow').css('display', 'none');
            if (msg==0){
                var tag = '<div class="alert alert-info alert-dismissible">10 شارژ کسر شد.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '140px');
                setTimeout(function () {
                    $('.alertShow').css('display', 'none');
                    doAbout(id);
                }, 1000);
            }
            if (msg==1){
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تعداد سوال کافی برای این موضوع موجود نمیباشد!</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }
            if (msg==2){
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تعداد شارژ کم است.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '165px');
            }
            if (msg==3){
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>شما به تمام سوالات این بخش پاسخ داده اید! لطفا مدتی صبر کنید تا سوالات بیشتری حاضر شود یا به سوالات بخش دیگری پاسخ دهید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }
        }, 'json');
    }





    function getQues() {
        var url = 'game/getQues/';
        var data = {};
        $.post(url, data, function (msg) {
            $('.text').html(msg['text']);
            $('.answers').html('');
            $('.point p').text(msg['coin']);
            $.each(msg['answer'], function (index, value) {
                var id = value['id'];
                var title = value['title'];
                var tag = '<div data-ans="' + id + '" onclick="doGozine(' + id + ',this)" class="ans"><p>' + title + '</p></div>';
                $('.answers').append(tag);
            });
        }, 'json');
    }

    function next() {
        var url = 'game/next/';
        var data = {};
        $.post(url, data, function (msg) {
            if (msg['end'] == 1) {
                end();
            }
            if (!msg['end'] == 1) {
                $('.text').html(msg['text']);
                $('.answers').html('');
                $('.point p').text(msg['coin']);
                time();
                $.each(msg['answer'], function (index, value) {
                    var id = value['id'];
                    var title = value['title'];
                    var tag = '<div data-ans="' + id + '" onclick="doGozine(' + id + ',this)" class="ans"><p>' + title + '</p></div>';
                    $('.answers').append(tag);
                });
                var num = msg['next'];
                var div = $('.lines_gp');
                $.each(div, function (index, value) {
                    var attrA = $(value).attr('data-next');
                    if (num == attrA) {
                        $(value).find('.lines_circle').addClass('active');
                        $(value).find('.lines_line').addClass('active');
                    }
                });
            }

        }, 'json');
    }

    function end() {
        var url = 'game/end/';
        var data = {};
        $.post(url, data, function (msg) {
            $('.game').fadeOut(500);
            $('#end').fadeIn(500);
            var tag='<div class="ques_status"><!-- span --></div><div class="ques_set"><div class="ques_true">تعداد جواب درست:'+msg[0]+'</div><div class="ques_false">تعداد جواب غلط:'+msg[1]+'</div><div class="ques_null">تعداد جواب نزده:'+msg[2]+'</div><div class="total_point">امتیاز دریافتی:'+msg[3]+'</div></div><a href="lobby/index"><div class="btn back">بازگشت به لابی</div></a></div>';
            $('#end').html(tag);

            var i=1;
            $.each(msg[4], function (index, value) {
                if (value=='true'){
                    var span='<span style="background: #42ff42;"><i>'+i+'</i></span>';
                    $('.ques_status').append(span);
                }
                if (value=='false'){
                    var span='<span style="background: #ff2222;"><i>'+i+'</i></span>';
                    $('.ques_status').append(span);
                }
                if (value=='null'){
                    var span='<span style="background: #bdbab5;"><i>'+i+'</i></span>';
                    $('.ques_status').append(span);
                }
                i=i+1;
            });
        },'json');
    }

    function find() {
        if (!$('.ans').hasClass('dorost')) {
            if (!$('.ans').hasClass('nazade')) {
                var url = 'game/find/';
                var data = {};
                $.post(url, data, function (msg) {
                    var ans = $('.ans');
                    var id = msg[0]['id'];
                    $.each(ans, function (index, value) {
                        var attrA = $(value).attr('data-ans');
                        if (id == attrA) {
                            $(value).addClass('nazade');
                        }
                    });
                }, 'json');
            }
        }
    }

    function doGozine(id, tag) {
        if (!$('.ans').hasClass('dorost')) {
            if (!$('.ans').hasClass('nazade')) {
                var url = 'game/doGozine/' + id;
                var data = {};
                $.post(url, data, function (msg) {
                    timesup();
                    if (msg[0] === 'true') {
                        $(tag).addClass('dorost');
                    } else if (msg[0] === 'false') {
                        $(tag).addClass('ghalat');
                        var id = msg[1];
                        var ans = $('.ans');
                        $.each(ans, function (index, value) {
                            var attrA = $(value).attr('data-ans');
                            if (id == attrA) {
                                $(value).addClass('dorost');
                            }
                        });

                    }
                }, 'json');
            }
        }
    }


    function pager(id){
        var tags=$('.about');
        var attr=$('.about.page_Active').attr('data-page');
        if (id==='left'){
            var newAA=Number(attr)+1;
            var last=tags.length-1;
            if (newAA > last){
                $('.page_left').css('opacity', '0.5');
            }else {
                $('.page_left').css('opacity', '1');
                $('.page_right').css('opacity', '1');
                $.each(tags, function (index, value) {
                    var attrN=$(value).attr('data-page');
                    if (attrN==newAA){
                        $(value).removeClass('page_deActive');
                        $(value).addClass('page_Active');
                        if (newAA == last){
                            $('.page_left').css('opacity', '0.5');
                            $('.page_right').css('opacity', '1');
                        }
                    }else {
                        $(value).removeClass('page_Active');
                        if (!$(value).hasClass('page_deActive')){
                            $(value).addClass('page_deActive');
                        }

                    }
                });
            }
        }

        if (id==='right'){
            var newA=Number(attr)-1;
            if (newA < 0){
                $('.page_right').css('opacity', '0.5');
            }else {
                $('.page_right').css('opacity', '1');
                $.each(tags, function (index, value) {
                    var attrN=$(value).attr('data-page');
                    if (attrN==newA){
                        $(value).removeClass('page_deActive');
                        $(value).addClass('page_Active');
                        if (newA == 0){
                            $('.page_right').css('opacity', '0.5');
                            $('.page_left').css('opacity', '1');
                        }
                    }else {
                        $(value).removeClass('page_Active');
                        if (!$(value).hasClass('page_deActive')){
                            $(value).addClass('page_deActive');
                        }
                    }
                });
            }
        }
        var attrNEW=$('.about.page_Active').attr('data-page');
        var num=Number(attrNEW)+1;
        $('.page_num').text(num);



    }



   // if (newAA >= last){
  //      $('.page_right').css('opacity', '0.5');
 //   }





</script>