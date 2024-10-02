<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

  body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      color: #023047
  }

  .page {
      display: flex;
      flex-direction: column;
      align-items: center;
      align-content: center;
      justify-content: center;
      width: 100%;
      height: 100vh;
      background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
  }

  .formLogin {
      display: flex;
      flex-direction: column;
      background-color: #fff;
      border-radius: 7px;
      padding: 40px;
      box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
      gap: 5px
  }

  .areaLogin img {
      width: 420px;
  }

  .formLogin h1 {
      padding: 0;
      margin: 0;
      font-weight: 500;
      font-size: 2.3em;
  }

  .formLogin p {
      display: inline-block;
      font-size: 14px;
      color: #666;
      margin-bottom: 25px;
  }

  .formLogin input {
      padding: 15px;
      font-size: 14px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      margin-top: 5px;
      border-radius: 4px;
      transition: all linear 160ms;
      outline: none;
  }


  .formLogin input:focus {
      border: 1px solid dodgerblue;
  }

  .formLogin label {
      font-size: 14px;
      font-weight: 600;
  }

  .formLogin a {
      display: inline-block;
      margin-bottom: 20px;
      font-size: 13px;
      color: #555;
      transition: all linear 160ms;
  }

  .formLogin a:hover {
      color: white;
  }

  .btn {
      background-color: dodgerblue ;
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      border: none !important;
      transition: all linear 160ms;
      cursor: pointer;
      margin: 0 !important;

  }

  .btn:hover {
      transform: scale(1.05);
      background-color: blue;

  }
  a{
    text-decoration: none;
    text-align: center;
    margin: 10px auto; 
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;
    width: 150px;
    display: inline-block;
  }
  a:hover{
    background: dodgerblue;
  }
  .text{
    color: white;
  }
</style>
<body>
<div class="page">
    <form action="testLogin.php" method="POST" class="formLogin">
        <h1>Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        
        <label for="email">Usuário</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" autofocus />

        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" />

        <input type="submit" value="Acessar" class="btn" />
        <a href="formulario/formulario.php">Cadastra-se!</a>
    </form>
</div>

</body>
</html>