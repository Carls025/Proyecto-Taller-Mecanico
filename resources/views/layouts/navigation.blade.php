<nav x-data="{ open: false }" class="bg-blue-600 text-white border-b border-gray-200 shadow">
    <!-- Contenedor -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('inicio') }}" class="text-xl font-semibold flex items-center">
                    🚗 <span class="ml-2">Taller Mecánico</span>
                </a>
            </div>

            <!-- Menú principal -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('usuarios.index') }}" class="hover:text-gray-200">👤 Usuarios</a>
                <a href="{{ route('automoviles.index') }}" class="hover:text-gray-200">🚘 Automóviles</a>
                <a href="{{ route('servicios.index') }}" class="hover:text-gray-200">🛠 Servicios</a>
                <a href="{{ route('turnos.index') }}" class="hover:text-gray-200">📅 Turnos</a>
            </div>

            <!-- Botones de autenticación -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- Usuario autenticado -->
                    <span class="font-semibold">{{ Auth::user()->name }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                            Cerrar sesión
                        </button>
                    </form>
                @else
                    <!-- Invitado (no autenticado) -->
                    <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                        Registrar
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
