<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>inicio</title>
</head>
<body>
    <br>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid border">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-primary me-2"  href="{{route('home.index')}}" role="button">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary me-2" href="#" role="button">Registrar</a>
                </li>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
		<h3 class="text-center fst-italic fs-1 py-3">Login</h3>
	</div>
    <div class="container text-center border">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <br>
                    <div class="form-floating">
                        <input type="User" class="form-control" id="floatingUser" placeholder="User">
                        <label for="floatingUser">User</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <div class="form-center">
                        <input class="form-check-input" type="checkbox" value="" id="profesor">
                        <label class="form-check-label" for="profesor">
                            Profesor
                        </label>
                    </div>
                    <div class="form-center">
                        <input class="form-check-input" type="checkbox" value="" id="artista" checked>
                        <label class="form-check-label" for="artista">
                            Artista
                        </label>
                    </div>
                    <br>
                    <button type="submit"  href="#" class="btn btn-primary">Ingresar</button>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>