<html>
    <head>
        <title>
            Listing
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
        background-image: url(xyz.jpg);
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
              <h2>Listing Form</h2>
          </center>
        <form action="/listing" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-2">
                <label for="floatingTextarea">Nama Barang</label>
                <input type="text" name="namabarang" class="form-control" id="namabarang" placeholder="5-80 Characters">
              </div>
            <div class="form-floating mb-2">
                <label for="floatingInput">Kategori</label>
                <input type="email" name="kategori" class="form-control" id="kategori" placeholder="Input category">
              </div>
              <div class="form-floating mb-2">
                <label for="floatingPassword">Price</label>
                <input type="password" name="price" class="form-control" id="price" placeholder="Input price">
              </div>
              <div class="form-floating mb-2">
                <label for="floatingTextarea">Quantity</label>
                <input type="text" name="qty" class="form-control" id="qty" placeholder="Input quantity">
              </div>
              <div class="form-floating mb-2">
                <label for="floatingTextarea">Image</label>
                <input type="file" name="image" class="form-control" id="image">
              </div>
              <br>
              <input type="submit" value="Input Listing">
        </form>
    </body>
</html>
