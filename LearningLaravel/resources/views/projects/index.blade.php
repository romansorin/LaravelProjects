<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projects</title>
    </head>
    <body>
        <h1>Projects</h1>
		@foreach ($projects as $project)
			<li>{{ $project->title }}</li>
		@endforeach
    </body>
</html>