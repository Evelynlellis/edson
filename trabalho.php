<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição com a Linguagem PHP</title>
    <style>
        body {
            font-family: sodium_crypto_auth_verify;
            background-color:#e8cb9a;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color:  #d0ab7a;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            text-align: center;
            color:#553d2a;
        }
        form {
            text-align: center;
        }
        .message-box {
            background-color: #fff9e1;
            border-radius: 2px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            animation: move 2s linear infinite; 
        }
        @keyframes move {
            0% { transform: translateX(0); }
            50% { transform: translateX(20px); }
            100% { transform: translateX(0); }
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h2>Repetição com a Linguagem PHP</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="message">Mensagem:</label><br>
            <input type="text" id="message" name="message" required><br><br>
            
            <label for="days">Dias da semana:</label><br>
            <input type="checkbox" id="days" name="days[]" value="Segunda-feira">Segunda-feira<br>
            <input type="checkbox" id="days" name="days[]" value="Terça-feira">Terça-feira<br>
            <input type="checkbox" id="days" name="days[]" value="Quarta-feira">Quarta-feira<br>
            <input type="checkbox" id="days" name="days[]" value="Quinta-feira">Quinta-feira<br>
            <input type="checkbox" id="days" name="days[]" value="Sexta-feira">Sexta-feira<br>
            <input type="checkbox" id="days" name="days[]" value="Sábado">Sábado<br>
            <input type="checkbox" id="days" name="days[]" value="Domingo">Domingo<br><br>
            
            <label for="repetitions">Repetições:</label><br>
            <input type="number" id="repetitions" name="repetitions" min="1" required><br><br>
            
            <input type="submit" name="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['days']) && !empty($_POST['name']) && isset($_POST['repetitions']) && !empty($_POST['message'])) {
                $name = $_POST['name'];
                $message = $_POST['message'];
                $days = $_POST['days'];
                $repetitions = $_POST['repetitions'];

                foreach ($days as $day) {
                    echo "<div class='message-box'>";
                    echo "<p><strong>No(a) $day, $name:</strong> $message ($repetitions vez/vezes).</p>";
                    echo "</div>";
                }
            } else {
                echo "<p style='color:red;'>Por favor, preencha todos os campos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
