<?php
// print_r($_REQUEST);
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    include_once('conexao/config.php');
    $email = $_POST['email'];
    $senha = $_POST['password'];
    
    //echo 'Email: ' . htmlspecialchars($email) . '<br>';
    //echo 'Senha: ' . htmlspecialchars($senha);

    $sql = "SELECT * FROM  usuarios WHERE email = '$email' and senha = '$senha' ";

    $result = $conexaoDb->query($sql);

    //print_r($sql);
    //print_r($result);
    if(mysqli_num_rows($result) < 1){
        header('Location: home.php');
    }else{
        header('Location: sistema.php');
    }

} else {
    header('Location: home.php');
    exit(); // Adicione isso para garantir que o script seja encerrado após o redirecionamento
}
?>
