@extends('layouts.default')
@section('title', '个人信息')

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
        <section class="user_info">
            @include('shared._user_info', ['user' => $user])
        </section>

        @if (Auth::check())
            @include('users._follow_form')
        @endif

        <section class="stats mt-2">
            @include('shared._stats', ['user' => $user])
        </section>

        <section class="status">
            @if ($statuses->count() > 0)
                <ul class="unstyled">
                    @foreach ($statuses as $status)
                        @include('statuses._status', $status)
                    @endforeach
                </ul>

                {!! $statuses->render() !!}
            @else
                <p>没有数据！</p>
            @endif
        </section>
    </div>
</div>
@stop
