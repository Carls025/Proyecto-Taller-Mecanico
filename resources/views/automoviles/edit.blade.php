<h1 class="text-2xl font-bold mb-4">✏ Editar Automóvil</h1>
<form action="{{ route('automoviles.update', $automovil) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <input type="text" name="marca" value="{{ $automovil->marca }}" class="border p-2 w-full" required>
    <input type="text" name="modelo" value="{{ $automovil->modelo }}" class="border p-2 w-full" required>
    <input type="number" name="anio" value="{{ $automovil->anio }}" class="border p-2 w-full" required>
    <input type="text" name="patente" value="{{ $automovil->patente }}" class="border p-2 w-full" required>
    
    <select name="user_id" class="border p-2 w-full" required>
        @foreach($usuarios as $user)
            <option value="{{ $user->id }}" {{ $automovil->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Actualizar</button>
</form>
