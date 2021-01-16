<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    p {
      font-size: "16px";
    }
  </style>
</head>

<body>
  <h1>タイトル</h1>
  <p>{{$content}}</p>
  <form action="/hello" method="post">
    @csrf
    <input type="text" name="content" >
    <input type="submit"  >
  </form>
  <h3>本日は{{ $now_date }}です。</h3>
</body>

</html>