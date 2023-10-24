<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Users</title>
</head>
<body>
    <div class="container" style="width: 20%">
        <h1 class="text-center mt-4">Users</h1>
        <ul class="list-group mt-3">
            @foreach ($users as $user)
                <li class="list-group-item">
                    {{$user -> name}}
                    <div class="float-end">
                        {{-- <a href="{{route("products")}}">
                            <button class="btn btn-primary">Details</button>
                        </a> --}}
                        <a href="{{route("products", ["id" => $user -> id])}}">
                            <button class="btn btn-primary">Details</button>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>