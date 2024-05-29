<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>OFF KEY RECORDS</title>
    <!-- link Bootstrap JavaScript -->
    <script src = "js/bootstrap.bundle.min.js"></script>
    <script src = "js/bootstrap.esm.min.js"></script>
    <script src = "js/bootstrap.min.js"></script>

    <!-- link main JavaScript -->
    <script src = "js/back.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Importing CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css" />

    <!-- Link main css -->
    <link rel="stylesheet" type="text/css" href="css/front.css" />
    <!-- Link css icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--Font for h1 -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!--Font for Navigator-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Play&display=swap" rel="stylesheet" />

</head>
<body id="body">

<div><h1 id = "titulo">OFF KEY RECORDS</h1></div>
<br/>

<!-- Barra de Navegación-->
<nav class = "container">
    <table class="row d-none d-md-block">
        <tr>
            <td class="tdElement" draggable="true" onclick="return goInit()"><a class="tdText">INICIO</a></td>
            <td class="tdElement" draggable="true" onclick=" return goArtist()"> <a class="tdText">ARTISTAS</a></td>
            <td class="tdElement" draggable="true" onclick="return goForm()"><a class="tdText">ENVIANOS TU DEMO</a></td>
            <td class="tdElement" draggable="true" onclick="return goContact()"><a class="tdText">CONTACTO</a></td>
        </tr>
    </table>
</nav>


<!-- Slider de artistas-->

<ul id ="slider">
    <li id="nehemiasContainer">
        <img src="img/Nehemias_Palomo.jpg" alt="" id="nehemiasPalomo">
        <p id="nehemiasTextBlock"> Nehemias palomo es un músico y compositor de rock indie. <br> Escucha su nuevo
        album: <i><a href="https://open.spotify.com/album/0baHu8uQGut4SUzuBxvXDz"
                     style="text-decoration: none;">"Reflexión"</a></i>

        </p>
        <div id= "socialContainer" class="socialBlock">
            <a href="https://www.facebook.com/Legend345" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/channel/UC61CyooJPVsoH0BW-JOlL-Q" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/nehesillo/?hl=es-la" class="fa fa-instagram"></a>
            <a href="https://soundcloud.com/nehemias-palomo" class="fa fa-soundcloud"></a>
        </div>
        <iframe src="https://open.spotify.com/embed/album/0baHu8uQGut4SUzuBxvXDz" width="300" height="380"
                allowtransparency="true" allow="encrypted-media"></iframe>
    </li>

    <li id="oddybellsContainer">
        <img src="img/oddybells.jpg" alt="" id="oddybells">
        <p id="oddyBellsBlock">Oddy Bells es un productor de música BASS. Escucha en Spotify su nuevo single: <i><a href="https://open.spotify.com/album/3P1oXU3oBMkDJHc6A6QGtu">"Can't get it"</a></i></p>
        <div id= "socialContainer" class="socialBlock oddySocial">
            <a href="https://www.facebook.com/tetrapacker" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/oddy._bells/?hl=es-la" class="fa fa-instagram"></a>
            <a href="https://soundcloud.com/oddybells" class="fa fa-soundcloud"></a>
        </div>
        <iframe src="https://open.spotify.com/embed/track/49Q8MhAtEQZjHaZxBBhbCE" width="300" height="380"
                allowtransparency="true" allow="encrypted-media"></iframe>
    </li>

    <li>
        <button id = "back" onclick="backSlider()"> < </button>
    </li>

    <li>
        <button id = "forward" onclick="forwardSlider()"> > </button>
    </li>

</ul>

<!-- Formulario para enviar demos -->
<div id="div1"> <form id = "formulario" method="post" >
        <h2> ENVIANOS TU DEMO</h2> <br> <br>
        <label for="name1" class="formLabel">Nombre: </label> <br>
        <input name="name" id="name1" type="text" class="input"> <br>
        <label for="email" class="formLabel">Email: </label> <br>
        <input name="email" id="email" type="text" class="input"> <br>
        <label for="message" class="formLabel">Mensaje: </label> <br>
        <textarea name="message" id="message" class="input" rows="10" cols="50"></textarea> <br>
        <input name="submit" id="submit" type="submit" value="ENVIAR"> <br> <br>a
        <div id = "status"> </div>
    </form>
</div>
<br>
<br>
<footer id="footer">
    <div id = "contactContainer">
        <ul>
            <li id="footerOffKey">
                Copyright © OFF KEY RECORDS 2021
            </li>
        </ul>
    </div>
        <a href="https://www.instagram.com/off_key_records/?hl=es-la" id="instaFooter" class="fa fa-instagram footerSocial"></a>
</footer>

<!-- AJAX REQUEST para ejecutar request.php con los datos pasados por el formulario -->
<script>

    document.getElementById('submit').addEventListener("click", function (evt) {
        evt.preventDefault();
        $.ajax({
            type: "POST",
            url: "request.php",
            data: $('#formulario').serialize(),
            beforeSend: function () {
                $('#submit').val('ENVIANDO...');
                $('#status').text("");
            },
            success: function (response) {
                if (response) {
                    $('#status').val(response);
                } else {
                    $('#status').val(response);
                }
            },
            error: function () {
                $('#status').val('Error, Intentelo nuevamente');
            },
            complete: function () {
                $('#status').text("Mensaje enviado!");
                $('#submit').val("ENVIAR");
                $('.input').val("");
            }
        });
    });

    document.getElementById('submit').addEventListener("submit", function (evt) {
        evt.preventDefault();
    });

</script>

</body>
</html>