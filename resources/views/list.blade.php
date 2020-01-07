@extends('layouts.base_layout')
   
@section('title','notes/list')
<style>
    form { text-align:center; padding-top:20px; }
    .search { width: 380px; }
    .submit { width: 40px; }
    /* item*/
    .item-box { display: inline-block; }
    </style>
    

    
@section('content')
    <form method="POST" action="">
        <input class="search" type="text" placeholder="大学名、講義名など">
        <input class="submit" type="submit" value="検索">
    </form>
    <div class="item-box">
        <div class="item-box-photo">
            <img class="" alt="写真" src="">
        </div>
        <div class="item-box-name">
            <p>名前</p>
        </div>
        <div class="item-box-body">
            <P>説明</P>
        </div>
        <div>
            <P>〇〇円</P>
        </div>
    </div>
@endsection