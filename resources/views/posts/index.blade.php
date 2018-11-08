@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('status') }}
                    </div>
            @endif

            @include('posts.create')

            @foreach ($posts as $post)
                <div class="mt-5 card-header bg-dark text-light">
                    <h5 class="my-auto"><span class="navbar-brand">{{ $post->user->name }}</span>@ {{ $post->prettyUpdate() }}</h5>
                </div>
                <div class="p-2 text-right"><a href="/posts/{{ $post->id }}/edit">Edit</a> | <a href="/posts/{{ $post->id }}/delete">Delete</a></div>
                <div class="card-body justify-content-center row no-gutters border-bottom">{{ $post->post }}</div>
            @endforeach
        </div>
    </div>
</div>

@endsection
