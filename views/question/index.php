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

    .main_tag .top {
        width: 100%;
        height: 85px;
        position: relative;
        border-bottom: 1px solid #5f5f5f;
    }

    .main_tag .top > div {
        width: 100px;
        height: 30px;
        font-size: 11pt;
        line-height: 30px;
        position: absolute;
        border: 1px solid #e60b0ba6;
        color: #ea0a0abf;
        background: #f5eded;
        text-align: center;
        cursor: pointer;
        border-radius: 0.5rem;
        box-shadow: 4px 4px 2px #c31d1d61;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .main_tag .top > div:hover {
        color: #fff;
        border: 2px outset #e20a0abd;
        background: #c717177a;
        box-shadow: inset 5px 5px 3px #bb262694;
    }

    .main_tag .top .sabt_shode {
        top: 45px;
        right: 10px;
        color: #01ae6e;
        border: 1px solid #01ae6e;
        box-shadow: 4px 4px 2px #5bc49d;
    }

    .main_tag .top .sabt_shode:hover {
        top: 45px;
        right: 10px;
        border: 2px outset #01ae6e;
        background: #72c4a6;
        box-shadow: inset 5px 5px 3px #52a788;
    }

    .main_tag .top .rad_shode {
        top: 45px;
        right: 236px;
    }

    .main_tag .top .entezar {
        top: 45px;
        right: 123px;
        color: #d4a531;
        border: 1px solid #ceb54b;
        box-shadow: 4px 4px 2px #dca130;
    }

    .main_tag .top .entezar:hover {
        color: #fff;
        border: 2px outset #dc9f35;
        background: #e6bf55;
        box-shadow: inset 5px 5px 3px #b8a025;
    }

    .main_tag .top .all {
        top: 5px;
        right: 10px;
        color: #6d7673;
        border: 1px solid #829b92;
        box-shadow: 4px 4px 2px #89a49a;
    }

    .main_tag .top .all:hover {
        color: #fff;
        border: 2px outset #9a9e9e;
        background: #909e98;
        box-shadow: inset 5px 5px 3px #a9b3af;
    }

    .main_tag .bottom {
        width: 100%;
    }

    .main_tag .bottom .row {
        width: 100%;
        height: 100px;
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

    .main_tag .bottom .row .left .delete {
        background: url(public/images/delete.png) no-repeat;
    }

    .main_tag .bottom .row .left .edit {
        background: url(public/images/edit.png) no-repeat;
    }

    .main_tag .bottom .row .left .show {
        background: url(public/images/show.png) no-repeat;
    }

    .main_tag .bottom .row .right {
        float: right;
        width: 90%;
        height: 100%;
    }

    .main_tag .bottom .row .right > div {
        width: 45%;
        padding: 10px;
        height: 30%;
        float: right;
    }

    .ques_set {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: none;
    }

    .ques_set .bottom {
        width: 100%;
        height: 380px;
        margin-top: 5px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background: #efefef;
    }


    .afzodan_set {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: none;
    }

    .afzodan_set .bottom {
        width: 100%;
        height: 380px;
        margin-top: 5px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background: #efefef;
    }


    .edit_set {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: none;
    }

    .edit_set .bottom {
        width: 100%;
        height: 380px;
        margin-top: 5px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background: #efefef;
    }

    .ques {
        min-height: 100px;
        padding: 0 10px;
    }

    .ques .text {
        COLOR: #9e9898;
        margin: 6px;
    }

    .ques input {
        width: 97%;
        height: 43px;
        padding: 5px;
        text-align: center;
        font-size: 14pt;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: yekan;
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

    .answers .ans.dorost:hover {
        color: #000 !important;
        background: #55f755c7;
        box-shadow: 4px 4px 2px #3eff6e61;
        border: 1px solid #5cde70;
    }

    .answers .ans p {
        margin: 0;
        text-align: center;
        line-height: 55px;
        transition: color 200ms ease;
    }

    .ques_set .bottom .close {
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

    .answers .ans input {
        width: 92%;
        height: 43px;
        padding: 5px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: yekan;
    }

    .afzodan_set .bottom .close {
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

    .afzodan_set .bottom .sabt_edit {
        width: 100px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        position: absolute;
        bottom: 120px;
        left: 10px;
        border: 1px solid #fd4242;
        background: #f48686;
        box-shadow: 3px 3px 2px 0 #ccc;
        cursor: pointer;
        border-radius: 6px;
    }

    .afzodan_set .bottom .sabt_edit:hover {
        border: 1px solid #fd4242;
        background: #e76666;
        box-shadow: inset 3px 3px 2px 0 #a06f6f;
    }


    .edit_set .bottom .close {
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

    .bottom .sabt_edit {
        width: 100px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        position: absolute;
        bottom: 120px;
        left: 10px;
        border: 1px solid #fd4242;
        background: #f48686;
        box-shadow: 3px 3px 2px 0 #ccc;
        cursor: pointer;
    }

    .bottom .sabt_edit:hover {
        border: 1px solid #fd4242;
        background: #e76666;
        box-shadow: inset 3px 3px 2px 0 #a06f6f;
    }

    .bottom .sabt_afz {
        width: 100px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        position: absolute;
        bottom: 120px;
        left: 10px;
        border: 1px solid #fd4242;
        background: #f48686;
        box-shadow: 3px 3px 2px 0 #ccc;
        cursor: pointer;
    }

    .bottom .sabt_afz:hover {
        border: 1px solid #fd4242;
        background: #e76666;
        box-shadow: inset 3px 3px 2px 0 #a06f6f;
    }

    .asker {
        background: #000;
        border-radius: 7px;
        width: 290px;
        padding: 8px;
        display: none;
        position: absolute;
        z-index: 10;
        left: 0;
        right: 0;
        bottom: 210px;
        margin: 0 auto;
        box-shadow: 2px 2px 5px 0 #898484;
    }

    .asker .top {
        background: #666;
        font-size: 19px;
        padding: 10px;
        color: #CCC;
    }

    .asker .bottom {
        background: #666;
        padding: 10px;
        text-align: right;
        border-top: 1px solid #000;
        height: 30px;
    }

    .asker .bottom .click {
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

    .asker .bottom .click:hover {
        box-shadow: inset 2px 2px 5px 0 #898484;
    }

    .main_tag .top .afzodan {
        top: 43px;
        left: 19px;
        color: #31e1e1;
        border: 1px solid #31e1e1;
        box-shadow: 4px 4px 2px #31e1e1;
    }


    .main_tag .top .afzodan:hover {
        color: #fff;
        border: 2px outset #35c5dc4d;
        background: #10c6e3;
        box-shadow: inset 5px 5px 3px #2bad9fc2;
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
    .edit_set,.ques_set,.afzodan_set{
        z-index: 1000;
    }
    .cat{
        position: absolute;
        float: right;
        right: 15px;
        width: 96%;
        font-family: yekan;
        top: 214px;
        box-shadow: 2px 2px 2px #ccc;
        border-radius: 9px;
        text-align: center;
    }






</style>
<?php
$user = $data['user'];
$user = $user['soal'];
?>
<div id="main">

    <div class="ques_set">
        <div class="bottom">
            <span onclick="closeTag()" class="close"></span>
            <div class="ques">
                <p class="text">سوال تستی</p>
            </div>
            <div class="answers">
            </div>
        </div>
    </div>
    <div class="edit_set">
        <div class="bottom">
            <span onclick="closeTag()" class="close"></span>
            <div class="ques">
                <input value="سوال تستی" class="text">
            </div>
            <div class="answers">
            </div>
            <div onclick="sabt_edit()" class="sabt_edit">ثبت تغییرات</div>
        </div>
    </div>
    <div class="afzodan_set">
        <select class="cat">
            <option value="set">موضوع مورد نظر خود را وارد کنید.</option>
            <?php
            $cat=$data['cat'];
            foreach ($cat as $row){
                ?>
                <option value="<?= $row['id'] ?>" ><?= $row['title'] ?></option>
            <?php } ?>
        </select>
        <div class="bottom">
            <span onclick="closeTag()" class="close"></span>
            <div class="ques">
                <input placeholder="متن سوال خود را اینجا وارد کنید." value="" class="text">
            </div>
            <div class="answers">
                <div data-ans="1" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه1" value=""></div>
                <div data-ans="2" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه2" value=""></div>
                <div data-ans="3" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه3" value=""></div>
                <div data-ans="4" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه4" value=""></div>
            </div>
            <div onclick="sabt_afz()" class="sabt_afz">افزودن سوال</div>
        </div>
    </div>
    <div class="asker"></div>


    <div class="main_pad">
        <div class="alertShow"></div>
        <div class="main_tag">
            <div class="top">
                <?php
                $dat = $data['user'];
                $entezar = $dat['entezar'];
                $rad = $dat['rad'];
                $taiid = $dat['taiid'];
                $tedad_ok = $dat['tedad'];
                ?>
                <div class="sabt_shode">ثبت شده:<?= $taiid ?></div>
                <div class="entezar">در انتظار:<?= $entezar ?></div>
                <div class="rad_shode">رد شده:<?= $rad ?></div>
                <div class="all">همه سوالات:<?= $tedad_ok ?></div>
                <div onclick="afzodan()" class="afzodan">افزودن سوال</div>
            </div>
            <div class="bottom">

                <?php
                foreach ($user

                as $row) {
                $stat = $row['status'];
                if ($stat == 0) {
                    $ok = 'در انتظار';
                } else if ($stat == 1) {
                    $ok = 'تایید شده';
                } else if ($stat == 2) {
                    $ok = 'رد شده';
                }
                ?>
                <div data-id="<?= $row['id'] ?>" class="row">
                    <div class="right">
                        <div class="title">موضوع:<?= $row['game'] ?></div>
                        <div class="point">امتیاز:<?= $row['coin'] ?></div>
                        <div class="status">وضعیت:<?= $ok ?></div>
                        <div class="tedad_pasokh_dorost">تعداد کسانی که به این سوال پاسخ داده
                            اند:<?= $row['num'] ?></div>
                        <div class="text">متن سوال: <?= $row['text'] ?></div>
                    </div>
                    <div class="left">
                        <div onclick="doDelete(this)" data-clicker="<?= $row['id'] ?>" class="delete"></div>
                        <?php
                        if ($stat == 1) {
                            ?>
                            <div onclick="doShow(this)" data-show="<?= $row['id'] ?>" class="show"></div>
                            <?php
                        } else {
                        ?>
                        <div onclick="doEdit(this)" data-edit="<?= $row['id'] ?>" class="edit"></div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


<script>

    function doShow(ta) {
        var attr = $(ta).attr('data-show');
        var url = 'question/show/' + attr;
        var data = {};
        $.post(url, data, function (msg) {
                $('.ques_set .text').html(msg['text']);
                $('.ques_set .answers').html('');
                $('.ques_set').css('display', 'block');

                $.each(msg['answer'], function (index, value) {
                    var check = value['status'];
                    var ok = '';
                    if (check == 'g_true') {
                        ok = 'dorost';
                    }
                    var id = value['id'];
                    var title = value['title'];
                    var tag = '<div class="ans ' + ok + '"><p>' + title + '</p></div>';
                    $('.ques_set .answers').append(tag);
                });

        }, 'json');
    }

    function doDelete(ta) {
        var attr = $(ta).attr('data-clicker');
        var tag = '<div class="top">ایا میخواهید این سوال را پاک کنید؟</div><div class="bottom"><div style="left: 30px;" onclick="delQues (' + attr + '),delAsk()" class="yes click">بله</div><div style="right: 30px" onclick="delAsk()" class="no click">خیر</div></div>';
        $('.asker').html(tag);
        $('.asker').css('display', 'block');
    }

    function delAsk() {
        $('.asker').html('');
        $('.asker').css('display', 'none');
    }

    function delQues(id) {
        var url = 'question/delQues/' + id;
        var data = {};
        $.post(url, data, function (msg) {
            var tag = $('.row');
            $.each(tag, function (index, value) {
                var attr = $(value).attr('data-id');
                if (id == attr) {
                    $(value).remove();
                }
            });
            var taiid = msg['taiid'];
            var rad = msg['rad'];
            var entezar = msg['entezar'];
            var tedad = msg['tedad'];

            var tag2 = '<div class="sabt_shode">ثبت شده:' + taiid + '</div><div class="entezar">در انتظار:' + entezar + '</div><div class="rad_shode">رد شده:' + rad + '</div><div class="all">همه سوالات:' + tedad + '</div><div onclick="afzodan()" class="afzodan">افزودن سوال</div>';
            $('.top').html(tag2);
        }, 'json');
        var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>سوال مورد نظر پاک شد.</div>';
        $('.alertShow').html(tag);
        $('.alertShow').css('display', 'block');
        $('.alertShow').css('width', '140px');
    }

    function getQues() {
        var url = 'question/getQues/';
        var data = {};
        $.post(url, data, function (msg) {
            var soal = msg['soal'];
            var taiid = msg['taiid'];
            var rad = msg['rad'];
            var entezar = msg['entezar'];
            var tedad = msg['tedad'];
            var stat = soal['status'];
            $('.main_tag .bottom').html('');
            $.each(soal, function (index, value) {
                var ok = '';
                var stat = '';
                var status = value['status'];
                if (status == 0) {
                    ok = 'در انتظار';
                    stat = '<div onclick="doEdit(this)" data-edit="' + value['id'] + '" class="edit"></div>';
                } else if (status == 1) {
                    ok = 'تایید شده';
                    stat = '<div data-show="' + value['id'] + '" class="show"></div>';
                } else if (status == 2) {
                    ok = 'رد شده';
                    stat = '<div onclick="doEdit(this)" data-edit="' + value['id'] + '" class="edit"></div>';
                }
                var tag = '<div data-id="' + value['id'] + '" class="row"><div class="right"><div class="title">موضوع:' + value['game'] + '</div><div class="point">امتیاز:' + value['coin'] + '</div><div class="status">وضعیت:' + ok + '</div><div class="tedad_pasokh_dorost">تعداد کسانی که به این سوال پاسخ دادهاند:' + value['num'] + '</div><div class="text">متن سوال:     ' + value['text'] + '</div></div><div class="left"><div onclick="doDelete(this)" data-clicker="' + value['id'] + '" class="delete"></div>' + stat + '</div></div>';
                $('.main_tag .bottom').append(tag);
            });
            var tag2 = '<div class="sabt_shode">ثبت شده:' + taiid + '</div><div class="entezar">در انتظار:' + entezar + '</div><div class="rad_shode">رد شده:' + rad + '</div><div class="all">همه سوالات:' + tedad + '</div><div  onclick="afzodan()" class="afzodan">افزودن سوال</div>';
            $('.top').html(tag2);
        }, 'json');
    }

    function delAlert(tag) {
        $(tag).parent('.alert-dismissible').remove();
        $('.alertShow').css('display', 'none');
    }

    function afzodan() {
        $('.afzodan_set').css('display', 'block');
    }

    function closeTag() {
        $('.edit_set').css('display', 'none');
        $('.ques_set').css('display', 'none');
        $('.afzodan_set').css('display', 'none');
    }

    function doDorost(tag) {
        $('.edited').removeClass('dorost');
        $('.afz').removeClass('dorost');
        $(tag).addClass('dorost');
    }

    function doEdit(ta) {
        var attr = $(ta).attr('data-edit');
        var url = 'question/edit/' + attr;
        var data = {};
        $.post(url, data, function (msg) {
            if (msg['status'] == 1) {

            } else {
                $('.edit_set .text').val(msg['text']);
                $('.edit_set .answers').html('');
                $('.edit_set').css('display', 'block');
                $('.edit_set').attr('data-id', msg['id']);

                $.each(msg['answer'], function (index, value) {
                    var check = value['status'];
                    var ok = '';
                    if (check == 'g_true') {
                        ok = 'dorost';
                    }
                    var id = value['id'];
                    var title = value['title'];
                    var tag = '<div data-ans="' + value['id'] + '" onclick="doDorost(this)" class="ans edited ' + ok + '"><input data-ans="' + value['id'] + '" value="' + title + '"></div>';
                    $('.edit_set .answers').append(tag);
                });
            }
        }, 'json');
    }

    function sabt_afz() {
        var dorost = $('.afzodan_set .afz.dorost').attr('data-ans');
        var title = $('.afzodan_set .text').val();
        var ans = $('.afzodan_set .afz input');
        var cat = $('.cat').find(":selected").val();
        var arr = [];
        var ok=0;
        $.each(ans, function (index, value) {
            var val = $(value).val();
            if (val.length==0){
                ok=1;
            }
            arr.push(val);
        });

        if ($('.afzodan_set .afz').hasClass('dorost')) {
            if (title.length==0){
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا صورت سوال را بنویسید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }else {
                if (cat=='set'){
                    var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا موضوع مورد نظر خود را انتخاب کنید.</div>';
                    $('.alertShow').html(tag);
                    $('.alertShow').css('display', 'block');
                    $('.alertShow').css('width', '320px');
                }else {
                    if (ok==0){
                        var url = 'question/afzodan/' + title + '/' + dorost + '/' + arr + '/' + cat;
                        var data = {};
                        $.post(url, data, function (msg) {
                            var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>سوال با موفقیت ثبت شد!منتظر بمانید تا سوال شما تایید شود.</div>';
                            $('.alertShow').html(tag);
                            $('.alertShow').css('display', 'block');
                            $('.alertShow').css('width', '320px');
                            $('.afzodan_set').css('display', 'none');
                            $('.afzodan_set .bottom .ques input').val('');
                            var ok= $('.afzodan_set .bottom .answers .ans input');
                            $('.ans.afz.dorost').removeClass('dorost');
                            $.each(ok, function (index, value) {
                                $(value).val('');
                            });
                            $('.cat option[value="set"]').attr('selected', 'selected');
                            getQues();
                        }, 'json');
                    }else {
                        var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا تمام گزینه ها را پر کنید.</div>';
                        $('.alertShow').html(tag);
                        $('.alertShow').css('display', 'block');
                        $('.alertShow').css('width', '320px');
                    }
                }
            }
        } else {
            var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>گزینه درست مورد نظر خود را وارد کنید.</div>';
            $('.alertShow').html(tag);
            $('.alertShow').css('display', 'block');
            $('.alertShow').css('width', '320px');
        }

    }

    function sabt_edit() {
        var title = $('.edit_set .text').val();
        var ans = $('.edit_set .edited input');
        var dorost = $('.edit_set .edited.dorost').attr('data-ans');
        var id = $('.edit_set').attr('data-id');
        var arr = [];

        var ok=0;
        $.each(ans, function (index, value) {
            var val = $(value).val();
            if (val.length==0){
                ok=1;
            }
            arr.push(val);
        });

        if ($('.edit_set .edited').hasClass('dorost')) {
            if (title.length==0){
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا صورت سوال را بنویسید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }else {
                    if (ok==0){
                        var url = 'question/editQues/' + title + '/' + dorost + '/' + arr + '/' + id;
                        var data = {};
                        $.post(url, data, function (msg) {
                            var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تغییرات با موفقیت ثبت شد.</div>';
                            $('.alertShow').html(tag);
                            $('.alertShow').css('display', 'block');
                            $('.alertShow').css('width', '320px');
                            $('.edit_set').css('display', 'none');
                        }, 'json');
                    }else {
                        var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا تمام گزینه ها را پر کنید.</div>';
                        $('.alertShow').html(tag);
                        $('.alertShow').css('display', 'block');
                        $('.alertShow').css('width', '320px');
                    }

            }
        } else {
            var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>گزینه درست مورد نظر خود را وارد کنید.</div>';
            $('.alertShow').html(tag);
            $('.alertShow').css('display', 'block');
            $('.alertShow').css('width', '320px');
        }

    }

    $(".main_tag").mCustomScrollbar({
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
        theme: "dark",

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