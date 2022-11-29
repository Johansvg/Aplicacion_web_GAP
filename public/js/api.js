let videojuegos = document.getElementById('grafica');
    let endPoint = 'http://127.0.0.1:8000/api/satisfaccion';
    videojuegos.innerHTML = '';
    fetch(endPoint)
    .then(response => response.json())
    .then(data => {
        data.forEach(element => {
            console.log(element);
        });
    });
