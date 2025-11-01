@extends('layouts.info')

@section('title', 'ComUlink - contacto')


@section('content')

<div class="info_main_container">
    <h2>Sobre mi:</h2>
    <p>Soy un desarrollador apasionado por la tecnología y las soluciones que mejoran la vida cotidiana de las personas. Me gusta transformar ideas sencillas en proyectos útiles, con especial interés en el desarrollo web y la creación de herramientas que fomenten la comunicación y la colaboración.</p>
    <p>ComUlink nace de esa filosofía: aprovechar la tecnología para conectar a las personas y crear comunidades más unidas.</p>
    <p>Puedes conocer más sobre mi trabajo y proyectos en mis perfiles profesionales:</p>

    <ul class="lista_enlaces">
        <li><b>GitHub:</b> <a href="https://github.com/Aalvcar" target="_blank"> enlace web. <i class="bi bi-box-arrow-up-right"></i></a></li><br>
        <li><b>LinkedIn:</b> <a href="https://www.linkedin.com/in/antonio-%C3%A1lvarez-c%C3%A1rdenas-4652a5275/" target="_blank"> enlace web. <i class="bi bi-box-arrow-up-right"></i></a></li>
    </ul>

</div>
@endsection

@section('enlace')
<a href=" {{ route ('about') }}"><span>A</span>viso legal</a>
@endsection