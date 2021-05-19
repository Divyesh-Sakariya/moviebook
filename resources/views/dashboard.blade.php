<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="btn btn-success" href="view_movies">Show Movies</a>
        <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            Logout
        </a>  
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;" > 
            {{ csrf_field() }}
        </form>
<<<<<<< HEAD
        </div>   

=======
    </div>   
>>>>>>> f8d87b629ea2a4fae4384e5e5aff91c4eb9844ee
</nav>
</body>
</html>
