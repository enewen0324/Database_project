<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Index </title>
    </head>
    <body>
        @include('includes.navbar')
        <!-- <div class="index">
            <div class="indexBackground">
                <img class="indexBackground" src="https://i.pinimg.com/originals/65/50/73/655073ebf25fbc379cc0328973a146f4.jpg">
                    <div class="test">
                    </div>
                </img>
            </div>
            <div class="n">
            </div>
        </div> -->

    </body>
</html>

<style>
    .dropdown{
        position: fixed;
        top: -90px;
        width: 100%;
        display: block;
        transition: top 0.3s;
        z-index:1;
    }
    .indexBackground{
        width: 100%;
        height: 60%;
        filter: grayscale(50%);
        background-image: url('./highway.jpg');
    }
    .indexTitle{
        font-family: cursive;
        font-size: 40px;
        height: 20%;
        width: 50%;
        position: absolute;
        top: 100px;
        left: 25%;
        right: 25%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .test{
        height: 25%;
        width: 20%;
        position: absolute;
        top: 450px;
        right: 200px;
        background-color: lightgrey;
        border-radius: 40px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        animation: shake 1s;
        animation-iteration-count: infinite;
    }
    .testTitle{
        font-family: monospace;
        font-size: 20px;
        color: black;
    }
    .testButton{
        height: 50px;
        width: 75px;
        font-family: monospace;
        font-size: 20px;
        background: green;
        color: white;
        border-radius: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .testButton:hover{
        color: white;
        background-color: lightgreen;
        text-decoration: none;
    }
    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        /* 10% { transform: translate(-1px, -2px) rotate(-2deg); }
        20% { transform: translate(-3px, 0px) rotate(2deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(2deg); }
        50% { transform: translate(-1px, 2px) rotate(-2deg); } */
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-2deg); }
        80% { transform: translate(-1px, -1px) rotate(2deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-2deg); }
    }
    .indexService{
        width: 100%;
        height: 500px;
        background: white;
    }
    .serviceTitle{
        font-family: monospace;
        font-size: 35px;
        height: 30%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .serviceContent{
        height: 70%;
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .service{
        height: 80%;
        width: 25%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        border: solid lightgrey;
        border-radius: 40px;
    }
    .service:hover{
        text-decoration: none;
        color: black;
        border: solid grey;
        border-radius: 40px;
    }
    .serviceIcon{
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .indexCoop{
        width: 100%;
        height: 500px;
        background-color: lightgrey;
    }
    
    .cooprow{
        height: 70%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .coopFirst{
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-direction: row;
    }
    .coopSecond{
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-direction: row;
    }
    .coop{
        height: 30%;
        width: 10%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
    }
    .coop:hover{
        text-decoration: none;
        color: black;
        border-bottom: solid;
    }
    .contact{
        height: 80px;
        width: 100%;
        background-color: black;
    }
</style>

<div class="index">
    <img class="indexBackground" src="https://i.pinimg.com/originals/65/50/73/655073ebf25fbc379cc0328973a146f4.jpg">
        <div class="indexTitle">Finish Your Last Journey Perfectly</div>
        <div class="test">
            <div class="testTitle">小測驗</div>
            <div class="testButton"><a class="testButton" href="/test">go!</a></div>
        </div>
    </img>
    <div class="indexService">
        <div class="serviceTitle">我們提供的服務</div>
        <div class="serviceContent">
            <a class="service" href="/customizedSearch">
                <div class="serviceIcon">☺︎</div>
                <div>客製化預定/查詢</div>
            </a>
            <a class="service" href="/calender/search">
                <div class="serviceIcon">📆</div>
                <div>農民曆查詢</div>
            </a>
            <a class="service" href="/contract/all">
                <div class="serviceIcon">✍︎</div>
                <div>生前契約</div>
            </a>
        </div>
    </div>
    <div class="indexCoop">
        <div class="serviceTitle">進一步了解</div>
        <div class="cooprow">
            <div class="coopFirst">
                <a class="coop" href="/etiquette/all">
                    <div>禮儀社</div>
                    <div class="serviceIcon">☞</div>
                </a>
                <a class="coop" href="/public_cem/all">
                    <div>公墓</div>
                    <div class="serviceIcon">☞</div>
                </a>
                <a class="coop" href="/undertaker/all">
                    <div>殯儀館</div>
                    <div class="serviceIcon">☞</div>
                </a>
            </div>
            <div class="coopSecond">
                <a class="coop" href="/fireplace/all">
                    <div>火化場</div>
                    <div class="serviceIcon">☞</div>
                </a>
                <a class="coop" href="/pagoda/all">
                    <div>墓園寶塔</div>
                    <div class="serviceIcon">☞</div>
                </a>
                <a class="coop" href="/greenburial/all">
                    <div>自然葬</div>
                    <div class="serviceIcon">☞</div>
                </a>
            </div>
        </div>
    </div>
    <div class="contact">
    </div>
</div>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-90px";
  }
}
</script>