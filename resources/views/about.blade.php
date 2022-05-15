<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Easycation | {{ $title[3] }}</title>
    <link rel="icon" type="image/x-icon" href="logo_size.jpg">
  </head>
  <body style="background-color: rgb(199, 238, 255)">
    
    @include('partials.navbarlogin')
    <div class="d-flex flex-row-reverse">
        <div class="p-4">
            <a href="/" class="btn btn-outline-danger">Back</a>
        </div>
    </div>
    <center><h2> About Us </h2></center>
    <br>
    <div style="width: 500px; margin: auto"> 
        <p style="text-align:center;">
            Indonesia memiliki banyak sekali tempat untuk berwisata dan berekreasi, 
            bahkan diantaranya ada pula beberapa tempat yang tergolong unik untuk dikunjungi baik bagi turis mancanegara maupun turis domestik.
            Lokasi dari tempat wisata ini tersebar luas di seantero nusantara baik itu wisata di daratan maupun lautan, 
            mulai dari Sabang hingga Merauke dan dari Miangas hingga Pulau Rote. 
            Hal ini mengakibatkan sulitnya persebaran informasi dan akses bagi tempat-tempat wisata yang belum terkenal di kalangan turis.
            Kami berupaya menghadirkan aplikasi Easycation ini dengan tujuan memudahkan para pengunjung untuk mengakses 
            dan memperkenalkan berbagai tempat wisata yang belum banyak didengar oleh wisatawan. 
        </p>
    </div>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>