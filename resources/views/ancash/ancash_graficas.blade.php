<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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



    <div class="container-fluid" style="margin:5%;">

      <div class="row">
        <div class="col-7">

              <canvas id="myChart" width="200" height="100"></canvas>
        </div>
        <span class="border-right" ></span>
        <div class="col-4">
          <div class="card" align="center">
            <div class="card-body" align="center">
              Última vez actualizado
              <br>
              {{$fechaultima}}
              <br><br>
              <a href="/ingresar_datos" class="btn btn-info btn-block">Agregar</a>
            </div>
          </div>


        </div>
      </div>

      <div class="row">
        <div class="col-7">

          <canvas id="myChart2" width="200" height="100"></canvas>

        </div>

      </div>

    </div>



    <script type="text/javascript" src="js/Chart.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>

    <script type="text/javascript">

    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [ @foreach ($fechas as $fecha)
            '{{$fecha}}',
          @endforeach],
        datasets: [
          {label: 'Fallecidos',
              backgroundColor: 'rgb(123, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: [@foreach ($fechas2 as $fecha2)
                {{$fecha2->fallecidos}},
              @endforeach]},

              {label: 'Pacientes con CoVid-19',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [@foreach ($fechas2 as $fecha2)
              {{$fecha2->casos}},
            @endforeach]

        }
          ]
    },

    // Configuration options go here
    options: {}
});

    </script>

    <script type="text/javascript">

    var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [@foreach ($fechas as $fecha)
            '{{$fecha}}',
          @endforeach],
        datasets: [{
            label: 'Porcentaje casos (con respecto a la poblacion)',
            borderColor: 'rgb(255, 99, 132)',
            data: [@foreach ($porcentaje as $porcent)
                {{$porcent}},
              @endforeach]

        },
          ]
    },

    // Configuration options go here
    options: {}
});

    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
