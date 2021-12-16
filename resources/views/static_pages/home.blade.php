@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>这是朱攀搭建的微博平台</h1>
    <p class="lead">
      欢迎注册使用
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
