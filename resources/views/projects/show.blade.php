@extends('layout')

@section('content')
    <div class="mdl-card mdl-shadow--2dp">
        <h3>View Project</h3>
        <div class="mdl-card__title mdl-card--expand">
            <div>
                <h4>{{$project->title}}  <br><p>{{$project->description}}</p></h4>

                @if ($project->tasks->count())
                    <div class="tasks">
                        @foreach ($project->tasks as $task)
                            <form method="POST" action="/tasks/{{$task->id}}">
                                @method('PATCH')
                                @csrf
                                <label class="{{ $task->completed? 'is-complete' : '' }}"  for="completed">
                                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed? 'checked' : '' }}>
                                    {{$task->body}}
                                </label>
                            </form>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/projects/{{$project->id}}/edit">
                Edit <i class="material-icons">create</i>
            </a>
        </div>
    </div>
@endsection