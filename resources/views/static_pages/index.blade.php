@extends('layouts.default')
@section('title', '主页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            <a href="www.bilibili.com">哦呦</a>
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}">马上注册</a>
        </p>
    </div>
@stop