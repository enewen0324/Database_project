
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> public cemetery </title>
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
    .contractTitle{
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
        height: 80%;
        color: black;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        margin-left: 10%;
    }
    .returnIcon:hover{
        color: black;
        text-decoration: none;
        margin-bottom: 5px;
        border-bottom: solid;
    }
    .contractTable{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 15px;
    }
    .contractContent{
        width: 90%;
    }
    .contractCityName{
        width: 30%;
    }
    .contractName{
        width: 20%;
    }
    .contractBank{
        width: 20%;
    }
    .contractAddress{
        width: 30%;
    }
    .noresult{
        font-family: monospace;
        font-size: 20px;
        display: flex;
        justify-content: center;
    }
    
</style>


<div class="contractTitle">
    <div class="titleText">合作公司</div>
</div>
<div class="contractTable">
    <table class="contractContent">
        <tr>
            <th>城市</th>
            <th>公司</th>
            <th>地址</th>
            <th>銀行</th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="contractCityName">{{$ele->city_name}}</td>
            <td class="contractName"> {{$ele->name}}</td>
            <td class="contractAddress"> {{$ele->address}}</td>
            <td class="contractBank"> {{$ele->guaranteebank}} </td>
        </tr>
        @endforeach
    </table>
</div>]