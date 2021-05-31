<html>
    <head>
        <title>
            Login
        </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
    form{
        margin: 100px;
    }
    body{
        background-image: url(b2.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://127.0.0.1:5501/loginregister.html">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5501/login.html">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <center>
              <h2>Register Form</h2>
          </center>
        <form action="datalogin.php" method="POST">
            <div class="form-floating mb-2">
                <label for="floatingTextarea">Nama Lengkap</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="3-40 Characters">
              </div>
            <div class="form-floating mb-2">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              </div>
              <div class="form-floating mb-2">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              </div>
              <div class="form-floating mb-2">
                <label for="floatingTextarea">Phone Number</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="08xx-xxxx-xxxx without stripe">
              </div>
              <br>
              <input type="submit" value="Register">
        </form>
    </body>
</html>
