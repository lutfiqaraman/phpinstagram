@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-4 offset-4">
                <a href="/profile/{{ $post->user->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="Image of the post">
                </a>
            </div>
        </div>

        <div class="row pt-4 pb-2">
            <div class="col-4 offset-4">
                <p>
                    <span class="font-weight-bold">
                        <a class="text-dark" href="/profile/{{ $post->user->id }}">
                            <span>{{ $post->user->username }}</span>
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>        
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts -> links() }}
        </div>
    </div>
</div>
@endsection
