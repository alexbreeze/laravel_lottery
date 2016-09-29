<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>簡易的彩卷系統</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
</head>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript">  
        $(function(){  
            var bitOdd = $("#bitOdd");
            var bitDouble = $("#bitDouble");
            var bitBig = $("#bitBig");
            var bitSmall = $("#bitSmall");
            var tatal = $("#tatal");
            bitOdd.change(function(){
                var num1 = bitOdd.val();
                var num2 = bitDouble.val();
                var num3 = bitBig.val();
                var num4 = bitSmall.val();
                var sum = (num1-0) + (num2-0) + (num3-0) + (num4-0);
                tatal.text(sum);  
            });
            bitDouble.change(function(){
                var num1 = bitOdd.val();
                var num2 = bitDouble.val();
                var num3 = bitBig.val();
                var num4 = bitSmall.val();
                var sum = (num2-0) + (num1-0) + (num3-0) + (num4-0) ;
                tatal.text(sum);  
            }); 
            bitBig.change(function(){
                var num1 = bitOdd.val();
                var num2 = bitDouble.val();
                var num3 = bitBig.val();
                var num4 = bitSmall.val();
                var sum = (num2-0) + (num1-0) + (num3-0) + (num4-0) ;
                tatal.text(sum);  
            });  
            bitSmall.change(function(){  
                var num1 = bitOdd.val();
                var num2 = bitDouble.val();
                var num3 = bitBig.val();
                var num4 = bitSmall.val();
                var sum = (num2-0) + (num1-0) + (num3-0) + (num4-0) ;
                tatal.text(sum);  
            });  
        });
    </script>
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
    <div class="container" id='page_header'>
        <div class="starter-template">
            <p class="lead" id="clock_title">倒數時間<br></p>
            <div class="panel panel-default" data-toggle="tooltip" data-placement="top">
                <div class="panel-body">
                    <div class="lead" id="clock"></div>
                </div>
            </div>
            <input class="btn btn-primary" type="button" onclick="$('#showrules').toggle();" value="規則說明">
            <div id="showrules" style="display:none">
            <br>
            <br>
            <p class="lead">規則說明: 隨機取出5個範圍1~9且不重複的數字之總和設定玩法<br></p>
            <p class="lead">玩法一: 押注單數/雙數 賠率1.5<br></p>
            <p class="lead">玩法二: 押注比大小 大於20為大 賠率1.5<br></p>
            </div>
        </div>
    </div>
    <div class = "panel panel-default" id='page_body'>
        <div id="periodic_timer_minutes"></div>
       
        <div class = "panel-heading">
             
        </div>
       
        <div class = "panel-heading">
          
        </div>
        <div class = "panel-body">
            <div class = "dataTable_wrapper">
                <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                    <thead>
                    <tr align="center">
                        <th align = "center" width = 40% colspan = 2>玩法一</th>
                        <th align = "center" width = 40% colspan = 2>玩法二</th>
                        <th></th>
                    </tr>
                    <tr align="center">
                        <th>單數</th>
                        <th>雙數</th>
                        <th>大</th>
                        <th>小</th>
                        <th>總金額</th>
                    </tr>
                    </thead>
                    <thead>
                    <form method = "post" action  = "DoRecord.php" id ="myform">
                    <tr align="center">
                        <th><input type = "number" class = "form-control"  aria-describedby = "basic-addon1" name = "bitOdd"  id = "bitOdd" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0"></th>
                        <th><input type = "number" class = "form-control"  aria-describedby = "basic-addon1" name = "bitDouble" id = "bitDouble" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0"></th>
                        <th><input type = "number" class = "form-control"  aria-describedby = "basic-addon1" name = "bitBig" id = "bitBig" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0"></th>
                        <th><input type = "number" class = "form-control"  aria-describedby = "basic-addon1" name = "bitSmall" id = "bitSmall" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0"></th>
                        <th><span id="tatal" style="color:red"></span>  </th>
                    </tr>
                    </thead>
                    </tbody>
                </table>
                        <button type = "submit" class = "btn btn-default navbar-btn" name = "bitOk" id = "bitOk">下注</button>
                        
                    </form>
            </div>
            <br>
            <br>
        <div class = "panel panel-default">
        <div id="periodic_timer_minutes"></div>
        <div class = "panel-heading">下注記錄----最新4筆資料</div>
        <div class = "panel-body">
            <div class = "dataTable_wrapper">
                <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                    <thead>
                    <tr>
                        <th>序號</th>
                        <th>期別</th>
                        <th>日期</th>
                        <th>下注時間</th>
                        <th>玩法</th>
                        <th>下注金額</th>
                        <th>可贏金額</th>
                        <th>狀態</th>
                    </tr>
                    </thead>
                    <thead>
                   
                    <tr>
                        
                   
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>
    </div>
    <script src = "/assets/js/jquery.js"></script>
    <script src = "/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.syotimer.min.js"></script>
    <script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
    <style type="text/css">
        .starter-template {
          padding: 40px 15px;
          text-align: center;
        }
        .panel {
          width: auto;
          margin-left: auto;
          margin-right: auto;
        }
        #btn-reset {
          margin-right: 10px;
        }
        #clock {
          margin-bottom: 0;
        }
    </style>
    <script type="text/javascript">
    </script>
</body>
</html>