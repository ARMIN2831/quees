<style>


    .login {
        float: left;
        width: 49%;
    }

    .login h3 {
        margin: 10px;
        text-align: center;

    }

    .login .row {
        width: 89%;
        margin: 0 auto;
        height: 1px;
        border-bottom: 1px solid #ccc;
    }

    .login .formTag {
        width: 89%;
        height: 90px;
        margin: 10px auto;
    }

    .login .formTag p {
        padding: 0;
        margin: 10px;
        font-size: 13pt;
    }

    .login .formTag input {
        width: 98%;
        height: 25px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: yekan;
    }







</style>
<div class="login">



    <h3>
        ورود به حساب
    </h3>
    <div class="row"></div>

    <div class="formTag">
        <p>ایمیل خود را وارد کنید:</p>
        <input value="<?php @$email2=$data['email2']; echo $email2; ?>" name="email1" placeholder="ایمیل خود را وارد کنید..." type="text">
    </div>
    <div class="formTag">
        <p>رمز عبور خود را وارد کنید:</p>
        <input id="password1" name="password1" placeholder="رمز عبور خود را وارد کنید..." type="password">
        <a class="a" href="http" style="font-size: 10pt;float: left;">رمز خود را فراموش کرده ام.</a>
    </div>
    <div class="show_pass">
        <p>نمایش رمز عبور</p>

        <label style="right: 80px;top: 3px;" class="check_label"></label>
        <input style="right: 80px;top: 3px;" class="check_input" onclick="passwordChanger();checkInput(this)" type="checkbox">
    </div>
    <div class="remember">
        <p>منو به خاطر بسپار</p>

        <label style="right: 90px;top: 3px;" class="check_label"></label>
        <input style="right: 90px;top: 3px;" value="1" name="remember1" onclick="checkInput(this)" type="checkbox" class="check_input">
    </div>

    <div style="    color: #ca100a;
    font-size: 10pt;
    margin: 0 30px;
    display: inline-block;">
        <?php
        if (isset($data['error2'])) {
            $error2 = $data['error2'];
            echo $error2;
        }
        ?>
    </div>


    <button onclick="submitForm2()" class="confirm">ورود</button>
</div>