<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <!-- 
  *
  * Unime - União Metropolitana de Educação e Cultura Curso: Bacharelado em
  * Sistemas de Informação Disciplina: Programação Orientada a Objetos II
  * Professor(a): Pablo Ricardo Roxo Silva
  * Aluno(a): Jéssica Silva de Jesus
  *
  *-->

  <!-- Estilo css -->
  <style>
    body {
      background: rgb(238, 174, 202);
      background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);

    }

    .card {
      margin-top: 150px;
      margin-left: 280px;
      box-shadow: 0 0 1em black;
    }

    .card-title {
      text-align: center;
    }

    input {
      height: 150px;
    }
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Calcular Média Escolar</title>
</head>

<body>

  <?php
  if (isset($_POST['form_nota'])) {
    $nome =  $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $nome = trim(ucfirst($nome));
    $nota1 = doubleval($nota1);
    $nota2 = doubleval($nota2);
    $nota3 = doubleval($nota3);


      $media = ($nota1 + $nota2 + $nota3) / 3.0;

      $media = number_format($media, 1, '.', ' ');

      if ($media >= 7.0) {
        echo '<div class="alert alert-success" role="alert"> Olá ' . $nome . '! a sua média foi ' . $media . ' Parabéns!! você foi aprovado!</br></div>';
      } else if ($media >= 4.0 && $media < 7.0) {
        echo '<div class="alert alert-warning" role="alert"> Olá ' . $nome . '! a sua média foi ' . $media . ' Você tem direito a fazer a prova de recuperação!</br></div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Olá ' . $nome . '! a sua média foi ' . $media . ' Que pena! Infezlimente você foi reprovado!</br></div>';
      }
    }
  
  ?>
  <div class="card" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title">Calcular Média Escolar</h5>
      <form method="POST">
        <div>
          <label>Nome:</label>
          <input type="text" class="form-control  mb-3" name="nome" placeholder="Digite a sua primeira nota" min="0" max="10" step="0.01" required>
        </div>
        <div>
          <label>Nota 1:</label>
          <input type="number" class="form-control  mb-3" name="nota1" placeholder="Digite a sua primeira nota" min="0" max="10" step="0.01" required>
        </div>
        <div>
          <label>Nota 2:</label>
          <input type="number" class="form-control mb-3" name="nota2" placeholder="Digite a sua segunda nota"  min="0" max="10" step="0.01"required>
        </div>
        <div>
          <label>Nota 3:</label>
          <input type="number" class="form-control  mb-3" name="nota3" placeholder="Digite a sua terceira nota" required>
        </div>

        <input type="hidden" name="form_nota" />
        <button type="submit" class="btn btn-danger">Calcular Média</button>
      </form>
</body>

</html>