<html>
    <form action="/saludo" method="GET">
        @csrf
        <h2>Dime como te llamas</h2>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Saludar">
        <p id="saludo">Hola, {{ $nombre }}</p>
    </form>
</html>