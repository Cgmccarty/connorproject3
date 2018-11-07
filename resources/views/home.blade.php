@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card row no-gutters">
                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <button class="btn" style="background-color: lightblue;">
                    <a href="/posts">View Feed</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
