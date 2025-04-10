<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        <script type="module" src="{{ url('js/index.js') }}"></script> 
    </head>
    <body>
        <header style="background-color: var(--bg_principal); width: 100%; height: 24px;"></header>

        <main>
            <div class="divisoria">
                <div class="info" style="max-width: 10%;"></div>

                <div class="chat" style="background-color: red; min-height: 100vh;">
                    <div class="header_usuario">
                        <div class="header_usuario_img">
                            <img src="{{ url('img/usuario.png') }}" alt="Usuario" class="img_usuario">
                        </div>
                        <div class="header_usuario_nombre">
                            <p class="nombre_usuario">Nombre Usuario</p>
                        </div>
                    </div>
                    
                    <div class="footer_input">
                        <input type="text" placeholder="Escribe un mensaje" class="input_message" id="input_message">
                    </div>
                    
                </div>
            </div>

        </main>
    </body>
</html>