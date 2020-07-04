
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
    .fireplaceTitle{
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
    .fireplaceTable{
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
    }
    .fireplaceName{
        display: flex;
        width: 30%;
    }
    .fireplaceAddress{
        display: flex;
        width: 40%;
    }
    .fireplacePhone{
        display: flex;
        width: 20%;
    }
    .fireplaceFacility{
        display: flex;
        width: 10%;
    }
    .fireplaceId{
        color: black;
    }
    .fireplaceId:hover{
        text-decoration: none;
        color: red;
    }
</style>

<div class="fireplaceTitle">
    <div class="titleText">合作火化場</div>
</div>
<div class="fireplaceTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
            <th></th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="fireplaceName"> {{$ele->facility_name}}</td>
            <td class="fireplaceAddress"> {{$ele->address}} </td>
            <td class="fireplacePhone"> {{$ele->phone}}</td>
            <td class="fireplaceFacility"><a class="fireplaceId" href="/fireplace/id/{{$ele->id}}">🔍</a></td>
        </tr>
        @endforeach
    </table>
</div>

