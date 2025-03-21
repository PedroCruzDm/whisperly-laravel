<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <center>
        <h1>Dados do Usuario</h1>
    </center>

    <div class="card_lista_users">
        <h2>Usuario</h2>
    <hr>
    <p>Nome:{{ $user->name }}</p>
    <p>NickName:{{ $user->nickname }}</p>
    <p>Telefone:{{ $user->phone }}</p>
    <p>Email:{{ $user->email }}</p>
    <p>Status:
        <?php
            if($user->email_verified_at == null){ 
                echo "<b style='color:red;'>false</b>";
            }else{
                echo "<b style='color:green;'>true</b>";
            }
        ?>
    </p>
    <p>Senha: {{ $user->password }}</p>
    <p>Criado em:{{ $user->created_at }}</p>
    <p>Atualizado em:{{ $user->updated_at }}</p>
    <hr>
    <a href="{{ route('user.index') }}">Voltar</a>

    <form action="{{ route('user.destroy',['user' =>$user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">

        <button type="submit">Deletar</button>
    </form>
    </div>
</body>
</html>