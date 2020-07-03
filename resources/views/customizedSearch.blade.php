<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> Customized_Search </title>
        <style>
            .container {
                display: flex;
                justify-content: center;
                margin-top: 50px;
            }
            .center {
                width: 1000px;
            }
            #submit_button {
                width: 100px;
                margin-left: 450px;
            }
            #range_price_disp {
                width: 100px;
                margin-left: 900px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            <div class="center">
                <form method="POST" action="/customizedSearch/result" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 中 / 西式 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="east_west">
                            <option value="中式"> 中式 </option>
                            <option value="西式"> 西式 </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 宗教 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="religion">
                            <option value="佛教"> 佛教 </option>
                            <option value="道教"> 道教 </option>
                            <option value="基督教"> 基督教 </option>
                            <option value="伊斯蘭教"> 伊斯蘭教 </option>
                            <option value="無信仰"> 無信仰 </option>
                            <option value="其他"> 其他 </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 大體地點 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="now_city_name">
                            @include('includes.citiesOption')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 安葬地點 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="sleep_city_name">
                            @include('includes.citiesOption')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 安葬方式 </label>
                        @include('includes.cemeteryType')
                    </div>
                    <div class="form-group">
                        <label for="formControlRange"> 預算 </label>
                        <input type="range" class="form-control-range" id="range_price" name="budget" value="10000" min="10000" max="100000" oninput="range_price_disp.value = range_price.value">
                        <output id="range_price_disp"></output>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary" id="submit_button"> 送出 </button>
                </form>
            </div>
        </div>
    </body>
</html>