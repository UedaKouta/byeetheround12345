<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <form class="form-horizontal">
      <div class="form-group">
        <label for="conferenceRoom" class="col-sm-2 control-label">会議室</label>
        <div class="collapse navbar-collapse" id="navbarEexample">
  			<ul class="nav navbar-nav">
  				<li class="dropdown active">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">会議室選択 <span class="caret"></span></a>
  					<ul class="dropdown-menu" role="menu">
  						<li><a href="#">会議室１</a></li>
  						<li><a href="#">会議室２</a></li>
  						<li><a href="#">会議室３</a></li>
  					</ul>
  				</li>

  			</ul>
      </div>

      <div class="form-group">
       <label for="startTime" class="col-sm-2 control-label">時間</label>
       <div class="col-sm-1">
         <input type="txt" class="form-control" id="startTime" placeholder="From">
       </div>
       <label for="endTime" class="col-sm-1 control-label">TO</label>
       <div class="col-sm-1">
         <input type="txt" class="form-control" id="endTime" placeholder="To">
       </div>
     </div>

      <div class="form-group">
        <label for="conferenceTitle" class="col-sm-2 control-label">タイトル</label>
        <div class="col-sm-3">
          <input type="txt" class="form-control" id="conferenceTitle" placeholder="title">
        </div>
      </div>
      <div class="form-group">
        <label for="content" class="col-sm-2 control-label">内容</label>
        <div class="col-sm-3">
            <textarea rows="5" class="form-control" id="ask1"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="userName" class="col-sm-2 control-label">予約者</label>
        <div class="col-sm-3">
          <input type="txt" class="form-control" id="userName">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">確定</button>
        </div>
      </div>
    </form>
  </body>
</html>
