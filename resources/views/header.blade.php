@extends('layouts.app')
<nav class="navbar navbar-expand-lg navbar-light" id="nav_header">
    <a class="navbar-brand" href="#">Proyecto Trabajo</a>


    <ul class="navbar-nav ms-auto">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Inicio Sesión
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-logout" href="{{ route('logout') }}"> Cerrar Sesión</a>
            </div>
          </div>

    </ul>
</nav>
