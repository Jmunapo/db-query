@extends('layout')


@section('content')
<!-- Simple list -->
<style>
    .demo-list-item {
        width: 300px;
    }
    </style>
    
    <ul class="demo-list-item mdl-list">
        @foreach ($projects as $project)
        <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
            {{$project->title }}
        </span>
        <a href="/projects/{{$project->id}}">View</a>
        </li>
        @endforeach
    </ul>

    <a href="/projects/create" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        Create New</a>
@endsection