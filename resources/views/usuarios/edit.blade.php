<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-xl font-bold mb-4">✏ Editar Usuario</h1>

        <form action="{{ route('usuarios.update', $user->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="name" value="{{ $user->name }}" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Teléfono</label>
                <input type="text" name="telefono" value="{{ $user->telefono }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block text-gray-700">Rol</label>
                <select name="rol" class="w-full border rounded p-2">
                    <option value="cliente" {{ $user->rol == 'cliente' ? 'selected' : '' }}>Cliente</option>
                    <option value="admin" {{ $user->rol == 'admin' ? 'selected' : '' }}>Administrador</option>
                </select>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
</body>
</html>
