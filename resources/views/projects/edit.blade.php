@extends('layouts.app')

{{-- @section('title', 'Edit Project') --}}

@section('content')



    @include('partials.errors')

    <div class="card">
        <div class="card-header"><h1>Edit a Project</h1></div>
        <div class="card-body">
            <form action="/projects/{{ $project->id }}" method="POST">
                @csrf

                @method('PATCH')

                <div>
                    <input class="form-control" type="text" name="title" value="{{ $project->title }}" placeholder="Project Title" />
                </div>
                <br>
                <div>
                    <textarea class="textarea form-control" name="description" cols="30" rows="10" placeholder="Project Description">{{ $project->description }}</textarea>
                </div>
                <br>
                <div>
                    <button class="btn btn-primary" type="submit">Edit Project</button>
                </div>
            </form>
            <br>
            <form action="/projects/{{ $project->id }}" method="POST">
                @csrf

                @method('DELETE')

                <div>
                    <button class="btn btn-danger" type="submit">Delete Project</button>
                </div>
            </form>
        </div>
    </div>
@endsection
