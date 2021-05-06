@extends('adminlte::page')

@section('title', 'Post details')

@section('content')

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Post Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <div class="card-body">
                <form method="POST" action="{{ route('create') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="input" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                      
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea  id="content" class="form-control @error('description') is-invalid @enderror" name="description" rows="3" placeholder="Enter ..."></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> 
            
                    </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Save</button>
                    </div>
                </form>
                <!-- /.card-footer -->
              
            </div>
@stop