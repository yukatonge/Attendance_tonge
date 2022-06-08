@extends('layouts.default')
<style>

</style>
  <header class="header">
    <h1>Atte</h1>
  </header>
@section('title')

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
