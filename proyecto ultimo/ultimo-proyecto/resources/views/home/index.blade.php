@extends('layouts.master')

@section('contenido-principal')
    <br>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid border">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-primary me-2"  href="{{route('home.index')}}" role="button">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary me-2" href="#" role="button">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary me-2" href="#" role="button">ingresar</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
@endsection