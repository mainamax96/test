<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Navbar Móvil con Reloj</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Design Icons -->
    <link href="https://cdn.materialdesignicons.com/7.2.96/css/materialdesignicons.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 56px;
            background-color:#D9E8FF;
        }

        /* Barra de navegación */
        .navbar {
            padding: 0.5rem 1rem;
            background-color: #6D8EAD;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }

        .sm-menu {
            background-color: #6D8EAD;
            height: 4rem;
        }

        .menu-icon {
            width: 1rem;
            height: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0rem;
            margin-left: 0.5rem;
        }

        .menu-icon span {
            height: 3px;
            background-color: white;
            border-radius: 2px;
        }

        /* Perfil */
        .perfil-container {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            border: none;
        }

        /* Imagen de perfil */
        .perfil-img img {
            width: 7rem;
            height: 8rem;
            border-radius: 10%;
            border: 3px solid #6553CD;
            object-fit: cover;
        }

        /* Información personal */
        .perfil-info {
            margin-left: 20px;
        }

        .perfil-info h1 {
            font-size: 1.3rem;
            margin: 0;
        }

        .perfil-info p {
            font-size: 1rem;
            color: #666;
        }

        /* Reloj */
        .clock {
            font-weight: bold;
        }

        /* Clase para los márgenes y espaciado */
        .navbar-text {
            color: white;
            margin-left: 10px;
        }

        .card-purple {
            background-color: #F1EEFF;
            border: none
        }

        .text-inside{
            font-size: 1.2rem;
            font-family: Arial, sans-serif;
                font-weight: 600;
        }

        .text-purple {
          color:  #6553CD
        }

        /* Responsive - Ajuste para móviles */
        @media (min-width: 768px) {
            body {
                display: none;
            }
        }
    </style>
</head>
<body>

<!-- Barra de navegación fija -->
<nav class="navbar fixed-top d-flex justify-content-between align-items-center sm-menu">
    <div>
        <!-- Icono de menú -->
        <button class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <!-- Reloj en el centro -->
        <span class="navbar-text d-flex clock" id="clock">--:--:--</span>

        <!-- Botón Salir -->
        <span class="navbar-text d-flex align-items-center">
            <i class="mdi mdi-power icon-power mdi-24px"></i>Salir
        </span>
    </div>
</nav>

<!-- Contenedor de perfil -->
<div class="card mt-5 mx-3 bg-white">
    <div class="perfil-container">
        <!-- Foto de perfil -->
        <div class="perfil-img">
            <img src="foto.png" alt="Foto de perfil">
        </div>

        <!-- Información personal -->
        <div class="perfil-info">
            <h1>Anastasio Teofilo, Pancracio</h1>
            <p>Estudiante</p>
        </div>

         
    </div>

   <div class="card card-purple mx-3 mb-3 py-2 px-4">
            <span class="text-inside">Código</span>
            <span class="text-inside text-purple">20456587</span>
        </div>

        <div class="card card-purple mx-3 mb-3 py-2 px-4">
            <span class="text-inside">Facultad</span>
            <span class="text-inside text-purple">19 - INGENIERÍA ELECTRÓNICA Y ELÉCTRICA</span>
        </div>

                <div class="card card-purple mx-3 mb-3 py-2 px-4">
            <span class="text-inside">Programa</span>
            <span class="text-inside text-purple">2 - E.P. Ingeniería Eléctrica</span>
        </div>

                <div class="card card-purple mx-3 mb-3 py-2 px-4">
            <span class="text-inside">Especilidad</span>
            <span class="text-inside text-purple">0 - Estudios Gnerales</span>
        </div>

                <div class="card card-purple mx-3 mb-3 py-2 px-4">
            <span class="text-inside">Periodo Académico</span>
            <span class="text-inside text-purple">2025-1</span>
        </div>

                
</div>

<div class="card mt-5 mx-3 bg-white">
    <div class="card card-purple mx-3 mt-3 py-2 px-4">
        <span class="text-inside">Información</span>
        <span class="text-inside text-purple">?????</span>
    </div>
</div>

<!-- Bootstrap JS y reloj en vivo -->
<script>
    function updateClock() {
        const now = new Date();
        const time = now.toLocaleTimeString();
        document.getElementById('clock').textContent = time;
    }

    setInterval(updateClock, 1000);
    updateClock(); // Ejecutar al cargar
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
