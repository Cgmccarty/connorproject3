@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card row no-gutters">
                <div class="row no-gutters">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <a href="/posts/create" class="text-secondary btn" style="background-color: lightblue;">Create new post</a>
                @foreach ($posts as $post)
                    <div class="card-header">
                        <h5>{{ $post->user->name }}</h5>
                    </div>
                    <a class="p-2 text-right" href="/posts/{{ $post->id }}/edit">Edit</a>
                    <div class="card-body justify-content-center row no-gutters border-bottom">{{ $post->post }}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
