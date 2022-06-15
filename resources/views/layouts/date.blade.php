@extends('layouts.default')
<style>

</style>
@section('title')

@section('content')
@foreach($dates as $date)
 <tr>
   <td>
     {{$date->created_at}}
   </td>
 </tr>