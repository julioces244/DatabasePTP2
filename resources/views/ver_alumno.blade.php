<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">


  </head>
  <body>



  <div class="container" style="margin-top:100px">


    <div class="card bg-light mb-3" style="max-width: 100%;">
      <div class="card-header text-white bg-dark">INFORMACIÓN PERSONAL</div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
            <center>
            @if($estudiante->sexo=="Masculino")
              <img src="{{asset('images/icons/img_maleprofile.png')}}" height="250px" width="auto"></img>
            @elseif($estudiante->sexo=="Femenino")
              <img src="{{asset('images/icons/img_femaleprofile.png')}}" height="250px" width="auto"></img>
            @endif
            </center>

          </div>



              <div class="col-sm-8">

                <div class="card">
                  <div class="card-body">


                <center>
                <img src="{{asset('images/icons/ic_logo.png')}}" alt="" height="100px"></center>


                  <h5 class="nonline">NOMBRES: </h5><h5 class="nonline2">{{$estudiante->nombres}}</h5>
                  <br>
                  <h5 class="nonline">APELLIDOS:  </h5><h5 class="nonline2">{{$estudiante->apellidos}}</h5>
                  <br>
                  <h5 class="nonline">SEXO: </h5><h5 class="nonline2" style="text-transform: uppercase;">{{$estudiante->sexo}}</h5>
                  <br>
                  <h5 class="nonline">DNI: </h5><h5 class="nonline2" style="text-transform: uppercase;">{{$estudiante->dni}}</h5>
                  <br>
                  <h5 class="nonline">FECHA DE NACIMIENTO: </h5><h5 class="nonline2" style="text-transform: uppercase;">{{$estudiante->fec_nac}}</h5>


                </div>
              </div>


              </div>




        </div>



      </div>
    </div>


    <div class="card bg-light mb-3" style="max-width: 100%;">
      <div class="card-header text-white bg-dark">INFORMACIÓN ACADÉMICA</div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">




          </div>
          <div class="col-sm-8">

            <div class="row">
              <div class="col-sm-4">
                <h5 class="card-text">Nombres:</h5>dad
              </div>
              <div class="col-sm-8">
                <p>{{$estudiante->nombres}}</p>
              </div>
            </div>

            <br>
                <h5  class="nonline">COLEGIO: {{$estudiante->colegio->nombre}}</h5>
                <br>
                <h5 class="nonline">GRADO : </h5>{{$estudiante->grado}}
                <h5 class="nonline">SECCION : </h5>{{$estudiante->seccion}}
                <h5 class="nonline">COMENTARIOS : </h5>{{$estudiante->comentarios}}




          </div>

        </div>

        <div class="row">

            <img src="{{asset('images/photos/img_colegio2.jpg')}}" height="auto" width="60%" style="object-fit: fill;"></img>

        </div>



      </div>
    </div>


    <div class="card bg-light mb-3" style="max-width: 100%;">
      <div class="card-header text-white bg-dark">PROGRAMAS</div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
            <p></p>
            <img src="{{asset('images/icons/ic_curso.png')}}" height="150px" width="150px" class="rounded-circle border border-success"></img>




          </div>
          <div class="col-sm-8">

            <div class="row">
              <div class="col-sm-4">
                <h5 class="card-text">Comunicación</h5>
              </div>
              <div class="col-sm-8">
                <p></p>

              </div>
            </div>

            <br>




          </div>

        </div>

        <div class="row">


        </div>



      </div>
    </div>



    <div class="card bg-light mb-3" style="max-width: 100%;">
      <div class="card-header text-white bg-dark">MATERIALES ENTREGADOS</div>

      <div class="card-body">

        <form action="{{ route('verifymaterial',$estudiante->idestudiante) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-12">
            @foreach ($materiales as $material)
            <div class="custom-control custom-checkbox">

              <input type="hidden" name="material[{{$material->idmaterial}}]" value="0">
              <input type="checkbox" class="custom-control-input" id="{{$material->idmaterial}}" value="{{$material->idmaterial}}" name="material[{{$material->idmaterial}}]">

              <label class="custom-control-label" for="{{$material->idmaterial}}">{{$material->nombre}} </label>

            </div>
            @endforeach




          </div>

          <button type="submit" class="btn btn-primary" href="">Guardar</button>
        </div>
        </form>


      </div>
    </div>

    <div class="card bg-light mb-3" style="max-width: 100%;">
      <div class="card-header text-white bg-dark">PRUEBA DE PROCESOS - PRUEBA DE ENTRADA</div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-9">
            <p class="card-text">Deduce diversas relaciones lógicas de las ideas del texto descriptivo.</p>
          </div>
          <div class="col-sm-3">
              <select id="inputState" class="form-control">
                <option selected>A</option>
                <option>...</option>
              </select>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-9">
            <p class="card-text">Identifica información explícita con vocabulario variado.</p>
          </div>
          <div class="col-sm-3">
              <select id="inputState" class="form-control">
                <option selected>B</option>
                <option>...</option>
              </select>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-9">
            <p class="card-text">Identifica algunos detalles que describen el texto.</p>
          </div>
          <div class="col-sm-3">
              <select id="inputState" class="form-control">
                <option selected>B</option>
                <option>...</option>
              </select>
          </div>
        </div>



      </div>
    </div>

  </div>



  </body>
</html>
