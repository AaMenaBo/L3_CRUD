<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="descripcion">Description:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    </div>

    <button type="submit">Create Task</button>
</form>
