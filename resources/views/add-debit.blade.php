<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Debit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container w-25">
        <h2 class="text-center" style="margin-top: 30%">Add Debit</h2>
        <form action="{{route("add-debit")}}" method="POST" style="margin-top: 10%">
            @csrf
            <select class="form-select" name="selectedUser" aria-label="Default select example">
                <option selected disabled>Select User</option>
                @foreach ($users as $user)
                    <option value="{{$user -> id}}">{{$user -> name}}</option>
                @endforeach
            </select>
            <select class="form-select mt-3" name="selectedProduct" aria-label="Default select example">
                <option selected disabled>Select Product</option>
                {{-- @if (@isset($products)) --}}
                    @foreach ($products as $product)
                        <option value="{{$product -> id}}">{{$product -> name}}</option>
                    @endforeach
                {{-- @endif --}}
            </select>
            {{-- <select class="form-select mt-3" name="selectedModel" aria-label="Default select example">
                <option selected disabled>Select Model</option>
                    @foreach ($products as $product)
                        @foreach ($product -> model as $model)
                        <option value="{{$model -> id}}">{{$model -> name}}</option>
                        @endforeach
                    @endforeach
            </select> --}}
              <div class="form-outline mt-3">
                <input type="number" name="quantity" class="form-control" placeholder="Quantity"/>
              </div>
            <button type="submit" class="btn btn-primary btn-block mt-4" style="margin-left: 40%">Add</button>
          </form>

          <br><br>
        <ul class="list-group">
            {{-- @if (@isset($debits)) --}}
                @foreach ($debits as $debit)
                    <li class="list-group-item d-flex justify-content-between align-items-center text-center">
                        <form action="{{route("update-debit", ["id" => $debit -> id])}}" method="POST">
                            @csrf
                            <input type="number" name="user_id" class="form-control" style="margin-left: 30%" value="{{$debit -> user_id}}"/>
                            <input type="number" name="product_id" class="form-control" style="margin-left: 30%" value="{{$debit -> product_id}}"/>
                            <input type="number" name="quantity" class="form-control" style="margin-left: 30%" value="{{$debit -> quantity}}"/>
                            
                            <div style="margin-left: 30%">
                                <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editModal" type="submit">Update</button>
                                <a href="{{route("delete-debit", ["id" => $debit -> id])}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
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