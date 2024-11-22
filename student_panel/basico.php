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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
        <!-- Menu mantenido sin cambios -->
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
    <BR><BR><BR>
    <main>
    <div class="courses-section">
    <h2>Cursos de Portugués</h2>
    <div class="courses">
        <div class="course">
            <h3>Curso Básico</h3>
            <p>Aprende los fundamentos del idioma portugués: gramática, vocabulario y práctica de conversación.</p>
            <a href="curso_basico.php" class="enroll-btn">Desbloqueado</a>
        </div>
        <div class="course">
            <h3>Curso Intermedio</h3>
            <p>Mejora tu fluidez en el idioma con un enfoque en conversación y gramática intermedia.</p>
            <a href="curso_intermedio.php" class="enroll-btn">Bloqueado</a>
        </div>
        <div class="course">
            <h3>Curso Avanzado</h3>
            <p>Perfecciona tus habilidades lingüísticas con temas complejos de gramática y análisis de textos.</p>
            <a href="curso_avanzado.php" class="enroll-btn">Bloqueado</a>
        </div>
    </div>
</div>


        <table id="exam-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Asignatura</th>
                    <th>Título del Examen</th>
                    <th>Calificación Obtenida</th>
                    <th>Calificación Total</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consultas y lógica de PHP para mostrar los exámenes
                $query2 = "SELECT DISTINCT(`exam_id`) FROM `marks` WHERE `student_id` = ? ORDER BY `s_no` DESC LIMIT 50";
                $stmt2 = $conn->prepare($query2);
                $stmt2->bind_param("s", $id);
                $stmt2->execute();
                $result2 = $stmt2->get_result();

                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        $examId = $row2['exam_id'];

                        $query3 = "SELECT * FROM `exams` WHERE `exam_id` = ?";
                        $stmt3 = $conn->prepare($query3);
                        $stmt3->bind_param("s", $examId);
                        $stmt3->execute();
                        $result3 = $stmt3->get_result();
                        $row3 = $result3->fetch_assoc();

                        $dateDB = $row3['timestamp'];
                        $formattedDate = date("d-m-Y", strtotime($dateDB));

                        if ($row3['subject'] == "ALL") {
                            $sql = "SELECT * FROM `marks` WHERE `exam_id` = ? AND `student_id` = ?";
                            $stmt4 = $conn->prepare($sql);
                            $stmt4->bind_param("ss", $row3['exam_id'], $id);
                            $stmt4->execute();
                            $marksResult = $stmt4->get_result();

                            $totalGainMarks = 0;
                            $subjectCount = 0;
                            $totalMarks = 0;

                            while ($markRow = $marksResult->fetch_assoc()) {
                                $totalGainMarks += $markRow['marks'];
                                $subjectCount++;
                            }

                            $totalMarks = $subjectCount * 100; // Suponiendo que cada examen tiene un total de 100 puntos
                            $finalStatus = $totalGainMarks < 40 ? "Reprobado" : "Aprobado";

                            echo "<tr>
                                <td>{$formattedDate}</td>
                                <td>{$row3['subject']}</td>
                                <td>{$row3['title']}</td>
                                <td>{$totalGainMarks}</td>
                                <td>{$totalMarks}</td>
                                <td>{$finalStatus}</td>
                            </tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay exámenes disponibles.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <script src="script.js"></script>
</body>

</html>
