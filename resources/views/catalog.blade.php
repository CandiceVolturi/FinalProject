<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Catalogue</title>
    <style type="text/css">
        .rounded{
            height: 300px;
            width: auto;
        }
        body{
            background-image: url(c1.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        .isi{
            margin:50px;
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
                  <a class="nav-link" href="http://127.0.0.1:5501/cart.html">Shopping Cart</a>
                  <a class="nav-link" href=""></a>
                </div>
              </div>
            </div>
          </nav>

          <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
            <a class="navbar-brand" href="http://127.0.0.1:5501/catalog.html#">Mentol Library</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link" href="#item-1">BOOKS</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1-1">Twilight</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2">Percy Jackson</a>
              </nav>
              <a class="nav-link" href="#item-2">TOYS</a>
              <a class="nav-link" href="#item-3">STATIONERY</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1">Pencil Case</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2">Snowman Drawing Pen</a>
              </nav>
            </nav>
          </nav>
          
          <div class="isi" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
            
            <h4 id="item-1">BOOKS</h4>
            <p>A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover. The technical term for this physical arrangement is codex (plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its predecessor, the scroll. A single sheet in a codex is a leaf and each side of a leaf is a page.</p>
            <h5 id="item-1-1">Twilight</h5>
            <div class="text-center">
                <img src="tw.jpg" class="rounded" alt="Twilight">
              </div>
            <p>Stock: 14
            <br>Price: Rp 300.000
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add to Cart</button>
              </div>
            
              <h5 id="item-1-2">Percy Jackson</h5>
            <div class="text-center">
                <img src="pj.jpg" class="rounded" alt="PercyJackson">
              </div>
            <p>Stock: 9
            <br>Price: Rp 200.000
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add to Cart</button>
              </div>


            <h4 id="item-2">TOYS</h4>
            <p>A toy is an item that is used in play, especially one designed for such use. It is mainly intended for use by children, though may also be marketed to adults under certain circumstances. Playing with toys can be an enjoyable means of training young children for life in society. Different materials like wood, clay, paper, and plastic are used to make toys. Many items are designed to serve as toys, but goods produced for other purposes can also be used. For instance, a small child may fold an ordinary piece of paper into an airplane shape and "fly it". Newer forms of toys include interactive digital entertainment. Some toys are produced primarily as collectors' items and are intended for display only.</p>
            
            
            <h4 id="item-3">STATIONERY</h4>
            <p>Stationery is a mass noun referring to commercially manufactured writing materials, including cut paper, envelopes, writing implements, continuous form paper, and other office supplies. Stationery includes materials to be written on by hand (e.g., letter paper) or by equipment such as computer printers.</p>
            <h5 id="item-3-1">Pencil Case</h5>
            <div class="text-center">
                <img src="pc.jpeg" class="rounded" alt="PencilCase">
              </div>
            <p>Stock: 15
            <br>Price: Rp 125.000
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add to Cart</button>
              </div>

            <h5 id="item-3-2">Snowman Drawing Pen</h5>
            <div class="text-center">
                <img src="dp.jpg" class="rounded" alt="SnowmanPen">
              </div>
            <p>Stock: 99
            <br>Price: Rp 15.000
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add to Cart</button>
              </div>
          </div>
    </body>
</html>