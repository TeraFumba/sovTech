
@extends('adminlte::page')
@section('title', 'Posts')

@section('content')
@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
 @endif
<div class="card direct-chat direct-chat-primary">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">All blogs </h3>

                <div class="card-tools">
                  <!-- <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div style="padding-left:12px; padding-right:12px; padding-top:5px">
              
              @foreach($posts as $post)
                <div class="chat-messages"  >
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">{{$post->user->name}}</span>
                      @if(Auth::check() && Auth::id() == $post->user_id)
                        <span class="direct-chat-timestamp float-right"><a href="{{ action('PostController@delete', $post) }}" class="button"><i class="fas fa-trash" style="color:red"></i>  </a></span>
                        <span class="direct-chat-timestamp float-right">&nbsp;|&nbsp;</span>
                        <span class="direct-chat-timestamp float-right"><a href="{{action('PostController@edit', $post) }}"><i class="fas fa-edit"></i>  </a></span> 
                        <span class="direct-chat-timestamp float-right">&nbsp;|&nbsp;</span>
                      @endif
                      <span class="direct-chat-timestamp float-right"><a href="{{action('PostController@postDetails', $post) }}"><i class="fas fa-eye" style="color: grey;"></i> </a></span>
                    </div>
     
                    <img class="direct-chat-img" src="user.png" alt="">
                
                    <div class="direct-chat-text">
                    {!! Str::limit($post->description, 100, $end = '...') !!}
                    </div>
               
                </div>
                
            @endforeach
            </div>
              <!-- /.card-body -->
              <div class="card-footer">
               
              <!-- /.card-footer-->
              </div>
            </div>
         
@stop

