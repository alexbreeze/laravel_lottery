<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <title>簡易的彩卷系統</title>
    <link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
    <!--<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">-->
</head>
<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-4 col-md-offset-4">
                <div class = "login-panel panel panel-default">
                    <div class = "panel-heading">
                        <h3 class = "panel-title">彩卷系統</h3>
                    </div>
                    <div class = "panel-body">
                        <fieldset>
                            <button type = "submit" class = "btn btn-lg btn-success btn-block" onclick = "location.href='addUser'">創建帳號</button>
                            <button type = "submit" class = "btn btn-lg btn-success btn-block" onclick = "location.href='login'">登入</button>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src = "{{ URL::asset('assets/jquery/jquery.min.js') }}"></script>
</body>
</html>