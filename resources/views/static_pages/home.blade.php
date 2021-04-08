@extends('layouts.default')
@section('title', '首页')

@section('content')
<div class="container">
	@if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status-form">
                    @include('shared._status_form')
                </section>
                <h4>微博列表</h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>

                <section class="stats mt-2">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>任岁月流转，看物是人非。</p>
            <p>一切，从这里开始。</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('singup') }}" role="button">现在注册</a></p>
        </div>
    @endif
</div>
@stop
