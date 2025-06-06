<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        <script type="module" src="{{ url('js/index.js') }}"></script>
    </head>
    <body>

    <header>
        @include('include.header')
    </header>

    <main id="main_index">
        <div class="caixa_login_cadastro">
            <div class="Titulo">
                <h1>Whisperly</h1> <br>
            </div>

            <div class="campoBTN">
                <button id="BTN_entrar" onclick="window.location.href='/users/login'">Entrar</button>
                <button id="BTN_cadastro" onclick="window.location.href='/users/create'">Cadastrar-se</button>
            </div>

        </div>

        <div class="campo_info">
            <div class="info">
                <h2>Whisperly</h2>
                <p>Whisperly é um pequeno projeto com a ideia de que usuario consigam ter uma boa experiência, quanto para aqueles que querem jogar e ter um grupo para jogar juntos, quanto para aqueles que querem conversar e compartilhar informações e memes</p>
            </div>
        </div>

        <div class="carrussel">
                <div class="item">
                    <img src="" alt="">
                </div>
                
                <div class="item">
                    <img src="" alt="">
                </div>

            </div>



        <div class="membros_info">
            <div class="titulo">
                <h3>Desenvolvedores do Whisperly</h3>
            </div>

            <div class="membros_git">

                <div class="membro">
                    <div class="divisoria">
                        <div class="img_perfil">
                            <img src="{{ url('https://avatars.githubusercontent.com/u/190136380?v=4') }}" alt="usuario">
                        </div>
                        <div class="info">
                            <p id="nome_dev">raf4lol</p>
                            <button class="cargo_dev">
                                Desenvolvedor
                            </button>
                        </div>

                        <div class="campo_dev_perfil">
                            <a href="{{ url('https://github.com/raf4lol') }}">
                                <button id="git_hub_icon_btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="membro">

                    <div class="divisoria">
                        <div class="img_perfil">
                            <img src="{{ url('https://avatars.githubusercontent.com/u/65508738?v=4') }}" alt="usuario">
                        </div>

                        <div class="info">
                            <p id="nome_dev">MRLuke956</p>
                            <button class="cargo_dev">
                                Desenvolvedor
                            </button>
                        </div>

                        <div class="campo_dev_perfil">
                            <a href="{{ url('https://github.com/MRLuke956') }}">
                                <button id="git_hub_icon_btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="membro">
                    <div class="divisoria">
                        <div class="img_perfil">
                            <img src="{{ url('https://avatars.githubusercontent.com/u/108557012?v=4') }}" alt="Deve">
                        </div>
                        <div class="info">
                            <p id="nome_dev">PedroCruzDm</p>
                            <button class="cargo_dev">
                                Desenvolvedor 
                            </button>
                            <button class="cargo_dev" id="cargo_dev_dono">
                                Owner
                            </button>
                        </div>

                        <div class="campo_dev_perfil">
                            <ul style="list-style: none; display: flex;">
                                <li>
                                    <a href="{{ url('https://github.com/PedroCruzDm') }}">
                                        <button id="git_hub_icon_btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                            </svg>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://www.youtube.com/@ApenasDev') }}">
                                        <button id="Youtube_icon_btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                            </svg>
                                        </button>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                </div>

            </di>
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
    </body>
</html>