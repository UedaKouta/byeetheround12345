<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>メイン画面</h1>
    <div class="container">
          <div class="table-responsive">
      <table class="table  table-striped table-bordered">
        <thead>
          <tr>
            <th>***</th>
            <th>時間（仮）</th>
            <th>時間（仮）</th>
            <th>時間（仮）</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">日</th>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
          </tr>
          <tr>
            <th scope="row">日</th>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
          </tr>
          <tr>
            <th scope="row">日</th>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
              <td><button type="button" class="btn btn-default btn-xs">+</button></td>
          </tr>
       </tbody>
      </table>
      </div>
    </div>


        <!-- こから作成中の日付！！！！！！！スタート-->

    <select name="year" id="id_year">
    </select>
    <select name="month" id="id_month">
    </select>
    <select name="day" id="id_day">
    </select>
    <script>
    (function() {
    'use strict';

    /*
    今日の日付データを変数todayに格納
    */
    var optionLoop, this_day, this_month, this_year, today;
    today = new Date();
    this_year = today.getFullYear();
    this_month = today.getMonth() + 1;
    this_day = today.getDate();

    /*
    ループ処理（スタート数字、終了数字、表示id名、デフォルト数字）
    */
    optionLoop = function(start, end, id, this_day) {
    var i, opt;

    opt = null;
    for (i = start; i <= end ; i++) {
      if (i === this_day) {
        opt += "<option value='" + i + "' selected>" + i + "</option>";
      } else {
        opt += "<option value='" + i + "'>" + i + "</option>";
      }
    }
    return document.getElementById(id).innerHTML = opt;
    };


    /*
    関数設定（スタート数字[必須]、終了数字[必須]、表示id名[省略可能]、デフォルト数字[省略可能]）
    */
    optionLoop(this_year,2050, 'id_year', this_year);
    optionLoop(1, 12, 'id_month', this_month);
    optionLoop(1, 31, 'id_day', this_day);
    })();

    </script>

        <!--ここまで作成中の日付！！！！！！！おわり-->
  </body>
</html>
