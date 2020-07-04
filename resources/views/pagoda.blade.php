<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Pogoda </title>
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
    }
    table, td{
        border: solid, black;
    }
    .pagodaTitle{
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
    .pagodaTable{
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
    }
    .pagodaName{
        display: flex;
        width: 25%;
    }
    .pagodaAddress{
        display: flex;
        width: 30%;
    }
    .pagodaPhone{
        display: flex;
        width: 15%;
    }
    .pagodaFacility{
        display: flex;
        width: 10%;
    }
    .pagodaId{
        color: black;
    }
    .pagodaId:hover{
        text-decoration: none;
        color: red;
    }
</style>

<div class="pagodaTitle">
    <div class="titleText">合作墓園/寶塔</div>
</div>
<div class="pagodaTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
            <th></th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="pagodaName"> {{$ele->facility_name}}</td>
            <td class="pagodaAddress"> {{$ele->address}} </td>
            <td class="pagodaPhone"> {{$ele->phone}}</td>
            <td class="pagodaFacility"><a class="pagodaId" href="/pagoda/id/{{$ele->id}}">🔍</a></td>
        </tr>
        @endforeach
    </table>
</div>

