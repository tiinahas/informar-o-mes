// faça um programa que o usuário digite um número de 1 a 12 e ele informe o mês correspondente. [switch/case]

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o número do usuário (supondo que o usuário já tenha inserido o número)
    $numero = $_POST["numero"];

    // Usa a estrutura switch/case para determinar o mês correspondente
    switch ($numero) {
        case 1:
            $mes = "Janeiro";
            break;
        case 2:
            $mes = "Fevereiro";
            break;
        case 3:
            $mes = "Março";
            break;
        case 4:
            $mes = "Abril";
            break;
        case 5:
            $mes = "Maio";
            break;
        case 6:
            $mes = "Junho";
            break;
        case 7:
            $mes = "Julho";
            break;
        case 8:
            $mes = "Agosto";
            break;
        case 9:
            $mes = "Setembro";
            break;
        case 10:
            $mes = "Outubro";
            break;
        case 11:
            $mes = "Novembro";
            break;
        case 12:
            $mes = "Dezembro";
            break;
        default:
            $mes = "Número inválido";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conversão de Número para Mês</title>
</head>
<body>
    <h1>Conversão de Número para Mês</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="numero">Digite um número de 1 a 12:</label>
        <input type="number" name="numero" min="1" max="12" required>
        <input type="submit" value="Converter">
    </form>
    
    <?php
    // Exibe o mês correspondente se a variável $mes estiver definida
    if (isset($mes)) {
        echo "O mês correspondente ao número $numero é: $mes";
    }
    ?>
</body>
</html>