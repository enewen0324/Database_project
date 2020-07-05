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
        <title> Calender Search </title>
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
        </style>
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            <div class="center">
                <form method="POST" action="/calenderSearch/result" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label"> 下葬日期 </label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="date" id="example-date-input" min="2020-01-01" max="2030-12-31" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary" id="submit_button"> 查詢 </button>
                </form>
            </div>
        </div>
    </body>
</html>