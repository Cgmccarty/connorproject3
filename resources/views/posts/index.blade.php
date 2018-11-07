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
                <a href="/posts/create" class="text-secondary form-control mb-5 btn" style="background-color: lightblue; height: 60px; font-size: 30px;">Create new post</a>
                @foreach ($posts as $post)
                    <div class="card-header">
                        <h5>{{ $post->user->name }}</h5> <span class="text-muted">@ {{ $post->prettyUpdate() }}</span>
                    </div>
                    <div class="p-2 text-right"><a href="/posts/{{ $post->id }}/edit">Edit</a> | <a href="/posts/{{ $post->id }}/delete">Delete</a></div>
                    <div class="card-body justify-content-center row no-gutters border-bottom">{{ $post->post }}</div>
                @endforeach
        </div>
    </div>
</div>

@endsection
