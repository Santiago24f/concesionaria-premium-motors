<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Concesionaria Premium Motors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
margin:0;
font-family:Arial, Helvetica, sans-serif;
color:white;
}

/* fondo con video */
.hero{
position:relative;
height:100vh;
overflow:hidden;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
}

.video-fondo{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
z-index:-1;
}

.video-fondo iframe{
width:100%;
height:100%;
object-fit:cover;
}

/* secciones */
.section{
padding:60px 20px;
background:#111;
}

.card{
background:#1c1c1c;
color:white;
border:none;
}

footer{
background:#000;
padding:20px;
text-align:center;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">

<a class="navbar-brand" href="#">Premium Motors</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="#">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/menu">Autos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/nosotros">Nosotros</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/contacto">Contacto</a>
</li>

</ul>

</div>
</div>
</nav>


<section class="hero">

<div class="video-fondo">

<iframe
src="https://www.youtube.com/embed/YAFUyPp_238?autoplay=1&mute=1&controls=0&loop=1&playlist=YAFUyPp_238"
frameborder="0"
allow="autoplay; fullscreen"
allowfullscreen>
</iframe>

</div>

<div class="container contenido">

<h1 class="display-3 fw-bold">Bienvenido a Premium Motors</h1>

<p class="lead mt-3">
Descubre los mejores autos deportivos, familiares y de lujo.
En nuestra concesionaria encontrarás tecnología, potencia y elegancia
en cada vehículo.
</p>

<a class="btn btn-success btn-lg mt-4" href="/menu">Ver vehículos</a>

</div>

</section>


<section class="section">

<div class="container">

<h2 class="text-center mb-5">Nuestros Productos</h2>

<div class="row">

<div class="col-md-4">
<div class="card p-4">
<h4>Autos Deportivos</h4>
<p>Vehículos de alto rendimiento con diseño moderno y máxima potencia.</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<h4>Autos Familiares</h4>
<p>Espacio, seguridad y comodidad para viajes y uso diario.</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-4">
<h4>Autos de Lujo</h4>
<p>Elegancia, tecnología avanzada y confort premium.</p>
</div>
</div>

</div>

</div>

</section>


<section class="section">

<div class="container">

<h2 class="text-center mb-5">Servicios</h2>

<div class="row text-center">

<div class="col-md-4">
<h5>Financiamiento</h5>
<p>Planes de pago accesibles para adquirir tu vehículo.</p>
</div>

<div class="col-md-4">
<h5>Mantenimiento</h5>
<p>Servicio técnico especializado y repuestos originales.</p>
</div>

<div class="col-md-4">
<h5>Garantía</h5>
<p>Garantía completa para conducir con tranquilidad.</p>
</div>

</div>

</div>

</section>


<footer>

<p>© 2026 Premium Motors | Concesionaria de Autos</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>