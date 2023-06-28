<script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
<link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
<style>
    body {
        background-image: url(public/images/back.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    #main {
        width: 100%;
        /*background: rgba(0, 0, 0, 0.5);*/
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: yekan;
    }

    @media only screen and (max-width: 1470px) {

    }

    @media only screen and (min-width: 1470px) {

    }


    .main_tag .top {
        width: 100%;
        height: 85px;
        position: relative;
        border-bottom: 1px solid #5f5f5f;
    }

    .main_tag .top > div {
        width: 94%;
        height: 76px;
        position: absolute;
        color: #ea0a0abf;
    }

    .main_tag .top > div p {
        text-align: center;
        line-height: 0;
        font-size: 27pt;
    }

    .main_pad {
        padding: 5px;
        background: #5f5f5f;
        width: 80%;
        margin: 0 auto;
        box-shadow: 0 0 5px 6px #898787;
        border-radius: 7px;
    }

    .main_tag {
        width: 98.5%;
        height: 700px;
        background: #e0e0e0;
        margin: 0 auto;
        overflow: hidden;
        overflow-y: auto;
        padding-right: 19px;
    }

    .main_tag .bottom {
        width: 100%;
    }

    .main_tag .bottom .row {
        width: 98%;
        height: 50px;
        border-radius: 1rem;
        margin-top: 15px;
        background: #c5c5c5;
        border-bottom: 1px solid #ccc;
    }

    .main_tag .bottom .row .left {
        width: 5%;
        height: 100%;
        float: left;
    }

    .main_tag .bottom .row .left > div {
        width: 24px;
        height: 24px;
        margin: 7px auto;
        cursor: pointer;
    }

    .main_tag .bottom .row .left .show {
        background: url(public/images/Show.png) no-repeat;
        margin-top: 12px;
    }

    .main_tag .bottom .row .right {
        float: right;
        width: 90%;
        height: 100%;
    }

    .main_tag .bottom .row .right > div {
        width: 43%;
        padding: 10px;
        height: 30%;
        float: right;
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

    .main_tag .bottom .row .right .title {
        width: 15%;
    }

    .main_tag .bottom .row .right .status {
        width: 15%;
    }

    .main_tag .bottom .row .right .point {
        width: 15%;
    }

    .edit_set, .ques_set, .afzodan_set {
        z-index: 1000;
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
        width: 62%;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: none;
        padding-bottom: 25px;
    }

    #end .end_right {
        width: 32%;
        height: 485px;
        float: left;
        background: #e4ffff;
        border-radius: 2px;
        border: 1px solid #7cefd8;
        box-shadow: 1px 1px 1px #b6feff;
        position: absolute;
        top: 7px;
        right: 5px;
        margin-top: 25px;
    }


    #end .end_center {
        width: 30%;
        height: 485px;
        float: right;
        background: #e4ffff;
        border-radius: 2px;
        border: 1px solid #7cefd8;
        box-shadow: 1px 1px 1px #b6feff;
        position: absolute;
        right: 35%;
        top: 7px;
        margin-top: 25px;
    }

    #end .end_left {
        width: 32%;
        height: 485px;
        float: left;
        background: #e4ffff;
        border-radius: 2px;
        border: 1px solid #7cefd8;
        box-shadow: 1px 1px 1px #b6feff;
        position: absolute;
        top: 7px;
        left: 5px;
        margin-top: 25px;
    }

    #end .avatar {
        width: 125px;
        background: #44ffcb;
        border-radius: 20px;
        margin: 3px 89px;
        height: 125px;
    }

    #end .circle {
        width: 45px;
        border-radius: 132px;
        margin: 21px auto;
        height: 45px;
    }

    #end .circle_dorost {
        background: #44ff4a;
        border: 1px solid #38a51a;
    }

    #end .circle_ghalat {
        background: #ff1b1b;
        border: 1px solid #993838;
    }

    #end .circle_nazade {
        background: #d1d1d1;
        border: 1px solid #b9afaf;
    }

    #end .natije {
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: 39px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 15pt;
    }

    #end .natije_dorost {
        color: #50ff4d;
        box-shadow: 3px 3px 1px 0 #356a2d;
        background: #31992f;
    }

    #end .natije_ghalat {
        color: #ff0000;
        box-shadow: 1px 1px 3px 1px #060505;
        background: #2b2e2d;
    }

    #end .natije_nazade {
        color: #ffffff;
        box-shadow: 1px 1px 3px 1px #ad9191;
        background: #d1d1d1;

    }

    #end .dorost {
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: 40px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 14pt;
        box-shadow: 2px 4px 1px 0px #206418;
        background: #2fff35;
        color: #2d5c3c;
    }

    #end .ghalat {
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: 40px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 14pt;
        box-shadow: 3px 5px 2px 0px #a91313;
        background: #ff1a1a;
        color: #7affe3;
    }

    #end .nazade {
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: 50px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 14pt;
        background: #09ffbc;
        color: #ffffff;
        box-shadow: 3px 4px 1px #086252;
    }

    #end .givepoint {
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: -3px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 14pt;
        background: #ffe94f7a;
        color: #c6d300;
        box-shadow: 3px 5px 5px #8d8a18;
    }

    .right_ {
        width: 13%;
        height: 100%;
        float: right;
        text-align: center;
    }

    .center_ {
        width: 74%;
        height: 100%;
        float: right;
        text-align: center;
    }

    .left_ {
        width: 13%;
        height: 100%;
        float: right;
        text-align: center;
    }

    .closeA {
        background: url(public/images/close.png) no-repeat;
        display: block;
        width: 24px;
        margin: 0;
        height: 24px;
        position: relative;
        right: 5px;
        top: 5px;
        cursor: pointer;
    }
</style>
<?php
$user = $data['user'];
?>
<div id="main">

    <div class="main_pad">
        <div class="alertShow"></div>
        <div class="main_tag">

            <div class="top">
                <div>
                    <p>
                        بازی های اخیر
                    </p>
                </div>
            </div>

            <div class="bottom">
                <?php
                $baziha = $data['user'];
                foreach ($baziha as $row) {
                    ?>

                    <div data-id="" class="row">

                        <div class="right">
                            <div class="title">موضوع:<?= $row['category'] ?></div>
                            <div class="point">
                                امتیاز:<?php
                                if ($row['end_status'] == 0) {
                                    echo 10;
                                } else if ($row['end_status'] == 1) {
                                    echo 5;
                                } else if ($row['end_status'] == 2) {
                                    echo 0;
                                }
                                ?>
                            </div>
                            <div class="status">وضعیت:<?php
                                if ($row['end_status'] == 0) {
                                    echo 'بردید';
                                } else if ($row['end_status'] == 1) {
                                    echo 'باختید';
                                } else if ($row['end_status'] == 2) {
                                    echo 'مساوی شدید';
                                }
                                ?></div>
                            <div class="text">نام حریف:<?= $row['harif'] ?> </div>
                        </div>
                        <div class="left">
                            <div onclick="doShow(<?= $row['id']; ?>)" data-show="" class="show"></div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <div id="end"></div>
    <div id="dark"></div>
</div>


<script>
    function closeTag() {
        $('#end').html('');
        $('#end').fadeOut(200);
    }

    function doShow(id) {
        var url = 'recent/doshow/' + id;
        var data = {};
        $.post(url, data, function (msg) {
            if (msg === 'null') {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>این بازی نا تمام مانده و چیزی برای نمایش وجود ندارد!</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '355px');
            } else if (msg === 'false') {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>مشکلی پیش امده. لطفا بعدا امتحان کنید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            } else {

                $('#end').html('');
                var mytrue = msg[0][0];
                var myfalse = msg[0][1];
                var mynull = msg[0][2];
                var mycoin = msg[0][3];

                var enemytrue = msg[1][0];
                var enemyfalse = msg[1][1];
                var enemynull = msg[1][2];
                var enemycoin = msg[1][3];

                var status = '';
                var classs = '';
                if (msg[2] == 0) {
                    status = 'شما بردید';
                    classs = 'natije_dorost';
                } else if (msg[2] == 1) {
                    status = 'شما باختید';
                    classs = 'natije_ghalat';
                } else if (msg[2] == 2) {
                    status = 'مساوی شد';
                    classs = 'natije_nazade';
                }
                var left=msg['enemy'];
                var right=msg['my'];

                if (left=='false'){
                    left='public/images/no_image.png';
                }else {
                    left='public/images/avatar/'+left+'.png';
                }


                if (right=='false'){
                    right='public/images/no_image.png';
                }else {
                    right='public/images/avatar/'+right+'.png';
                }




                var tag = '<span onclick="closeTag()" class="closeA"></span><div class="end_right"><img width="125" src="'+left+'" class="avatar"><div class="circle_set"></div></div><div class="end_center"><div class="natije ' + classs + '">' + status + '</div><div class="dorost"><div class="right_">' + mytrue + '</div><div class="center_">تعداد انتخاب های درست</div><div class="left_">' + enemytrue + '</div></div><div class="ghalat"><div class="right_">' + myfalse + '</div><div class="center_">تعداد انتخاب های غلط</div><div class="left_">' + enemyfalse + '</div></div><div class="nazade"><div class="right_">' + mynull + '</div><div class="center_">تعداد سوالات پاسخ نداده</div><div class="left_">' + enemynull + '</div></div><div class="givepoint"><div class="right_">' + mycoin + '</div><div class="center_">امتیاز دریافتی از این بازی</div><div class="left_">' + enemycoin + '</div></div></div><div class="end_left"><img width="125" src="'+right+'" class="avatar"><div class="circle_set"></div></div>';
                $('#end').html(tag);

                var myspan = msg[0][4];
                var enemyspan = msg[1][4];

                $.each(myspan, function (index, value) {
                    var cir_class = '';
                    if (value == 'true') {
                        cir_class = 'circle_dorost';
                    } else if (value == 'false') {
                        cir_class = 'circle_ghalat';
                    } else if (value == 'null') {
                        cir_class = 'circle_nazade';
                    }
                    var cir = '<div class="circle ' + cir_class + '">';
                    $('.end_right .circle_set').append(cir);
                });


                $.each(enemyspan, function (index, value) {
                    var cir_class = '';
                    if (value == 'true') {
                        cir_class = 'circle_dorost';
                    } else if (value == 'false') {
                        cir_class = 'circle_ghalat';
                    } else if (value == 'null') {
                        cir_class = 'circle_nazade';
                    }
                    var cir = '<div class="circle ' + cir_class + '">';
                    $('.end_left .circle_set').append(cir);
                });
                $('#end').fadeIn(200);
            }
        }, 'json');
    }
    function delAlert(tag) {
        $(tag).parent('.alert-dismissible').remove();
        $('.alertShow').css('display', 'none');
    }
</script>