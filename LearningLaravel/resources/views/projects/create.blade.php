@extends('layout')

@section('content')
<h1 class="title">
    Create a new form
</h1>
<form action="/projects" method="POST">
    @csrf
    <div class="field">
        <label class="label" for="title">
            Project Title
        </label>
        <div class="control">
            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" type="text" value="{{ old('title') }}">
            </input>
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">
            Project Description
        </label>
        <div class="control">
            <textarea class="input {{ $errors->has('description') ? 'is-danger' : '' }}" name="description">{{ old('description') }}
            </textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">
                Create
            </button>
        </div>
    </div>
    @include ('errors')
</form>
@endsection
