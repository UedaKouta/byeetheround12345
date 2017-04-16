<!doctype html>
<html>
<head>
   <title>Sample</title>
   <style>
   body { color:gray; }
   h1 { font-size:18pt; font-weight:bold; }
   </style>
</head>
<body>
   <h1>Sample</h1>
   <p>aaa{{$message}}</p>
      <form action="/test-url4" method="post">
          {{ csrf_field() }}
          <input type="text" name="post_param">
          <input type="submit">
      </form>
      <form action="/test-url5" method="post">
          {{ csrf_field() }}
          <input type="text" name="post_param2">
          <input type="submit">
      </form>
      <form action="/test-url6" method="post">
          {{ csrf_field() }}
          <input type="text" name="post_param3">
          <input type="submit">
      </form>
    <p>DB接続確認: {{$room_recs}}</p>
</body>
