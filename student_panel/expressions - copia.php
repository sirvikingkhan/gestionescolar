<?php 
require_once("../assets/noSessionRedirect.php"); 
require_once("./verifyRoleRedirect.php");
$id = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="../images/1.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <style>
    .info-card {
        background-color: #fafafa; /* Fondo muy claro */
        color: #444; /* Texto gris oscuro */
        border-radius: 8px;
        padding: 20px;
        margin: 20px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        text-align: center;
        transition: transform 0.2s;
    }

    .info-card:hover {
        transform: translateY(-2px);
    }

    .green-bg {
        background-color: #e8f5e9; /* Fondo verde claro */
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .yellow-bg {
        background-color: #fffde7; /* Fondo amarillo claro */
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

</head>

<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="Logo" style="width: 50px; height: 50px;">
            <h2>Fala <span class="danger">Galera</span> Studio</h2>
        </div>
        <div class="navbar">
            <a href="index.php">
                <span class="material-icons-sharp">home</span>
                <h3>Inicio</h3>
            </a>
            <a href="timetable.php" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Horario</h3>
            </a>
            <a href="exam.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Exámenes</h3>
            </a>
            <a href="workspace.php">
                <span class="material-icons-sharp">description</span>
                <h3>Espacio de Trabajo</h3>
            </a>
            <a href="password.php">
                <span class="material-icons-sharp">password</span>
                <h3>Cambiar contraseña</h3>
            </a>
            <a href="logout.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Salir</h3>
            </a>
        </div>
    </header>
    <br><br><br>
    
    <main>
    <h2>Bienvenido al curso de portugués</h2>

    <!-- Card para los saludos formales -->
    <div class="info-card">
        <h3>Cumprimentos Formais / Saludos</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="text-align: left; padding: 10px; border-bottom: 2px solid #ccc;">Saudações em Português</th>
                    <th style="text-align: left; padding: 10px; border-bottom: 2px solid #ccc;">Saludo en Español</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Bom dia!</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">¡Buenos días!</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Boa tarde!</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">¡Buenas tardes!</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Boa noite!</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">¡Buenas noches!</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">“Prazer em vê-lo” / “Prazer em conhecê-lo (a)”</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Un gusto conocerte (Expresa admiración y respeto al encontrar a la persona)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Olá! Como vai?</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Hola, ¿Cómo estás?</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Oi! Tudo bem?</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">¡Hola! ¿Todo bien?</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Tudo bem, obrigado (a)</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Todo bien, gracias.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Card para palabras con la misma pronunciación -->
    <div class="info-card" style="margin-top: 20px;">
        <h3>Atención</h3>
        <p>Estas palabras tienen la misma pronunciación, pero diferentes significados.</p>
        
        <div style="display: flex; justify-content: center; align-items: flex-start; gap: 20px;">
            <div style="text-align: center;">
                <img src="ruta/a/tu/imagen1.jpg" alt="Cumprimento" style="width: 150px; height: auto;">
                <p>✅ SALUDOS<br>Cumprimento</p>
            </div>
            <div style="text-align: center;">
                <img src="ruta/a/tu/imagen2.jpg" alt="Comprimento" style="width: 150px; height: auto;">
                <p>✅ LONGITUD<br>Comprimento</p>
            </div>
        </div>
    </div>

 
           
<!-- Estilos de los contenedores -->
<style>
    .info-card {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }
    .section-container {
        margin-top: 15px;
        padding: 15px;
        border-radius: 8px;
        color: #333;
    }
    .common-greetings {
        background-color: #e0f7fa;
    }
    .combinations {
        background-color: #fce4ec;
    }
    .terms-for-people {
        background-color: #e8f5e9;
    }
    .group-greetings {
        background-color: #fff3e0;
    }
    h4 {
        color: #00796b;
        font-size: 1.2em;
        margin-bottom: 10px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 10px 0;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }
    th {
        background-color: #00796b;
        color: white;
    }
</style>

<!-- Card para saudações informais -->
<div class="info-card">
    <h3 style="color: #00796b;">Outras Saudações Informais</h3>
    <p>Saudações informais usadas principalmente por pessoas mais jovens.</p>

    <!-- Contenedor para Saudações Comuns -->
    <div class="section-container common-greetings">
        <h4>Saudações Comuns</h4>
        <table>
            <thead>
                <tr>
                    <th>Saudação</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E aí?</td>
                    <td>Saludo general, muy informal.</td>
                </tr>
                <tr>
                    <td>E aí, beleza?</td>
                    <td>¿Todo bien?</td>
                </tr>
                <tr>
                    <td>Tudo joia?</td>
                    <td>¿Todo bien?</td>
                </tr>
                <tr>
                    <td>Fala, ...</td>
                    <td>Usado seguido del nombre o “meu” o “cara”</td>
                </tr>
                <tr>
                    <td>Ei, ...</td>
                    <td>Usado seguido del nombre o “meu” o “cara”</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Contenedor para Exemplos de Combinações -->
    <div class="section-container combinations">
        <h4>Exemplos de Combinações</h4>
        <table>
            <thead>
                <tr>
                    <th>Frase</th>
                    <th>Ejemplo de Uso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E aí, (nome), tudo certo?</td>
                    <td>Saludo personalizado con el nombre de la persona</td>
                </tr>
                <tr>
                    <td>Fala, (nome), tudo beleza?</td>
                    <td>Forma de saludar a alguien cercano</td>
                </tr>
                <tr>
                    <td>Ei, (nome), tudo joia?</td>
                    <td>Forma de saludar en tono informal</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Contenedor para Termos para Se Referir a Pessoas -->
    <div class="section-container terms-for-people">
        <h4>Termos para Se Referir a Pessoas</h4>
        <table>
            <thead>
                <tr>
                    <th>Termo</th>
                    <th>Equivalente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cara</td>
                    <td>Amigo cercano</td>
                </tr>
                <tr>
                    <td>Amigo, Amigão</td>
                    <td>Amigo, gran amigo</td>
                </tr>
                <tr>
                    <td>Moço / Moça</td>
                    <td>Chico / Chica</td>
                </tr>
                <tr>
                    <td>Meu irmão / Mermão</td>
                    <td>Hermano, amigo muy cercano</td>
                </tr>
                <tr>
                    <td>Broder / Brodi</td>
                    <td>Amigo cercano (Brother)</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Contenedor para Saudações para Grupos -->
    <div class="section-container group-greetings">
        <h4>Saudações Informais para Grupos</h4>
        <table>
            <thead>
                <tr>
                    <th>Frase</th>
                    <th>Significado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E aí moçada, tudo bem?</td>
                    <td>Saludo informal para un grupo</td>
                </tr>
                <tr>
                    <td>E aí meu povo, tudo certo?</td>
                    <td>Saludo muy informal para grupo de confianza</td>
                </tr>
                <tr>
                    <td>E aí turma, tudo bom?</td>
                    <td>Saludo para amigos cercanos</td>
                </tr>
                <tr>
                    <td>E aí cambada, tudo certo?</td>
                    <td>Muy informal, solo para amigos de mucha confianza</td>
                </tr>
                <tr>
                    <td>Oi galera...</td>
                    <td>Saludo general para un grupo de personas</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


      
    </main>


    <!-- Estilos del card responsive con fotos centradas -->
<style>
    .responsive-card {
        max-width: 100%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
        margin: 20px auto;
        background-color: #fff;
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .responsive-card:hover {
        transform: scale(1.02);
    }
    .responsive-card img {
        width: 80%; /* Ajusta el tamaño según sea necesario */
        height: auto;
        margin: 0 auto;
        display: block;
        border-radius: 10px;
    }
    .responsive-card .card-content {
        padding: 20px;
    }
    .responsive-card h4 {
        color: #333;
        font-size: 1.2em;
        margin-bottom: 10px;
    }
    .responsive-card p {
        color: #555;
        font-size: 1em;
        line-height: 1.6;
    }
    @media (min-width: 768px) {
        .responsive-card {
            max-width: 600px;
        }
    }
</style>

<!-- Card Responsive con fotos centradas -->
<div class="responsive-card">
<img src="images/flg.png" alt="Descripción de la imagen" style="max-width: 100%; height: auto;">
    <div class="card-content">
         
    </div>
</div>
 

    <script src="../script.js"></script>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botón Flotante 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 0px;
            background-color: #f8f9fa;
        }

        .floating-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #3db300; /* Gris oscuro */
            color: white;
            border: none;
            border-radius: 30px; /* Forma ovalada */
            padding: 10px 20px; /* Espaciado interno */
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.3s;
        }

        .floating-button:hover {
            background-color: #23272b; /* Más oscuro */
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .floating-button {
                padding: 8px 16px; /* Ajuste de espaciado para pantallas pequeñas */
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

 

    <a href="pagina_siguiente.php" class="floating-button">
        Siguiente
    </a>

</body>
</html>

</body>

</html>
