@extends('layouts.default')

@section('header')
<style>
.header {
  display: flex;
  height: 70px;
  padding: 10px;
  justify-content: space-between;
}
.nav_menu {
  display: flex;
  padding: 5px;
  list-style: none;
}
ul.nav_menu li {
  margin-right: 2em;
}
</style>
<header class="header">
  <h1>Atte</h1>
    <nav class="nav">
      <ul class="nav_menu">
        <li class="nav_menu_item"><a href="#">ホーム</a></li>
        <li class="nav_menu_item"><a href="#">日付一覧</a></li>
        <li class="nav_menu_item"><a href="#">ログアウト</a></li>
      </ul>
    </nav>
</header>
@section('title')

@section('content')
<style>
  .grid_parent{
    display: grid;
    background-color: #D3D3D3;
    grid-template-rows: 80px 200px 200px;
    grid-template-columns: 2fr 2fr;
  }
  .grid_parent a {
    text-align: center;
    font-size: 1em;
    width: auto;
    padding: 5em;
    margin: 1em;
  }
    .text{
    grid-column: 1/3;
    grid-row: 1/2;
    font-size: 1em;
    padding: 1em;
    text-align: center;
  }
  .time_in{
    grid-column: 1/2;
    grid-row: 2/3;
    background-color: #F2F2F2;
    
  }
    .time_out{
    grid-column: 2/3;
    grid-row: 2/3;
    background-color: #F2F2F2;
  }
    .rest_in{
    grid-column: 1/2;
    grid-row: 3/4;
    background-color: #F2F2F2;
  }
    .rest_out{
    grid-column: 2/3;
    grid-row: 3/4;
    background-color: #F2F2F2;
  }
</style>
    <div class="grid_parent">
      <h3 class="text">福場凛太郎さんお疲れ様です！</h3>
      <a href="/attendance/start" class="time_in">勤務開始</a>
      <a href="/attendance/end" class="time_out">勤務終了</a>
      <a href="/rest/start" class="rest_in">休憩開始</a>
      <a href="/rest/end" class="rest_out">休憩終了</a>
  </div>
</div>
