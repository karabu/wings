@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        <a href="{{route('users.show', $user->id)}}">
                            <img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="gravatar" />
                            <h1>{{$user->name}}</h1>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop