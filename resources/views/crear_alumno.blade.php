<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body  style="overflow-y:hidden; overflow-x:hidden">


<div class="container-fluid" >

  <div class="row">
    <div class="col-6">


      <div class="card" style="width: 40rem; background-color:#fff; margin-top:15%; margin-left:15%; margin-right:15%;">
        <div class="card-body" style="">
          <img src="{{asset('images/icons/ic_logo.png')}}" width="450px" height="auto" vertical-align="middle" position="relative"></img>

          <form action="{{ action('AlumnoController@store') }}" method="post">
            @csrf


      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="form-group">
              <label for="exampleFormControlInput1">Nombres</label>
              <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombres del estudiante" onkeyup="javascript:this.value=this.value.toUpperCase();" required="true;">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Apellidos</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos del estudiante" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Sexo</label>
              <select class="form-control" id="sexo" name="sexo">
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Documento Nacional de identidad</label>
              <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese DNI" maxlength="8">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fec_nac" name="fec_nac" placeholder="name@example.com">
            </div>



            <a class="" href="#carouselExampleControls" role="button" data-slide="next">
              <button type="button" class="btn btn-primary btn-lg btn-block">Siguiente</button>
            </a>




          </div>
          <div class="carousel-item">

            <div class="form-group">
              <label for="exampleFormControlSelect1">Colegio</label>
              @foreach($colegios as $colegio)
              <select class="form-control" id="{{$colegio->idcolegio}}" name="colegios_idcolegio">
                <option value="{{$colegio->idcolegio}}">{{$colegio->nombre}}</option>
              </select>
              @endforeach
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Grado</label>
              <select class="form-control" id="grado" name="grado">
                <option>1er grado de secundaria</option>
                <option>2do grado de secundaria</option>
                <option>3er grado de secundaria</option>
                <option>4to grado de secundaria</option>
                <option>5to grado de secundaria</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Sección</label>
              <input type="text" class="form-control" id="seccion" name="seccion" placeholder="Ingrese la seccion" onkeyup="javascript:this.value=this.value.toUpperCase();" required="true;" maxlength="1">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Comentarios/Observaciones</label>
              <textarea class="form-control" id="comentarios" name='comentarios' rows="3"></textarea>
            </div>

            <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
              <button type="button" class="btn btn-primary btn-lg btn-block">Anterior</button>
            </a>

            <br>

            <center>
              <input type="submit" class="btn btn-success btn-lg btn-block"></button>
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
      <img src="images/backgrounds/bg_student3.jpg" alt="">
    </div>

  </div>






</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
