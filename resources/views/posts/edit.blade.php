@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card row no-gutters">
        <form method="post" action="/posts">
            @csrf
            <input class="form-control" type="text" id="post" name="post" value="{{ $post->post }}">
            <button type="submit" class="btn" style="background-color: lightblue;">Update Post</button>
        </form>
    </div>
</div>
@endsection
