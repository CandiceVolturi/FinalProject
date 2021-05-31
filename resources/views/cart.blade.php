<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Shopping Cart</title>
    <style type="text/css">
        body{
            background-image: url(c2.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        .rounded{
            height: 200px;
            width: auto;
            border: 1px;
            margin: 20px;
        }
        .cart{
            margin:30px;
            background-color: darksalmon;
        }
        .total{
            margin:30px;
            background-color: rgb(255, 249, 217);
        }
        .isi{
            margin-top: 75px;
            margin-left: 300px;
            margin-right: 300px;
        }
        .button{
            background-color: rgb(255, 244, 180);
        }
        .mb-3{
            margin: 20px;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://127.0.0.1:5501/loginregister.html">PT. Mentol</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="http://127.0.0.1:5501/login.html">Login</a>
                  <a class="nav-link" href="http://127.0.0.1:5501/catalog.html">Catalogue</a>
                  <a class="nav-link" href=""></a>
                </div>
              </div>
            </div>
          </nav>
          <center>
    <div class="isi">
        <div class="cart">
            <img src="tw.jpg" class="rounded" alt="Twilight">
            <p>
                Category: BOOKS<br>
                Name: Twilight<br>
                Qty: 2<br>
                Price: 2 x 300.000<br>
                Total: 600.000<br>
                <br>
            </p>
        </div>
        <div class="cart">
            <img src="pc.jpeg" class="rounded" alt="PencilCase">
            <p>
                Category: STATIONERY<br>
                Name: PencilCase<br>
                Qty: 3<br>
                Price: 3 x 125.000<br>
                Total: 375.000<br>
                <br>
            </p>
        </div>

        <div class="total">
            <p>Total: 975.000<br></p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Postal Code</label>
                <input type="text" name="postalcode" class="form-control" id="postalcode">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
              </div>
        </div>

        <input type="submit" value="Check Out" class="button">
        <input type="button" href="" value="Print Faktur" class="button">
    </center>
    </div>
    </body>
</html>