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

        /* Fondo transparente para navbar */
        nav {
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Sombra suave en botones */
        .btn {
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">

    <!-- 🔹 BARRA DE NAVEGACIÓN -->
    <nav class="w-full fixed top-0 left-0 flex justify-between items-center px-8 py-3 shadow-md">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo-taller.jpg') }}" 
                 alt="Logo del Taller Mecánico"
                 class="h-14 w-auto drop-shadow-lg">
            <span class="text-yellow-400 font-semibold text-lg hidden sm:inline">Taller Mecánico</span>
        </div>

        <!-- Botón Pedir Turno -->
        <div>
            <a href="{{ route('login') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg btn transition">
               📅 Pedir Turno
            </a>
        </div>
    </nav>

    <!-- 🔸 CONTENIDO PRINCIPAL -->
    <div class="flex flex-col items-center justify-center text-center px-6 pt-32 pb-16">
        <!-- Título -->
        <h1 class="text-4xl font-bold mb-4 mt-6">Bienvenido a <span class="text-yellow-400">Taller Mecánico</span></h1>
        <p class="text-gray-200 mb-8 max-w-md">
            Mantené tu vehículo en las mejores manos. Reservá tu turno online de manera rápida y segura.
        </p>

        <!-- Botones -->
        <div class="flex space-x-4 mb-12">
            <a href="{{ route('login') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg btn transition">
                Iniciar Sesión
            </a>
            <a href="{{ route('register') }}" 
               class="border-2 border-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg btn transition">
                Registrarse
            </a>
        </div>

        <!-- Servicios -->
        <section class="text-white mt-4 max-w-4xl text-center">
            <h2 class="text-2xl font-bold mb-8">Nuestros Servicios</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-yellow-400 mb-2">🔧 Mantenimiento general</h3>
                    <p class="text-gray-200">Chequeos, cambios de aceite, filtros, frenos y más.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-green-400 mb-2">⚙️ Reparaciones mecánicas</h3>
                    <p class="text-gray-200">Motor, suspensión, dirección y sistemas eléctricos.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-blue-400 mb-2">📅 Diagnóstico y turnos online</h3>
                    <p class="text-gray-200">Reservá tu cita fácilmente desde cualquier dispositivo.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- 🔻 FOOTER -->
    <footer class="bg-black bg-opacity-70 text-gray-400 text-center py-4 text-sm">
        © {{ date('Y') }} Taller Mecánico. Todos los derechos reservados.
    </footer>

</body>
</html>
