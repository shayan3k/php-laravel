@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 d-flex justify-content-center align-items-center">



            @if (isset($post))
            <form action="/posts/{{$post->id}}" method='post' class='w-50'>

                <div class="form-group">
                    <label for="title">
                        Enter Title:
                    </label>

                    <input type="text" name='title' class="form-control" value="{{$post->title}}"
                        autocomplete="false" />
                    <small>
                        @error('title')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </small>
                </div>


                <div class="form-group">
                    <label for="body">
                        Enter Title:
                    </label>
                    <textarea cols="30" rows="10" name='body' class="form-control"
                        autocomplete="false">{{$post->body}}</textarea>
                    <small>
                        @error('body')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </small>

                </div>
                @method('PUT')
                @csrf

                <button type="submit" class='btn btn-primary'>submit</button>


            </form>
            @else
            <div class="alert alert-danger">

                <div class="lead"> You are not authorized to be here...
                </div>

                <a href="/posts" class='d-block'>Back</a>
            </div>

            @endif







        </div>
    </div>
</div>
@endsection