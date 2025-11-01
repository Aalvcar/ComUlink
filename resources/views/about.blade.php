@extends('layouts.info')

@section('title', 'ComUlink - about')


@section('content')

<div class="info_main_container">
    <h2>Sobre la aplicación:</h2>
    <p>ComUlink es una aplicación web creada para mejorar la comunicación entre los vecinos de una comunidad. Su objetivo es facilitar la convivencia mediante una herramienta sencilla, accesible y útil que permite compartir avisos, gestionar reservas de espacios comunes, informar sobre incidencias y promover actividades conjuntas.</p>
    <p>La idea de ComUlink nace de la experiencia personal en una comunidad donde la falta de comunicación generaba malentendidos y aislamiento. A partir de esa realidad, surge la motivación de crear una plataforma que acerque a las personas, fomente la participación y contribuya a un entorno vecinal más colaborativo. </p>
    <p>El proyecto ha sido desarrollado de forma independiente, con el apoyo y las pruebas de vecinos y amigos, buscando siempre la simplicidad y la utilidad práctica. La filosofía de ComUlink se basa en la creencia de que la tecnología puede servir para unir, no para separar, ayudando a construir comunidades más humanas, participativas y solidarias.</p>
    <p><b>Derechos de autor y uso de imagen</b></p>
    <p>Todo el contenido, diseño y material gráfico de ComUlink pertenece a su autor y está protegido por la legislación vigente en materia de propiedad intelectual. Las imágenes, iconos o ilustraciones empleadas han sido creadas por el propio autor o proceden de bancos de recursos libres de derechos con fines educativos y no comerciales. Queda prohibida su reproducción, distribución o modificación sin autorización expresa.</p>
</div>
@endsection

@section('enlace')
<a href="{{ route('contacto') }} "><span>C</span>ontacto</a>
@endsection