<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
</head>
<body>
    <header>
        @include('include.header')
    </header>

    <main id="main_login">
        <div class="caixa_form">
            <div class="titulo">
                <h2>Whisperly</h2>
                <h3>login</h3>
            </div>

            <div class="form_login">
                <form action="" method="POST">
                    
                    <div class="form_grupo">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="form_grupo">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>

                    <div class="campo_btn_login">
                        <button class="BTN_login" type="submit">Entrar</button>
                    </div>
                    
                    <div class="0senha">
                        <a style="font-style:none;" href="{{ url('cadastro') }}">Não possui uma conta? <b>Criar conta</b></a>
                    </div>
                </form>
            </div>
        </div>

        <div class="div_conteudo">
            <!-- graficos -->
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>