@extends('layout')

@section('content')
<div class="text-center mt-5 reveal">
    <h1 class="neon-title">Welcome to My Pink Neon World</h1>
    <h3 class="typewriter mt-3">A place where creativity glows.</h3>
</div>

<div class="text-center mt-5 reveal">
    <a href="{{ route('work') }}" class="btn btn-lg btn-light px-4 py-2 fw-bold"
       style="color:#ff00c3; box-shadow:0 0 15px #ff5ccc;">
       View My Work ✨
    </a>
</div>
@endsection
