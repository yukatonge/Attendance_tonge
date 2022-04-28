@extends('layouts.default')

@section('header')
<style>
  ul {
    text-align:right;
  }

  li {
    color: black;
    display: inline;
    padding: 0 10px;
  }
</style>
<ul>
  <li>ホーム</li>
  <li>日付一覧</li>
  <li>ログアウト</li>
</ul>

@section('title')

@secution('content')
<style>
  .flex-box {
    display: flex;
  }
</style>
<div class="flex-box">
  <div class="flex-item">勤務開始</div>
  <div class="flex-item">勤務終了</div>
  <div class="flex-item">休憩開始</div>
  <div class="flex-item">休憩終了</div>
</div>
