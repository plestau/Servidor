window.onload = () => {
    document.getElementById('user').addEventListener('keyup', recogeCorreo);
}

function recogeCorreo() {
    httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", `index.php?user=${document.getElementById('user').value}`, true);
    httpRequest.onreadystatechange = compruebaNombre;
    httpRequest.send();
}

function compruebaNombre() {
    if(httpRequest.readyState == 4 && httpRequest.status == 200) {
        document.getElementById('resultado').innerHTML = httpRequest.responseText;
    }
}