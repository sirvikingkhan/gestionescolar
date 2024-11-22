<?php include("../assets/noSessionRedirect.php"); ?>
<?php include("./verifyRoleRedirect.php");
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            overflow-y: scroll;
        }

        main {
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .courses-section {
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .courses {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            max-width: 800px;
        }

        .course {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 200px;
            transition: transform 0.2s;
        }

        .course:hover {
            transform: scale(1.05);
        }

        .course h3 {
            margin: 0 0 10px;
            color: #007bff;
        }

        .enroll-btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            text-align: center;
            margin-top: 10px;
            width: 100%;
        }

        .enroll-btn:hover {
            background-color: #0056b3;
        }

        .info-section {
            display: none; /* Oculto por defecto */
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
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
                <h3>Espaci de Trabajo</h3>
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
    <main>
        <div class="courses-section">
            <h2>Cursos de Portugués</h2>
            <ul class="courses">
                <li class="course">
                    <h3>1️⃣ Aprenda as Expressões Essenciais em Português</h3>
                    <p>Domina as expressões fundamentais para a comunicação.</p>
                    <a href="expressions.php" class="enroll-btn">Desbloqueado</a>
                    </li>
                <li class="course">
                    <h3>2️⃣ Pronomes Pessoais</h3>
                    <p>Aprenda sobre pronomes pessoais e seu uso.</p>
                    <a href="pronomes_pessoais.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>3️⃣ Apresentação Pessoal</h3>
                    <p>Aprenda como se apresentar de forma eficaz.</p>
                    <a href="apresentacao_pessoal.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>4️⃣ Saudações e Cumprimentos</h3>
                    <p>Saiba como cumprimentar e fazer saudações em português.</p>
                    <a href="saudacoes.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>5️⃣ Conjunções e Conectores</h3>
                    <p>Aprenda a usar conjunções e conectores na construção de frases.</p>
                    <a href="conjuncao_conectores.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>6️⃣ Verbos e Conjugação</h3>
                    <p>Domine os verbos e suas conjugações em diferentes tempos.</p>
                    <a href="verbos_conjugacao.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>7️⃣ Gramática Básica</h3>
                    <p>Introdução aos conceitos básicos de gramática portuguesa.</p>
                    <a href="gramatica_basica.php" class="enroll-btn">Bloqueado</a>
                </li>
                <li class="course">
                    <h3>8️⃣ Vocabulário e Frases</h3>
                    <p>Expanda seu vocabulário e aprenda frases úteis.</p>
                    <a href="vocabulario_frases.php" class="enroll-btn">Bloqueado</a>
                </li>
            </ul>
            <button id="info-btn" class="enroll-btn">Mostrar Información de Cursos</button>
            <div id="info-section" class="info-section">
                <h3>Información de Cursos</h3>
                <ol>
                    <li>APRENDA AS EXPRESSÕES ESSENCIAIS EM PORTUGUÊS
                        <ul>
                            <li>Saudações, Despedidas e Expressões de Cortesia</li>
                            <li>Refeições típicas do Brasil para cada horário do dia:</li>
                            <li>NOTA CULTURAL</li>
                            <li>LISTA DE COMPRAS e DIÁLOGOS NO MERCADO</li>
                            <li>Introdução aos verbos SER, ESTAR, TER e HAVER.</li>
                        </ul>
                    </li>
                    <li>PRONOMES PESSOAIS
                        <ul>
                            <li>PRONOMES PESSOAIS SUJEITO</li>
                            <li>PRONOMES PESSOAIS OBJETO</li>
                        </ul>
                    </li>
                    <li>PRESENTAÇÃO PESSOAL
                        <ul>
                            <li>Apresentação formal e informal</li>
                        </ul>
                    </li>
                    <li>SAUDAÇÕES E CUMPRIMENTOS
                        <ul>
                            <li>Saudações em diferentes momentos do dia</li>
                        </ul>
                    </li>
                    <li>CONJUNÇÕES E CONECTORES
                        <ul>
                            <li>Uso de conjunções coordenativas e subordinativas</li>
                        </ul>
                    </li>
                    <li>VERBOS E CONJUGAÇÃO
                        <ul>
                            <li>Conjugação no presente, passado e futuro</li>
                        </ul>
                    </li>
                    <li>GRAMÁTICA BÁSICA
                        <ul>
                            <li>Regras básicas e exemplos práticos</li>
                        </ul>
                    </li>
                    <li>VOCABULÁRIO E FRASES
                        <ul>
                            <li>Vocabulário do dia a dia e expressões comuns</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function () {
            $('#info-btn').click(function () {
                $('#info-section').toggle(); // Cambia la visibilidad
            });
        });
    </script>

</body>

</html>
