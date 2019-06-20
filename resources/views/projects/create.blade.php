@extends('layouts.app')

{{-- @section('title', 'Create Project') --}}

@section('content')

    @include('partials.errors')

    <div class="card">
        <div class="card-header">
            <h1>Create a Project</h1>
        </div>
        <div class="card-body">
            <form action="/projects" method="POST">
                @csrf

                <div>
                    <input class="form-control" type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" />
                </div>
                <br>
                <div>
                    <textarea class="form-control textarea" name="description" cols="30" rows="10" placeholder="Project Description">{{ old('description') }}</textarea>
                </div>
                <br>
                <div>
                    <button class="btn btn-primary" type="submit">Create Project</button>
                </div>
            </form>
        </div>
    </div>
@endsection
