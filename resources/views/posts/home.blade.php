@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">





            @forelse ($posts as $post)

            <div class="card card my-3" id='containerCard'>
                <div class="card-header font-weight-bold bg-info">

                    <div class="row">
                        <div class="col-8"> {{$post->title}}</div>
                        <div class="col-4"> <a class='text-white' data-toggle="collapse"
                                href="#collapsePost{{$post->id}}" role="button" aria-expanded="false"
                                aria-controls="collapsePost{{$post->id}}">Expand Body</a></div>
                    </div>
                </div>
                <div class="collapse" id="collapsePost{{$post->id}}">
                    <div class="card-body">
                        {{$post->body}} </div>
                    @if ($post->userId === Auth::user()->id)
                    <hr>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6"><a class='btn btn-outline-secondary'>Edit post</a>
                            <a class='btn btn-danger'>Delete Post</a></div>
                    </div>
                    @endif



                </div>

            </div>


            @empty

            <div class="alert alert-info ">
                There is no Post to Show!
            </div>
            @endforelse




        </div>
    </div>
</div>
@endsection