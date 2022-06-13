<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
</head>
  <style>
    .container {
      font-size: 1em;
      display: flex;
      align-items:center;
      justify-content: center;
      padding: 2em;
      }
    .item {
      width: 5em;
      }
  </style>
<body>
  @section('title', 'auth.blade.php')

  <header class="header">
    <h1>Atte</h1>
  </header>
<main>
@section('content')
  <form action="/auth" method="post">
    <table>    
    @csrf
      <tr><th>メール：</th><td><input type="text" name="email"></td></tr>
      <tr><th>パスワード：</th><td><input type="password" name="password"></td></tr>
      <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
  </form>
@endsection
</main>
  <footer>
    <div class="container">
      <div class="item">Atte, inc.</div>
  </div>
  </footer>
</body>
</html>

