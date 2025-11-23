@extends('layout')

@section('content')
<h1 class="neon-title text-center mb-4">Login</h1>

<form method="POST" action="/login" class="mx-auto" style="max-width: 400px;">
    @csrf

    <div class="mb-3">
        <label class="form-label text-light">Username</label>
        <input type="text" name="username" class="form-control neon-card text-light" required>
    </div>

    <div class="mb-3">
        <label class="form-label text-light">Password</label>
        <input type="password" name="password" class="form-control neon-card text-light" required>
    </div>

    <button
        class="btn fw-bold w-100"
        style="
            background:#ff00c3;
            color:white;
            box-shadow:0 0 15px #ff00c3, 0 0 25px #ff5ccc;
        "
    >
        Login ✨
    </button>
</form>
@endsection
