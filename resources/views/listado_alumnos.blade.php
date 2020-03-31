<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">


  </head>
  <body>

<div class="container-fluid">
  <h3>Listado de estudiantes</h3>

  <div class="row">
    <div class="col-sm-10">

      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif

    <table class="table">
  <thead class="bg-info text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Sexo</th>
      <th scope="col">DNI</th>
      <th scope="col">Creado</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach($alumnos as $estudiante)
    <tr>
      <th scope="row">{{$estudiante->idestudiante}}</th>
      <td>{{$estudiante->nombres}}</td>
      <td>{{$estudiante->apellidos}}</td>
      <td>{{$estudiante->sexo}}</td>
      <td>{{$estudiante->dni}}</td>
      <td>{{$estudiante->created_at}}</td>
      <td>

        <div class="row">

          <div class="col-sm-3">

            <a href="/show_student/{{$estudiante->idestudiante}}">
              <button class="myButtonCard" type="button"></button>
            </a>


          </div>

          <div class="col-sm-3">

            <a href="#">
              <button class="myButton" type="button" name="button" data-toggle="modal" data-target="#exampleModalCenter" data-whatever="{{$estudiante->nombres}}"></button>
            </a>

          </div>

        </div>




      </td>
    </tr>
    <div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{$estudiante->idestudiante}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <form class="" action="{{route('eliminar', $estudiante->idestudiante)}}" method="POST" >
              @csrf
              @method('POST')
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    @endforeach

    <!-- Modal -->


  </tbody>
  </table>

  <a href="/export"><button type="button" class="btn btn-success">Exportar</button></a>

  </div>

<span class="border-left" >
  <div class="col-sm-2">


    <div class="container">


          <center>
            <a href="create_student"><img src="{{asset('images/icons/ic_add.png')}}" height="80px" width="auto"></img></a>
          </center>

    </div>
  </div></span>


</div>

</div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#exampleModalCenter').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Eliminar')
      modal.find('.modal-body').text('¿Está seguro que desea eliminar a ' + recipient +'?')
      //modal.find('.modal-footer').form.setAttribute(recipient);
      })
    </script>
  </body>
</html>
