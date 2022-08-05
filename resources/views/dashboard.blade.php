<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Homepage</h1>
    @if(Session::has('userrole') && Session::get('userrole')=='admin')
    <p>Admin Page</p>
        <h1>Create a page for admin</h1>
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Admin</h2>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder=""id="">
                    </div>
                </form>
            </div>
        </div>
    @endif
    @if(Session::has('userrole') && Session::get('userrole')=='student')
    <p>Name : {{Session::get('username')}}</p>
    <p>Role : {{Session::get('userrole')}}</p>
    <p>Student Page</p>
    @endif

    <a href="{{URL::to('logout')}}">Log Out</a>
</body>
</html>