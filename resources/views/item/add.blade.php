@extends('layouts.base_layout')

@section('title','item.add')

@section('content')
    @if (count($errors) > 0)
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>出品する</h2>
    <div class="add">
        <table>
        <form action="/notes/add" method="post">
            {{ csrf_field() }}
            <tr><th>user_id: </th><td><input type="text" name="user_id" value="{{old('user_id')}}" class="add"></td></tr>
            <tr><th>タイトル: </th><td><input type="text" name="title" value="{{old('title')}}" class="add"></td></tr>
            <tr><th>説明: </th><td><input type="textarea" name="description" value="{{old('description')}}" class="add"></td></tr>
            <tr><th>価格: </th><td><input type="text" name="price" value="{{old('price')}}" class="add"></td></tr>
            <tr><th></th><td><input type="submit" value="出品する"></td></tr>
        </form>
    </table>
    </div>
@endsection
