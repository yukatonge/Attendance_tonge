<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  </head>
  <style>
    h1 {
      font-size: 30px;
      margin-left: 10px;
    }
    .content{
      background-color: gray;
    }
    small {
      font-size: 10px;
      text-align:center;
      padding: 20px 0;
    }
  </style>
<body>
  <header>
    <h1 class="global-header">Atte</h1>
  </header>
  <div class="content">
    @yield('content')
  </div>
  <footer>
    <small class="global-footer">Atte,inc.</small>
  </footer>
</body>
</html>

