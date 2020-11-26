<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrar - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
    <main class="container-fluid d-flex flex-column justify-content-center"  style="background-image: url('./imagens/porta.jpg'); background-repeat: no-repeat;
      background-size: cover; height: 100vh;">
      <div class="jumbotron col-lg-4 col-md-6 col-sm-6 ml-auto mr-4" style="min-height: fit-content;">
      <form action="login_usuario.php" method="post" class="d-flex flex-column justify-content-center">
         <h2 style="text-align: center;">Entre ou cadastre-se</h2>
         <input type="email" name="email" placeholder="Digite o seu e-mail"> <br><br>
         <input type="password" name="senha" placeholder="Digite a sua senha"> <br><br>
         <button class="btn btn-primary btn-lg" type="submit"><b>Entrar</b></button>
         <a href="./cadastro.php" role="button">Ainda não possui cadastro? Clique aqui.</a>
      </form>
      </div>   
    </main>

      <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </footer>
  </body>
</html>
