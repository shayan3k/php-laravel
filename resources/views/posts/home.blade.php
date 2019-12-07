@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">





            @forelse ($posts as $post)

            <div class="card card my-3" id='containerCard'>
                <div class="card-header font-weight-bold bg-info">

                    <div class="row d-flex justify-content-between">
                        <div class='lead'> {{$post->title}}</div>
                        <a class='text-white px-4' data-toggle="collapse" href="#collapsePost{{$post->id}}"
                            role="button" aria-expanded="false" aria-controls="collapsePost{{$post->id}}">></a>
                    </div>
                </div>
                <div class="collapse" id="collapsePost{{$post->id}}">
                    <div class="card-body">
                        {{$post->body}}


                        @if(Auth::check())
                        @if ($post->userId === Auth::user()->id)
                        <hr>

                        <div class="col-6"><a class='btn btn-outline-secondary' href='/posts/{{$post->id}}/edit'>Edit
                                post</a>
                            <form action="/posts/{{$post->id}}" method='POST' class='d-inline'>
                                <button type='submit' class='btn btn-danger' href='/posts/{{$post->id}}'>Delete
                                    Post</button>
                                @csrf
                                @method('DELETE')
                        </div>

                    </div>

                    @endif
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