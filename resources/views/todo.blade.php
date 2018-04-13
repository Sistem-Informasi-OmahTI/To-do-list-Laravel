<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman To Do List</title>
</head>
<body>
    <h1>Halaman To Do List</h1>
    <form action="" method="POST">
        {{ csrf_field() }}
        Todo: <input type="text" name="content">
        <input type="submit" value="submit">
    </form>
    <h3>Daftar Todo list:</h3>
    <ul>
        @foreach($lists as $list)
            <li>{{$list["content"]}} | (<a href="{{url('/todo/delete')}}/{{$list['id']}}">Delete</a>)</li>
        @endforeach
    </ul>
</body>
</html>