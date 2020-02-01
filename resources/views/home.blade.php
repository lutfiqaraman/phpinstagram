@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img style="width:125px; height:125px;" src="https://instagram.famm1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/13706901_535236099994813_656715451_a.jpg?_nc_ht=instagram.famm1-1.fna.fbcdn.net&_nc_ohc=XHXUi1CsC_AAX8PPhC1&oh=d41c0e29b8a993dd7e01db3d6ee4bb5c&oe=5EBA7EF8" class="rounded-circle" alt="Profile Image">
        </div>
        <div class="col-9 pt-5">
            <div>
            <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>25k</strong> followers</div>
                <div class="pr-5"><strong>220</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-4">
            <img class="w-100" src="https://via.placeholder.com/250" alt="Place Holder">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://via.placeholder.com/250" alt="Place Holder">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://via.placeholder.com/250" alt="Place Holder">
        </div>
    </div>
</div>
@endsection