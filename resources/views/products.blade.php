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
        <h2 class="text-center">List of Products</h2>
        <table class="table table-success table-striped">
            <thead>
                <th>Title</th>
                <th>Link</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr>
                    <td>{{ $p->title}}</td>
                    <td>{{$p->link}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>{{$p->mrp}}</td>
                    <td>
                        <a href={{'edit-pro/'.$p->id}} class="btn btn-primary btn-sm">Edit</a>|
                        <a href="{{'delete-pro/'.$p->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>