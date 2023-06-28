<script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
<link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">

<style>
    #main {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .button {
        width: 270px;
        height: 350px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .btn {
        width: 250px;
        height: 40px;
        border: 1px solid #21bdcda6;
        color: #21bdcda6;
        background: #fff;
        text-align: center;
        line-height: 38px;
        cursor: pointer;
        font-size: 15pt;
        font-weight: 900;
        border-radius: 0.35rem;
        font-family: sans-serif;
        position: relative;
        box-shadow: 4px 4px 2px #1f3f9845;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
        margin: 10px auto;
    }

    .btn:hover {
        color: #fff;
        border: 2px outset #fff;
        background: #21bdcda6;
        box-shadow: inset 5px 5px 3px #21bdcdc7;
    }

    .btn.exit {
        border: 1px solid #e60b0ba6;
        color: #ea0a0abf;
        box-shadow: 4px 4px 2px #c31d1d61;
    }


    .btn.exit:hover {
        border: 2px outset #e20a0abd;
        background: #c717177a;
        box-shadow: inset 5px 5px 3px #bb262694;
    }

    body {
        background-image: url(public/images/back.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }



    .rotbe, .player_information {
        width: 250px;
        height: 400px;
        border: 1px solid #ccc;
        border-radius: 0.20rem;
        margin: 180px;
        background: #fff;
    }

    @media only screen and (min-width: 400px) {
        .rotbe, .player_information {
            margin: 70px;
        }
    }

    .rotbe {
        float: right;
        overflow: hidden;
        overflow-y: auto;
        background: #f6f3f940;
        border-radius: 0.5rem;
        box-shadow: 2px 2px 2px #ccc;
    }

    .player_information {
        float: left;
    }

    .top_player {
        position: relative;
        width: 90%;
        height: 32px;
        float: right;
        margin-top: 9px;
        margin-bottom: 7px;
        margin-right: 3px;
        right: 13px;
        background: #ffffff2e;
        box-shadow: 2px 2px 2px #b3d7d48a;
        border-radius: 1.25rem;
    }

    .top_player:first-child {
        margin-top: 10px;
    }

    .top_player span.coin {
        display: block;
        background: url(public/images/coin.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        left: 12px;
    }

    .top_player span.number {
        display: block;
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 12px;
    }

    .top_player p {
        margin: 0;
        font-family: yekan;
        color: #ffffff;
        float: right;
        padding: 3px;
        padding-right: 35px;
    }

    .player_information div {
        width: 93%;
        height: 40px;
        float: right;
        margin: 5px 6px;
    }

    .player_information p {
        position: relative;
        padding: 3px;
        padding-right: 50px;
        font-family: yekan;
        right: 1px;
        top: 5px;
        margin: 0;
        color: #ffffffbf;
        background: #ffffff2e;
        box-shadow: 2px 2px 2px #b3d7d48a;
        border-radius: 1.25rem;
    }


    .player_information .avatar {
        width: 75px;
        background: #cfcfcf;
        height: 75px;
        border-radius: 5px;
        position: relative;
        right: 30%;
        top: 5px;
    }


    .player_information {
        float: left;
        position: relative;
        background: #f6f3f940;
        border-radius: 0.5rem;
        box-shadow: 2px 2px 2px #ccc;
    }


    .point p::before {
        content: ' ';
        display: block;
        background: url(public/images/coin.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 20px;
    }

    .my_rotbe p::before {
        content: ' ';
        display: block;
        background: url(public/images/rank.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 20px;
    }

    .tedad_ques p::before {
        content: ' ';
        display: block;
        background: url(public/images/eye.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 20px;
    }

    .name p::before {
        content: ' ';
        display: block;
        background: url(public/images/user.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 20px;
    }

    .energy p::before {
        content: ' ';
        display: block;
        background: url(public/images/energy.png);
        width: 24px;
        height: 24px;
        position: absolute;
        top: 3px;
        right: 20px;
    }

    .edit {
        width: 100px !important;
        position: absolute;
        bottom: 8px;
        left: 11px;
    }

    .edit:hover {
        border: none;
    }

    .edit:hover p {
        color: #3e50ce !important;
    }

    .edit p {
        text-align: center;
        padding: 0;
        position: relative;
        top: 0;
        bottom: 0;
        margin: auto 0;
        border-radius: 0;
        color: #21bdcda6;
        font-size: 12pt;
        box-shadow: none !important;
    }

    .recent {
        width: 100px !important;
        position: absolute;
        bottom: 8px;
        left: 124px;
    }

    .recent:hover {
        border: none;
    }

    .recent:hover p {
        color: #3e50ce !important;
    }

    .recent p {
        text-align: center;
        padding: 0;
        position: relative;
        top: 0;
        bottom: 0;
        margin: auto 0;
        border-radius: 0;
        color: #21bdcda6;
        font-size: 12pt;
        box-shadow: none !important;
    }

    .label {
        float: left;
        padding-left: 35px;
    }

    .top_player .left {
        float: left;
        position: relative;
        right: -3px;
    }

    .span_ques {
        font-family: 'yekan';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 10px;
        margin: auto 0;
        font-size: 10pt;
        border: 1px solid #ccc;
        border-radius: 1rem;
        width: 35px;
        height: 15px;
        display: inline-block;
        line-height: 13px;
        text-align: center;
        cursor: pointer;
        color: #564fc2e0;
        box-shadow: 2px 2px 2px #a6e9ed;
        background: #a9f7ffa6;
        transition: background 200ms ease;
    }

    .span_ques:hover {
        background: #72f2ffa6;
    }


    @media only screen and (min-width: 100px) {
        #add .row {
            width: 45%;
            height: 70px;
            float: right;
            margin: 4px;
            border: 1px solid #ccc;
            box-shadow: -5px 5px 10px 1px #909090;
            margin-right: 5px;
        }

        #add .row .show {
            width: 93%;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 2px;
            margin-right: 3px;
            text-align: center;
            line-height: 43px;
            background-color: #eee;
            font-family: yekan;
        }

        #add .row > p {
            margin: 0;
            margin-top: -1px;
            margin-right: 10px;
            float: right;
            font-size: 10pt;
        }

        #darkD {
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, .3);
            top: 0;
            left: 0;
            z-index: 100;
            display: none;

        }

        #add h4 {
            font-family: yekan;
            font-size: 13.5pt;
            padding: 8px;
            background: #eee;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        #add h4 .close {
            width: 31px;
            height: 31px;
            background: url(public/images/cancel.png) no-repeat;
            position: absolute;
            left: 8px;
            top: 8px;
            border: 1px solid #ccc;
            border-radius: 100%;
            cursor: pointer;
            box-shadow: 2px 1px 4px 0px #676767;
            transition: box-shadow .3s ease-in-out;
        }

        #add h4 .close:hover {
            box-shadow: 2px 1px 4px 0px #2c2929;
        }

        #add {
            width: 95%;
            height: 700px;
            position: fixed;
            background: #fff;
            right: 0;
            left: 0;
            margin: auto;
            top: 10px;
            z-index: 100;
            display: none;
            direction: rtl;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: -5px 3px 8px #5f5f5f;
        }
    }

    @media only screen and (min-width: 500px) {
        #add .row {
            width: 40%;
            height: 70px;
            float: right;
            margin: 4px;
            border: 1px solid #ccc;
            box-shadow: -5px 5px 10px 1px #909090;
            margin-right: 25px;
        }

        #add .row .show {
            width: 93%;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 2px;
            margin-right: 3px;
            text-align: center;
            line-height: 43px;
            background-color: #eee;
            font-family: yekan;
        }

        #add .row > p {
            margin: 0;
            margin-top: -1px;
            margin-right: 10px;
            float: right;
        }

        #darkD {
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, .3);
            top: 0;
            left: 0;
            z-index: 100;
            display: none;

        }

        #add h4 {
            font-family: yekan;
            font-size: 13.5pt;
            padding: 8px;
            background: #eee;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        #add h4 .close {
            width: 31px;
            height: 31px;
            background: url(public/images/cancel.png) no-repeat;
            position: absolute;
            left: 8px;
            top: 8px;
            border: 1px solid #ccc;
            border-radius: 100%;
            cursor: pointer;
            box-shadow: 2px 1px 4px 0px #676767;
            transition: box-shadow .3s ease-in-out;
        }

        #add h4 .close:hover {
            box-shadow: 2px 1px 4px 0px #2c2929;
        }

        #add {
            width: 90%;
            height: 700px;
            position: fixed;
            background: #fff;
            right: 0;
            left: 0;
            margin: auto;
            top: 10px;
            z-index: 100;
            display: none;
            direction: rtl;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: -5px 3px 8px #5f5f5f;
        }
    }

    @media only screen and (min-width: 1000px) {
        #add .row {
            width: 87%;
            margin: 10px 0 10px 0;
            border: 1px solid #ccc;
            box-shadow: -5px 5px 10px 1px #909090;
            position: relative;
            right: 6%;
        }

        #add .row .show {
            width: 97%;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 2px;
            margin-right: 3px;
            text-align: center;
            line-height: 43px;
            background-color: #eee;
            font-family: yekan;
        }

        #add .row > p {
            margin: 0;
            margin-top: -1px;
            margin-right: 10px;
            float: right;
        }

        .update_description {
            width: 180px;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 8px #848383;
            overflow: hidden;
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(89, 232, 96, 1) 100%);
            text-align: center;
            line-height: 38px;
            color: #61524d;
            cursor: pointer;
            position: relative;
            right: 15%;
            top: 20px;
        }

        .update_description:hover {
            box-shadow: 2px 2px 8px #666565;
        }

        #darkD {
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, .3);
            top: 0;
            left: 0;
            z-index: 100;
            display: none;

        }

        #add h4 {
            font-family: yekan;
            font-size: 13.5pt;
            padding: 8px;
            background: #eee;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        #add h4 .close {
            width: 31px;
            height: 31px;
            background: url(public/images/cancel.png) no-repeat;
            position: absolute;
            left: 8px;
            top: 8px;
            border: 1px solid #ccc;
            border-radius: 100%;
            cursor: pointer;
            box-shadow: 2px 1px 4px 0px #676767;
            transition: box-shadow .3s ease-in-out;
        }

        #add h4 .close:hover {
            box-shadow: 2px 1px 4px 0px #2c2929;
        }

        #add {
            width: 25%;
            height: 700px;
            position: fixed;
            background: #fff;
            right: 0;
            left: 0;
            margin: auto;
            top: 10px;
            z-index: 100;
            display: none;
            direction: rtl;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: -5px 3px 8px #5f5f5f;
            font-family: yekan;
        }
    }


</style>
<div id="main">
    <div class="button">
        <a href="game/index">
            <div class="play_of btn">PLAY OFFLINE</div>
        </a>
        <a href="online/index">
            <div class="play_on btn">PLAY ONLINE</div>
        </a>
        <a href="">
            <div class="about_us btn">PLAY FRIENDS</div>
        </a>
        <a onclick="logout()">
            <div class="exit btn">EXIT</div>
        </a>
    </div>
    <script>
        function logout() {
            window.location = 'lobby/logout';
        }
    </script>

    <aside class="rotbe">
        <?php
        $rank = $data['rank'];
        $i = 1;
        foreach ($rank as $row) {
            if ($row['ok'] == 'ok') {
                $ok = 'style="background: #44cbffe8"';
            } else {
                $ok = '';
            }
            if ($i <= 3) {
                ?>
                <div <?= $ok ?> class="top_player">

                    <div class="left">

                        <span class="coin"></span>

                        <label class="label">
                            <p style="padding-right: 0;">
                                <?= $row['coin'] ?>
                            </p>
                        </label>

                    </div>

                    <span style="background: url(public/images/<?= $i; ?>.png);" class="number"></span>

                    <p><?= $row['name'] ?></p>

                </div>
            <?php } else { ?>
                <div <?= $ok ?> class="top_player">

                    <div class="left">
                        <span class="coin"></span>

                        <label class="label">
                            <p style="padding-right:0;"><?= $row['coin'] ?></p>
                        </label>

                    </div>

                    <span class="number"
                          style="right: 9px;background: #8dd0c133;border-radius: 2.25rem;text-align: center;font-size: 13px;color: #615e5e70;line-height: 26px;"><?= $i; ?></span>
                    <p><?= $row['name'] ?></p>


                </div>
            <?php }
            $i++;
        } ?>
    </aside>

    <aside class="player_information">
        <?php
        $user = $data['user'];
        ?>
        <img width="75" class="avatar" src="<?php if ($user['avatar']=='false') { echo ' public/images/tohii.jpg'; }else{
            echo 'public/images/avatar/'; echo $user['avatar'] . '.png';
        } ?>">
        <div class="name"><p>نام:<?= $user['name'] ?></p></div>
        <div class="point"><p>امتیاز:<?= $user['coin'] ?></p></div>
        <div class="energy"><p>شارژ:<?= $user['charge'] ?>/100</p></div>
        <div style="position: relative" class="tedad_ques"><p>سوالات:<?= $user['ques'] ?></p>
            <a href="question/index"><span class="span_ques">نمایش</span></a>
        </div>
        <div class="my_rotbe"><p>رتبه:<?= $user['rank'] ?></p></div>
        <div class="edit btn">
            <p>
                ویرایش اطلاعات
            </p>
        </div>
        <a href="recent/index">
            <div class="recent btn">
                <p>
                    بازی های اخیر
                </p>
            </div>
        </a>
    </aside>

    <div id="darkD"></div>
    <form id="form1" method="post" action="lobby/updateUser">
        <div id="add">

            <h4>
                ویرایش اطلاعات
                <span class="close"></span>

            </h4>
            <div class="row">
                <p>نام و نام خانوادگی:</p>
                <input name="name" class="show" value="<?= $user['name'] ?>">
            </div>
            <style>
                .avatar_row {
                    width: 100%;
                    height: 85px;
                    overflow: hidden;
                    overflow-x: auto;
                    margin-top: 20px;
                    background: #Ccc;
                }

                <?php
                $avatar = $data['avatar'];
                $num_av=(count($avatar))*69;
                ?>
                .avatar_scroll {
                    width: <?= $num_av ?>px;
                    height: 70px;
                    background: #ccc;
                }

                .avatar_img {
                    width: 65px;
                    height: 65px;
                    border: 1px solid #9a9a9a;
                    margin: 1px;
                    float: right;
                    cursor: pointer;
                }
                .avatar_img.active{
                    background: #00ff3e;
                    margin-top: 5px;
                }
            </style>

            <div style="height: 105px" class="row">
                <p>اواتار:</p>

                <div class="avatar_row">
                    <div class="avatar_scroll">
                        <?php
                        foreach ($avatar as $row) {
                            ?>
                            <div onclick="imgselect(this)" class="avatar_img"><img src="public/images/avatar/<?= $row['img'] ?>.png" width="65"/>
                                <input name="img" style="display: none" value="<?= $row['id']; ?>"></div>
                        <?php } ?>
                    </div>
                </div>

            </div>


            <div class="row">
                <p>ایمیل:</p>
                <input name="email" class="show" value="<?= $user['email'] ?>">


            </div>
            <div class="row" style="height: 310px;">
                <p>پسورد قبلی خود را وارد کنید:</p>
                <input id="pass" type="password" name="oldpass" style="margin-bottom: 30px;"
                       placeholder="پسورد قبلی خود را وارد کنید" class="show">
                <p>پسورد جدید را وارد کنید:</p>
                <input id="pass1" type="password" name="newpass" style="margin-bottom: 30px;"
                       placeholder="پسورد جدید را وارد کنید" class="show">
                <p>پسورد جدید خود را تایید کنید:</p>
                <input id="pass2" type="password" name="renewpass" style="margin-bottom: 10px;"
                       placeholder="پسورد جدید خود را تایید کنید" class="show">
                <div class="show_pass">
                    <p style="margin: 0;float: right;">نمایش رمز عبور</p>

                    <label class="check_label"></label>
                    <input style="margin: 0 1px;" class="check_input" onclick="passwordChanger();checkInput(this)"
                           type="checkbox">
                </div>
            </div>


            <div style="color: #ca100a;font-size: 11pt;margin: 10px 30px;float: right;">
                <?php
                if (isset($_GET['error'])) {
                    $error2 = $_GET['error'];
                    echo $error2;
                }
                ?>
            </div>
            <input type="hidden" value="<?= $user['email'] ?>" name="oldEmail">
            <div onclick="submit()" class="update_description">ویرایش</div>

        </div>
    </form>


</div>


<script>

    function imgselect(tag){
        $('.avatar_img').removeClass('active');
        $(tag).addClass('active');
    }
    $('.edit').click(function () {
        showWindow();
    });

    function passwordChanger() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        var x1 = document.getElementById("pass1");
        if (x1.type === "password") {
            x1.type = "text";
        } else {
            x1.type = "password";
        }
        var x2 = document.getElementById("pass2");
        if (x2.type === "password") {
            x2.type = "text";
        } else {
            x2.type = "password";
        }
    }

    function checkInput(tag) {
        if ($(tag).is(':checked')) {
            $(tag).parent('div').find('.check_label').addClass('checked');
        } else {
            $(tag).parent('div').find('.check_label').removeClass('checked');
        }
    }

    function submit() {
        var img=$('.avatar_img');
        var ok=0;
        $.each(img, function (index, value) {
            if ($(value).hasClass('active')){
                ok++;
                if (ok>1){
                    $(value).remove();
                }
            }else {
                $(value).remove();
            }
        });
        $('#form1').submit();
    }

    function showWindow() {
        $('#add').fadeIn(200);
        $('#darkD').fadeIn(200);
    }

    $('.close').click(function () {
        $('#add').fadeOut(200);
        $('#darkD').fadeOut(200);
    });
    <?php
    if (isset($_GET['error'])) {
        echo 'showWindow();';
    }
    ?>



    $(".rotbe").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: false,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "rounded-dark",

        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null

    });


    $(".avatar_row").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "x",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: false,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "x",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "dark-thin",

        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null

    });
</script>