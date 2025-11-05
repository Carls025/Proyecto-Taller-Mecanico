<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Mecánico - Bienvenido</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url('{{ asset('images/fondo-taller.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Figtree', sans-serif;
            color: white;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.55);
        }

        .service-card {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between text-white">

    <!-- 🔹 BARRA DE NAVEGACIÓN -->
    <nav class="w-full flex justify-between items-center px-8 py-3 bg-black bg-opacity-60 backdrop-blur-md">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo-taller2.png') }}" alt="Logo del Taller Mecánico" class="h-20 w-auto">
        </div>

        <!-- Título centrado -->
        <div class="text-center flex-1">
            <h1 class="text-3xl font-extrabold text-yellow-400 tracking-wide">
                Bienvenido a Taller Mecánico
            </h1>
            <p class="text-sm text-gray-200 mt-1">
                Mantené tu vehículo en las mejores manos. Reservá tu turno online de manera rápida y segura.
            </p>
        </div>

        <!-- Botón Pedir Turno -->
        <div>
            <a href="{{ route('turnos.index') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition flex items-center space-x-2">
                <span>📅</span> <span>Pedir Turno</span>
            </a>
        </div>
    </nav>

    <!-- 🔹 CONTENIDO CENTRAL -->
    <main class="flex flex-col items-center text-center py-10 px-6 overlay">

        <!-- Botones de login y registro (más arriba) -->
        <div class="flex space-x-6 mt-4 mb-10">
            <a href="{{ route('login') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                Iniciar Sesión
            </a>
            <a href="{{ route('register') }}" 
               class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
                Registrarse
            </a>
        </div>

        <!-- Sección de servicios -->
<section class="text-gray-100 text-center mt-2 w-full">
    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-12 text-white drop-shadow-lg">

        Nuestros Servicios
    </h2>

    <!-- Contenedor en una sola fila (3 columnas) -->
    <div class="max-w-6xl mx-auto grid grid-cols-3 gap-8 text-sm">

        <div class="service-card p-6 rounded-lg bg-black bg-opacity-40 hover:bg-opacity-60 transition">
            <h3 class="text-xl font-semibold text-pink-400 mb-3">🔧 Mantenimiento general</h3>
            <p class="text-gray-300">Chequeos, cambios de aceite, filtros, frenos y más.</p>
        </div>

        <div class="service-card p-6 rounded-lg bg-black bg-opacity-40 hover:bg-opacity-60 transition">
            <h3 class="text-xl font-semibold text-green-400 mb-3">⚙️ Reparaciones mecánicas</h3>
            <p class="text-gray-300">Motor, suspensión, dirección y sistemas eléctricos.</p>
        </div>

        <div class="service-card p-6 rounded-lg bg-black bg-opacity-40 hover:bg-opacity-60 transition">
            <h3 class="text-xl font-semibold text-purple-400 mb-3">🧭 Diagnóstico y turnos online</h3>
            <p class="text-gray-300">Reservá tu cita fácilmente desde cualquier dispositivo.</p>
        </div>
    </div>
</section>


    </main>

    <!-- 🔹 FOOTER -->
    <footer class="bg-gray-900 text-gray-400 text-center py-4 text-sm">
        © {{ date('Y') }} Taller Mecánico. Todos los derechos reservados.
    </footer>

</body>
</html>
