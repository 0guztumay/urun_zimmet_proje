<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Model</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container w-25">
        <h2 class="text-center" style="margin-top: 30%">Add Model</h2>
        <form action="{{route("add-model")}}" method="POST" style="margin-top: 10%">
            @csrf
            <select class="form-select" name="selectedBrandName" aria-label="Default select example">
                <option selected disabled>Select Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{$brand -> id}}">{{$brand -> name}}</option>
                @endforeach
            </select>
            <div class="form-outline mt-3">
                <input type="text" name="name" class="form-control" placeholder="Model Name"/>
              </div>
              {{-- <div class="form-outline mt-3">
                <input type="number" name="brand_id" class="form-control" placeholder="Brand Id"/>
              </div> --}}
            <button type="submit" class="btn btn-primary btn-block mt-4" style="margin-left: 40%">Add</button>
          </form>

          <br><br>
        <ul class="list-group">
            {{-- @if (@isset($models)) --}}
                @foreach ($models as $model)
                    <li class="list-group-item d-flex justify-content-between align-items-center text-center">
                        <form action="{{route("update-model", ["id" => $model -> id])}}" method="POST">
                            @csrf
                            <input type="text" name="name" class="form-control" style="margin-left: 30%" placeholder="Model Name" value="{{$model -> name}}"/>
                            @foreach ($model -> getBrand as $brand)
                                <span class="form-control" style="margin-left: 30%">{{$brand -> name}}</span>
                            @endforeach
                            <input type="number" name="brand_id" class="form-control" style="margin-left: 30%" placeholder="Model Name" value="{{$model -> brand_id}}"/>
                            
                            <div style="margin-left: 30%">
                                <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editModal" type="submit">Update</button>
                                <a href="{{route("delete-model", ["id" => $model -> id])}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                            </div>
                        </form>
                    </li>
                @endforeach
            {{-- @endif --}}
        </ul>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit içeriği buraya ekleyin -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>