<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Socialbuilt | login</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<br>



    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<h1 class="text-white">Socialbuilt</h1>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Entérese de los ultimos acontecimientos en su unidad residencial</p>
						<form  method="POST" action="{{ route('login') }}">
							@csrf
							<fieldset class="form-group">
								<input id="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="Ingrese el ID de su propiedad" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
							<fieldset class="form-group">
								 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Ingrese su contraseña" required autocomplete="current-password">
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Iniciar Sesión') }}
                            </button>
						</form>

					</div>
				</div><!-- Sign Up Form End -->
			</div>
		</section>
    <br></br>
    <br></br>
    <br></br>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-wrapper">
                    <div class="col-md-2 col-sm-2">
                        <h6>Andrés Orrego</h6>
                        <ul class="footer-links">
                            <li><a >Aorrego@unal.edu.co</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h6>Alex santiago Contreras</h6>
                        <ul class="footer-links">
                            <li><a >Acontrerash@unal.edu.co</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6>Sebastián González Jiménez</h6>
                        <ul class="footer-links">
                            <li><a >Sgonzalezj@unal.edu.co</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6>Pablo Andres Castrillon</h6>
                        <ul class="footer-links">
                            <li><a >pacastrillon@unal.edu.co</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>

	</body>
</html>
