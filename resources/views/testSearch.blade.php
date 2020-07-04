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
        <title> Test_Search </title>
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
                <form method="POST" action="/testSearch/result" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 宗教 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="religion">
                            <option value="佛教"> 佛教 </option>
                            <option value="道教"> 道教 </option>
                            <option value="基督宗教"> 基督宗教 </option>
                            <option value="其他"> 其他 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 交通 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="trans">
                            <option value="方便"> 方便 </option>
                            <option value="普通"> 普通 </option>
                            <option value="非常不便"> 非常不便 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 寧靜 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="silent">
                            <option value="幽靜"> 幽靜 </option>
                            <option value="普通"> 普通 </option>
                            <option value="繁忙之處"> 繁忙之處 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> 地理位置 </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="geo">
                            <option value="靠山"> 靠山 </option>
                            <option value="鄰水"> 鄰水 </option>
                            <option value="皆非"> 皆非 </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-outline-secondary" id="submit_button"> 送出 </button>
                </form>
            </div>
        </div>
    </body>
</html>