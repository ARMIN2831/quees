<style>

    body {
        background: #222;
        font-family: Yekan;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-danger {
        color: #491217;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }


    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .btn:focus, .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn.disabled, .btn:disabled {
        opacity: 0.65;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }


    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-primary.disabled, .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #0062cc;
        border-color: #005cbf;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }


    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-danger:focus, .btn-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-danger.disabled, .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }


    .main_top .left_top {
        border: 1px solid #838383;
        border-radius: 4px;
        box-shadow: 5px 5px 10px 1px #7e7e7ebd;
        min-height: 500px;
        margin: 10px 5px;
        float: left;
    }


    @media only screen and (min-width: 790px) {

        .main_top .right_top .ul_tag {
            width: 74.7%;
        }
    }


    @media only screen and (min-width: 900px) {

        .main_top .right_top .ul_tag {
            width: 77%;
        }

        .main_top .right_top .ul_tag li p {
            font-size: 11pt;
            line-height: 36px;
        }
    }


    @media only screen and (min-width: 1000px) {
        .main_top .right_top .ul_tag {
            width: 80%;
        }

        .main_top .right_top .ul_tag li p {
            font-size: 12pt;
            line-height: 36px;
        }
    }


    @media only screen and (min-width: 1100px) {
        .main_top .right_top .ul_tag {
            width: 81.9%;
        }
    }


    .main_top .left_top {
        width: 71%;
    }

    .main_top {
        width: 90%;
    }


    .main_top {
        width: 95%;
        min-width: 360px;
        background: #5a5a5a;
        border: 1px solid #838383;
        border-radius: 4px;
        box-shadow: 4px 3px 20px 0px #3c9a80;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-content: center;
        margin: 65px auto;
    }

    .main_top .right_top {
        width: 220px;
        height: 354px;
        margin: 15px;
        border-radius: 15px;
        box-shadow: 5px 5px 20px 0px #2b8183;
        float: right;
    }

    .main_top .left_top {
        border: 1px solid #605959;
        border-radius: 4px;
        box-shadow: 5px 5px 25px 1px #ab3737;
        margin: 15px 12px;
        float: right;
    }


    .main_top .right_top .ul_tag {
        width: 100%;
        height: 100%;
        padding: 0;
        border-radius: 15px;
        overflow: hidden;
    }

    .main_top .right_top .ul_tag li {
        width: 100%;
        height: 18.6%;
        padding: 0;
        overflow: hidden;
        position: relative;
        background-color: #5a5a5a;
        transition: background-color 200ms ease;
        cursor: pointer;
        margin: 5px auto;
    }

    .main_top .right_top .ul_tag li .div {
        width: 100%;
        height: 100%;
        margin: 75PX 25PX;
    }

    .main_top .right_top .ul_tag li::after {
        right: 32px;
        content: "";
        display: inline-block;
        width: 35px;
        height: 35px;
        background: #b2e3d5;
        position: absolute;
        top: 16px;
    }

    .main_top .right_top .ul_tag li:hover {
        background-color: #1c8364;
        color: #ffffff;
    }

    .main_top .right_top .ul_tag li:first-child {
        margin: 0 auto;
    }

    .main_top .right_top .ul_tag li:last-child {
        margin: 8px auto;
    }


    .main_top .right_top .ul_tag li:last-child:hover {
        background-color: #3d3d3d;
        color: red;
    }

    .main_top .right_top .ul_tag li p {
        font-size: 15pt;
        margin-top: -60px;
        margin-right: 60px;
    }


    @media only screen and (min-width: 1250px) {
        .main_top .left_top {
            width: 75%;
        }
    }


    @media only screen and (min-width: 1350px) {
        .main_top .left_top {
            width: 72%;
        }
    }


    @media only screen and (min-width: 1450px) {
        .main_top .left_top {
            width: 67%;
        }

        .main_top {
            width: 73%;
        }
    }


    @media only screen and (min-width: 1500px) {
        .main_top .left_top {
            width: 68%;
        }
    }

    .ghofl {
        color: #696969;
    }

    .ghofl:hover {
        color: #696969 !important;
        background: none !important;
    }

    .ghofl::before {
        content: "";
        width: 113px;
        height: 0px;
        display: inline-block;
        border: 1px solid #373333;
        position: absolute;
        top: 33px;
        right: 84px;
    }


    .left_top {
        min-height: 372px !important;
    }

    .row_av > p {
        margin: 25px 43%;
        width: 100%;
        height: 50px;
        color: #18ead4;
        font-size: 16pt;
    }

    .row_av {
        width: 94%;
        height: 328px;
        float: right;
        margin: 20px 20px;
        border: 1px solid #6dffd7;
        border-radius: 7px;
        box-shadow: 2px 2px 20px 6px #38cfbf;
    }

    .row .show {
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

    .avatar_row {
        position: relative;
        width: 95%;
        height: 140px;
        overflow: hidden;
        overflow-x: auto;
        margin: 10px auto;
        border-radius: 10px;
        border: 1px solid #41d0e1;
        box-shadow: 5px 5px 20px 4px #229198;
    }

    <?php
$avatar = $data['avatar'];
$num_av=(count($avatar))*115;
?>
    .avatar_scroll {
        min-width: 828px;
        width: <?= $num_av ?>px;
        height: 100%;
        background: #0b4a47;
    }

    .avatar_img {
        width: 65px;
        height: 65px;
        border-radius: 10px;
        border: 1px solid #00f5d1;
        box-shadow: 1px 1px 5px 1px #19a994;
        margin: 24px 23px;
        float: right;
        cursor: pointer;
    }

    .avatar_img img {
        display: none;
    }

    .avatar_img.active {
        background: #00ff3e;
        margin-top: 18px;
    }

    .afz_avatar {
        width: 220px;
        height: 40px;
        border: 1px solid #21bdcda6;
        color: #21bdcda6;
        background: #5a5a5a;
        text-align: center;
        line-height: 38px;
        cursor: pointer;
        font-size: 15pt;
        font-weight: 900;
        border-radius: 0.35rem;
        position: relative;
        box-shadow: 4px 4px 2px #0c6d9145;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
        margin: 20px auto;
    }

    .afz_avatar:hover {
        color: #fff;
        border: 2px outset #66cabc;
        background: #21bdcda6;
        box-shadow: inset 5px 5px 3px #3c666bc7;
    }

    .afz_avatar_set {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border-radius: 5px;
        background: #f0d4ff;
        display: grid;
        place-items: center;
        overflow: hidden;
    }

    .drop-container {
        background: #fff;
        padding: 1.5rem;
        width: 450px;
        display: inline-block;
        border-radius: 20px;
        box-shadow: 0 0 40px 15px rgba(0, 0, 0, 0, 2);
    }

    .drop {
        border-radius: 10px;
        border: 3px dashed #aaaaaa;
        display: grid;
        height: 155px;
        width: 440px;
        place-content: center;
        padding: 2rem;
        box-sizing: border-box;
        place-items: center;
    }

    .active {
        border: 3px solid #4b4b4b;
        background: #edccff;
    }

    .drop .icon {
        font-size: 60px;
        color: #a916f9;
    }

    .drop .text_ {
        text-align: center;
        font-weight: 500;
        color: #443f46;
        margin: 1rem;
    }

    .progress {
        background: #a916f9;
        width: 0%;
        height: 20px;
        display: none;
        border-radius: 10px;
        transition: all 0.2s;
    }

    .drop label {
        background: #a916f9;
        padding: 0.7rem 1.8rem;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }

    .file-input {
        display: none;
    }


    .main_pad {
        padding: 5px;
        background: #5d5959;
        width: 97%;
        margin: 0 auto;
        box-shadow: 0 0 5px 6px #898787;
        border-radius: 7px;
    }

    .main_tag {
        width: 98.5%;
        height: 700px;
        background: #605757;
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
        background: #221d1d;
        text-align: center;
        cursor: pointer;
        border-radius: 0.5rem;
        box-shadow: 4px 4px 2px #c31d1d61;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .main_tag .top > div:last-child {
        border: none;
        background: none;
        box-shadow: none;
        margin-right: 130px;
    }

    .main_tag .top > div:hover {
        color: #fff;
        border: 2px outset #e20a0abd;
        background: #c717177a;
        box-shadow: inset 5px 5px 3px #bb262694;
    }

    .main_tag .top > div:last-child:hover {
        border: none !important;
        background: none !important;
        box-shadow: none !important;
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
        width: 97%;
        height: 100px;
    }

    .main_tag .bottom .row .left {
        width: 7%;
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
        background: url(public/images/Delete.png) no-repeat;
    }

    .main_tag .bottom .row .left .edit {
        background: url(public/images/edit.png) no-repeat;
    }

    .main_tag .bottom .row .left .show {
        background: url(public/images/Show.png) no-repeat;
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
        color: #ccc;
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
        width: 25%;
    }

    .main_tag .bottom .row .right .point {
        width: 15%;
    }

    .edit_set, .ques_set, .afzodan_set {
        z-index: 1000;
    }

    .cat {
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

    #cat {
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

    .x {
        position: absolute;
        float: right;
        right: 220px;
        width: 173%;
        height: 30px;
        font-family: yekan;
        background: #382e2e;
        top: 44px;
        box-shadow: 2px 2px 2px #241c1c;
        border-radius: 9px;
        text-align: center;
    }

    #select_ {
        position: absolute;
        float: right;
        right: 220px;
        width: 173%;
        height: 30px;
        font-family: yekan;
        background: #382e2e;
        top: 44px;
        box-shadow: 2px 2px 2px #241c1c;
        border-radius: 9px;
        text-align: center;
    }

    .emtiaz {
        position: absolute;
        float: right;
        right: 15px;
        height: 35px;
        width: 38%;
        font-family: yekan;
        top: 269px;
        box-shadow: 2px 2px 2px #ccc;
        border-radius: 9px;
        text-align: center;
    }

    .emtiaz input {
        width: 97%;
        height: 100%;
        padding: 5px;
        text-align: center;
        font-size: 14pt;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: yekan;
    }

    .vaziiat {
        position: absolute;
        left: 119px;
        height: 45px;
        width: 38%;
        font-family: yekan;
        top: 269px;
        box-shadow: 2px 2px 2px #ccc;
        border-radius: 9px;
        text-align: center;
    }

    .vaziiat_select {
        position: absolute;
        float: right;
        right: 1px;
        height: 45px;
        width: 99%;
        font-family: yekan;
        top: 0px;
        box-shadow: 2px 2px 2px #ccc;
        border-radius: 9px;
        text-align: center;
    }


    .main_tag .top_a {
        width: 100%;
        height: 37px;
        position: relative;
        border-bottom: 1px solid #5f5f5f;
    }

    .main_tag .top_a .all_a {
        top: 5px;
        right: 10px;
        color: #6d7673;
        border: 1px solid #829b92;
        box-shadow: 4px 4px 2px #89a49a;
    }

    .main_tag .top_a > div {
        width: 100px;
        height: 30px;
        font-size: 11pt;
        line-height: 30px;
        position: absolute;
        background: #221d1d;
        text-align: center;
        cursor: pointer;
        border-radius: 0.5rem;
        transition: color 200ms ease;
        transition: background-color 200ms ease;
        transition: border 200ms ease;
        transition: box-shadow 200ms ease;
    }

    .main_tag .top_a .afzodan_a {
        top: 10px;
        left: 19px;
        color: #31e1e1;
        border: 1px solid #31e1e1;
        box-shadow: 4px 4px 2px #31e1e1;
    }

    .main_tag .bottom_a {
        width: 100%;
    }

    .main_tag .bottom_a .row_a {
        width: 97%;
        float: right;
        margin: 18px 10px;
        height: 50px;
        border: 1px solid #6dffd7;
        border-radius: 7px;
        box-shadow: 2px 2px 20px 6px #38cfbf;
    }

    .main_tag .bottom_a .row_a .right_a {
        float: right;
        width: 90%;
        height: 100%;
    }

    .main_tag .bottom_a .row_a .right_a > div {
        width: 20%;
        line-height: 24px;
        padding: 10px;
        height: 61%;
        color: #ccc;
        float: right;
    }

    .main_tag .bottom_a .row_a .right_a .email {
        width: 50%;
    }

    .main_tag .bottom_a .row_a .left_a {
        width: 7%;
        height: 100%;
        float: left;
    }

    .main_tag .bottom_a .row_a .left_a > div {
        width: 24px;
        height: 24px;
        margin: 7px auto;
        cursor: pointer;
    }

    .main_tag .bottom_a .row_a .left_a .edit {
        background: url(public/images/edit.png) no-repeat;
        margin-right: -22px;
        margin-top: -30px;
    }

    .main_tag .bottom_a .row_a .left_a .delete {
        background: url(public/images/Delete.png) no-repeat;
    }


    .main {
        width: 100%;
    }

    .row {
        width: 97%;
        height: 50px;
        float: right;
        margin: 15px;
        border: 1px solid #c80f0f;
        border-radius: 7px;
        box-shadow: 5px 5px 10px 1px #783030;
    }

    .afzoodan_admin {
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

    .calback {
        display: none;
        color: #379910;
        border: 1px solid #34742a;
        background: #c8fbc0;
        padding: 10px;
        border-radius: 4px;
        font-size: 0.1rem;
        transition: font-size 0.5s 0s ease;
    }

    .calback.active {
        font-size: 1.4rem;
    }

    .calback.active.red {
        color: #991010 !important;
        border: 1px solid #742a2a !important;
        background: #fbc0c0 !important;
    }
</style>

<div id="main">
    <div class="main_top">
        <div class="right_top">

            <ul class="ul_tag">
                <li>
                    <div class="div" onclick="doPanel(2)"><p>مدیریت کاربرها</p></div>
                </li>
                <li>
                    <div class="div" onclick="doPanel(3)"><p>مدیریت سوالات</p></div>
                </li>
                <li>
                    <div class="div" onclick="doPanel(4)"><p>مدیریت ادمین ها</p></div>
                </li>
                <li>
                    <div class="div" onclick="doPanel(5)"><p>مدیریت آواتارها</p></div>
                </li>
                <li>
                    <div class="div" onclick="doPanel(1)"><span
                                style="background: url(public/images/logout.png);"></span>
                        <p>خروج از حساب</p></div>
                </li>
            </ul>
        </div>
        <div class="left_top">


            <div class="modirit_karbarha" style="display:block;">

                <style>


                </style>

                <div class="main">

                    <?php
                    $users = $data['user'];
                    ?>
                    <div class="row">

                    </div>

                </div>


            </div>


            <div class="modirit_soalat" style="display: none;">
                <script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
                <link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">


                <div class="main">
                    <?php
                    $dat = $data['ques'];
                    $soal = $dat['soal'];
                    ?>
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
                            <select id="cat">
                                <option value="set">موضوع مورد نظر خود را وارد کنید.</option>
                                <?php
                                $cat = $data['cat'];
                                foreach ($cat as $row) {
                                    ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                <?php } ?>
                            </select>


                            <div class="emtiaz">
                                <input placeholder="امتیاز مورد نظر خود را وارد کنید." class="emtiaz_input_edit"
                                       type="number">
                            </div>


                            <div class="vaziiat">
                                <select class="vaziiat_select">
                                    <option value="set">وضعیت سوال خود را وارد کنید.</option>
                                    <option id="option0" value="0">در انتظار تایید</option>
                                    <option id="option1" value="1">تایید شده</option>
                                    <option id="option2" value="2">رد شده</option>
                                </select>
                            </div>

                            <div onclick="sabt_edit()" class="sabt_edit">ثبت تغییرات</div>
                        </div>
                    </div>


                    <div class="afzodan_set">
                        <select class="cat">
                            <option value="set">موضوع مورد نظر خود را وارد کنید.</option>
                            <?php
                            foreach ($cat as $row) {
                                ?>
                                <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                            <?php } ?>
                        </select>

                        <div class="bottom">


                            <span onclick="closeTag()" class="close"></span>

                            <div class="ques">
                                <input placeholder="متن سوال خود را اینجا وارد کنید." value="" class="text">
                            </div>


                            <div class="answers">
                                <div data-ans="1" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه1"
                                                                                                  value=""></div>
                                <div data-ans="2" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه2"
                                                                                                  value=""></div>
                                <div data-ans="3" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه3"
                                                                                                  value=""></div>
                                <div data-ans="4" onclick="doDorost(this)" class="ans afz"><input placeholder="گزینه4"
                                                                                                  value=""></div>


                            </div>


                            <div class="emtiaz">
                                <input placeholder="امتیاز مورد نظر خود را وارد کنید." class="emtiaz_input_afz"
                                       type="number">
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

                                $entezar = $dat['entezar'];
                                $rad = $dat['rad'];
                                $taiid = $dat['taiid'];
                                $tedad_ok = $dat['tedad'];
                                ?>
                                <div class="sabt_shode" onclick="dofilter(1)">ثبت شده:<?= $taiid ?></div>
                                <div class="entezar" onclick="dofilter(0)">در انتظار:<?= $entezar ?></div>
                                <div class="rad_shode" onclick="dofilter(2)">رد شده:<?= $rad ?></div>
                                <div class="all" onclick="dofilter(3)">همه سوالات:<?= $tedad_ok ?></div>
                                <div onclick="afzodan()" class="afzodan">افزودن سوال</div>

                                <div>
                                    <select onchange="dofilter(3)" id="select_">
                                        <option value="set">موضوع مورد نظر خود را وارد کنید.</option>
                                        <?php
                                        foreach ($cat as $row) {
                                            ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>

                            </div>

                            <div class="bottom">

                                <?php

                                foreach ($soal

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
                                    <div data-id="<?= $row['id'] ?>" style="<?php if ($ok == 'در انتظار') {
                                        echo 'border: 1px solid #da9f31;box-shadow: 5px 5px 10px 1px #da9f31;';
                                    } else if ($ok == 'تایید شده') {
                                        echo 'border: 1px solid #5bc49d;box-shadow: 5px 5px 10px 1px #5bc49d;';
                                    } ?>" class="row">
                                        <div class="right">
                                            <div class="title">موضوع:<?= $row['game'] ?></div>
                                            <div class="point">امتیاز:<?= $row['coin'] ?></div>
                                            <div class="status">وضعیت:<?= $ok ?></div>
                                            <div class="tedad_pasokh_dorost">تعداد کسانی که به این سوال پاسخ داده
                                                اند:<?= $row['num'] ?></div>
                                            <div class="text">متن سوال: <?= $row['text'] ?></div>
                                        </div>
                                        <div class="left">
                                            <div onclick="doDelete(this)" data-clicker="<?= $row['id'] ?>"
                                                 class="delete"></div>

                                            <div style="border: none;" onclick="doShow(this)"
                                                 data-show="<?= $row['id'] ?>"
                                                 class="show"></div>

                                            <div onclick="doEdit(this)" data-edit="<?= $row['id'] ?>"
                                                 class="edit"></div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="modirit_adminha">
                <script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
                <link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">

                <div class="main">


                    <div class="edit_set">
                        <div class="bottom">
                            <span onclick="closeTag()" class="close"></span>
                            <div class="ques">


                                <div class="vaziiat">
                                    <select class="vaziiat_select">
                                        <option value="set">وضعیت سوال خود را وارد کنید.</option>
                                        <option id="option0" value="0">در انتظار تایید</option>
                                        <option id="option1" value="1">تایید شده</option>
                                        <option id="option2" value="2">رد شده</option>
                                    </select>
                                </div>

                                <div onclick="sabt_edit()" class="sabt_edit">ثبت تغییرات</div>
                            </div>
                        </div>

                    </div>


                    <div class="afzodan_set">
                        <div class="bottom">
                            <span onclick="closeTag()" class="close"></span>
                            <div class="ques">

                                <div class="name">
                                    <input placeholder="نام مورد نظر خود را وارد کنید.">
                                </div>

                                <div class="email">
                                    <input placeholder="ایمیل مورد نظر خود را وارد کنید.">
                                </div>

                                <div class="password">
                                    <input placeholder="رمز مورد نظر خود را وارد کنید.">
                                </div>

                                <div class="ip">
                                    <input placeholder="ip ادمین مورد نظر خود را وارد کنید.">
                                </div>

                                <div onclick="sabt_admin()" class="sabt_afz">افزودن ادمین</div>
                            </div>
                        </div>
                    </div>


                    <div class="main_pad">
                        <div class="alertShow"></div>
                        <div class="main_tag">

                            <div class="top_a">
                                <?php
                                $dat = $data['admin'];
                                $tedad_ok = $dat['tedad'];
                                ?>
                                <div class="all_a" onclick="dofilter(3)">تعداد ادمین ها:<?= $tedad_ok ?></div>
                                <div onclick="afzodan_admin()" class="afzodan_a">افزودن ادمین</div>


                            </div>

                            <div class="bottom_a">

                                <?php
                                $admin = $dat['admin'];
                                foreach ($admin as $row) {
                                    $stat = $row['status'];
                                    if ($stat == 0) {
                                        $ok = 'در انتظار';
                                    } else if ($stat == 1) {
                                        $ok = 'تایید شده';
                                    } else if ($stat == 2) {
                                        $ok = 'رد شده';
                                    }
                                    ?>
                                    <div data-id="" class="row_a">
                                        <div class="right_a">
                                            <div class="name">نام ادمین:<?= $row['name'] ?></div>
                                            <div class="status">وضعیت ادمین:<?= $ok ?></div>
                                            <div class="email">ایمیل ادمین:<?= $row['email'] ?></div>
                                        </div>
                                        <div class="left_a">
                                            <div onclick="doDelete(this)" data-clicker=""
                                                 class="delete"></div>

                                            <div onclick="doEdit(this)" data-edit=""
                                                 class="edit"></div>

                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modirit_avatarha">
                <script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
                <link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
                <link href="http://cdnjs.cloudflare/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
                <style>


                </style>
                <div class="main">
                    <div style="position: relative" class="row_av">
                        <p>مدیریت آواتار:</p>

                        <div class="avatar_row">
                            <div class="avatar_scroll">
                                <?php
                                foreach ($avatar as $row) {
                                    ?>
                                    <div onclick="imgselect(this)" class="avatar_img"><img
                                                src="public/images/avatar/<?= $row['img'] ?>.png" width="65"/>
                                        <input name="img" style="display: none" value="<?= $row['id']; ?>"></div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="afz_avatar">
                            افزودن آواتار
                        </div>

                        <div style="display: none" class="afz_avatar_set">
                            <div class="drop-container">
                                <div class="drop">
                                    <i class="fa-solid fa-photo-film icon"></i>
                                    <span class="text_">
                                        عکس مورد نظر خود را انتخاب کنید.
                                    </span>
                                    <label for="file-upload">جستجوی فایل</label>
                                    <input type="file" id="file-upload" class="file-input" multiple/>
                                </div>
                                <div class="progress"></div>
                            </div>
                            <div class="calback">عکس با موفقیت آپلود شد!</div>
                        </div>

                    </div>


                </div>

            </div>


        </div>
    </div>


</div>


<script>
    function afzodan_admin() {
        $('.modirit_adminha .afzodan_set').fadeIn(200);
    }

    function sabt_admin() {
        var name = $('.modirit_adminha .afzodan_set .name input').val();
        var email = $('.modirit_adminha .afzodan_set .email input').val();
        var password = $('.modirit_adminha .afzodan_set .password input').val();
        var re_pass = $('.modirit_adminha .afzodan_set .re_pass input').val();
        var url = 'admin/sabt_admin/' + name + '/' + email + '/' + password + '/' + re_pass;
        var data = {}
        $.post(url, data, function (msg) {
            console.log(msg);
        }, 'json');
    }

    function imgselect(tag) {
        $('.avatar_img').removeClass('active');
        $(tag).addClass('active');
    }

    $('.afz_avatar').click(function () {
        $('.calback').removeClass('active');
        $('.calback').removeClass('red');
        $('.calback').fadeOut(0);
        $('.drop-container').fadeIn(0);
        $('.progress').fadeOut(0);
        $('.progress').css('width', '0');
        $('.drop').fadeIn(0);
        $('.afz_avatar_set').fadeIn(100)
    });

    function dofilter(filter) {
        var select = $('#select_ option:selected').val();
        var url = 'admin/dofilter/' + filter + '/' + select;
        var data = {};
        $('.modirit_soalat .main_pad .bottom').html('');
        $.post(url, data, function (msg) {
            $.each(msg, function (index, value) {
                var stat = value['status'];
                var ok = '';
                var status = '';
                if (stat == 0) {
                    ok = 'border: 1px solid #da9f31;box-shadow: 5px 5px 10px 1px #da9f31;';
                    status = 'در انتظار'
                } else if (stat == 1) {
                    ok = 'border: 1px solid #5bc49d;box-shadow: 5px 5px 10px 1px #5bc49d;';
                    status = 'تایید شده'
                } else if (stat == 2) {
                    ok = 'border: 1px solid #a21111;box-shadow: 5px 5px 10px 1px #a21111;';
                    status = 'رد شده';
                }
                value['num'] = 1;


                var tag = '<div data-id="' + value['id'] + '" style="' + ok + '" class="row"><div class="right"><div class="title">موضوع:' + value['game'] + '</div><div class="point">امتیاز:' + value['coin'] + '</div><div class="status">وضعیت:' + status + '</div><div class="tedad_pasokh_dorost">تعداد کسانی که به این سوال پاسخ داده اند:' + value['num'] + '</div><div class="text">متن سوال: ' + value['text'] + '</div></div><div class="left"><div onclick="doDelete(this)" data-clicker="' + value['id'] + '" class="delete"></div><div style="border: none;" onclick="doShow(this)" data-show="' + value['id'] + '" class="show"></div><div onclick="doEdit(this)" data-edit="' + value['id'] + '" class="edit"></div></div></div>';
                $('.modirit_soalat .main_pad .bottom').append(tag);
            });
        }, 'json');
    }

    function doPanel(number) {
        var url = 'admin/pager/' + number;
        var data = {};
        $.post(url, data, function (msg) {

            $('.main_top .left_top > div').css('display', 'none');
            $('.main_top .left_top > div.' + msg + '').css('display', 'block');

        }, 'json');
    }

    function doShow(ta) {
        var attr = $(ta).attr('data-show');
        var url = 'admin/show/' + attr;
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
        var url = 'admin/delQues/' + id;
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

            var tag2 = '<div class="sabt_shode">ثبت شده:' + taiid + '</div><div class="entezar">در انتظار:' + entezar + '</div><div class="rad_shode">رد شده:' + rad + '</div><div class="all">همه سوالات:' + tedad + '</div><div onclick="afzodan()" class="afzodan">افزودن سوال</div><div><select class="x"><option value="set">موضوع مورد نظر خود را وارد کنید.</option><option value=""</option></select></div>';
            $('.top').html(tag2);
        }, 'json');
        var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>سوال مورد نظر پاک شد.</div>';
        $('.alertShow').html(tag);
        $('.alertShow').css('display', 'block');
        $('.alertShow').css('width', '140px');
    }

    function getQues() {
        var url = 'admin/getQues/';
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);
            var soal = msg['soal'];
            var taiid = msg['taiid'];
            var rad = msg['rad'];
            var entezar = msg['entezar'];
            var tedad = msg['tedad'];
            var stat = soal['status'];
            $('.main_tag .bottom').html('');
            $.each(soal, function (index, value) {
                var ok = '';
                var status = value['status'];
                if (status == 0) {
                    ok = 'در انتظار';
                } else if (status == 1) {
                    ok = 'تایید شده';
                } else if (status == 2) {
                    ok = 'رد شده';
                }
                var tag = '<div data-id="' + value['id'] + '" class="row"><div class="right"><div class="title">موضوع:' + value['game'] + '</div><div class="point">امتیاز:' + value['coin'] + '</div><div class="status">وضعیت:' + ok + '</div><div class="tedad_pasokh_dorost">تعداد کسانی که به این سوال پاسخ دادهاند:' + value['num'] + '</div><div class="text">متن سوال:     ' + value['text'] + '</div></div><div class="left"><div onclick="doDelete(this)" data-clicker="' + value['id'] + '" class="delete"></div><div onclick="doEdit(this)" data-edit="' + value['id'] + '" class="edit"></div><div data-show="' + value['id'] + '" onclick="doshow(this)" style="border:none;"  class="show"></div></div></div>';
                $('.main_tag .bottom').append(tag);
            });
            var tag2 = '<div class="sabt_shode">ثبت شده:' + taiid + '</div><div class="entezar">در انتظار:' + entezar + '</div><div class="rad_shode">رد شده:' + rad + '</div><div class="all">همه سوالات:' + tedad + '</div><div  onclick="afzodan()" class="afzodan">افزودن سوال</div><div><select class="x"><option value="set">موضوع مورد نظر خود را وارد کنید.</option><option value=""</option></select></div>';
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
        var url = 'admin/edit/' + attr;
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);
            $('.edit_set .text').val(msg['text']);
            $('.edit_set .answers').html('');
            $('.edit_set').css('display', 'block');
            $('.edit_set').attr('data-id', msg['id']);

            var option = $('#cat option');
            console.log(option);
            $.each(option, function (index, value) {
                if (value['value'] == msg['category']) {
                    $(value).attr('selected', 'selected');
                }
            });
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
            var stat = msg['status'];
            if (stat == 0) {
                $('#option0').attr('selected', 'selected');
            }
            if (stat == 1) {
                $('#option1').attr('selected', 'selected');
            }
            if (stat == 2) {
                $('#option2').attr('selected', 'selected');
            }

            var coin = msg['coin'];
            $('.emtiaz_input_edit').val(coin);

        }, 'json');
    }

    function sabt_afz() {
        var dorost = $('.afzodan_set .afz.dorost').attr('data-ans');
        var title = $('.afzodan_set .text').val();
        var ans = $('.afzodan_set .afz input');
        var cat = $('.cat').find(":selected").val();
        var arr = [];
        var emtiaz = $('.emtiaz_input_afz').val();
        var ok = 0;
        $.each(ans, function (index, value) {
            var val = $(value).val();
            if (val.length == 0) {
                ok = 1;
            }
            arr.push(val);
        });

        if ($('.afzodan_set .afz').hasClass('dorost')) {
            if (title.length == 0) {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا صورت سوال را بنویسید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            } else {
                if (cat == 'set') {
                    var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا موضوع مورد نظر خود را انتخاب کنید.</div>';
                    $('.alertShow').html(tag);
                    $('.alertShow').css('display', 'block');
                    $('.alertShow').css('width', '320px');
                } else {
                    if (ok == 0) {
                        var url = 'admin/afzodan/' + title + '/' + dorost + '/' + arr + '/' + cat + '/' + emtiaz;
                        var data = {};
                        $.post(url, data, function (msg) {
                            console.log(msg);
                            var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>سوال با موفقیت ثبت شد!منتظر بمانید تا سوال شما تایید شود.</div>';
                            $('.alertShow').html(tag);
                            $('.alertShow').css('display', 'block');
                            $('.alertShow').css('width', '320px');
                            $('.afzodan_set').css('display', 'none');
                            $('.afzodan_set .bottom .ques input').val('');
                            var ok = $('.afzodan_set .bottom .answers .ans input');
                            $('.ans.afz.dorost').removeClass('dorost');
                            $.each(ok, function (index, value) {
                                $(value).val('');
                            });
                            $('.cat option[value="set"]').attr('selected', 'selected');
                            getQues();
                        }, 'json');
                    } else {
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
        var mozo = $('#cat option:selected').val();
        var coin = $('.emtiaz_input_edit').val();
        var vaziat = $('.vaziiat_select option:selected').val();


        var ok = 0;
        $.each(ans, function (index, value) {
            var val = $(value).val();
            if (val.length == 0) {
                ok = 1;
            }
            arr.push(val);
        });

        if ($('.edit_set .edited').hasClass('dorost')) {
            if (title.length == 0) {
                var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>لطفا صورت سوال را بنویسید.</div>';
                $('.alertShow').html(tag);
                $('.alertShow').css('display', 'block');
                $('.alertShow').css('width', '320px');
            } else {
                if (ok == 0) {
                    var url = 'admin/editQues/' + title + '/' + dorost + '/' + arr + '/' + id + '/' + mozo + '/' + coin + '/' + vaziat;
                    var data = {};
                    $.post(url, data, function (msg) {
                        console.log(url);
                        var tag = '<div class="alert alert-info alert-dismissible"><a class="close" onclick="delAlert(this)">&times;</a>تغییرات با موفقیت ثبت شد.</div>';
                        $('.alertShow').html(tag);
                        $('.alertShow').css('display', 'block');
                        $('.alertShow').css('width', '320px');
                        $('.edit_set').css('display', 'none');
                    }, 'json');
                } else {
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

    const drop = document.querySelector(".drop");
    const input = document.querySelector(".drop input");
    const text = document.querySelector(".text_");
    const progress = document.querySelector(".progress");
    const calback = document.querySelector(".calback");
    const label = document.querySelector("#file-upload");


    input.addEventListener("change", () => {
        drop.style.display = "none";
        const filess = label.files[0];
        if (filess) {

            var form_data = new FormData();
            form_data.append("file", document.getElementById('file-upload').files[0]);
            $.ajax({
                url: "admin/addavatar/",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                }
            });

            let intervalCount = 0.25;
            progress.style.display = "block";
            progress.style.width = `${20 * intervalCount}%`;
            const interval = setInterval(() => {
                intervalCount += 0.25;
                progress.style.width = `${20 * intervalCount}%`;
                if (intervalCount == 5) {
                    clearInterval(interval);

                    setTimeout(function () {
                        $('.drop-container').fadeOut(0);
                        $('.calback').fadeIn(100);
                        $('.calback').addClass('active');
                        $('.calback').text('عکس با موفقیت آپلود شد!');


                        setTimeout(function () {
                            $('.afz_avatar_set').fadeOut(100);
                        }, 1000);
                    }, 1000);
                }
            }, 100);
        } else {
            $('.calback').text('در آپلود عکس مشکلی پیش آمد!');
            $('.calback').addClass('red');
            setTimeout(function () {
                $('.afz_avatar_set').fadeOut(100);
            }, 1000);
        }

    });


</script>


