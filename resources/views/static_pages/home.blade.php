@extends('layouts.default')
@section('title', '首页')

@include('layouts._header')
@section('content')
<div class="container">
	<div class="jumbotron">
		<h1>Hello, world!</h1>
		<p>任岁月流转，看物是人非。</p>
		<p>一切，从这里开始。</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">现在注册</a></p>
	</div>

    @include('layouts._footer')
</div>
@stop
