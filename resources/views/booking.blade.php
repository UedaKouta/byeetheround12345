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
    <form class="form-horizontal"  action="/booking" method="post">
             {{ csrf_field() }}
      <div class="form-group">
        <label for="conferenceRoom" class="col-sm-2 control-label">会議室</label>
        <div class="collapse navbar-collapse">

      <!--    <select class="form-control" id=”rname” name=”rname”>
               @foreach ($room_recs as $room)
                  <option value="{{ $room->name }}">
            						<li><a href="#">{{ $room->name }}</a></li>
                  </option>
               @endforeach

          </select>
-->
          <select class="form-control" id="rname" name="rname">
 @foreach ($room_recs as $room)
                  <option value="{{ $room->name }}">{{ $room->name }}</option>
 @endforeach
                </select>

      </div>

      <div class="form-group">
       <label for="startTime" class="col-sm-2 control-label">時間</label>
       <div class="col-sm-1">
                <input type="text"  rows="5" class="form-control"  name="starttime">
       </div>
       <label for="endTime" class="col-sm-1 control-label">TO</label>
       <div class="col-sm-1">
            <input type="text"  rows="5" class="form-control"  name="endtime">
       </div>
     </div>

      <div class="form-group">
        <label for="conferenceTitle" class="col-sm-2 control-label">タイトル</label>
        <div class="col-sm-3">
            <input type="text"  rows="5" class="form-control"  name="title">
        </div>
      </div>

      <div class="form-group">
        <label for="content" class="col-sm-2 control-label">内容</label>
        <div class="col-sm-3">
            <input type="text"  rows="5" class="form-control"  name="contents">
        </div>
      </div>

      <div class="form-group">
        <label for="userName" class="col-sm-2 control-label">予約者</label>
        <div class="col-sm-3">

        <!--  <input type="txt" class="form-control" id="userName"> -->


             <input type="text" name="namekj">

        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                     <input type="submit">
        </div>
      </div>
    </form>
  </body>
</html>
