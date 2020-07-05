
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Fireplace </title>
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
        width: 40%;
    }
    .thirdEle{
        display: flex;
        width: 30%;
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
    .greenburialName{
        display: flex;
        width: 20%;
    }
    .greenburialType{
        display: flex;
        width: 10%;
    }
    .greenburialAddress{
        display: flex;
        width: 30%;
    }
    .greenburialPhone{
        display: flex;
        width: 10%;
    }
    .greenburialFee{
        display: flex;
        width: 20%;
    }
    .noresult{
        font-family: monospace;
        font-size: 20px;
        display: flex;
        justify-content: center;
    }
</style>

@if (count($variable) === 0)
<div class="title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="noresult">抱歉，查無結果</div>
@elseif ($variable[0]->facility_type === "公墓")
<div class="title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle"> {{$ele->facility_name}}</td>
            <td class="secondEle"> {{$ele->address}} </td>
            <td class="thirdEle"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
@elseif ($variable[0]->facility_type === "火化場")
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle"> {{$ele->facility_name}}</td>
            <td class="secondEle"> {{$ele->address}} </td>
            <td class="thirdEle"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
@elseif ($variable[0]->facility_type === "殯儀館")
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle"> {{$ele->facility_name}}</td>
            <td class="secondEle"> {{$ele->address}} </td>
            <td class="thirdEle"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
@elseif ($variable[0]->facility_type === "墓園寶塔")
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle"> {{$ele->facility_name}}</td>
            <td class="secondEle"> {{$ele->address}} </td>
            <td class="thirdEle"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
@elseif ($variable[0]->facility_type === "自然葬")
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>種類</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
            <th>價格</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
        <td class="greenburialName"> {{$ele->name}}</td>
            <td class="greenburialType"> {{$ele->type}} </td>
            <td class="greenburialAddress"> {{$ele->address}}</td>
            <td class="greenburialPhone"> {{$ele->phone}}</td>
            <td class="greenburialFee"> {{$ele->fee}}</td>
        </tr>
        @endforeach
    </table>
</div>
@else
<div class="Title">
    <div class="titleIcon"><a class="returnIcon" href="/customizedSearch">↩回到預定/查詢</a></div>
    <div class="titleText">查詢結果</div>
    <div class="titleRight"></div>
</div>
<div class="mainTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr class="content">
            <td class="firstEle"> {{$ele->facility_name}}</td>
            <td class="secondEle"> {{$ele->address}} </td>
            <td class="thirdEle"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endif