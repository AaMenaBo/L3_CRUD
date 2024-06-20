<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="descripcion">Description:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    </div>

    <button type="submit">Guardar Cambios</button>
</form>
<a href="{{ route('tasks.index') }}">Volver</a>
