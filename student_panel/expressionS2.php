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
            background-color: #fafafa;
            color: #444;
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
            background-color: #e8f5e9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .yellow-bg {
            background-color: #fffde7;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 20px;
            margin: 20px auto;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card h2 {
            color: #28a745;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
        }

        .card li {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .card li span {
            margin-right: 10px;
            font-size: 1.2em;
        }

        .floating-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #3db300;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.3s;
        }

        .floating-button:hover {
            background-color: #23272b;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .floating-button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        .translatable {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }

        .translatable:hover {
            color: #0056b3;
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
        <div class="card">
            <h2>🍽️ Sabores Brasileños para Cada Momento del Día</h2>
            <h3>🌅 Café da Manhã (Desayuno)</h3>
            <p>O BOM DIA começa com um delicioso Café da Manhã. Aqui está o que não pode faltar:</p>
            <ul>
                <li><span>☕</span>Café: A bebida que nos dá energia para começar o dia.</li>
                <li><span>🧀</span>Pão de Queijo: Bolinhas crocantes por fora e macias por dentro, feitas com queijo e farinha de yuca.</li>
                <li><span>🥥</span>Tapioca: Crepe leve e saboroso, recheado com queijo, coco e outros ingredientes deliciosos.</li>
                <li><span>🍇</span>Açaí na Tigela: Creme de açaí servido com granola, banana ou morango e um toque de mel.</li>
            </ul>
        </div>

        <div class="card">
            <h2>🌞 Almoço (Almuerzo)</h2>
            <p>O almoço é uma refeição importante e os brasileiros têm muitas opções saborosas. Veja algumas delas:</p>
            <ul>
                <li><span>🍗</span>Feijoada: Um prato tradicional feito com feijão preto, carne de porco, arroz e couve.</li>
                <li><span>🥩</span>Churrasco: Carne grelhada, acompanhada de farofa, vinagrete e pão.</li>
                <li><span>🍚</span>Arroz e Feijão: O acompanhamento mais comum e amado pelos brasileiros.</li>
            </ul>
        </div>

        <div class="card">
            <h2>🌜 Jantar (Cena)</h2>
            <p>A janta é mais leve e pode incluir sopas, saladas e sanduíches. Aqui estão algumas sugestões:</p>
            <ul>
                <li><span>🥗</span>Salada de Frutas: Mistura de frutas frescas, uma delícia e refrescante.</li>
                <li><span>🍜</span>Sopa de Legumes: Sopa feita com legumes variados, ideal para aquecer.</li>
                <li><span>🍞</span>Sanduíche Natural: Pão integral recheado com vegetais e proteínas.</li>
            </ul>
        </div>
        <div class="card">
    <h2>📚 Nota Cultural</h2>
    <p>Em situações formais e informais, é comum apertar as mãos, não apenas quando você é apresentado pela primeira vez, mas também em todas as vezes que você encontra a pessoa. (É claro que, em tempos de pandemia, tudo muda, e os apertos de mãos agora são evitados em todos os lugares.)</p>
    <p>Entre amigos e em situações sociais informais, homens e mulheres se beijam na bochecha (nas duas bochechas no Rio e mais ao norte, em uma bochecha em São Paulo e no sul). No primeiro encontro, os sexos opostos podem apertar as mãos, principalmente quando um ou ambos são mais velhos.</p>
    <p>Em geral, amigas se beijam na bochecha, enquanto amigos apertam as mãos e dão tapinhas nas costas uns dos outros ou colocam um braço em volta do ombro do outro e batem em seu peito afetuosamente.</p>
    <h3>👫 Aprenda e respeite as diferenças culturais!</h3>
    <p>A compreensão das normas sociais é fundamental para uma boa convivência.</p>
</div>
<style>
        .table {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }
        .column {
            width: 45%;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .phrase {
            padding: 8px;
            margin: 5px;
            background-color: #f0f0f0;
            border-radius: 4px;
            cursor: grab; /* Cambia el cursor a "agarrar" */
        }
        .phrase:active {
            cursor: grabbing; /* Cambia el cursor a "agarrando" al ser activado */
        }
        .floating-button {
            margin: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <div class="instructions">
            <h2>Instrucciones del Juego</h2>
            <p>Arrastra las frases del lado izquierdo (Português) al lado derecho (Español) para emparejarlas correctamente.</p>
        </div>

        <div class="table">
            <div class="column" id="portuguese" ondrop="drop(event)" ondragover="allowDrop(event)">
                <h3>Português</h3>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Até amanhã!</div>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Até logo!</div>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Até mais (tarde)! / (até mais) T+</div>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Bom fim de semana!</div>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Tchau</div>
                <div class="phrase" draggable="true" ondragstart="drag(event)">Até já (daqui a pouco) / já já.</div>
            </div>
            
            <div class="column" id="spanish" ondrop="drop(event)" ondragover="allowDrop(event)">
                <h3>Español</h3>
                <div class="phrase" id="phrase1" draggable="true" ondragstart="drag(event)">¡Hasta mañana!</div>
                <div class="phrase" id="phrase2" draggable="true" ondragstart="drag(event)">¡Hasta luego!</div>
                <div class="phrase" id="phrase3" draggable="true" ondragstart="drag(event)">¡Hasta más (tarde)! / (hasta más) T+</div>
                <div class="phrase" id="phrase4" draggable="true" ondragstart="drag(event)">¡Buen fin de semana!</div>
                <div class="phrase" id="phrase5" draggable="true" ondragstart="drag(event)">Adiós</div>
                <div class="phrase" id="phrase6" draggable="true" ondragstart="drag(event)">¡Hasta ya (dentro de poco)! / ¡ya ya!</div>
            </div>
        </div>

        <button class="floating-button" onclick="location.href='order_food.php'">📦 Pedir Comida</button>

        <div id="translationResult"></div>
    </main>

    <script>
        function allowDrop(event) {
            event.preventDefault(); // Permitir la acción de soltar
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.innerHTML); // Guardar el contenido arrastrado
        }

        function drop(event) {
            event.preventDefault(); // Prevenir el comportamiento predeterminado
            const data = event.dataTransfer.getData("text"); // Obtener el contenido arrastrado
            const target = document.createElement("div"); // Crear un nuevo elemento div
            target.className = "phrase"; // Asignar la clase
            target.innerHTML = data; // Establecer el contenido
            target.draggable = true; // Hacerlo arrastrable
            target.ondragstart = drag; // Agregar el evento de inicio de arrastre
            event.target.appendChild(target); // Añadir el nuevo elemento al contenedor
        }

        // Para manejar el evento de clic en las frases (si lo necesitas)
        document.querySelectorAll('.translatable').forEach(element => {
            element.addEventListener('click', () => {
                let translationResult = document.getElementById('translationResult');
                translationResult.textContent = element.dataset.translation;
            });
        });
    </script>
</body>
</html>
        <button class="floating-button" onclick="location.href='order_food.php'">📦 Pedir Comida</button>

        <div id="translationResult"></div>
    </main>

    <script>
        document.querySelectorAll('.translatable').forEach(element => {
            element.addEventListener('click', () => {
                let translationResult = document.getElementById('translationResult');
                translationResult.textContent = element.dataset.translation;
            });
        });
    </script>
</body>

</html>
