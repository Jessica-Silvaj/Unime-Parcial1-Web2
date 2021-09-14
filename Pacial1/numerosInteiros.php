<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <!-- 
  *
  * Unime - União Metropolitana de Educação e Cultura Curso: Bacharelado em
  * Sistemas de Informação Disciplina: Programação Web II
  * Professor(a): Pablo Ricardo Roxo Silva
  * Aluno(a): Jéssica Silva de Jesus
  *
  *-->

  <!-- 
  * 20%) 3 - Crie uma aplicação em PHP que receberá dois valores numéricos inteiros do usuário. Então, a
  * aplicação deve verificar em todos os números naturais até o primeiro número, quais números são divisíveis
  * pelo segundo número. Exemplo: o usuário insere os números 60 e 4. Então, a aplicação deve verificar todos
  * os números naturais até 60 e mostrar todos os que são divisíveis por 4. A aplicação deve exibir como
  * resultado os números: 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 52, 56, 60
   -->

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

  <title>Calendario</title>
</head>

<body>

  <?php

  if (isset($_GET['form_numero'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $numero1  = intval($numero1);
    $numero2  = intval($numero2);

    if ($numero1 > 0 && $numero2 > 0 && $numero2 < $numero1) {
    for($i = 1; $i <= $numero1; $i++){
       $div = $i % $numero2;

       if($div == 0){
         echo $i .' ';
       }
    }
  } else{
     echo' Valores Invalidos';
  }
  }

  ?>

  <form>
    <div class="card" style="width: 50rem;">
      <div class="card-body">
        <h5 class="card-title">Verificar números Divisiveis</h5>
        <h6 style="color:brown">Obs: O resultado aparecerá no canto superior</h6>

        <div>
          <label>Número 1:</label>
          <input type="number" class="form-control  mb-3" name="numero1" min="" placeholder="Digite o primeira número">
        </div>
        <div>
          <label>Número 2:</label>
          <input type="text" class="form-control  mb-3" name="numero2" placeholder="Digite o segundo número">
        </div>
        <input type="hidden" name="form_numero" />
        <button type="submit" class="btn btn-danger">Calcular</button>
  </form>
  </div>
  </div>
</body>

</html>