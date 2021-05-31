<html>
    <head>
        <title>
            Login Page
        </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style type="text/css">
    body{
        background-image: url(a1.jpg);
        background-size: cover;
        background-attachment: fixed;
        color:rgb(197, 197, 197);
    }
    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    .column img {
       opacity: 0.8; 
       cursor: pointer; 
    }

    .column img:hover {
       opacity: 1;
    }

    .row:after {
       content: "";
       display: table;
       clear: both;
    }

    .container {
       position: relative;
       display: none;
    }

    #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
    }

    .closebtn {
        position: absolute;
        top: 10px;
       right: 15px;
        color: white;
        font-size: 35px;
        cursor: pointer;
    }
    </style>
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5501/login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:5501/register.html">Register</a>
          </li>
        </ul>
      </nav>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="aa2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Book Launching</h5>
                  <p>4th September 2017</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="aa1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Language Ceremony</h5>
                  <p>16th April 2012</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="aa3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Product Launching</h5>
                  <p>7th October 2020</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
        <div style="text-align:center">
            <h2>Mentol Library</h2>
            <p>Click on the images below:</p>
          </div>
          
          <div class="row">
            <div class="column"> 
    
              <img src="a5.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="a4.png" alt="Snow" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="a3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="a6.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
            </div>
          </div>
          
          <div class="container">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
          </div>
          
          <script>
          function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
          }
          </script>
        <center>
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-light" role="status">
            <span class="visually-hidden"></span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="visually-hidden"></span>
          </div>
        </div>
        <br>
        <br>
        <div style="text-align:center">
            <h6>Login first to show our catalog</h6>
          </div>
        </center>
    </body>
</html>
