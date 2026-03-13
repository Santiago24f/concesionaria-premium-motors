<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Autos - Premium Motors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#111;
color:white;
}

/* tarjetas */

.card{
background:#1c1c1c;
color:white;
border:none;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

.card img{
height:200px;
object-fit:cover;
}

.detalles{
font-size:14px;
color:#bbb;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">

<a class="navbar-brand" href="/">Premium Motors</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="/menu">Autos</a>
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


<div class="container py-5">

<h1 class="text-center mb-5">Nuestros Autos</h1>

<div class="row g-4">

<!-- AUTO 1 -->

<div class="col-md-4">
<div class="card">
<img src="/imagen/Audi-RS-6-Avant.jpg" class="card-img-top">
<div class="card-body">

<h5 class="card-title">Audi RS6 Avant</h5>

<p class="detalles">
Precio: $140,000 <br>
Potencia: 630 HP <br>
0-100 km/h: 3.4 s
</p>

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#auto1">
Ver detalles
</button>

</div>
</div>
</div>


<!-- AUTO 2 -->

<div class="col-md-4">
<div class="card">
<img src="/imagen/BMW M4 CSL 2023.jpg" class="card-img-top">
<div class="card-body">

<h5 class="card-title">BMW M4 Competition</h5>

<p class="detalles">
Precio: $120,000 <br>
Potencia: 503 HP <br>
0-100 km/h: 3.8 s
</p>

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#auto2">
Ver detalles
</button>

</div>
</div>
</div>


<!-- AUTO 3 -->

<div class="col-md-4">
<div class="card">
<img src="/imagen/2024-AMG-GT-4DR-COUPE-GAL-002-Q-FE-DR1.jpg" class="card-img-top">
<div class="card-body">

<h5 class="card-title">Mercedes AMG GT</h5>

<p class="detalles">
Precio: $150,000 <br>
Potencia: 577 HP <br>
0-100 km/h: 3.5 s
</p>

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#auto3">
Ver detalles
</button>

</div>
</div>
</div>

</div>

</div>


<!-- MODAL AUTO 1 -->

<div class="modal fade" id="auto1">
<div class="modal-dialog">
<div class="modal-content bg-dark text-white">

<div class="modal-header">
<h5 class="modal-title">Audi RS6 Avant</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<img src="/imagen/Audi-RS-6-Avant.jpg" class="img-fluid mb-3">

<p>
El Audi RS6 Avant es uno de los familiares deportivos más potentes del mundo.
Combina lujo, tecnología avanzada y un motor V8 biturbo que ofrece
una experiencia de conducción excepcional.
</p>

</div>

</div>
</div>
</div>


<!-- MODAL AUTO 2 -->

<div class="modal fade" id="auto2">
<div class="modal-dialog">
<div class="modal-content bg-dark text-white">

<div class="modal-header">
<h5 class="modal-title">BMW M4 Competition</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<img src="/imagen/BMW M4 CSL 2023.jpg" class="img-fluid mb-3">

<p>
El BMW M4 Competition ofrece alto rendimiento con un diseño agresivo.
Su motor turbo y tecnología de competición lo convierten en
uno de los deportivos más emocionantes de conducir.
</p>

</div>

</div>
</div>
</div>


<!-- MODAL AUTO 3 -->

<div class="modal fade" id="auto3">
<div class="modal-dialog">
<div class="modal-content bg-dark text-white">

<div class="modal-header">
<h5 class="modal-title">Mercedes AMG GT</h5>
<button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<img src="/imagen/2024-AMG-GT-4DR-COUPE-GAL-002-Q-FE-DR1.jpg" class="img-fluid mb-3">

<p>
El Mercedes AMG GT combina lujo, potencia y tecnología alemana.
Es un deportivo diseñado para ofrecer alto rendimiento y confort
en cualquier tipo de conducción.
</p>

</div>

</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>