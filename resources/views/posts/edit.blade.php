@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card row no-gutters">
        <form method="post" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf
            <input class="form-control" type="text" id="post" name="post" value="{{ $post->post }}">
            <button type="submit" class="btn form-control" style="background-color: lightblue;">Update Post</button>
            <input name="_method" value="PUT" type="hidden">
        </form>
    </div>
</div>
@endsection
