@extends('layout')
@section('content')
       <h2>Create a new project</h2>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('title')? 'is-invalid ' : ''}}">
            <input class="mdl-textfield__input" type="text" name="title" value="{{ old('title')}}" required>
            <label class="mdl-textfield__label" for="title">Title</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('description')? 'is-invalid' : ''}}">
            <textarea class="mdl-textfield__input" name="description" type="text" rows="1" id="descr" required>{{ old('description')}}</textarea>
            <label class="mdl-textfield__label" for="descr">Description</label>
        </div>

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
            Create Project
        </button>

        @if ($errors->any())
            <div class="notification-bar">
                <ul class="demo-list-item mdl-list">
                    @foreach ($errors->all() as $error)
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                            {{$error}}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


    </form>
@endsection