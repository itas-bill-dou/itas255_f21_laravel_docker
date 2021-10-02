@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Lab2 - Laravel + Bootstrap 5</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Fancy blog</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('blog')}}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Blog</a>
            <a href="{{route('about')}}" type="button" class="btn btn-primary btn-lg px-4 gap-3">About</a>
        </div>
    </div>
</div>
@endsection