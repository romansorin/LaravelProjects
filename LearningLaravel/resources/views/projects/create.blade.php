<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
    </head>
    <body>
        <h1>Create a new form</h1>

        <form method="POST" action="/projects">
        	{{ csrf_field() }}
			<div>
				<input type="text" name="title" placeholder="Project title">
			</div>
			<div>
				<textarea name="description" placeholder="Project description"></textarea>
			</div>
			<div>
				<button type="Submit">Create</button>
			</div>
        </form>
    </body>
</html>