@extends('layouts.base_layout')

@section('title','item.details')
<style>
    div{  }
    .item-box-title { border-bottom:solid 3px #3f5170; margin-bottom:20px; }
    .item-box-photo {border-bottom:dashed 3px #3f5170; margin-bottom:20px; }
    .item-box-body { border-bottom:solid 3px #3f5170; margin-bottom:20px; }
    .item-box-price { border-bottom:solid 3px #3f5170; margin-bottom:20px; }
</style>

@section('content')
<div class="item-box">
        <div class="item-box-title">
            <p>{{$details->title}}</p>
        </div>
        <div class="item-box-photo">
            <img class="" alt="写真" src="">
        </div>
        <div class="item-box-body">
            <P>{{$details->description}}</P>
        </div>
        <div　class="item-box-price">
            <P>{{$details->price}}円</P>
        </div>
</div>
@endsection