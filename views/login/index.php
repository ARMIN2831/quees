<style>
    body {
        background-image: url(public/images/back.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: yekan;
    }
    #main{
        width: 100% !important;
        max-width: 1600px;
        margin: 0 auto;
        height: 100%;
        overflow: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @media only screen and (max-width: 530px){
        .set_main .formTag p{
            font-size: 11pt !important;
        }
        .set_main .formTag{
            height: 75px !important;
        }
        .set_main .formTag input{
            height: 18px !important;
            width: 90% !important;
        }
    }
    @media only screen and (max-width: 770px){
        .set_main{
            width: 98% !important;
        }
    }
    @media only screen and (min-width: 770px){
        .set_main{
            width: 85% !important;
        }
    }
    @media only screen and (min-width: 1152px){
        .set_main{
            width: 56% !important;
        }
    }

    .set_main {
        display: flow-root;
        border: 1px solid #ccc;
        box-shadow: -2px 2px 8px #746f6f;
        background: #fff;
        border-radius: 4px;
        width: 853px;
        height: 575px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .row2 {
        width: 1px;
        height: 400px;
        margin-top: 100px;
        background: #ccc;
        float: right;
    }

    .check_input {
        display: inline-block;
        height: 16px;
        margin: 0;
        opacity: 0;
        position: absolute;
        right: 151px;
        top: 5px;
        width: 16px;
        z-index: 2;
        cursor: pointer;
        margin-left: 8px;
    }

    .check_label {
        background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat scroll -1px -1px;
        border-radius: 1px;
        display: block;
        height: 17px;
        position: absolute;
        width: 17px !important;

    }

    .check_label.checked {
        background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat scroll -1px -32px;
        border: none;
    }

    .confirm {
        display: inline-block;
        width: 87%;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #ff2e21;
        text-align: center;
        line-height: 35px;
        font-family: yekan;
        font-size: 12pt;
        color: #fff;
        margin: 15px 6%;
        cursor: pointer;
        box-shadow: -3px 3px 7px #a79a9a;
    }

    .remember {
        position: relative;
        width: 110px;
        float: right;
        top: -15px;
        margin: 10px;
    }

    .remember p {
        margin: 0;
        font-size: 11pt;
        float: right;
    }


    .show_pass p {
        margin: 0;
        font-size: 11pt;
        float: right;
    }

    .register {
        position: relative;
    }

    .show_pass {
        position: relative;
        width: 100px;
        float: right;
        top: -15px;
        margin: 10px;
    }

</style>
<div id="main">
    <?php
    $salt = 'SUPER_SALTY'.rand(1,1000);
    $password='armin2831e';
    $code= $password.$salt;
    $hash = md5($code);
    ?>
    <div class="set_main">

        <form id="form1" method="post" action="login">
            <?php
            require('register.php');
            ?>
        </form>
        <div class="row2"></div>
        <form id="form2" method="post" action="login">
            <?php
            require('login.php');
            ?>
        </form>

    </div>

    <script>



        function checkInput(tag) {
            if ($(tag).is(':checked')) {
                $(tag).parent('div').find('.check_label').addClass('checked');
            } else {
                $(tag).parent('div').find('.check_label').removeClass('checked');
            }
        }

        function submitForm1() {
            $('#form1').submit();
        }
        function submitForm2() {
            $('#form2').submit();
        }
    </script>
</div>


