<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Nav-Bar</title>
    <style>
        .nav{
            background-color:indigo;
            /* padding:5px; */
        }
        .nav a{
            padding:10px;
            text-decoration: none;
            color:white;
            margin-left: 5px
        }
        .nav a:hover{
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="nav">
            <a href="{{route('create-emp')}}">Create-Employee</a>
            <a href="{{route('employees')}}">Employees</a>
            <a href="{{route('create-pro')}}">Create-products</a>
            <a href="{{route('products')}}">Products</a>
        </div>
    </div>
</body>
</html>