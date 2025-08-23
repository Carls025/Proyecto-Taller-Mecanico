<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-xl font-bold mb-4">➕ Crear Usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Contraseña</label>
                <input type="password" name="password" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Teléfono</label>
                <input type="text" name="telefono" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block text-gray-700">Rol</label>
                <select name="rol" class="w-full border rounded p-2">
                    <option value="cliente">Cliente</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</body>
</html>
