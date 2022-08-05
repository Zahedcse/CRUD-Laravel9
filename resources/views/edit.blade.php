<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Edit-Employee</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h1 class="card-title text-center">Edit-Employee</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{URL::to('update-emp/'.$employee->id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$employee->id}}" >
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" name="name" id="Name" value= "{{$employee->name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text"class="form-control"  name="email" id="Email" value="{{$employee->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="Age">Age</label>
                                    <input type="number"class="form-control"  name="age" id="Age" value= "{{$employee->age}}">
                                </div>
                                <div class="form-group">
                                    <label for="Salary">Salary</label>
                                    <input type="number"class="form-control"  name="salary" id="Salary" value= "{{$employee->salary}}">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Phone</label>
                                    <input type="number"class="form-control"  name="phone" id="mobile" value= "{{$employee->phone}}">
                                </div>
                                <div class="form-group mt-2 text-center">
                                    <input type="submit" class="btn btn-success" value="update">
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>