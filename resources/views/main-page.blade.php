<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giris Sayfasi</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-grid gap-2 col-6 mx-auto position-absolute top-50 start-50 translate-middle">
            <button class="btn btn-primary" onclick="window.location='{{route('add-brand')}}'" type="button">Brands</button>
            <button class="btn btn-primary" onclick="window.location='{{route('add-model')}}'" type="button">Models</button>
            <button class="btn btn-primary" onclick="window.location='{{route('add-product')}}'" type="button">Products</button>
            <button class="btn btn-primary" onclick="window.location='{{route('add-user')}}'" type="button">Add User</button>
            <button class="btn btn-primary" onclick="window.location='{{route('add-debit')}}'" type="button">Debits</button>
            <button class="btn btn-primary" onclick="window.location='{{route('users')}}'" type="button">Users</button>
          </div>
    </div>
</body>
</html>