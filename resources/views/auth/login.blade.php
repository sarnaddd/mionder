<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
    <title>Login</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700 isplay=swap");
    html{
        font-family: "Poppins", sans-serif;
    }
</style>
<body>
    <div class="container" style="display: flex; align-items: center; justify-content: center; height: 100vh;"><br>
        <div class="col-md-4">
            <h2 class="text-center">Log in</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionLogin') }}"  method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #004aad; color: white">Log In</button>
                <hr>
                <p class="text-center">New to Mionder? <a href="/register">Register</a> Now!</p>
            </form>
        </div>
    </div>
</body>
</html>
