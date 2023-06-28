<?php

?>
<style>

    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        margin-top: 10px;
    }

    #message p {
        padding: 0;
        font-size: 11px;
    }

    #message1 {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        margin-top: 10px;
    }

    #message1 p {
        padding: 0;
        font-size: 11px;
    }

    /* Add a green text color and a checkmark when the requirements are right */


    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .valid {
        display: none;
    }

    .invalid:before {
        position: relative;
        left: 1px;
        content: "✖";
    }


    .register {
        float: right;
        width: 50%;
    }

    .register h3 {
        margin: 10px;
        text-align: center;

    }

    .register .row {
        width: 89%;
        margin: 0 auto;
        height: 1px;
        border-bottom: 1px solid #ccc;
    }

    .register .formTag {
        width: 89%;
        height: 90px;
        margin: 10px auto;
    }

    .register .formTag p {
        padding: 0;
        margin: 10px;
        font-size: 13pt;
    }

    .register .formTag input {
        width: 97.5%;
        height: 25px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: yekan;
    }




</style>
<div class="register">


    <h3>
        ثبت نام
    </h3>
    <div class="row"></div>

    <div class="formTag">
        <p>نام خود را وارد کنید:</p>
        <input value="<?php @$name = $data['name'];
        echo $name; ?>" name="name" placeholder="نام خود را وارد کنید..." type="text">
    </div>
    <div class="formTag">
        <p>ایمیل خود را وارد کنید:</p>
        <input value="<?php @$email = $data['email'];
        echo $email; ?>" id="email" name="email" placeholder="ایمیل خود را وارد کنید..." type="text">
        <div id="message1">
            <p id="motabar" class="valid">لطفا یک ایمیل معتبر وارد کنید</p>
            <p id="used" class="valid">این ایمیل قبلا استفاده شده است</p>
        </div>
    </div>
    <div class="formTag">
        <p>رمز عبور خود را وارد کنید:</p>
        <input id="password" name="password" placeholder="رمز عبور خود را وارد کنید..." type="password">

        <div id="message">
            <p id="persian" class="valid">از حروف فارسی استفاده نکنید</p>
            <p id="length" class="valid">حداقل باید 8 نویسه داشته باشید</p>
            <p id="space" class="valid">از فاصله (space) استفاده نکنید</p>
        </div>
    </div>

    <div class="formTag">
        <p>رمز عبور خود را تایید کنید:</p>
        <input id="repassword" name="repassword" minlength="2" placeholder="رمز عبور خود را تایید کنید..."
               type="password">
    </div>

    <div class="show_pass">
        <p>نمایش رمز عبور</p>

        <label style="right: 80px;top: 3px;" class="check_label"></label>
        <input style="right: 80px;top: 3px;" class="check_input" onclick="passwordChanger();checkInput(this)"
               type="checkbox">
    </div>

    <div class="remember">
        <p>منو به خاطر بسپار</p>

        <label style="right: 90px;top: 3px;" class="check_label"></label>
        <input style="right: 90px;top: 3px;" value="1" onclick="checkInput(this)" name="remember" type="checkbox" class="check_input">
    </div>


    <div style="    color: #ca100a;
    font-size: 10pt;
    margin: 0 30px;
    display: inline-block;">
        <?php
        if (isset($data['error'])) {
            $error = $data['error'];
            echo $error;
        }
        ?>
    </div>


    <button onclick="submitForm1()" class="confirm">ثبت نام</button>
</div>

<script>
    function passwordChanger() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        var x1 = document.getElementById("repassword");
        if (x1.type === "password") {
            x1.type = "text";
        } else {
            x1.type = "password";
        }
        var x1 = document.getElementById("password1");
        if (x1.type === "password") {
            x1.type = "text";
        } else {
            x1.type = "password";
        }
    }


    var myInput = document.getElementById("password");
    var myInput2 = document.getElementById("email");
    var motabar = document.getElementById("motabar");
    var usedEmail = document.getElementById("used");
    var persian = document.getElementById("persian");
    var length = document.getElementById("length");
    var space = document.getElementById("space");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
    }
    // When the user clicks on the password field, show the message box
    myInput2.onfocus = function () {
        document.getElementById("message1").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput2.onblur = function () {
        document.getElementById("message1").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
        // Validate lowercase letters

        var spaceWord = /[ ]/g;
        if (myInput.value.match(spaceWord)) {
            space.classList.remove("valid");
            space.classList.add("invalid");
        } else {
            space.classList.remove("invalid");
            space.classList.add("valid");
        }


        var persianword = /[ا-ی]/g;
        if (myInput.value.match(persianword)) {
            persian.classList.remove("valid");
            persian.classList.add("invalid");
        } else {
            persian.classList.remove("invalid");
            persian.classList.add("valid");
        }


        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }


    myInput2.onkeyup = function () {
        var spaceWord = /[ ]/g;
        if (myInput2.value.match(spaceWord)) {
            motabar.classList.remove("valid");
            motabar.classList.add("invalid");
        } else {
            motabar.classList.remove("invalid");
            motabar.classList.add("valid");
        }
        var persian = /[ا-ی]/g;
        if (myInput2.value.match(persian)) {
            motabar.classList.remove("valid");
            motabar.classList.add("invalid");
        } else {
            motabar.classList.remove("invalid");
            motabar.classList.add("valid");
        }
        var dontword = /[!-),*,^,",?,/,:,;,=,+]/g;
        if (myInput2.value.match(dontword)) {
            motabar.classList.remove("valid");
            motabar.classList.add("invalid");
        } else {
            motabar.classList.remove("invalid");
            motabar.classList.add("valid");
        }


    }


</script>