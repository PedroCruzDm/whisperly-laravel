<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <!-- Styles -->


    </head>
    <body>
        <header>
            @include('include.header')
        </header>

        <main>
            <div class="main_cadastro">

                <div class="container_cadastro">
                    <div class="titulo">
                        <h1>Whisperly</h1>
                        <h2>Cadastra-se</h2>
                    </div>
                    
                    <form action="{{ route('user.create') }}" class="form_cadastro"  method="post"> 
                        
                    @csrf
                    <div class="grupo_input">
                        <label for="nome">Nome:</label><br>
                        <input type="text" id="nome" name="nome" placeholder="Nome" required><br>
                    </div>

                    <div class="grupo_input">
                        <label for="nickUser">NickUser:</label><br>
                        <input type="text" name="nickUser" id="nickUser" placeholder="Nome de Exibição" required><br>
                    </div>
                    
                    <div class="grupo_input">
                        <label for="email">E-mail:</label><br>
                        <input type="email" name="email" id="email" placeholder="E-mail" required><br>
                    </div>

                    <div class="grupo_input">
                        <label for="numero">Número:</label><br>
                        <input type="text" name="telefone" id="telefone" placeholder="Número de telefone" required><br>
                    </div>
                    
                    <div class="divisoria">
                    <div class="grupo_input">
                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>

                    <div class="grupo_input">
                        <label for="confirmar_senha">Confirmar Senha:</label><br>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar Senha" required>
                    </div>
                </div>

                    <input type="submit" id="btn_cadastrar" value="Cadastrar" class="btn-cadastrar">
                    <p>Ja possui uma conta? Venha fazer <strong><a href="{{ url('login') }}">Login</a></strong></p> 
                    
                </form>
            </div>
        </div>
        
        <div class="div_conteudo"></div>
        
        </main>
        
        <footer>
            @include('include.footer')
        </footer>
    </body>
    </html>