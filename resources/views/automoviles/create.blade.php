<h1 class="text-2xl font-bold mb-4">➕ Agregar Automóvil</h1>
<form action="{{ route('automoviles.store') }}" method="POST" class="space-y-4">
    @csrf
    <input type="text" name="marca" placeholder="Marca" class="border p-2 w-full" required>
    <input type="text" name="modelo" placeholder="Modelo" class="border p-2 w-full" required>
    <input type="number" name="anio" placeholder="Año" class="border p-2 w-full" required>
    <input type="text" name="patente" placeholder="Patente" class="border p-2 w-full" required>
    
    <select name="user_id" class="border p-2 w-full" required>
        <option value="">Seleccione Propietario</option>
        @foreach($usuarios as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar</button>
</form>
