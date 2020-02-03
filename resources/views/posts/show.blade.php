@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="Image of the post">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img style="max-width:40px" class="rounded-circle w-100" src="/storage/{{ $post->user->profile->image }}" alt="image of the profile">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">
                                <span>{{ $post->user->username }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                    
                <hr/>
                    
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
    </div>
</div>
@endsection
