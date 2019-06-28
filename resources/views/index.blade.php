<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<a href="#" class="btn btn-primary">ADD</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @forelse($tasks as $key => $task)
    <tbody>
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$task->name}}</td>
        <td>{{$task->age}}</td>
        <td>{{$task->phone}}</td>
        <td>{{$task->address}}</td>
        <td>{{$task->email}}</td>
        <td>
            <a href="#">
                <button class="btn btn-primary">SHOW</button>
            </a>
            <a href="#">
                <button class="btn btn-danger">EDIT</button>
            </a>
            <a href="#">
                <button class="btn btn-dark">DELETE</button>
            </a>
        </td>
    </tr>
    </tbody>
        @empty
        <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
    @endforelse
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>