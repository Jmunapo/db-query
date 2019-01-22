@extends('layout')

@section('content')
    <div class="mdl-card mdl-shadow--2dp">
        <h3>View Project</h3>
        <div class="mdl-card__title mdl-card--expand">
            <h4>{{$project->title}}  <br><p>{{$project->description}}</p></h4>
            
            
        </div>
        <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/projects/{{$project->id}}/edit">
            Edit <i class="material-icons">create</i>
            </a>

        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/projects/{{$project->id}}/edit">
            Delete <i class="material-icons">delete</i>
            </a>  
        </div>
    </div>
@endsection