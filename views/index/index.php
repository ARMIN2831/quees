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
        background: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .buttoms{
        width: 300px;
        height: 42px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .play {
        width: 200px;
        height: 40px;
        border: 1px solid #21bdcda6;
        color: #21bdcda6;
        text-align: center;
        line-height: 38px;
        cursor: pointer;
        background: #fff;
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
        margin: 0 auto;
    }

    .play:hover {
        color: #fff;
        border: 1px solid #fff;
        background: #21bdcda6;
        box-shadow: inset 5px 5px 3px #21bdcdc7;
    }
    @media only screen and (max-width: 1470px){
        .buttoms{
            top: 210px !important;
        }
    }
    @media only screen and (min-width: 1470px){
        .buttoms{
            top: 235px !important;
        }
    }
</style>
<div id="main">
    <div class="buttoms">
        <a href="lobby/index">
        <div class="play">PLAY NOW</div>
        </a>
    </div>
</div>