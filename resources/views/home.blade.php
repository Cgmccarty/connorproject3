@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h4 class="text-center mt-4">Welcome to Glass House, the social media site where you can see everything!
            We are committed to the idea of transparency, which is why we mean what we said. You can see everything
            posted here by anyone at any time. Click below to get started!</h4>

            <div class="mt-5 card row no-gutters">
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
