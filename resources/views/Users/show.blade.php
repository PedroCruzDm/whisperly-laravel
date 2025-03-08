<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Lista de Usuarios</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <!-- Styles -->


    </head>
<body>
    <header>
        @include('include.header')
    </header>

    <div>
        <div class="card_lista_users">
            <h2>Usuarios</h2>
    

            <span class="">
            <a href="{{ url('cadastro') }}">Registrar</a>
            </span>
        </div>

        <div class="card_tabela">
            <table class="tabela_user">
                <thead>
                    <tr id="list_header">
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
                        <tr id="list_body">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <?php
                                    if($user->email_verified_at == null){ 
                                        echo "<p style='color:red;'>false</p>";
                                    }else{
                                        echo "<p style='color:green;'>true</p>";
                                    }
                                ?>
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href=""><button class="btn_editar">Editar</button></a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn_delete" type="submit">Eliminar</button>
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