
@section('content')
    <div class="card mt-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Usuarios</span>

            <span class="ms-auto">
            <a href="" class="btn btn-success btn-sm" aria-label="Registrar novo usuário" title="Clique aqui para registrar um novo usuário">Registrar</a>
            </span>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
</body>
</html>