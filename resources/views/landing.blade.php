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
            background-attachment: fixed; /* ✅ hace que el fondo quede fijo (efecto parallax) */
            font-family: 'Figtree', sans-serif;
            color: white;
        }

        /* Capa oscura para mejorar el contraste del texto */
        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <div class="overlay text-center">

        <!-- Contenido principal -->
        <div class="flex flex-col items-center justify-center py-12 px-6">
            <!-- LOGO -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo-taller.jpg') }}" 
                     alt="Logo del Taller Mecánico"
                     class="h-20 w-auto drop-shadow-lg hover:scale-105 transition-transform duration-300">
            </div>

            <!-- Título -->
            <h1 class="text-3xl font-bold mb-2">
                Bienvenido a <span class="text-yellow-400">Taller Mecánico</span>
            </h1>
            <p class="text-gray-200 mb-8 max-w-md">
                Mantené tu vehículo en las mejores manos. Reservá tu turno online de manera rápida y segura.
            </p>

            <!-- Botones -->
    <div class="flex space-x-4">
    <!-- Botón Iniciar Sesión -->
    <a href="{{ route('login') }}" 
       class="border-2 border-blue-500 text-blue-500 font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300 shadow-lg">
        Iniciar Sesión
    </a>

    <!-- Botón Registrarse -->
    <a href="{{ route('register') }}" 
       class="border-2 border-green-500 text-green-500 font-semibold px-6 py-3 rounded-lg hover:bg-green-600 hover:text-white transition duration-300 shadow-lg">
        Registrarse
    </a>
</div>


        <!-- Sección de servicios -->
        <section class="py-12 px-6 text-center">
            <h2 class="text-2xl font-bold mb-8 text-yellow-400">Nuestros Servicios</h2>
            
            <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8 text-gray-200">
                <div class="bg-black bg-opacity-40 p-4 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-blue-400 mb-2">🧰 Mantenimiento general</h3>
                    <p>Chequeos, cambios de aceite, filtros, frenos y más.</p>
                </div>
                <div class="bg-black bg-opacity-40 p-4 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-green-400 mb-2">🔧 Reparaciones mecánicas</h3>
                    <p>Motor, suspensión, dirección y sistemas eléctricos.</p>
                </div>
                <div class="bg-black bg-opacity-40 p-4 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-purple-400 mb-2">📅 Diagnóstico y turnos online</h3>
                    <p>Reservá tu cita fácilmente desde cualquier dispositivo.</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black bg-opacity-60 text-gray-300 text-center py-4 text-sm">
            © {{ date('Y') }} Taller Mecánico. Todos los derechos reservados.
        </footer>

    </div>

</body>
</html>
