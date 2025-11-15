@extends('layout')

@section('content')
<h1 class="neon-title reveal text-center">My Projects</h1>

<div class="row mt-4">

    @foreach([
        ['Project A', 'A glowing neon project with animations'],
        ['Project B', 'Smooth UI + interactive components'],
        ['Project C', 'Creative pink-themed experience']
    ] as $project)

    <div class="col-md-4 mt-4 reveal">
        <div class="neon-card p-3">
            <h4 class="fw-bold">{{ $project[0] }}</h4>
            <p>{{ $project[1] }}</p>
            <button class="btn btn-sm btn-light fw-bold" style="color:#ff00c3;">
                View More ✨
            </button>
        </div>
    </div>

    @endforeach

</div>
@endsection
