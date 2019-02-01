@extends('layout')

@section('content')
        <h1 class="title">Projects</h1>
        <ul>
		@foreach ($projects as $project)
		<a href="/projects/{{ $project->id }}">
			<li>{{ $project->title }}</li>
		</a>
		@endforeach
		</ul>
		<p>
			<a href="/projects/create">Create a new project</a>
		</p>
@endsection