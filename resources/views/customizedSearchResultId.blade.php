

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> customizedSearchResult </title>
    </head>
    <body>
        @include('includes.navbar')
    </body>
</html>

<style>
    th{
        font-family: monospace;
        line-height: 45px;
        font-size: 20px;
    }
    td{
        font-family: monospace;
        line-height: 45px;
        font-size: 15px;
        display: flex;
        align-items: center;
    }
    tr{
        width: 100%;
        /* border: solid; */
    }
    tr:nth-child(even){
        background-color: lightgrey;
    }
    table{
        display: flex;
        justify-content: center;
        text-align: center;
        background-color: white;
        border-collapse: collapse;
        margin-bottom: 50px;
        width: 100%;
    }
    table, td{
        border: solid, black;
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
    .mainTable{
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
    }
    .firstEle{
        display: flex;
        width: 30%;
    }
    .secondEle{
        display: flex;
        width: 30%;
    }
    .thirdEle{
        display: flex;
        width: 30%;
    }
    .fourthEle{
        display: flex;
        width: 10%;
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
    .noresult{
        font-family: monospace;
        font-size: 20px;
        display: flex;
        justify-content: center;
    }
    .ansId:hover{
        text-decoration: none;
    }
</style>

@if (count($variable) === 0)
<div class="title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩重新搜尋</a></div>
    <div class="titleText">提供服務</div>
    <div class="titleRight"></div>
</div>
<div class="noresult">抱歉，查無資料</div>
@else
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩重新搜尋</a></div>
    <div class="titleText">提供服務</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>服務</th>
            <th>費用</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle">{{$ele->serviceName}}</td>
            <td class="secondEle"> {{$ele->chargeCrite}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endif