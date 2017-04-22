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
            <th></th>
            @for($t = 0; $t < 24; $t++)
            <th>{{$t}}:00</th>
            @endfor
          </tr>
        </thead>
        <tbody>
          @for($d = 0; $d < $cal_days_range; $d++)
          <tr>
            <th scope="row">{{ $cal_from_date->modify(' +' . $d . ' day')->format('m月d日') }}</th>
              @for($t = 0; $t < 24; $t++)
              {{-- 会議室予約ボタン --}}
              <td><a href={{ URL::to(action('BookingController@index') . '?' . http_build_query(array('rsv-date'=>$cal_from_date->modify(' +' . $d . ' day')->format('Ymd') . sprintf('%02d', $t) . '0000' ))) }} class="btn btn-primary btn-xs">+</a></td>
              {{-- TODO: 会議室予約情報の表示 mapで渡して --}}
              @endfor
          </tr>
          @endfor
       </tbody>
      </table>
      </div>
    </div>
  </body>
</html>
