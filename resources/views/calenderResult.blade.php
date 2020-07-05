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
    .mainrow{
        width: 80%;
        display: flex;
        justify-content: center;
        height: 20%;
    }
    .mainTime{
        width: 30%;
        display: flex;
        align-items: center;
    }
    .mainContent{
        width: 30%;
        display: flex;
        flex-direction: column;
        /* border: red solid; */
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
    @foreach($variable as $ele)
        <div class="mainrow">
            <div class="mainTime">{{$ele->time}}</div>
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