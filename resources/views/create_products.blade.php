<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h1 class="card-title text-center">Create Products</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{'store-pro'}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control" name="title" id="Title">
                                </div>
                                <div class="form-group">
                                    <label for="Link">Link</label>
                                    <input type="text"class="form-control"  name="link" id="Link">
                                </div>
                                <div class="form-group">
                                    <label for="Quantity">Quantity</label>
                                    <input type="number"class="form-control"  name="quantity" id="Quantity">
                                </div>
                                <div class="form-group">
                                    <label for="MRP">MRP</label>
                                    <input type="number"class="form-control"  name="mrp" id="MRP">
                                </div>
                                <div class="form-group mt-2 text-center">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>