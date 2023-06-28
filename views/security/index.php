<?php
$ok = 'It is not safe and you are blocked. Contact support. Do not repeat this or your IP will be banned!';

$ip3 = $_SERVER['REMOTE_ADDR'];
echo $ip3;


$proxy_headers = array(
    'HTTP_VIA',
    'VIA',
    'Proxy-Connection',
    'HTTP_X_FORWARDED_FOR',
    'HTTP_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_FORWARDED',
    'HTTP_CLIENT_IP',
    'HTTP_FORWARDED_FOR_IP',
    'X-PROXY-ID',
    'MT-PROXY-ID',
    'X-TINYPROXY',
    'X_FORWARDED_FOR',
    'FORWARDED_FOR',
    'X_FORWARDED',
    'FORWARDED',
    'CLIENT-IP',
    'CLIENT_IP',
    'PROXY-AGENT',
    'HTTP_X_CLUSTER_CLIENT_IP',
    'FORWARDED_FOR_IP',
    'HTTP_PROXY_CONNECTION');
foreach($proxy_headers as $x){
    if (isset($_SERVER[$x])) {
        echo "You are using a proxy!";
    }
}

?>
<style>
    .error {
        width: 100%;
        height: 520px;
        position: relative;
    }

    .error_back {
        background: url(public/images/security.png) no-repeat;
        width: 225px;
        height: 225px;
        margin: 50px auto;
    }

    .error_div {
        margin: 0 auto;
        width: 620px;
        height: 50px;
        border: 1px solid #430101;
        line-height: 45px;
        padding: 5px;
        background: #aa3c2a;
        color: #d4bebe;
    }
    .safe{
        width: 95px;
        height: 35px;
        margin: 10px auto;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-align: center;
        line-height: 31px;
        cursor: pointer;
    }
    .safe:hover{
        background: #e9e8e8;
    }
</style>
<div class="error">
    <div class="error_back"></div>
    <p class="error_div"><?= $ok; ?></p>
    <div class="safe">back to safe</div>




</div>
<script>
    $('.safe').click(function (){
        var url = 'security/safe/';
        var data = {};
        $.post(url, data, function (msg) {
            window.location='index/index';
        }, 'json');
    });
</script>
