<html>
	<head>
	<title>Faktur</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
		<style type="text/css">
		body
        {
            background-image: url(biru.jpg);
        }
		div.faktur 
        {
		    border:1px solid #ccc;
		    padding:10px;
		    height:740pt;
		    width:570pt;
		}
		div.faktur-details 
        {
			border:1px solid #ccc;
			float:right;
			width:200pt;
		}
		div.address 
        {
			border:1px solid #ccc;
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		div.clear-fix 
        {
			clear:both;
			float:none;
		}
		table 
        {
			width:100%;
		}
		th 
        {
			text-align: left;
		}	
		td 
        {
		}
		.text-left 
        {
			text-align:left;
		}
		.text-center 
        {
			text-align:center;
		}
		.text-right 
        {
			text-align:right;
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
                  <a class="nav-link" href="http://127.0.0.1:5501/cart.html">Shopping Cart</a>
                </div>
              </div>
            </div>
          </nav>

        <div class="faktur-details">
                Invoice: $random
            </div>
            
            <div class="address">
                To:
                <br />
                Mr. Alyssa
                <br />
                Jl. Mawar Ungu blok G2 No.25, Jakarta Pusat
                <br />
                15277
                <br />
            </div>
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Nama Barang</th>
					<th width=80>Quantity</th>
					<th width=100>Price</th>
					<th width=100>Total price</th>
				</tr>
			<?php
			$total = 0;
			$vat = 21;
			$articles = array(
						array("Twilight","PencilCase"),
						array(2,3),
						array(300.000,125.000)
			);

			for($i=0;$i<5;$i++) {
					$namabarang = $articles[0][$i];
					$qty = $articles[1][$i];
					$price = number_format( $articles[2][$i], 2);
					$totalprice = number_format( $qty * $price, 2);
					$total += $totalprice;
					echo("<tr>");
					echo("<td>$namabarang</td>");
					echo("<td class='text-center'>$qty</td>");
					echo("<td class='text-right'>Rp.$price</td>");
					echo("<td class='text-right'>Rp.$totalprice</td>");
					echo("</tr>");
			}
			
			echo("<tr>");
			echo("<td colspan='3' class='text-right'>Sub total</td>");
			echo("<td class='text-right'>Rp" . number_format($total,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3' class='text-right'>VAT</td>");
			echo("<td class='text-right'>Rp" . number_format(($total*$vat)/100,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
			echo("<td class='text-right'><b>Rp" . number_format(((($total*$vat)/100)+$total),2) . "</b></td>");
			echo("</tr>");
			?>
			</table>
		</div>
	</body>

</html>