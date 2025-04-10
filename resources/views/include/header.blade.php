<head>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<nav>
    <ul>
        <li>
            <a href="/">
                <img src="" alt="Whisperly-logo">
            </a>
        </li>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="{{ url('/sobre') }}">
                <p>Sobre nós</p>
            </a>
        </li>
        <li>
            <a href="{{ url('contato') }}">
                <p>Contato</p>
            </a>
        </li>
        <li>
            <a href="{{ url('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ url('cadastro') }}">Registrar-se</a>
        </li>
        <li>
            <button id="instalar" hidden>Dowload</button>
        </li>
    </ul>
</nav>