

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Etiquette </title>
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
        width: 100%;
    }
    table, td{
        border: solid, black;
    }
    .etiquetteTitle{
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
    .etiquetteTable{
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
    }
    .etiquetteName{
        display: flex;
        width: 25%;
    }
    .etiquetteAddress{
        display: flex;
        width: 30%;
    }
    .etiquettePhone{
        display: flex;
        width: 25%;
    }
</style>

<div class="etiquetteTitle">
    <div class="titleText">合作禮儀公司</div>
</div>
<div class="etiquetteTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>地區</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="etiquetteName"> {{$ele->etiquette_name}}</td>
            <td class="etiquetteplace"> {{$ele->city_name}}</td>
            <td class="etiquettePhone"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>

