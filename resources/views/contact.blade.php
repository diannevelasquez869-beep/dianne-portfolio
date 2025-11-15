@extends('layout')

@section('content')
<h1 class="neon-title reveal">Contact Me</h1>

<form class="mt-4 reveal" method="POST" action="/contact">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control neon-card text-light" name="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control neon-card text-light" name="email" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control neon-card text-light" rows="4" name="message" required></textarea>
    </div>

    <button class="btn btn-light fw-bold" style="color:#ff00c3; box-shadow:0 0 15px #ff5ccc;">
        Send Message 💌
    </button>
</form>
@endsection
