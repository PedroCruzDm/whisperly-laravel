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
            <div class="caixa_conteudo">

                <div class="titulo">
                    <h2>Whisperly</h2>
                
                </div>
                <div class="info">
                    <h3>Sobre</h3>
                    <p>Whisperly é uma rede social que tem como objetivo conectar pessoas através de mensagens anônimas. 
                        A ideia é que você possa compartilhar seus pensamentos, sentimentos e opiniões sem se preocupar com julgamentos. 
                        Afinal, todos temos algo a dizer, não é mesmo? 
                        Então, o que você está esperando? Venha fazer parte da Whisperly e compartilhar suas mensagens com o mundo!</p>    
                </div>
            </div>
        </main>

        <footer>
            @include('include.footer')
        </footer>
    </body>
</html>