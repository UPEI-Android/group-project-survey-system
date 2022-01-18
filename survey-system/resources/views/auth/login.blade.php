<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  >
    Login Page sssdads
    <form style="width: 500px; margin: auto" >
    <div class="form-group" >
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
</html>