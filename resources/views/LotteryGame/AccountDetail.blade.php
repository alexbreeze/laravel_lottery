<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>簡易的彩卷系統</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body>
    <nav class = "navbar navbar-inverse" align = right>
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href="Main">首頁</a>
        </div>
        <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
            <ul class = "nav navbar-nav">
                <li class = "active"><a href = "Deposit">入款<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "Withdrawal">出款<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "AccountDetail">查詢明細<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "GameInformation">開獎資訊<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "UserRecord">下注紀錄<span class = "sr-only">(current)</span></a></li>

                <li class = "active"><a href = "InitGame">開獎設定<span class = "sr-only">(current)</span></a></li>
               
            </ul>
            <form action = "Logout">
                <button class = "btn btn-default navbar-btn">登出</button>
            </form>
        </div>
    </div>
    </nav>
    <div class = "panel panel-default">
        <div class = "panel-heading">
            交易明細
        </div>
        <div class = "panel-body">
            <div class = "dataTable_wrapper">
                <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                    <thead>
                    <tr>
                        <th>交易序號</th>
                        <th>日期</th>
                        <th>時間</th>
                        <th>入款/出款</th>
                        <th>交易明細</th>
                        <th>原帳戶金額</th>
                        <th>交易金額</th>
                        <th>餘額</th>
                    </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src = "/assets/js/jquery.js"></script>
    <script src = "/assets/js/bootstrap.min.js"></script>
</body>
</html>