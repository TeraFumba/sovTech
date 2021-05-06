
@extends('adminlte::page')

@section('title', 'Post details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$post->title}} <br> created by {{$post->user->name}}
                <br>{{ \Carbon\Carbon::parse($post->created_at)->toDayDateTimeString() }}
                </div>
                <div class="card-body">
                {{$post->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop