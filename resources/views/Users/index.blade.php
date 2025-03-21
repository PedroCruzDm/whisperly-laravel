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
            <a href="{{ route('user.create') }}">Criar</a>
            </span>
        </div>

        <div class="card_tabela">
            <table class="tabela_user">
                <thead>
                    <tr id="list_header">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>NickName</th>
                        <th>Telefone</th>
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
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nickname }}</td>
                            <td>{{ $user->phone }}</td>
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
                                <a href="{{ route('user.show', ['user' => $user->id]) }}">
                                    <button class="btn_visualizar">Visualizar</button>
                                </a>
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}">
                                <button class="btn_editar">Editar</button>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>