<h1>api pronta</h1>

@foreach($usuarios as $user)

    <p>
        {{ $user['nome'] }}
    </p>

@endforeach