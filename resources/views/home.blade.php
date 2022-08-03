@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Airbnb</title>

</head>
<body>
    <div id="primera-seccion">

    <div align="center">
        <input type="search" name="" class="buscar" size="45"></div>

    <center><label class="letras">¿Qué estás buscando?</label></center>
    <div align="center">
        <img src="{{ asset('images/h.png') }}" width="150"  class="im1">
        
        <img src="{{ asset('images/cabania.png') }}"  width="160" class="im2">
        
        <img src="{{ asset('images/casa.png') }}"   width="155"class="im3">
        
    </div>

        
    </div>
        
    <div id="segunda-seccion">
    
    <div class="conte">

    <div class="card">

    <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 1</h2>
        
    </div>
    

    
    <div class="card">
        <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 2</h2>
        
    </div>
    

    <div class="card">
        <a href=""> <img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 3</h2>
        
    </div>

    <div class="card">
        <a href=""><img src="{{ asset('images/lugar.jpg') }}"></a>
        <h2>LUGAR 4</h2>
        
    </div>
</div>
</div>

<footer id="footer-inicio">
<div>
        <div class="container-footer">
            <a href="">Sobre nosotros</a>
            <a href="">Contactanos</a>
            <a href="">Otra Opcion</a>
        </div>
        <hr>
</div>
</footer>

</body>
</html>
@endsection
