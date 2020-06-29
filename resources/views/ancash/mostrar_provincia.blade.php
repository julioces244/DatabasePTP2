<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/imgstyle.css">


  </head>
  <body>
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
        <div class="col-11">

          <div class="card text-white bg-dark" style="width:relative; background-color:#fff;  margin-left:15%;">
            <div class="card-body" style="">
              <h4 class="card-title">Provincia de {{$provi->nombre}}</h4>
              <h5 class="card-title">Acualizado: {{$provi->updated_at}}</h5>

              <form  action="/actualizar_provincia/{{$provi->idancashprovinces}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <br>


                <div class="row">
                  <div class="col-5">

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Poblacion</label>
                      <input type="number" class="form-control" id="fechaingreso" name="poblacion" value="{{$provi->poblacion}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Contagiados</label>
                      <input type="number" class="form-control" id="fechaingreso" name="casos" value="{{$provi->casos}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Recuperados</label>
                      <input type="number" class="form-control" id="casos" name="recuperados" value="{{$provi->recuperados}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Fallecidos</label>
                      <input type="number" class="form-control" id="fallecidos" name="fallecidos" value="{{$provi->fallecidos}}">
                    </div>

                    <center>
                      <input  type="submit" class="btn btn-primary btn-lg btn-block"></button>
                    </center>

                  </div>
                  <div class="col-7">
                    <div class="container">

                  <div class="car">
                    <div class="img-container">
                      <img id="street" class="img" src="/images/photos/img_ancash.jpg" height="150px"/>
                  </div>
                  </div>

                  <div class="car">
                    <div class="img-container">
                      <img id="hill" class="img" src="http://themenectar.com/demo/salient-frostwave/wp-content/uploads/2013/06/great-valley1-600x400.jpg" height="150px" />
                    </div>
                  </div>

                  <div class="car">
                    <div class="img-container">
                      <img id="lake" class="img" src="http://themenectar.com/demo/salient-frostwave/wp-content/uploads/2013/06/on-the-lake1-600x400.jpg" height="150px" />
                    </div>
                  </div>

                  </div>

                  </div>




              </div>








        </form>

      </div>
    </div>

        </div>
      </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript">
      $(".img").mousemove(function(event){
        var mousex = event.pageX - $(this).offset().left;
        var mousey = event.pageY - $(this).offset().top;
        var imgx = (mousex - 300) / 40;
        var imgy = (mousey - 200) / 40;
        $(this).css("transform", "translate(" + imgx + "px," + imgy + "px)");
      });
      $(".img").mouseout(function(){
        $(this).css("transform", "translate(0px,0px)");
      });
    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
