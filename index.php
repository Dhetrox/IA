<html>
<head>
    
    <title>Chatbot</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <h1>Chatbot</h1>

    <form action="respuesta.php" method="get">
        <label for="mensaje">Pregunta: </label>
        <input type="text" id="mensaje" name="mensaje">
        <input type="button" value="Cargar Respuesta" onclick="cargarRespuesta()">   
    </form>

    <script>
        function cargarRespuesta() {
            var mensaje = document.getElementById("mensaje").value;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "respuesta.php?mensaje=" + mensaje, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("div").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>

<div id= "contenedor">
<div id= "div">
    
</div>
</div>


</body>
</html>
