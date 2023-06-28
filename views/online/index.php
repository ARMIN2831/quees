<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    #main {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: Yekan;
    }

    body {
        background-image: url(public/images/back.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: yekan;
    }


    .online {
        width: 800px;
        position: absolute;
        background: #000;
        top: 0;
        bottom: 0;
        height: 452px;
        left: 0;
        border-radius: 10px;
        right: 0;
        margin: auto;
        display: none;
    }


    .online .main_online {
        width: 100%;
        height: 450px;
        border: 1px solid #242222;
        background: #3c3737;
        border-radius: 10px;
        box-shadow: 3px 5px 11px 4px #464141;

    }

    .right {
        float: right;
        background: #2c2c2c;
        width: 211px;
        border-radius: 0.5rem;
        height: 282px;
        margin-top: 70px;
        margin-right: 93px;
        position: relative;
        border: 2px solid #35c5ff;
        box-shadow: 0px 0px 17px 1px #08487b;
        background: #38272a;
    }

    .right .avatar {
        width: 125px;
        background: #cfcfcf;
        height: 125px;
        border-radius: 25px;
        margin: 35px 43px;
    }

    .center {
        float: right;
        position: relative;
        border: 2px solid #35c5ff;
        box-shadow: 0px 0px 17px 1px #c94d4d;
        background: #38272a;
        width: 177px;
        border-radius: 0.5rem;
        height: 282px;
        margin-top: 70px;
        margin-right: 16px;
    }

    .center .jostojo {
        text-align: center;
        width: 167px;
        color: #919697;
        height: 25px;

        border-radius: 3px;
    }

    .center .icon {
        text-align: center;
        width: 168px;
        background: #ccc;
        color: #15626e;
        height: 94px;
        margin: 50px auto;
        border-radius: 3px;
    }

    .left {
        float: left;
        border: 2px solid #dd1e1e;
        box-shadow: 0px 0px 17px 1px #660d0d;
        background: #38272a;
        width: 211px;
        border-radius: 0.5rem;
        height: 282px;
        margin-top: 70px;
        margin-left: 67px;
        position: relative;
        opacity: 0;
    }

    .left .avatar {
        width: 125px;
        background: #cfcfcf;
        height: 125px;
        border-radius: 25px;
        margin: 35px 43px;
    }

    .name {
        width: 171px;
        background: #161616;
        height: 25px;
        border-radius: 2px;
        color: #afacac;
        text-align: center;
        margin: 25px auto;
    }

    @keyframes ldio-ebh3wy6x0hv {
        0% {
            transform: translate(1px, 1px)
        }
        33.33% {
            transform: translate(51px, 1px)
        }
        66.66% {
            transform: translate(21px, 51px)
        }
        100% {
            transform: translate(1px, 1px)
        }
    }


    .ldio-ebh3wy6x0hv > div {
        transform: scale(1);
        transform-origin: 50px 50px;
    }

    .ldio-ebh3wy6x0hv > div > div {
        animation: ldio-ebh3wy6x0hv 1.6949152542372883s linear infinite;
        position: absolute
    }

    .ldio-ebh3wy6x0hv > div > div div:nth-child(1) {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 6px solid #000;
        background: #545454;
    }

    .ldio-ebh3wy6x0hv > div > div div:nth-child(2) {
        width: 8.5px;
        height: 25.5px;
        transform: rotate(-45deg);
        background: #000;
        border-radius: 0 0 4px 4px;
        position: absolute;
        top: 34px;
        left: 42.5px
    }

    .loadingio-spinner-magnify-l5opdwl7v0q {
        margin-top: 40px;
        width: 168px;
        height: 120px;
        display: inline-block;
        overflow: hidden;
        background: #38272a;
    }

    .ldio-ebh3wy6x0hv {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(0.87);
        backface-visibility: hidden;
        transform-origin: 0 0;
        padding-right: 70px;
        padding-top: 20px;
    }

    .ldio-ebh3wy6x0hv div {
        box-sizing: content-box;
    }

    .page_Active {
        display: block;
    }

    .page_deActive {
        display: none;
    }

    .about_set {
        width: 800px;
        height: 500px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .about_set .pager {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 48px;
    }

    .about_set .page_left {
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

    .about_set .page_right {
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

    .about_set .page_left:hover {
        background-color: #e7e7e794;
        box-shadow: 2px 2px 1px #cfcfcf;
    }

    .about_set .page_right:hover {
        background-color: #e7e7e794;
        box-shadow: 2px 2px 1px #cfcfcf;
    }

    .about_set .page_num {
        display: block;
        width: 16px;
        height: 34px;
        font-size: 16pt;
        position: absolute;
        top: 7px;
        left: 48.6%;
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
        background: #e4f5f459;
    }

    .button {
        width: 140px;
        height: 40px;
        border: 2px double #b2f4ffbd;
        border-radius: 0.25rem;
        background: #7af1f7c9;
        margin: 6px;
        cursor: pointer;
        float: right;
        box-shadow: 2px 2px 2px #57c8da4d;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .button:hover {
        background: #8ce4e0;
        border: 2px double #9cfbef99;
        box-shadow: inset 4px 4px 2px #6aafac8a;
    }

    .button p {
        margin: 0;
        text-align: center;
        line-height: 40px;
        font-weight: 900;
        font-size: 18pt;
        color: #ffffff;
        transition: color 200ms ease;
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
        bottom: 0;
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

    .cancel {
        width: 153px;
        height: 30px;
        margin: 20px auto;
        font-size: 11pt;
        line-height: 30px;
        border: 4px solid #e60b0ba6;
        color: #ea0a0abf;
        background: #2c2c2c;
        text-align: center;
        cursor: pointer;
        border-radius: 0.5rem;
    }

    .cancel:hover {
        color: #ff0000;
        border: 3px outset #721919bd;
        background: #db00007a;
        box-shadow: 5px 5px 3px #44191994;
    }

    .background_set {
        background: url(public/images/vss.jpg) no-repeat;
        width: 800px;
        height: 450px;
        border-radius: 10px;
        position: fixed;
        overflow: hidden;
    }

    .background_set .left {
        top: 0px;
        border: 2px solid #dd1e1e;
        box-shadow: 0px 0px 17px 1px #660d0d;
        background: #38272a;
    }

    .background_set .right {
        top: 0px;
        border: 2px solid #35c5ff;
        box-shadow: 0px 0px 17px 1px #08487b;
        background: #38272a;
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
        height: 150px;
        border: 4px double #ccc;
        background: #efefef;
        position: relative;
    }

    .game .bottom {
        width: 100%;
        height: 100%;
        margin-top: 5px;
        border: 4px double #ccc;
        background: #efefef;
        position: relative;
    }


    .base-timer {
        position: relative;
        width: 70px;
        height: 70px;
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
        top: -14px;
        right: -16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .point {
        float: right;
        padding: 2px;
        position: absolute;
        top: 70px;
        right: 55px;
        text-align: center;
        font-family: yekan;
        margin: 0;
        color: #00f3e8e0;
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

    .btn_set {
        width: 100px;
        height: 30px;
        font-size: 11pt;
        line-height: 30px;
        position: absolute;
        bottom: 16px;
        right: 54px;
    }

    #app {
        position: absolute;
        top: 72px;
        left: 56px;
    }

    .right_top {
        float: right;
        width: 21%;
        height: 100%;
        position: absolute;
    }

    .center_top {
        width: 56%;
        height: 100%;
        margin-right: 176px;
        position: absolute;
    }

    .left_top {
        width: 21%;
        float: left;
        height: 100%;
    }

    .avatar {
        width: 110px;
        background: #ccc;
        border-radius: 20px;
        margin: 10px 30px;
        height: 100px;
    }

    .point_ {
        width: 65%;
        background: #ccc;
        border-radius: 20px;
        margin: -3px auto;
        height: 13%;
        font-size: 10.5pt;
    }

    .point_ .p_ {
        margin: 0 0px;
        float: left;
        top: -1px;
        right: -6px;
        position: relative;
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
        width: 99%;
        height: 500px;
        padding-left: 10px;
        position: absolute;
        background: rgba(0, 0, 0, .2);
        top: 0;
        left: 0;
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
    }

    #end .end_right{
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
    }


    #end .end_center{
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
    }

    #end .end_left{
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
    }

    #end .avatar{
        width: 125px;
        background: #44ffcb;
        border-radius: 20px;
        margin: 3px 89px;
        height: 125px;
    }

    #end .circle{
        width: 45px;
        border-radius: 132px;
        margin: 21px auto;
        height: 45px;
    }

    #end .circle_dorost{
        background: #44ff4a;
        border: 1px solid #38a51a;
    }

    #end .circle_ghalat{
        background: #ff1b1b;
        border: 1px solid #993838;
    }

    #end .circle_nazade{
        background: #d1d1d1;
        border: 1px solid #b9afaf;
    }

    #end .natije{
        width: 91%;
        padding: 6px;
        height: 36px;
        text-align: center;
        margin: 39px auto;
        font-family: yekan;
        border-radius: 12px;
        font-size: 15pt;
    }

    #end .natije_dorost{
        color: #50ff4d;
        box-shadow: 3px 3px 1px 0 #356a2d;
        background: #31992f;
    }

    #end .natije_ghalat{
        color: #ff0000;
        box-shadow: 1px 1px 3px 1px #060505;
        background: #2b2e2d;
    }

    #end .natije_nazade{
        color: #ffffff;
        box-shadow: 1px 1px 3px 1px #ad9191;
        background: #d1d1d1;

    }

    #end .dorost{
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
    #end .ghalat{
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
    #end .nazade{
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
    #end .givepoint{
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

    .right_{
        width: 13%;
        height: 100%;
        float: right;
        text-align: center;
    }
    .center_{
        width: 74%;
        height: 100%;
        float: right;
        text-align: center;
    }
    .left_{
        width: 13%;
        height: 100%;
        float: right;
        text-align: center;
    }
    .left_top.active{
        opacity: 0.5;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .left_top.active::before{
        content: '\f1eb';
        font-family: fontAWESOME;
        position: absolute;
        font-size: 25pt;
        color: #9d0a0a;
    }

</style>
<div id="main">
    <div class="alertShow"></div>
    <div class="asker"></div>
    <div class="about_set">
        <?php
        $about = $data['about'];
        $ch = array_chunk($about, 40);
        $i = 0;
        foreach ($ch as $key => $row2) {

            ?>


            <div data-page="<?= $i ?>" class="about <?php if ($i == 0) {
                echo 'page_Active';
            } else {
                echo 'page_deActive';
            } ?>">
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
            $i++;
        }
        if (count($ch) == 1) {
        } else {
            ?>
            <div class="pager">
                <span onclick="pager('left');" class="page_left"></span>
                <span class="page_num">1</span>
                <span style="opacity: 0.5" onclick="pager('right');" class="page_right"></span>
            </div>
        <?php } ?>
    </div>
    <div class="online"></div>
    <div style="display: none" class="game">
        <div class="top">
            <div class="right_top">
                <img width="110" src="" class="avatar">
                <div class="point_">
                    <p class="p_">
                        در حال پاسخ دادن به سوال...
                    </p>
                </div>
            </div>
            <div class="center_top">
                <div class="point">
                    امتیاز این سوال:
                    <p style="margin: 0;float: left">
                        88888
                    </p>
                </div>
                <div class="number">

                    <h3>tarikh</h3>
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
                    <div id="app"></div>
                </div>
                <div class="report btn btn_set">
                    گزارش این سوال
                </div>
            </div>
            <div class="left_top">
                <img width="110" src="" class="avatar">
                <div class="point_">
                    <p class="p_">
                        در حال پاسخ دادن به سوال...
                    </p>
                </div>
            </div>

        </div>


        <div class="bottom">
            <div class="ques">
                <p class="text">سوال تستی</p>
            </div>
            <div class="answers">
            </div>

            <div id="dark"></div>
        </div>


        <div class="loading"></div>
    </div>
    <div id="end"></div>

</div>

<script>
    function delAsk() {
        $('.asker').html('');
        $('.asker').css('display', 'none');
    }

    $('.clicker').click(function () {
        var attr = $(this).attr('data-clicker');
        var tag = '<div class="top">10 شارژ کسر شود؟</div><div class="bottom"><div style="left: 30px;" onclick="docharge(' + attr + '),delAsk()" class="yes click">بله</div><div style="right: 30px" onclick="delAsk()" class="no click">خیر</div></div>';
        $('.asker').html(tag);
        $('.asker').css('display', 'block');
    });

    function pager(id) {
        var tags = $('.about');
        var attr = $('.about.page_Active').attr('data-page');
        if (id === 'left') {
            var newAA = Number(attr) + 1;
            var last = tags.length - 1;
            if (newAA > last) {
                $('.page_left').css('opacity', '0.5');
            } else {
                $('.page_left').css('opacity', '1');
                $('.page_right').css('opacity', '1');
                $.each(tags, function (index, value) {
                    var attrN = $(value).attr('data-page');
                    if (attrN == newAA) {
                        $(value).removeClass('page_deActive');
                        $(value).addClass('page_Active');
                        if (newAA == last) {
                            $('.page_left').css('opacity', '0.5');
                            $('.page_right').css('opacity', '1');
                        }
                    } else {
                        $(value).removeClass('page_Active');
                        if (!$(value).hasClass('page_deActive')) {
                            $(value).addClass('page_deActive');
                        }

                    }
                });
            }
        }

        if (id === 'right') {
            var newA = Number(attr) - 1;
            if (newA < 0) {
                $('.page_right').css('opacity', '0.5');
            } else {
                $('.page_right').css('opacity', '1');
                $.each(tags, function (index, value) {
                    var attrN = $(value).attr('data-page');
                    if (attrN == newA) {
                        $(value).removeClass('page_deActive');
                        $(value).addClass('page_Active');
                        if (newA == 0) {
                            $('.page_right').css('opacity', '0.5');
                            $('.page_left').css('opacity', '1');
                        }
                    } else {
                        $(value).removeClass('page_Active');
                        if (!$(value).hasClass('page_deActive')) {
                            $(value).addClass('page_deActive');
                        }
                    }
                });
            }
        }
        var attrNEW = $('.about.page_Active').attr('data-page');
        var num = Number(attrNEW) + 1;
        $('.page_num').text(num);
    }

    function docharge(id) {
        var url = 'online/docharge/' + id;
        var data = {};
        $.post(url, data, function (msg) {
            if (msg == 1) {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تعداد سوال کافی برای این موضوع موجود نمیباشد!</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            } else if (msg == 2) {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تعداد شارژ کم است.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '165px');
            } else {
                var tag = '<div class="alert alert-info alert-dismissible">10 شارژ کسر شد.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '140px');
                setTimeout(function () {
                    $('.alertShow').css('display', 'none');
                    $('.about_set').remove();
                    var name = msg['name'];
                    var avatar=msg['avatar'];
                    if (avatar=='false'){
                        avatar='public/images/no_image.png';
                    }else {
                        avatar='public/images/avatar/'+avatar+'.png';
                    }
                    $('.top .right_top .avatar').attr('src',avatar);
                    var tag = '<div class="main_online"><div style="display: none" class="background_set"></div><div class="left"><img width="125" src="" class="avatar"><div class="name">     </div></div><div class="right"><img width="125" src="'+avatar+'" class="avatar"><div class="name">' + name + '</div></div><div class="center"><div class="loadingio-spinner-magnify-l5opdwl7v0q"><div class="ldio-ebh3wy6x0hv"><div><div><div></div><div></div></div></div></div></div><div class="jostojo">در حال جستوجوی کاربر...</div> <div onclick="docancel()" class="cancel">لغو جستوجو</div></div></div>';

                    $('.online').html(tag);
                    $('.background_set').fadeOut();
                    $('.online').css('display', 'block');
                }, 1000);
                doOnline(id);

            }
        }, 'json');
    }

    function docancel() {
        var url = 'online/docancel';
        var data = {};
        $.post(url, data, function (msg) {
            location.reload(true);
        });
    }

    function delAlert(tag) {
        $(tag).parent('.alert-dismissible').remove();
        $('.alertShow').css('display', 'none');
    }

    function doOnline(id) {
        timer2 = setInterval(function () {
            var url = 'online/doOnline/' + id;
            var data = {};
            $.post(url, data, function (msg) {
                //msg=[['name']];
                if (msg) {
                    var avatar=msg['avatar'];
                    if (avatar=='false'){
                        avatar='public/images/no_image.png';
                    }else {
                        avatar='public/images/avatar/'+avatar+'.png';
                    }
                    $('.left .name').html(msg['name']);
                    $('.left .avatar').attr('src',avatar);
                    $('.top .left_top .avatar').attr('src',avatar);
                    //$('.right').css('opacity','1');
                    $('.center').remove();
                    //$('.main_online').addClass('active');
                    //$('.main_online').css('background','url(public/images/vss.jpg) no-repeat');
                    $('.left').css('opacity', '0');
                    $('.right').css('opacity', '0');
                    $('.left').css('top', '-140px');
                    $('.right').css('top', '-140px');
                    var right = $('.right');
                    var left = $('.left');
                    $('.background_set').append(right);
                    $('.background_set').append(left);

                    $('.background_set .right').animate({opacity: '1'}, '400');
                    $('.background_set .right').animate({top: '25px'}, '400');
                    $('.background_set .right').animate({top: '-15px'}, '500');
                    $('.background_set .right').animate({top: '0px'}, '700');

                    $('.background_set .left').delay('1600').animate({opacity: '1'}, '400');
                    $('.background_set .left').animate({top: '25px'}, '400');
                    $('.background_set .left').animate({top: '-15px'}, '500');
                    $('.background_set .left').animate({top: '0px'}, '700');



                    $('.background_set').fadeIn(200);
                    clear();

                }
            }, 'json');
        }, 1000);
    }

    function clear() {
        clearInterval(timer2);
        setTimeout(function () {
            $('.online').remove();
            $('.game').css('display', 'block');
            doAbout();
            getgame();
        }, 5000);
    }

    function getgame() {
        var url = 'online/getgame/';
        var data = {};
        $.post(url, data, function (msg) {
            doonques(msg);
            wait();
        }, 'json');
    }

    function doAbout() {
        var url = 'online/doAbout/';
        var data = {};
        $.post(url, data, function (msg) {
            doques(msg);
        }, 'json');
    }

    function doques(msg) {
        $('.text').html(msg['text']);
        $('.answers').html('');
        $('.point p').text(msg['coin']);
        $.each(msg['answer'], function (index, value) {
            var id = value['id'];
            var title = value['title'];
            var tag = '<div data-ans="' + id + '" onclick="doGozine(' + id + ',this)" class="ans"><p>' + title + '</p></div>';
            $('.answers').append(tag);
        });

        $('.number h3').html(msg['game']);
    }

    function doGozine(id, tag) {
        var url = 'online/doGozine/' + id;
        var data = {};
        $.post(url, data, function (msg) {
            if (msg === 0) {
                $(tag).addClass('dorost');
            } else if (msg[1] === 1) {
                $(tag).addClass('ghalat');
                var id = msg[0];
                var ans = $('.ans');
                $.each(ans, function (index, value) {
                    var attrA = $(value).attr('data-ans');
                    if (id == attrA) {
                        $(value).addClass('dorost');
                    }
                });
            } else if (msg === 2) {
                var tag1 = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>شما به این سوال پاسخ داده اید.لطفا صبر کنید تا حریف شما هم به سوال پاسخ دهد!</div>';
                $('.alertShow').html(tag1);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            } else if (msg === 3) {
                var tag1 = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا کمی صبر کنید  تا به سوال بعدی بروید!</div>';
                $('.alertShow').html(tag1);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }
        }, 'json');
    }

    <?php
    if ($data['online'] == 1) {
        echo 'doOn();';
    } else if ($data['online'] == 0) {

    }
    ?>

    function doOn() {
        var tag = '<div class="top">آیا میخواهید به بازی قبلی ادامه دهید؟</div><div class="bottom"><div style="left: 30px;" onclick="bale()" class="yes click">بله</div><div style="right: 30px" onclick="delAsk(),delGame()" class="no click">خیر</div></div>';
        $('.asker').html(tag);
        $('.asker').css('display', 'block');
    }

    function bale() {
        var url = 'online/bale/';
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);
            if (msg=='false'){
                delAsk();
                var tag1 = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>این بازی به پایان رسیده است!</div>';
                $('.alertShow').html(tag1);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            }else {
                $('.online').remove();
                $('.game').css('display', 'block');
                var my=msg[4];
                if (my=='false'){
                    my='public/images/no_image.png';
                }else {
                    my='public/images/avatar/'+my+'.png';
                }
                $('.top .right_top .avatar').attr('src',my);

                var enemy=msg[5];
                if (enemy=='false'){
                    enemy='public/images/no_image.png';
                }else {
                    enemy='public/images/avatar/'+enemy+'.png';
                }
                $('.top .left_top .avatar').attr('src',enemy);


                doques(msg[0]);
                var timer=msg[3];
                var url = 'online/getgame/';
                var data = {};
                $.post(url, data, function (msg1) {
                    doonques(msg1);
                    $('.loading').addClass('loader');
                    $('#dark').fadeIn();
                    setTimeout(function () {
                        $('.loading').removeClass('loader');
                        $('#dark').fadeOut();
                        time(timer-5);
                    },3000);
                }, 'json');
                delAsk();
                var num = msg[1]-1;
                var div = $('.lines_gp');
                $.each(div, function (index, value) {
                    var attrA = $(value).attr('data-next');
                    if (num == attrA) {
                        $(value).find('.lines_circle').addClass('active');
                        $(value).find('.lines_line').addClass('active');
                    }
                    if (num > attrA){
                        $(value).find('.lines_circle').addClass('active');
                        $(value).find('.lines_line').addClass('active');
                    }
                });
            }

        }, 'json');
    }

    function delGame() {
        var url = 'online/delGame/';
        var data = {};
        $.post(url, data, function (msg) {

        }, 'json');
    }

    var timer = null;
    var ti=0;
    function time(first=30) {

        //var first = 5;
        var past = 0;
        var WARNING_THRESHOLD = 20;
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
            ti=ok;
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

            if (past >= first) {
                timesup();
                timesup2();
            }
        }, 1000)
    }

    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

        return `${minutes}:${seconds}`;
    }

    function timesup() {
        clearInterval(timer);
    }

    function timesup2() {
        var url = 'online/next/';
        var data = {};
        $.post(url, data, function (msg) {
            if (msg[2] == 0) {
                $('.loading').addClass('loader');
                $('#dark').fadeIn();
                setTimeout(function () {
                    doques(msg[0]);
                    time();
                    $('.loading').removeClass('loader');
                    $('#dark').fadeOut();

                    var num = msg[1];
                    var div = $('.lines_gp');
                    $.each(div, function (index, value) {
                        var attrA = $(value).attr('data-next');
                        if (num == attrA) {
                            $(value).find('.lines_circle').addClass('active');
                            $(value).find('.lines_line').addClass('active');
                        }
                    });

                }, 1000);
            }else {
                end();
            }
        }, 'json');

    }

    function doonques(game) {
        online = setInterval(function () {
            var url = 'online/doonques/' + game + '/' + ti;
            var data = {};
            $.post(url, data, function (msg) {
                if (msg[5] == 0) {

                    var status = msg[0]
                    var my = msg[1]
                    var enemy = msg[2]
                    if (my == 1) {
                        $('.right_top .p_').html('پاسخ داده');
                    } else {
                        $('.right_top .p_').html('در حال پاسخ دادن');
                    }
                    if (enemy == 1) {
                        $('.left_top .p_').html('پاسخ داده');
                    } else {
                        $('.left_top .p_').html('در حال پاسخ دادن');
                    }
                    if (msg[6]=='close'){
                        $('.left_top .p_').html('اتصال قطع شد!');
                        $('.left_top').addClass('active');
                    }
                    if (msg[6]=='online'){
                        $('.left_top').removeClass('active');
                    }
                    if (status == 'true') {
                        $('.answers').html('');
                        timesup();
                        $('.loading').addClass('loader');
                        $('#dark').fadeIn();
                        setTimeout(function () {
                            doques(msg[3]);
                            time();
                            $('.loading').removeClass('loader');
                            $('#dark').fadeOut();

                            var num = msg[4];
                            var div = $('.lines_gp');
                            $.each(div, function (index, value) {
                                var attrA = $(value).attr('data-next');
                                if (num == attrA) {
                                    $(value).find('.lines_circle').addClass('active');
                                    $(value).find('.lines_line').addClass('active');
                                }
                            });

                        }, 1000);

                    }
                } else {
                    end();
                }
            }, 'json');
        }, 1000);
    }

    function wait(){
        $('.loading').addClass('loader');
        $('#dark').fadeIn();
        setTimeout(function () {
            $('.loading').removeClass('loader');
            $('#dark').fadeOut();
            time();
        },3000);
    }

    function end() {
        clearInterval(online);
        timesup();
        $('.loading').addClass('loader');
        $('#dark').fadeIn();
        setTimeout(function () {
            $('.loading').removeClass('loader');
            $('#dark').fadeOut();
            $('#end').css('display', 'block');
            var left=$('.top .left_top .avatar').attr('src');
            var right=$('.top .right_top .avatar').attr('src');
            $('.game').remove();
            var url = 'online/end/';
            var data = {};
            $.post(url, data, function (msg) {
                console.log(msg);
                var mytrue=msg[0][0];
                var myfalse=msg[0][1];
                var mynull=msg[0][2];
                var mycoin=msg[0][3];

                var enemytrue=msg[1][0];
                var enemyfalse=msg[1][1];
                var enemynull=msg[1][2];
                var enemycoin=msg[1][3];

                var status='';
                var classs='';
                if (msg[2]==0){
                    status='شما بردید';
                    classs='natije_dorost';
                }else if (msg[2]==1){
                    status='شما باختید';
                    classs='natije_ghalat';
                }else if (msg[2]==2){
                    status='مساوی شد';
                    classs='natije_nazade';
                }
                var tag='<div class="end_right"><img width="125" src="'+right+'" class="avatar"><div class="circle_set"></div></div><div class="end_center"><div class="natije '+classs+'">'+status+'</div><div class="dorost"><div class="right_">'+mytrue+'</div><div class="center_">تعداد انتخاب های درست</div><div class="left_">'+enemytrue+'</div></div><div class="ghalat"><div class="right_">'+myfalse+'</div><div class="center_">تعداد انتخاب های غلط</div><div class="left_">'+enemyfalse+'</div></div><div class="nazade"><div class="right_">'+mynull+'</div><div class="center_">تعداد سوالات پاسخ نداده</div><div class="left_">'+enemynull+'</div></div><div class="givepoint"><div class="right_">'+mycoin+'</div><div class="center_">امتیاز دریافتی از این بازی</div><div class="left_">'+enemycoin+'</div></div></div><div class="end_left"><img width="125" src="'+left+'" class="avatar"><div class="circle_set"></div></div>';
                $('#end').html(tag);

                var myspan=msg[0][4];
                var enemyspan=msg[1][4];

                $.each(myspan, function (index, value) {
                    var cir_class='';
                    if (value=='true'){
                        cir_class='circle_dorost';
                    }else if (value=='false'){
                        cir_class='circle_ghalat';
                    }else if (value=='null'){
                        cir_class='circle_nazade';
                    }
                    var cir='<div class="circle '+cir_class+'">';
                    $('.end_right .circle_set').append(cir);
                });



                $.each(enemyspan, function (index, value) {
                    var cir_class='';
                    if (value=='true'){
                        cir_class='circle_dorost';
                    }else if (value=='false'){
                        cir_class='circle_ghalat';
                    }else if (value=='null'){
                        cir_class='circle_nazade';
                    }
                    var cir='<div class="circle '+cir_class+'">';
                    $('.end_left .circle_set').append(cir);
                });

            }, 'json');
        },3000);

    }
</script>



