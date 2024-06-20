<div class="container">
    <h1>Task Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->name }}</h5>
            <p class="card-text">{{ $task->descripcion }}</p>
            <p class="card-text">completed: {{ $task->completed }}</p>
        </div>
        <form action="{{ route('tasks.edit', $task->id) }}">
            <button>Editar</button>
        </form>
        <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button>Eliminar</button>
        </form>
    </div>
    <a href="{{ route('tasks.index') }}">Volver</a>
</div>
