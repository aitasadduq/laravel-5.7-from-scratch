@extends('layouts.app')

{{-- @section('title', 'View Project') --}}

@push('inline-styles')
ul#project-tasks {
    list-style-type: none;
}
li.completed label {
    text-decoration: line-through;
}
@endpush

@section('content')

    <hr />

    <h1>View Project</h1>

    <hr />

    @include('partials.errors')

    <h2>{{ $project->title }}</h2>

    <p>{{ $project->description }}</p>

    @if($project->tasks->count())

        <hr />

        <h3>Tasks</h3>

        <ul id="project-tasks" style="list-style: none">

        @foreach($project->tasks as $task)

            <li class="{{ $task->completed ? 'completed' : ''}}">
                    <form action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" method="POST">
                        @csrf

                        @method('PATCH')

                        <input type="checkbox" name="completed" id="task-checkbox-{{ $task->id }}" onChange="this.form.submit()"{{ $task->completed ? ' checked' : '' }} />

                        <label for="task-checkbox-{{ $task->id }}">{{ $task->description }}</label>
                    </form>
                </li>

        @endforeach

        </ul>

    @endif

    {{-- <h4>Add Task</h4> --}}
    <a class="btn btn-primary" href="/projects/{{ $project->id }}/edit">Edit Project</a>

    <br><br>

    <div class="card">
        <div class="card-header">Add Task</div>
        <div class="card-body">
            <form action="/projects/{{ $project->id }}/tasks" method="POST">
                @csrf

                <div>
                    <input class="form-control" type="text" name="description" />
                </div>
                <br>
                <div>
                    <button class="btn btn-primary" type="submit">Add Task</button>
                </div>
            </form>
        </div>
    </div>

@endsection
