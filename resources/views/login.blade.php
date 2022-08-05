<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card mt-2">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        @if (Session::has('msg'))
                        <div class="alert alert-danger">
                            <strong>{{Session('msg')}}</strong>
                        </div>
                        @endif
                        <form action="{{route('store-login')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="Enter your password">
                            </div>
                            <div class="form-group mt-2 text-center">
                                <input type="submit" class="btn btn-primary"value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>