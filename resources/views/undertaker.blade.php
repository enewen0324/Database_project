

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
    }
    table, td{
        border: solid, black;
    }
    .undertakerTable{
        display: flex;
        justify-content: center;
    }
    .undertakerName{
        display: flex;
        width: 30%;
    }
    .undertakerAddress{
        display: flex;
        width: 50%;
    }
    .undertakerPhone{
        display: flex;
        width: 20%;
    }
</style>

<div class="undertakerTable">
    <table>
        <tr>
            <th>名稱</th>
            <th>聯絡地址</th>
            <th>聯絡電話</th>
        </tr>
        @foreach($variable as $ele)
        <tr>
            <td class="undertakerName"> {{$ele->facility_name}}</td>
            <td class="undertakeAddress"> {{$ele->address}} </td>
            <td class="undertakerPhone"> {{$ele->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>

