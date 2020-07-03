<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Greenburial </title>
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
    .greenburialTitle{
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
    .greenburialTable{
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
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
</style>

<div class="greenburialTitle">
    <div class="titleText">自然葬地點</div>
</div>
<div class="greenburialTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>種類</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
            <th>價格</th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="greenburialName"> {{$ele->name}}</td>
            <td class="greenburialType"> {{$ele->type}} </td>
            <td class="greenburialAddress"> {{$ele->address}}</td>
            <td class="greenburialPhone"> {{$ele->phone}}</td>
            <td class="greenburialFee"> {{$ele->fee}}</td>
        </tr>
        @endforeach
    </table>
</div>

