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
        <main>
            <sidebar>
                <div class="divisoria">
                    <div class="backgroud_tema"></div>

                    <div class="">
                        <di class="lista_info"></di>
                    </div>
                </div>
            </sidebar>
        </main>
        <footer>
            @include('include.footer')
        </footer>
    </body>
</html>