<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <center>
        <h2>Editar</h2>

        @if (session()->has('message'))
            <div>
                {{ session()->get('message') }}
            </div>
        
        @endif
    </center>
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="nickname" value="{{ $user->nickname }}">
        <input type="text" name="phone" value="{{ $user->phone }}">
        <input type="text" name="email" value="{{ $user->email }}">
        
        <button type="submit">Alterar</button>
    </form>
</body>
</html>