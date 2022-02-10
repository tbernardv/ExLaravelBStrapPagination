<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Paginación con Laravel y Bootstrap 5</title>
  </head>
  <body>
    
  <div class="container">
      <div class="row">
          <div class="col">
              <table class="table table-striped table-dark mt-5">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>NOMBRE</th>
                          <th>E-MAIL</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($usuarios as $usuario)
                      <tr>
                          <td>{{$usuario->id}}</td>
                          <td>{{$usuario->name}}</td>
                          <td>{{$usuario->email}}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              <div class="d-flex justify-content-end">
                  {!! $usuarios->links() !!}
              </div>
          </div>
      </div>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>