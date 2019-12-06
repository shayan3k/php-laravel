@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 d-flex justify-content-center align-items-center">


            <form action="/posts" method='post' class='w-50'>

                <div class="form-group">
                    <label for="title">
                        Enter Title:
                    </label>

                    <input type="text" name='title' class="form-control" value="{{old('title')}}"
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

                    <textarea cols="30" rows="10" name='body' class="form-control" value="{{old('body')}}"
                        autocomplete="false"></textarea>
                    <small>
                        @error('body')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </small>

                </div>

                @csrf

                <button type="submit" class='btn btn-primary'>submit</button>


            </form>



        </div>
    </div>
</div>
@endsection