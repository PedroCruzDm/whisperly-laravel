<html>
<body>

    <div>
        <div>
            <h2>Usuarios</h2>
    

            <span class="">
            <a href="{{ url('cadastro') }}">Registrar</a>
            </span>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Criado em:</th>
                        <th>Atualizado em:</th>
                        <th>Modificações</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><?php if($user->email_verified_at == null){
                                echo "false";
                            }else{
                                echo "true";
                            } ?></td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Editar</a>
                                <form action="" method="POST" class="d-inline">
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

</body>
</html>