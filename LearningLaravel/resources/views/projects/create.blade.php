@extends('layout')

@section('content')
<h1 class="title">
    Create a new form
</h1>
<form action="/projects" method="POST">
    @csrf
    <div>
        <input class="input" name="title" placeholder="Project title" type="text">
        </input>
    </div>
    <div>
        <textarea class="input" name="description" placeholder="Project description">
        </textarea>
    </div>
    <div>
        <button class="button is-link" type="submit">
            Create
        </button>
    </div>
</form>
@endsection
