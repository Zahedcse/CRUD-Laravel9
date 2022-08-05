<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>All-Employees</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <h2 class="text-center">List of Employees</h2>
        <table class="table table-success table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Phone</th>
                <th>Actions</th>
            </thead>
            <tbody>      
                   @foreach ($employees as $e)
                   <tr> 
                    <td>{{$e->name}}</td>
                    <td>{{$e->email}}</td>
                    <td>{{$e->age}}</td>
                    <td>{{$e->salary}}</td>
                    <td>{{$e->phone}}</td>
                    <td>
                        <a href="{{'edit-emp/'.$e->id}}" class="btn btn-info btn-sm">Edit</a>|<a data-bs-toggle="modal" data-bs-target="#exampleModal{{$e->id}}" href="#"class="btn btn-danger btn-sm">Delete</a>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$e->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete <strong>{{$e->name}}</strong>?
                                </div>
                                <div class="modal-footer">
                                     <a href="{{'delete-emp/'.$e->id}}" class="btn btn-danger">Yes</a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                   @endforeach            
            </tbody>
        </table>
    </div>
</body>
</html>