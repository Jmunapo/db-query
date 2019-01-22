@extends('layout')

@section('content')
    <h5 class="title">Edit Projects</h5>
    
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="title" value="{{$project->title}}" required>
            <label class="mdl-textfield__label" for="title">Title</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" name="description" type="text" rows="1" id="descr" required>{{$project->description}}</textarea>
            <label class="mdl-textfield__label" for="descr">Description</label>
        </div>

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
            Save
        </button>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <button class="mdl-button mdl-js-button mdl-button--raised" type="submit">
            Delete
        </button>
    </form>
@endsection