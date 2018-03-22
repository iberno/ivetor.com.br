<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ivetor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
        
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Breve!</h1>
              <p class="mb-5">Estamos Trabalhando Duro para finalizar o desenvolvimento deste site. Nossa meta de lanchamento é 
                <strong>Maio 2018</strong>! Inscreva-se abaixo para saber as novidades mais a frente!</p>
                
                <p><strong></strong>
                  @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }} <i class="ion-ios-heart icon"></i>
                    </div>
                  @endif
                </p>
              <form action="{{ route('store') }}" method="POST" class="input-group input-group-newsletter">
                  {{ csrf_field() }}
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Seu Email..." name="email" aria-label="Seu Email..." aria-describedby="basic-addon"><br>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">Notifique-Me!</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
