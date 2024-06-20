<h1>Lista de Tareas</h1>
<a href="{{ route('tasks.create') }}">Añadir Tarea</a>
<ul>
    @foreach ($tasks as $task)
        <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
            @csrf
            <a href="{{ route('tasks.show', [$task->id]) }}">
                <li>{{ $task->name }}</li>
            </a>
            @method('PUT')
            <button>Completar</button>
        </form>
    @endforeach
</ul>
