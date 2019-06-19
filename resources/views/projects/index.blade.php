{{-- @extends('layouts.main') --}}
@extends('layouts.app')

{{-- @section('title', 'View Projects') --}}

@section('content')
    {{-- <div class="container"> --}}
        {{-- <ul>
            <li><a href="/projects/create">Create a New Project</a></li>
        </ul> --}}

    <hr />

    <h1>View All Projects</h1>

    <hr />

    <ul style="list-style: none">

    @foreach($projects as $project)

        <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>

    @endforeach

    </ul>

    <a href="/projects/create" class="btn btn-primary">Create a New Project</a>
    {{-- </div> --}}
@endsection
