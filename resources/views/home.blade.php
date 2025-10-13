@auth
    <h1>bienvenido {{ auth()->user()->name }}</h1>
    <form action="/logout" method="post">
        @csrf
        <button>Cerrar sesión</button>
    </form>
@else
    <h1>no estas logueado</h1>
    <h1>ve a login</h1>
    <a href="/login">login</a>
@endauth
