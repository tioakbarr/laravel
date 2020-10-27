<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cce3b1c94b.js" crossorigin="anonymous"></script>

    <title>Lokal Pride Shop</title>
  </head>
  <body>
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class ="navbar-brand" href="{{ url('/Awal')}}"><i class="fas fa-home"></i></a>
            <a class="navbar-brand text-danger" href="#">LOCAL PRIDE SHOP</a>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <h3> <a href="{{ url('/Login') }}"><i class="far fa-user-circle text-white ml-auto"></i></a> </h3>
     </div>
    </nav>

        <div class="text-center">
            <hr>
                <p>
                DAFTAR PRODUK
                </p>
            <hr>
        </div>
    

    <!-- Akhir Navbar -->

    <!-- Card -->
    <div class="row">
        <div class="card ml-5 mr-5" style="width: 12rem;">
          <img src="https://s3.bukalapak.com/uploads/content_attachments/22108/w-744/Compass_Gazelle_Low___Navy___White.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sepatu Compas Gazale</h5>
                <p class="card-text">Rp. 380.000</p>
                <a href="{{ url('/Sepatu') }}" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
        </div>


        <div class="card" style="width: 12rem;">
          <img src="https://cf.shopee.co.id/file/7a03294e76215a27dadb9e634502cf26" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hoddie Memphis</h5>
                <p class="card-text">Rp. 120.000</p>
                <a href="{{ url('/Hoddie') }}" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
        </div>

        <div class="card ml-5 mr-5" style="width: 12rem;">
          <img src="https://cf.shopee.co.id/file/7d332717712ede4aad67e68903ecbfeb" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Celana Arei Stingray</h5>
                <p class="card-text">Rp. 179.000</p>
                <a href="{{ url('Celana') }}" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
        </div>

        <div class="card" style="width: 12rem;">
          <img src="https://i1.wp.com/fatasama.com/wp-content/uploads/2019/11/WADEZIG.jpg?resize=800%2C800&ssl=1" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tsirt Wadezig red</h5>
                <p class="card-text">Rp. 110.000</p>
                <a href="{{ url('Tsirt') }}" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
        </div>

        <div class="card ml-5" style="width: 12rem;">
          <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/8/19/99e10d2b-276f-4f4d-88d2-1d9843b79a72.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jaket Memphis Denim New</h5>
                <p class="card-text">Rp. 320.000</p>
                <a href="{{ url('Jaket') }}" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
        </div>
    </div>
        
        
    <!-- Akhir Card -->

    <br><br><br><br><br>

    <!-- Navs -->

    <ul class="nav navs-dark bg-dark">
      <li class="nav-item mr-auto">
        <a class="nav-link active" href="#">Contact Us 0895376946991</a>
      </li>
      <li class="nav-item p-2 text-white">
        <p class="nav-item" href="#">©Tio Akbar 2020</p>
      </li>
    </ul>

    <!-- Akhir Navs -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>