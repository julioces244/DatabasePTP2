<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body  style="overflow-y:hidden; overflow-x:hidden">


    <!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{asset('images/icons/ic_ccd.png')}}" width="220" height="40" class="d-inline-block align-top" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/ingresar_datos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Región Anchash
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/ingresar_datos">Ingresar datos</a>

          <a class="dropdown-item" href="/ancash_graficas">Ver gráficas</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ancash_provincias">Mapa Provincias</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>


<div class="container-fluid" style="margin-top:5%;" >

  <div class="row">
    <div class="col-6">


      <div class="card" style="width:relative; background-color:#fff;  margin-left:15%;">
        <div class="card-body" style="">
          <img src="{{asset('images/icons/ic_ccd.png')}}" width="relative" height="50px" vertical-align="middle" position="relative"></img>

          <form  action="{{ route('registrardatos') }}" method="post">
            @csrf
            <br>


      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Indicar fecha</label>
              <input type="date" class="form-control" id="fechaingreso" name="fechaingreso" placeholder="name@example.com">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Casos CoVid-19</label>
              <input type="number" class="form-control" id="casos" name="casos" placeholder="Ingrese número de casos" onkeyup="javascript:this.value=this.value.toUpperCase();" required="true;">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Fallecidos</label>
              <input type="number" class="form-control" id="fallecidos" name="fallecidos" placeholder="Ingrese número de fallecidos">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Departamento</label>
              <input type="text" value="Ancash" class="form-control" id="departamento" name="departamento" readonly="readonly">
            </div>

            <center>
              <input  type="submit" class="btn btn-primary btn-lg btn-block"></button>
            </center>

          </div>
          <!--
          <div class="carousel-item">
          </div>-->
        </div>
      </div>
    </form>

  </div>
</div>

    </div>


    <div class="col-6">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/icons/img_sugerencia1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/icons/img_sugerencia3.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/icons/img_sugerencia4.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>



  </div>






</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
