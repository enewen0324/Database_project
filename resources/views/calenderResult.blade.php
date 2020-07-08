

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> calenderResult </title>
    </head>
    <body>
        @include('includes.navbar')
    </body>
</html>

<style>
    .mainrow:nth-child(even){
        background-color: white;
    }
    .mainrow{
        background-color: lightgrey;
    }
    .div{
        font-family: monospace;
    }
    .title{
        display: flex;
        font-family: monospace;
        font-size: 25px;
        justify-content: center;
        align-items: center;
        height: 100px;
    }
    .titleText{
        font-family: STHeiti;
        height: 50%;
        width: 20%;
        border-bottom: solid 2px;
        display: flex;
        justify-content: center;
    }
    .titleIcon{
        font-family: monospace;
        font-size: 20px;
        width: 40%;
        display: flex;
    }
    .titleRight{
        width: 40%;
    }
    .returnIcon{
        width: 30%;
        height: 50%;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 10%;
    }
    .returnIcon:hover{
        color: black;
        text-decoration: none;
        margin-bottom: 5px;
        border-bottom: solid;
    }
    .main{
        width: 100%;
        margin-top: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 20px;
    }
    .tablerow{
        width: 100%;
        background: black;
    }
    .mainApt{
        color: green;
        width: 80%;
        height: 10%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .mainNotApt{
        color: red;
        width: 80%;
        height: 10%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .mainBadDead{
        color: red;
        width: 80%;
        height: 10%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .overral{
        font-family: monospace;
        font-size: 15px;
        white-space:normal;
        width: 5%;
    }
    .mainrow{
        width: 80%;
        display: flex;
        justify-content: space-around;
        height: 20%;
    }
    
    .mainTime{
        width: 20%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .mainremind{
        width: 20%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }
    .mainContent{
        width: 30%;
        display: flex;
        flex-direction: column;
    }
    .mainGood{
        font-size: 15px;
        height: 50%;
        color: green;
        display: flex;
        align-items: center;
    }
    .mainBad{
        font-size: 15px;
        height: 50%;
        color: red;
        display: flex;
        align-items: center;
    }
    .mainremindTrue{
        color: green;
    }
    .mainremindFalse{
        color: red;
    }
</style>

@if (count($variable) === 0)
<div class="title">
    <div class="titleIcon"><a class="returnIcon" href="/calender/search">↩重新查詢</a></div>
    <div class="titleText">查詢日期：{{$variable[0]->date}}</div>
    <div class="titleRight"></div>
</div>
<div class="noresult">抱歉，查無結果</div>
@else
<div class="title">
    <div class="titleIcon"><a class="returnIcon" href="/calender/search">↩繼續查詢</a></div>
    <div class="titleText">查詢日期：{{$variable[0]->date}}</div>
    <div class="titleRight"></div>
</div>
<div class="main">
    <div class="tablerow"></div>
    <div class="mainApt">
    ✔︎宜下葬：
    @foreach($variable as $ele)
        @if($ele->apttime === 1)
            <div class="overral">{{$ele->time}}</div>
        @endif
    @endforeach
    </div>
    <div class="mainNotApt">
    ✘忌下葬：
    @foreach($variable as $ele)
        @if($ele->badtime === 1)
        <div class="overral">{{$ele->time}}</div>
        @endif
    @endforeach
    </div>
    <div class="mainBadDead">
    ✘忌出殯：
    @foreach($variable as $ele)
        @if($ele->badfordead === 1)
        <div class="overral">{{$ele->time}}</div>
        @endif
    @endforeach
    </div>
    @foreach($variable as $ele)
        <div class="mainrow">
            <div class="mainTime">{{$ele->time}}</div>
            <div class="mainremind">
                @if($ele->apttime === 1)
                    <div class="mainremindTrue">✔︎宜下葬</div>
                @endif
                @if($ele->badtime === 1)
                    <div class="mainremindFalse">✘忌下葬</div>
                @endif
                @if($ele->badfordead === 1)
                    <div class="mainremindFalse">✘忌出殯</div>
                @endif
            </div>
            <div class="mainContent">
                @if($ele->good === "none")
                    <div class="mainGood">宜：無</div>
                @else
                    <div class="mainGood">宜：{{$ele->good}}</div>
                @endif
                @if($ele->bad === "none")
                    <div class="mainBad">忌：無</div>
                @else
                    <div class="mainBad">忌：{{$ele->bad}}</div>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endif