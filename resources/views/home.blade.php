@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Lab2 - Laravel Blog with Docker</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            You can choose either <a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">Bootstrap 5</a> or <a href="https://tailwindcss.com/">Tailwind CSS</a>
        </p>
        <p>
            If you choose Tailwind CSS, you need to install it by yourself. <a href="https://tailwindcss.com/docs/guides/laravel">How?</a> <br>
            This repo is with Bootstrap 5.1 CDN already. <br>
            Feel free to use any other frontend UI.
        </p>
    </div>
</div>
@endsection