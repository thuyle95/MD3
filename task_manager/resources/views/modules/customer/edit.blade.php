<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action ="{{route('tasks.destroy', 1)}}">
@csrf
@method('delete')
<a href="{{route('tasks.show', 1)}}">GET</a>
<button type="submit">Submit</button>
    </form>
</body>
</html>