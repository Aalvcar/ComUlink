@extends('layouts.info')

@section('title', 'ComUlink - telefonos')


@section('content')

<div class="info_main_container">
    <h2>Teléfonos de interés</h2>
    <h4>Servicios de emergencia:</h4>


    <ul class="lista_enlaces">
        <li>Policía local 954 123 456</li><br>
        <li>Guardia civil 955 489 564</li><br>
        <li>Bomberos 950 564 123</li><br>
    </ul>
    <h4>Administraciones locales:</h4>

    <ul class="lista_enlaces">
        <li>Ayuntamiento 954 456 003</li><br>
        <li>Juzgados 955 700 153</li><br>
        <li>Seguridad social 955 702 030</li><br>
        <li>Oficina de empleo 955 892 010</li><br>
    </ul>

</div>
@endsection

@section('enlace')
<a style="margin-right: 10px;" href=" {{ route ('about') }}"><span>A</span>viso legal</a>
<a href=" {{ route ('contacto') }}"><span>C</span>ontacto</a>
@endsection